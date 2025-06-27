<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include config
require_once __DIR__ . '/includes/config.php';

try {
    // Database connection
    $dsn = "mysql:host=" . DB_HOST . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if not exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `nacos_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdo->exec("USE `nacos_db`");
    
    // Create comments table
    $pdo->exec("DROP TABLE IF EXISTS `comment_likes`");
    $pdo->exec("DROP TABLE IF EXISTS `comments`");
    
    $pdo->exec("
        CREATE TABLE `comments` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `post_id` VARCHAR(50) NOT NULL,
            `parent_id` INT DEFAULT NULL,
            `author_name` VARCHAR(100) NOT NULL,
            `author_email` VARCHAR(100) NOT NULL,
            `content` TEXT NOT NULL,
            `status` ENUM('pending', 'approved', 'spam') DEFAULT 'approved',
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            INDEX `idx_post_id` (`post_id`),
            INDEX `idx_status` (`status`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ");
    
    // Create comment_likes table
    $pdo->exec("
        CREATE TABLE `comment_likes` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `comment_id` INT NOT NULL,
            `user_ip` VARCHAR(45) NOT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            UNIQUE KEY `unique_like` (`comment_id`, `user_ip`),
            FOREIGN KEY (`comment_id`) REFERENCES `comments`(`id`) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ");
    
    // Insert sample comments
    $pdo->exec("
        INSERT INTO `comments` 
        (`post_id`, `author_name`, `author_email`, `content`, `status`) 
        VALUES 
        ('post-1', 'Test User', 'test@example.com', 'This is a test comment for post 1', 'approved'),
        ('post-2', 'Another User', 'user2@example.com', 'This is a test comment for post 2', 'approved')
    ");
    
    echo "<h1>Database Setup Complete</h1>";
    echo "<p>Tables created and sample data inserted.</p>";
    echo "<p><a href='../check_comments.php'>Check Comments</a></p>";
    
} catch (PDOException $e) {
    echo "<h1>Database Setup Error</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
