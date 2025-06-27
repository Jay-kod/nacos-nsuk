<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

try {
    // Define the path to config file
    $configFile = __DIR__ . '/../includes/config.php';
    
    if (!file_exists($configFile)) {
        throw new Exception('Config file not found at: ' . $configFile);
    }
    
    require_once $configFile;
    
    // Verify required constants are defined
    $requiredConstants = ['DB_HOST', 'DB_USER', 'DB_PASS'];
    foreach ($requiredConstants as $constant) {
        if (!defined($constant)) {
            throw new Exception("Required constant {$constant} is not defined in config.php");
        }
    }
    
    // Database configuration
    $dsn = "mysql:host=" . DB_HOST . ";dbname=nacos_db;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
    // Log the request data for debugging
    error_log('POST data: ' . print_r($_POST, true));
    
    // Get POST data
    $postId = $_POST['post_id'] ?? '';
    $authorName = trim($_POST['author'] ?? '');
    $authorEmail = trim($_POST['email'] ?? '');
    $content = trim($_POST['comment'] ?? '');
    $parentId = $_POST['parent_id'] ?? null;
    
    // Validate input
    $errors = [];
    if (empty($postId)) $errors[] = 'Post ID is required';
    if (empty($authorName)) $errors[] = 'Name is required';
    if (empty($content)) $errors[] = 'Comment text is required';
    if (!filter_var($authorEmail, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    
    if (!empty($errors)) {
        throw new Exception(implode(', ', $errors));
    }
    
    // Insert comment into database
    $stmt = $pdo->prepare("
        INSERT INTO comments (post_id, parent_id, author_name, author_email, content, status, created_at, updated_at)
        VALUES (?, ?, ?, ?, ?, 'approved', NOW(), NOW())
    ");
    
    $stmt->execute([
        $postId,
        $parentId ?: null,
        $authorName,
        $authorEmail,
        $content
    ]);
    
    // Get the new comment ID
    $commentId = $pdo->lastInsertId();
    
    // Get the created comment
    $stmt = $pdo->prepare("
        SELECT * FROM comments WHERE id = ?
    ");
    $stmt->execute([$commentId]);
    $comment = $stmt->fetch();
    
    if (!$comment) {
        throw new Exception('Failed to retrieve created comment');
    }
    
    // Format the created_at time
    $commentDate = new DateTime($comment['created_at']);
    $formattedDate = $commentDate->format('F j, Y \a\t g:i a');
    
    // Return success response with comment data
    echo json_encode([
        'success' => true,
        'message' => 'Comment submitted successfully!',
        'comment' => [
            'id' => $comment['id'],
            'author_name' => htmlspecialchars($comment['author_name']),
            'content' => nl2br(htmlspecialchars($comment['content'])),
            'created_at' => $formattedDate,
            'likes' => 0
        ]
    ]);
    
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ]);
}
