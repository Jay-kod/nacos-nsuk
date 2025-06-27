<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set headers for CORS and JSON response
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Include config
require_once __DIR__ . '/../includes/config.php';

// Initialize response array
$response = [
    'success' => false,
    'message' => '',
    'comments' => [],
    'debug' => [
        'post_id' => $_GET['post_id'] ?? 'not provided',
        'db_connection' => 'not tested'
    ]
];

try {
    // Get post_id from query string
    $postId = $_GET['post_id'] ?? '';
    
    if (empty($postId)) {
        throw new Exception('post_id parameter is required');
    }
    
    // Database connection
    $dsn = "mysql:host=" . DB_HOST . ";dbname=nacos_db;charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $response['debug']['db_connection'] = 'success';
    
    // Prepare and execute query
    $stmt = $pdo->prepare("
        SELECT c.*, 
               (SELECT COUNT(*) FROM comment_likes WHERE comment_id = c.id) as like_count
        FROM comments c 
        WHERE c.post_id = ? 
        AND c.status = 'approved'
        ORDER BY c.created_at DESC
    ");
    
    $stmt->execute([$postId]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Format comments
    foreach ($comments as &$comment) {
        $comment['created_at'] = date('F j, Y g:i a', strtotime($comment['created_at']));
        $comment['likes'] = (int)$comment['like_count'];
        unset($comment['like_count']);
    }
    
    $response['success'] = true;
    $response['comments'] = $comments;
    $response['message'] = count($comments) . ' comments found';
    
} catch (PDOException $e) {
    $response['message'] = 'Database error: ' . $e->getMessage();
    $response['debug']['error'] = [
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ];
} catch (Exception $e) {
    $response['message'] = 'Error: ' . $e->getMessage();
}

// Output the response
http_response_code($response['success'] ? 200 : 400);
echo json_encode($response, JSON_PRETTY_PRINT);
