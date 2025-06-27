<?php
// Set the base path for includes
$base_path = dirname(__DIR__);

// Include config and Blog class
require_once $base_path . '/includes/config.php';
require_once $base_path . '/includes/Blog.php';

// Get the post ID from the URL
$post_id = isset($_GET['id']) ? $_GET['id'] : '';

// Blog post data with content directly in the array
$blog_posts = [
    'post-1' => [
        'title' => 'NACOS NSUK Hosts Annual Tech Summit 2025',
        'image' => BASE_URL . '/assets/images/blog/featured-1.jpg',
        'author' => 'NACOS Team',
        'author_image' => BASE_URL . '/assets/images/team/user.jpg',
        'date' => 'June 25, 2025',
        'category' => 'News',
        'excerpt' => 'Join us for the biggest tech event of the year featuring industry leaders and exciting workshops.',
        'content' => '
            <p>We are thrilled to announce the Annual Tech Summit 2025, hosted by NACOS NSUK. This year\'s event promises to be bigger and better than ever before.</p>
            
            <h3>Event Highlights</h3>
            <ul>
                <li>Keynote speeches from industry leaders</li>
                <li>Hands-on workshops on cutting-edge technologies</li>
                <li>Networking sessions with tech professionals</li>
                <li>Hackathon with exciting prizes</li>
                <li>Career fair with top tech companies</li>
            </ul>
            
            <h3>Why Attend?</h3>
            <p>This is a unique opportunity to learn from experts, network with peers, and explore career opportunities in the tech industry.</p>
            
            <div class="alert alert-info">
                <strong>Early Bird Registration:</strong> Register before July 15th to get 20% off on all workshop passes!
            </div>
            
            <p>Don\'t miss this opportunity to be part of the most anticipated tech event of the year. Register now to secure your spot!</p>
        ',
        'reactions' => [
            'like' => 0,
            'love' => 0,
            'clap' => 0,
            'dislike' => 0,
            'angry' => 0
        ],
        'comments' => []
    ],
    'post-2' => [
        'title' => 'Coding Bootcamp: From Zero to Hero in 8 Weeks',
        'image' => BASE_URL . '/assets/images/blog/featured-2.jpg',
        'author' => 'Tech Department',
        'author_image' => BASE_URL . '/assets/images/team/user.jpg',
        'date' => 'June 20, 2025',
        'category' => 'Tutorial',
        'excerpt' => 'Learn how our intensive coding bootcamp can transform beginners into job-ready developers in just 8 weeks.',
        'content' => '
            <p>Our 8-week coding bootcamp is designed to take you from beginner to job-ready developer. Here\'s what you need to know:</p>
            
            <h3>Curriculum Overview</h3>
            <ul>
                <li>Weeks 1-2: HTML, CSS, and JavaScript Fundamentals</li>
                <li>Weeks 3-4: Frontend Development with React.js</li>
                <li>Weeks 5-6: Backend Development with Node.js</li>
                <li>Weeks 7-8: Project Development & Deployment</li>
            </ul>
            
            <h3>What You\'ll Learn</h3>
            <p>By the end of the bootcamp, you\'ll have built several projects for your portfolio and be ready to apply for junior developer positions.</p>
            
            <div class="alert alert-success">
                <strong>Next Batch:</strong> July 10th - September 4th, 2025
            </div>
        ',
        'reactions' => [
            'like' => 0,
            'love' => 0,
            'clap' => 0,
            'dislike' => 0,
            'angry' => 0
        ],
        'comments' => []
    ],
    'post-3' => [
        'title' => 'Getting Started with Python for Data Science',
        'image' => BASE_URL . '/assets/images/blog/article-1.jpg',
        'author' => 'Data Team',
        'author_image' => BASE_URL . '/assets/images/team/user.jpg',
        'date' => 'June 18, 2025',
        'category' => 'Tutorial',
        'excerpt' => 'Learn the basics of Python programming and how to apply it to data science tasks.',
        'content' => '
            <h4>Introduction to Python for Data Science</h4>
            <p>Python has become the go-to language for data science due to its simplicity and powerful libraries. In this tutorial, we\'ll cover:</p>
            
            <h5>1. Setting Up Your Environment</h5>
            <p>Install Python and essential data science libraries:</p>
            <pre><code>pip install numpy pandas matplotlib seaborn jupyter</code></pre>
            
            <h5>2. Basic Data Analysis with Pandas</h5>
            <p>Learn how to load, clean, and analyze data using Pandas DataFrames.</p>
            
            <h5>3. Data Visualization</h5>
            <p>Create beautiful visualizations using Matplotlib and Seaborn to gain insights from your data.</p>
            
            <p>By the end of this tutorial, you\'ll have a solid foundation in using Python for data analysis and visualization.</p>
        ',
        'reactions' => [
            'like' => 0,
            'love' => 0,
            'clap' => 0,
            'dislike' => 0,
            'angry' => 0
        ],
        'comments' => []
    ],
    'post-4' => [
        'title' => 'NACOS NSUK Wins National Hackathon 2025',
        'image' => BASE_URL . '/assets/images/blog/article-2.jpg',
        'author' => 'Tech Team',
        'author_image' => BASE_URL . '/assets/images/team/user.jpg',
        'date' => 'June 15, 2025',
        'category' => 'Achievements',
        'excerpt' => 'Our team emerged victorious in the National Hackathon 2025 with their innovative education technology solution.',
        'content' => '
            <p>We are proud to announce that Team NACOS NSUK has won first place in the National Hackathon 2025 with their innovative education technology solution!</p>
            
            <h5>Project Overview</h5>
            <p>Our team developed an AI-powered learning platform that personalizes educational content based on individual learning styles and progress. The platform uses machine learning algorithms to adapt to each student\'s needs, providing a tailored learning experience.</p>
            
            <h5>Key Features</h5>
            <ul>
                <li>Personalized learning paths</li>
                <li>Real-time progress tracking</li>
                <li>Interactive coding exercises</li>
                <li>Collaborative learning tools</li>
            </ul>
            
            <p>The competition was fierce, with over 50 teams participating from universities across the country. We are honored to bring this victory to NSUK and look forward to further developing our solution.</p>
        ',
        'reactions' => [
            'like' => 0,
            'love' => 0,
            'clap' => 0,
            'dislike' => 0,
            'angry' => 0
        ],
        'comments' => []
    ],
    'post-5' => [
        'title' => 'A Day in the Life of a Computer Science Student',
        'image' => BASE_URL . '/assets/images/blog/article-3.jpg',
        'author' => 'Student Reporter',
        'author_image' => BASE_URL . '/assets/images/team/user.jpg',
        'date' => 'June 10, 2025',
        'category' => 'Student Life',
        'excerpt' => 'Get a glimpse into the daily life of a computer science student and learn about their experiences.',
        'content' => '
            <h4>7:00 AM - Morning Routine</h4>
            <p>My day starts early with a quick workout and breakfast. As a computer science student, I\'ve learned that taking care of my physical health is just as important as mental exercise.</p>
            
            <h4>8:30 AM - Morning Classes</h4>
            <p>First up is Data Structures and Algorithms. Today we\'re covering graph traversal algorithms. The professor uses real-world examples like social networks and GPS navigation to explain the concepts.</p>
            
            <h4>11:00 AM - Lab Session</h4>
            <p>In the computer lab, we\'re working on implementing the algorithms we learned in the morning. Pair programming with my lab partner helps us solve problems more efficiently.</p>
            
            <h4>1:00 PM - Lunch Break</h4>
            <p>Quick lunch with classmates. We often discuss interesting problems or new technologies we\'ve discovered.</p>
            
            <h4>2:00 PM - Project Work</h4>
            <p>Working on my final year project - a mobile app that helps students manage their study schedules. I\'m using React Native for the frontend and Firebase for the backend.</p>
            
            <h4>5:00 PM - Club Activities</h4>
            <p>NACOS meeting where we\'re planning the next hackathon. I\'m part of the organizing committee, which gives me great leadership experience.</p>
            
            <h4>8:00 PM - Study Time</h4>
            <p>Reviewing the day\'s lessons and working on assignments. I try to wrap up by 11 PM to get enough rest for the next day.</p>
            
            <p>Being a computer science student is challenging but incredibly rewarding. Every day brings new problems to solve and new things to learn!</p>
        ',
        'reactions' => [
            'like' => 0,
            'love' => 0,
            'clap' => 0,
            'dislike' => 0,
            'angry' => 0
        ],
        'comments' => []
    ]
];

// Check if the requested post exists
$post = isset($blog_posts[$post_id]) ? $blog_posts[$post_id] : null;

// If post doesn't exist, redirect to blog page
if (!$post) {
    header('Location: ' . BASE_URL . '/pages/blog.php');
    exit();
}

// Set page title and description for SEO
$page_title = $post['title'] . ' | NACOS NSUK Blog';
$page_description = !empty($post['excerpt']) ? $post['excerpt'] : substr(strip_tags($post['content']), 0, 160) . '...';

// Include header
include $base_path . '/includes/header.php';
?>

<style>
    /* Blog Post Layout */
    .blog-post {
        padding: 2rem 0;
    }
    
    /* Header */
    .post-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }
    
    .post-category {
        display: inline-block;
        background: var(--primary-color);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .post-title {
        font-size: 2.25rem;
        font-weight: 700;
        margin-bottom: 1rem;
        line-height: 1.3;
    }
    
    .post-meta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
        color: #6c757d;
        font-size: 0.95rem;
    }
    
    .post-author {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .author-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    /* Featured Image */
    .featured-image {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin: 1.5rem 0;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    /* Post Content */
    .post-content {
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.7;
        color: #333;
    }
    
    .post-content h2 {
        font-size: 1.75rem;
        margin: 2rem 0 1rem;
        color: #2c3e50;
    }
    
    .post-content h3 {
        font-size: 1.5rem;
        margin: 1.75rem 0 0.75rem;
        color: #2c3e50;
    }
    
    .post-content p {
        margin-bottom: 1.25rem;
    }
    
    .post-content ul, 
    .post-content ol {
        margin: 1.25rem 0;
        padding-left: 1.5rem;
    }
    
    .post-content li {
        margin-bottom: 0.5rem;
    }
    
    .post-content img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
        margin: 1.5rem 0;
        display: block;
    }
    
    .post-content blockquote {
        border-left: 4px solid var(--primary-color);
        padding: 1rem 1.5rem;
        margin: 1.5rem 0;
        background: #f8f9fa;
        font-style: italic;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .post-title {
            font-size: 1.75rem;
        }
        
        .featured-image {
            max-height: 300px;
        }
        
        .post-content {
            padding: 0 1rem;
        }
    }
    
    @media (max-width: 576px) {
        .post-title {
            font-size: 1.5rem;
        }
        
        .post-meta {
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .featured-image {
            max-height: 250px;
        }
    }
    
    /* Reactions */
    .reactions {
        display: flex;
        gap: 1rem;
        margin: 2rem 0;
        padding: 1rem 0;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }
    
    .reaction-btn {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 20px;
        padding: 0.5rem 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .reaction-btn:hover {
        background: #e9ecef;
        transform: translateY(-2px);
    }
    
    .reaction-btn.active {
        background: #e3f2fd;
        border-color: #90caf9;
        color: #0d6efd;
    }
    
    .reaction-btn i {
        transition: all 0.3s ease;
    }
    
    .reaction-btn.active i {
        animation: bounce 0.5s ease;
    }
    
    .reaction-btn .count {
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .reaction-btn.active .count {
        animation: countPop 0.3s ease;
    }
    
    /* Reaction animations */
    @keyframes bounce {
        0%, 100% { transform: scale(1); }
        30% { transform: scale(1.3); }
        50% { transform: scale(0.9); }
        70% { transform: scale(1.1); }
    }
    
    @keyframes countPop {
        0% { transform: scale(1); }
        50% { transform: scale(1.5); }
        100% { transform: scale(1); }
    }
    
    .reaction-btn[data-reaction="love"] {
        position: relative;
        overflow: visible;
    }
    
    .reaction-btn[data-reaction="love"].active {
        background: #ffebee;
        border-color: #ffcdd2;
        color: #f44336;
    }
    
    .reaction-btn[data-reaction="love"] .heart-emoji {
        position: absolute;
        pointer-events: none;
        opacity: 0;
        font-size: 1.2rem;
        width: 100%;
        text-align: center;
        left: 0;
        animation: floatUp 1s ease-out forwards;
    }
    
    @keyframes floatUp {
        0% {
            transform: translateY(0) scale(0.5);
            opacity: 1;
        }
        100% {
            transform: translateY(-50px) scale(1.5);
            opacity: 0;
        }
    }
    
    .reaction-btn[data-reaction="angry"].active {
        background: #fff3e0;
        border-color: #ffe0b2;
        color: #ff9800;
    }
    
    .reaction-btn[data-reaction="dislike"].active {
        background: #f5f5f5;
        border-color: #e0e0e0;
        color: #757575;
    }
    
    .reaction-btn[data-reaction="angry"] .angry-emoji {
        display: inline-block;
        transition: transform 0.3s ease;
    }
    
    .reaction-btn[data-reaction="angry"].active .angry-emoji {
        animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
        0%, 100% { transform: rotate(0deg); }
        20% { transform: rotate(-15deg); }
        40% { transform: rotate(15deg); }
        60% { transform: rotate(-10deg); }
        80% { transform: rotate(10deg); }
    }
    
    /* Comments Section */
    .comments-section {
        margin: 3rem 0;
    }
    
    .comments-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    
    .comments-count {
        font-size: 1.25rem;
        font-weight: 600;
    }
    
    .comment {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #eee;
    }
    
    .comment:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    
    .comment-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
        flex-shrink: 0;
    }
    
    .comment-content {
        flex-grow: 1;
    }
    
    .comment-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
    }
    
    .comment-author {
        font-weight: 600;
        margin: 0;
    }
    
    .comment-time {
        font-size: 0.85rem;
        color: #6c757d;
    }
    
    .comment-text {
        margin: 0.5rem 0;
        line-height: 1.6;
    }
    
    .comment-actions {
        display: flex;
        gap: 1rem;
        margin-top: 0.5rem;
    }
    
    .comment-action {
        background: none;
        border: none;
        color: #6c757d;
        font-size: 0.85rem;
        cursor: pointer;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        transition: all 0.2s;
    }
    
    .comment-action:hover {
        background: #f8f9fa;
        color: #495057;
    }
    
    .comment-form {
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 8px;
        margin-top: 2rem;
    }
    
    .comment-form h4 {
        margin-top: 0;
        margin-bottom: 1rem;
    }
    
    .form-group {
        margin-bottom: 1rem;
    }
    
    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        font-size: 1rem;
        transition: border-color 0.2s;
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.1);
    }
    
    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }
    
    .btn-submit {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    
    .btn-submit:hover {
        background: #0b5ed7;
        transform: translateY(-1px);
    }
    
    .btn-submit:disabled {
        background: #ccc;
        cursor: not-allowed;
        transform: none;
    }
    
    .replies {
        margin-left: 2rem;
        margin-top: 1.5rem;
        padding-left: 1.5rem;
        border-left: 2px solid #eee;
    }
    
    .reply-form {
        display: none;
        margin-top: 1rem;
    }
    
    .reply-form.active {
        display: block;
    }
</style>

<main class="blog-post">
    <div class="container">
        <article>
            <header class="post-header">
                <?php if (!empty($post['category'])): ?>
                    <span class="post-category"><?php echo htmlspecialchars($post['category']); ?></span>
                <?php endif; ?>
                
                <h1 class="post-title"><?php echo htmlspecialchars($post['title']); ?></h1>
                
                <div class="post-meta">
                    <?php if (!empty($post['author_image'])): ?>
                        <div class="post-author">
                            <img src="<?php echo $post['author_image']; ?>" alt="<?php echo htmlspecialchars($post['author']); ?>" class="author-avatar">
                            <span><?php echo htmlspecialchars($post['author']); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($post['date'])): ?>
                        <div class="post-date">
                            <i class="far fa-calendar-alt me-1"></i>
                            <?php echo $post['date']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <?php if (!empty($post['image'])): ?>
                    <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="featured-image">
                <?php endif; ?>
            </header>
            
            <div class="post-content">
                <?php echo $post['content']; ?>
            </div>
            
            <div class="reactions">
                <div class="reaction-btn" data-reaction="like">
                    <i class="far fa-thumbs-up"></i>
                    <span>Like</span>
                    <span class="count"><?php echo $post['reactions']['like'] ?? 0; ?></span>
                </div>
                <div class="reaction-btn" data-reaction="love">
                    <i class="far fa-heart"></i>
                    <span>Love</span>
                    <span class="count"><?php echo $post['reactions']['love'] ?? 0; ?></span>
                </div>
                <div class="reaction-btn" data-reaction="clap">
                    <i class="far fa-hands-clapping"></i>
                    <span>Clap</span>
                    <span class="count"><?php echo $post['reactions']['clap'] ?? 0; ?></span>
                </div>
                <div class="reaction-btn" data-reaction="dislike">
                    <i class="far fa-thumbs-down"></i>
                    <span>Dislike</span>
                    <span class="count"><?php echo $post['reactions']['dislike'] ?? 0; ?></span>
                </div>
                <div class="reaction-btn" data-reaction="angry">
                    <span class="angry-emoji">😠</span>
                    <span>Angry</span>
                    <span class="count"><?php echo $post['reactions']['angry'] ?? 0; ?></span>
                </div>
            </div>
            
            <!-- Comments Section -->
            <section class="comments-section">
                <div class="comments-header">
                    <h3 class="comments-count">
                        <?php 
                        $commentCount = count($post['comments'] ?? []); 
                        echo $commentCount . ' Comment' . ($commentCount != 1 ? 's' : '');
                        ?>
                    </h3>
                </div>
                
                <!-- Comment Form -->
                <div class="comment-form mt-4">
                    <h4>Leave a comment</h4>
                    <form id="comment-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="author" class="form-label">Name</label>
                                <input type="text" class="form-control" id="author" name="author" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your email (will not be published)" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Write your comment here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span class="submit-text">Post Comment</span>
                            <span class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>
                
                <!-- Comments List -->
                <div class="comments-list">
                    <?php if (!empty($post['comments'])): ?>
                        <?php foreach ($post['comments'] as $comment): ?>
                            <div class="comment">
                                <img src="<?php echo htmlspecialchars($comment['author_image'] ?? BASE_URL . '/assets/images/team/user.jpg'); ?>" 
                                     alt="<?php echo htmlspecialchars($comment['author']); ?>" 
                                     class="comment-avatar">
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <h4 class="comment-author"><?php echo htmlspecialchars($comment['author']); ?></h4>
                                        <span class="comment-time"><?php echo $comment['date']; ?></span>
                                    </div>
                                    <p class="comment-text"><?php echo nl2br(htmlspecialchars($comment['text'])); ?></p>
                                    <div class="comment-actions">
                                        <button class="comment-action like">
                                            <i class="far fa-thumbs-up"></i> 
                                            Like <span class="like-count"><?php echo $comment['likes'] ?? 0; ?></span>
                                        </button>
                                        <button class="comment-action reply">
                                            <i class="fas fa-reply"></i> Reply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted text-center py-4">No comments yet. Be the first to comment!</p>
                    <?php endif; ?>
                </div>
            </section>
        </article>
        
        <div class="post-footer mt-5 pt-4 border-top">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <h5>Share this post:</h5>
                    <div class="social-share mt-2">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" target="_blank" class="btn btn-outline-primary btn-sm me-2">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>&text=<?php echo urlencode($post['title']); ?>" target="_blank" class="btn btn-outline-info btn-sm me-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="<?php echo BASE_URL; ?>/pages/blog.php" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i> Back to Blog
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
// Define BASE_URL for JavaScript
const BASE_URL = '<?php echo BASE_URL; ?>';

// Initialize tooltips
document.addEventListener('DOMContentLoaded', function() {
    // Handle reaction buttons with animation and toggle functionality
    const reactionBtns = document.querySelectorAll('.reaction-btn');
    
    // Load saved reactions from localStorage if available
    const savedReactions = JSON.parse(localStorage.getItem('blogReactions') || '{}');
    const currentPostId = '<?php echo $post_id; ?>';
    
    // Initialize reactions from localStorage
    if (savedReactions[currentPostId]) {
        Object.entries(savedReactions[currentPostId]).forEach(([reaction, isActive]) => {
            if (isActive) {
                const btn = document.querySelector(`.reaction-btn[data-reaction="${reaction}"]`);
                if (btn) {
                    btn.classList.add('active');
                    const countEl = btn.querySelector('.count');
                    if (countEl) {
                        countEl.textContent = parseInt(countEl.textContent) + 1;
                    }
                }
            }
        });
    }
    
    // Add this near the top of your script
async function loadReactionCounts(postId) {
    try {
        const response = await fetch('<?php echo BASE_URL; ?>/api/get_reactions.php?post_id=' + postId);
        const result = await response.json();
        
        console.log('API Response:', result);
        
        if (result.success) {
            // Update all reaction counts
            Object.entries(result.counts).forEach(([type, count]) => {
                const btn = document.querySelector(`.reaction-btn[data-reaction="${type}"]`);
                if (btn) {
                    const countEl = btn.querySelector('.count');
                    if (countEl) {
                        countEl.textContent = count;
                    }
                }
            });

            // Update active state for current user
            if (result.user_reaction) {
                const activeBtn = document.querySelector(`.reaction-btn[data-reaction="${result.user_reaction}"]`);
                if (activeBtn) {
                    activeBtn.classList.add('active');
                }
            }
        }
    } catch (error) {
        console.error('Error loading reactions:', error);
    }
}

        // Update the reaction button click handler
        document.querySelectorAll('.reaction-btn').forEach(btn => {
            btn.addEventListener('click', async function() {
                const reaction = this.getAttribute('data-reaction');
                const isActive = this.classList.contains('active');
                const action = isActive ? 'remove' : 'add';

                try {
                    const response = await fetch('<?php echo BASE_URL; ?>/api/handle_reaction.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            post_id: '<?php echo $post_id; ?>',
                            reaction_type: reaction,
                            action: action
                        })
                    });

                    const responseText = await response.text();
                    let result;
                    
                    try {
                        // Try to parse as JSON
                        result = JSON.parse(responseText);
                    } catch (e) {
                        // If parsing fails, log the raw response and throw an error
                        console.error('Failed to parse response as JSON:', responseText);
                        throw new Error('Server returned an invalid response. Please check the console for details.');
                    }
                    
                    if (!response.ok) {
                        throw new Error(result.message || 'Failed to submit reaction');
                    }
                    
                    // Update all reaction counts from server
                    Object.entries(result.counts).forEach(([type, count]) => {
                        const btn = document.querySelector(`.reaction-btn[data-reaction="${type}"]`);
                        if (btn) {
                            const countEl = btn.querySelector('.count');
                            if (countEl) {
                                countEl.textContent = count;
                            }
                            // Update active state
                            btn.classList.toggle('active', type === reaction && action === 'add');
                        }
                    });

                    // If this was an add action, remove active state from other buttons
                    if (action === 'add') {
                        document.querySelectorAll('.reaction-btn').forEach(otherBtn => {
                            if (otherBtn !== this) {
                                otherBtn.classList.remove('active');
                            }
                        });
                    }
                } catch (error) {
                    console.error('Error updating reaction:', error);
                }
            });
        });

// Load initial reaction counts when page loads
document.addEventListener('DOMContentLoaded', function() {
    loadReactionCounts('<?php echo $post_id; ?>');
});

    reactionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const reaction = this.getAttribute('data-reaction');
            const countEl = this.querySelector('.count');
            let count = parseInt(countEl.textContent);
            const wasActive = this.classList.contains('active');
            
            // Toggle active state
            this.classList.toggle('active');
            
            // Update count
            if (wasActive) {
                count--;
                // Remove bounce animation when unliking
                this.querySelector('i').style.animation = 'none';
                void this.querySelector('i').offsetWidth; // Trigger reflow
                this.querySelector('i').style.animation = '';
            } else {
                count++;
                // Remove active class from other reaction buttons
                reactionBtns.forEach(b => {
                    if (b !== this) {
                        b.classList.remove('active');
                        const otherCountEl = b.querySelector('.count');
                        if (otherCountEl) {
                            otherCountEl.textContent = Math.max(0, parseInt(otherCountEl.textContent) - 1);
                        }
                    }
                });
            }
            
            countEl.textContent = Math.max(0, count);
            
            // Save to localStorage
            if (!savedReactions[currentPostId]) {
                savedReactions[currentPostId] = {};
            }
            
            // Toggle the reaction state
            if (wasActive) {
                savedReactions[currentPostId][reaction] = false;
            } else {
                // Set only this reaction to true, others to false
                Object.keys(savedReactions[currentPostId]).forEach(key => {
                    savedReactions[currentPostId][key] = false;
                });
                savedReactions[currentPostId][reaction] = true;
            }
            
            localStorage.setItem('blogReactions', JSON.stringify(savedReactions));
            
            // Here you would typically send an AJAX request to save the reaction
            // const data = {
            //     post_id: currentPostId,
            //     reaction: reaction,
            //     action: wasActive ? 'remove' : 'add'
            // };
            // fetch('/api/react.php', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify(data)
            // });
            
            if (reaction === 'love' && !wasActive) {
                // Create and animate heart emojis
                const emojis = ['❤️', '💖', '💗', '💓', '💕'];
                const emojiCount = 5;
                
                for (let i = 0; i < emojiCount; i++) {
                    setTimeout(() => {
                        const heart = document.createElement('div');
                        heart.className = 'heart-emoji';
                        heart.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                        
                        // Random horizontal position
                        const posX = Math.random() * 30 - 15; // -15px to 15px
                        heart.style.left = `calc(50% + ${posX}px)`;
                        
                        // Random delay for each heart
                        heart.style.animationDelay = `${i * 0.2}s`;
                        
                        btn.appendChild(heart);
                        
                        // Remove after animation
                        setTimeout(() => {
                            heart.remove();
                        }, 1000);
                    }, i * 100);
                }
            }
        });
    });
    
    // Handle comment form submission
    const commentForm = document.getElementById('comment-form');
    if (commentForm) {
        commentForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            
            try {
                // Disable submit button
                submitButton.disabled = true;
                submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Posting...';
                
                const response = await fetch(`${BASE_URL}/api/handle_comment.php`, {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                console.log('Comment submission response:', result);
                
                if (!response.ok) {
                    throw new Error(result.message || 'Failed to post comment');
                }
                
                if (!result.success) {
                    throw new Error(result.message || 'Failed to post comment');
                }
                
                // Show success message
                const alert = document.createElement('div');
                alert.className = 'alert alert-success alert-dismissible fade show';
                alert.role = 'alert';
                alert.innerHTML = `
                    ${result.message || 'Comment posted successfully!'}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                this.parentNode.insertBefore(alert, this);
                
                // Reset form
                this.reset();
                
                // Reload comments after a short delay
                setTimeout(() => {
                    const postId = new URLSearchParams(window.location.search).get('id');
                    if (postId) {
                        loadComments(postId);
                    }
                }, 500);
                
            } catch (error) {
                console.error('Error submitting comment:', error);
                
                // Show error message
                const alert = document.createElement('div');
                alert.className = 'alert alert-danger alert-dismissible fade show';
                alert.role = 'alert';
                alert.innerHTML = `
                    <strong>Error:</strong> ${error.message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                this.parentNode.insertBefore(alert, this);
                
            } finally {
                // Re-enable submit button
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            }
        });
    }
    
    // Load comments when the page loads
    async function loadComments(postId) {
        const commentsList = document.querySelector('.comments-list');
        if (!commentsList) {
            console.error('Comments list container not found');
            return;
        }
        
        // Show loading state
        commentsList.innerHTML = '<div class="text-center py-4"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';
        
        try {
            console.log(`Loading comments for post: ${postId}`);
            const response = await fetch(`${BASE_URL}/api/get_comments.php?post_id=${postId}&t=${Date.now()}`);
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            
            const result = await response.json();
            console.log('API Response:', result);
            
            if (!result.success) {
                throw new Error(result.message || 'Failed to load comments');
            }
            
            // Clear existing comments
            commentsList.innerHTML = '';
            
            if (!result.comments || result.comments.length === 0) {
                commentsList.innerHTML = `
                    <div class="alert alert-info">
                        No comments yet. Be the first to comment!
                    </div>`;
                return;
            }
            
            // Add each comment to the list
            result.comments.forEach(comment => {
                const commentHtml = `
                    <div class="comment mb-4" id="comment-${comment.id}">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img src="${comment.author_image || 'https://via.placeholder.com/50'}" 
                                     class="rounded-circle" 
                                     width="50" 
                                     height="50" 
                                     alt="${comment.author_name}">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="mb-0">${comment.author_name}</h5>
                                    <small class="text-muted">${new Date(comment.created_at).toLocaleString()}</small>
                                </div>
                                <div class="comment-text mb-2">${comment.content}</div>
                                <div class="comment-actions">
                                    <button class="btn btn-sm btn-outline-primary me-2 like-button" data-comment-id="${comment.id}">
                                        <i class="far fa-thumbs-up"></i> Like (${comment.likes || 0})
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary reply-button" data-comment-id="${comment.id}">
                                        <i class="fas fa-reply"></i> Reply
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>`;
                commentsList.insertAdjacentHTML('beforeend', commentHtml);
            });
            
        } catch (error) {
            console.error('Error loading comments:', error);
            commentsList.innerHTML = `
                <div class="alert alert-danger">
                    <strong>Error loading comments:</strong> ${error.message}
                    <div class="mt-2">
                        <button class="btn btn-sm btn-outline-primary" onclick="loadComments('${postId}')">
                            <i class="fas fa-sync-alt"></i> Try Again
                        </button>
                    </div>
                </div>`;
        }
    }
    
    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Get post ID from URL
        const urlParams = new URLSearchParams(window.location.search);
        const postId = urlParams.get('id');
        
        if (postId) {
            console.log('Page loaded, loading comments for post:', postId);
            
            // Load comments immediately
            loadComments(postId);
            
            // Set up a mutation observer to re-attach the loadComments function
            // in case the comments container is dynamically added later
            const observer = new MutationObserver(function(mutations) {
                if (document.querySelector('.comments-list')) {
                    loadComments(postId);
                    observer.disconnect(); // Stop observing once we've found the container
                }
            });
            
            // Start observing the document with the configured parameters
            observer.observe(document, { childList: true, subtree: true });
            
        } else {
            console.error('No post ID found in URL');
        }
    });
    
    // Also expose loadComments globally in case it needs to be called manually
    window.loadComments = loadComments;
    
    // Add shake animation for angry reaction
    document.querySelectorAll('.reaction-btn[data-reaction="angry"]').forEach(btn => {
        btn.addEventListener('click', function() {
            if (this.classList.contains('active')) {
                const emoji = this.querySelector('.angry-emoji');
                emoji.style.animation = 'shake 0.5s ease-in-out';
                emoji.addEventListener('animationend', function() {
                    emoji.style.animation = '';
                }, { once: true });
            }
        });
    });
});

</script>

<?php include $base_path . '/includes/footer.php'; ?>
