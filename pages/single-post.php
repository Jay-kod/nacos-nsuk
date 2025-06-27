<?php
require_once '../includes/blog-data.php';

// Get post ID from URL
$post_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Find the post
$post = find_post_by_id($post_id, $posts);

// If post not found, redirect to blog page or show a 404
if (!$post) {
    header("Location: blog.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <?php include '../includes/head.php'; ?>
    <title><?php echo htmlspecialchars($post['title']); ?> - NACOS Blog</title>
    <link rel="stylesheet" href="../assets/css/single-post.css?v=1.0">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main class="single-post-container">
        <article class="post-full">
            <header class="post-full-header">
                <h1 class="post-full-title"><?php echo htmlspecialchars($post['title']); ?></h1>
                <div class="post-full-meta">
                    <span class="post-full-author">By <?php echo htmlspecialchars($post['author']); ?></span>
                    <span class="post-full-date"> | <?php echo $post['date']; ?></span>
                </div>
            </header>

            <figure class="post-full-image">
                <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
            </figure>

            <section class="post-full-content">
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
            </section>
        </article>
        
        <div class="back-to-blog">
            <a href="blog.php">&larr; Back to Blog</a>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
