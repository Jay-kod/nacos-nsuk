<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include config
require_once __DIR__ . '/includes/config.php';

// Database connection
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=nacos_db;charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if comments table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'comments'")->rowCount() > 0;
    
    if (!$tableExists) {
        die("Comments table does not exist. Please run setup_comments_table.php first.");
    }
    
    // Get all comments
    $stmt = $pdo->query("SELECT * FROM comments ORDER BY created_at DESC");
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Get post_id from URL or use default
    $postId = $_GET['post_id'] ?? 'post-1';
    
    // Get comments for specific post
    $stmt = $pdo->prepare("SELECT * FROM comments WHERE post_id = ? ORDER BY created_at DESC");
    $stmt->execute([$postId]);
    $postComments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Output results
    echo "<h1>Database Check</h1>";
    
    echo "<h2>All Comments (" . count($comments) . ")</h2>";
    echo "<pre>";
    print_r($comments);
    echo "</pre>";
    
    echo "<h2>Comments for post_id: $postId (" . count($postComments) . ")</h2>";
    echo "<pre>";
    print_r($postComments);
    echo "</pre>";
    
    // Show form to check different post_id
    echo "<h2>Check Different Post ID</h2>";
    echo "<form method='get'>";
    echo "<input type='text' name='post_id' value='$postId'>";
    echo "<button type='submit'>Check</button>";
    echo "</form>";
    
} catch (PDOException $e) {
    echo "<h2>Database Error</h2>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "<p>Make sure you've run setup_comments_table.php first.</p>";
}
