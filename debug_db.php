<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include config
require_once __DIR__ . '/includes/config.php';

// Database connection
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=nacos_db;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
    // Get all tables
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    
    echo "<h2>Database Tables</h2>";
    echo "<pre>";
    print_r($tables);
    echo "</pre>";
    
    if (in_array('comments', $tables)) {
        // Show comments table structure
        echo "<h2>Comments Table Structure</h2>";
        $structure = $pdo->query("DESCRIBE comments")->fetchAll();
        echo "<pre>";
        print_r($structure);
        echo "</pre>";
        
        // Show first 10 comments
        echo "<h2>First 10 Comments</h2>";
        $comments = $pdo->query("SELECT * FROM comments ORDER BY created_at DESC LIMIT 10")->fetchAll();
        echo "<pre>";
        print_r($comments);
        echo "</pre>";
    }
    
    if (in_array('comment_likes', $tables)) {
        // Show comment_likes table structure
        echo "<h2>Comment Likes Table Structure</h2>";
        $structure = $pdo->query("DESCRIBE comment_likes")->fetchAll();
        echo "<pre>";
        print_r($structure);
        echo "</pre>";
        
        // Show first 10 likes
        echo "<h2>First 10 Comment Likes</h2>";
        $likes = $pdo->query("SELECT * FROM comment_likes ORDER BY created_at DESC LIMIT 10")->fetchAll();
        echo "<pre>";
        print_r($likes);
        echo "</pre>";
    }
    
} catch (PDOException $e) {
    echo "<h2>Database Error</h2>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
?>

<h2>PHP Info</h2>
<?php phpinfo(INFO_MODULES | INFO_VARIABLES); ?>
