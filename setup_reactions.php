<?php
// Database configuration
$host = 'localhost';
$dbname = 'nacos_nsuk';
$username = 'root';
$password = '';

try {
    // Create database connection
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if not exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname`");
    $pdo->exec("USE `$dbname`");
    
    // Create reactions table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS `reactions` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `post_id` VARCHAR(50) NOT NULL,
            `user_id` VARCHAR(100) NOT NULL,
            `reaction_type` VARCHAR(20) NOT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            UNIQUE KEY `unique_reaction` (`post_id`, `user_id`, `reaction_type`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");
    
    echo "✅ Database and table created successfully!\n";
    
} catch(PDOException $e) {
    die("❌ Error: " . $e->getMessage() . "\n");
}

echo "✅ Setup completed. You can now access the blog posts with reaction functionality.\n";
?>