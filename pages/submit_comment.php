<?php
require_once 'includes/config.php';
require_once 'includes/Blog.php';

header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit();
}

// Validate required fields
$required = ['post_id', 'author_name', 'author_email', 'content'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'All fields are required']);
        exit();
    }
}

// Sanitize input
$post_id = (int)$_POST['post_id'];
$parent_id = !empty($_POST['parent_id']) ? (int)$_POST['parent_id'] : null;
$author_name = trim(strip_tags($_POST['author_name']));
$author_email = filter_var(trim($_POST['author_email']), FILTER_VALIDATE_EMAIL);
$content = trim(strip_tags($_POST['content']));

// Validate email
if (!$author_email) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit();
}

try {
    $blog = new Blog();
    
    // Check if post exists
    $post = $blog->getPost($post_id);
    if (!$post) {
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Post not found']);
        exit();
    }
    
    // Prepare comment data
    $comment_data = [
        'post_id' => $post_id,
        'parent_id' => $parent_id,
        'author_name' => $author_name,
        'author_email' => $author_email,
        'content' => $content,
        'status' => 'pending' // Set to 'approved' if you want to show comments immediately
    ];
    
    // Add comment
    $result = $blog->addComment($comment_data);
    
    if ($result) {
        // Here you could send an email notification to the admin
        // about the new comment if needed
        
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your comment! It will be visible after approval.'
        ]);
    } else {
        throw new Exception('Failed to save comment');
    }
    
} catch (Exception $e) {
    error_log('Error submitting comment: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while submitting your comment. Please try again.'
    ]);
}
?>
