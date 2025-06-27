<?php
require_once 'includes/config.php';
require_once 'includes/Blog.php';

if (!isset($_GET['slug']) || empty($_GET['slug'])) {
    header('Location: news.php');
    exit();
}

// Set page as blog page for styling
$GLOBALS['blog_page'] = true;

// Initialize blog
$blog = new Blog();

// Get post by slug
$post = $blog->getPostBySlug($_GET['slug']);

if (!$post) {
    header('HTTP/1.0 404 Not Found');
    include '404.php';
    exit();
}

// Get post reactions
$reactions = $blog->getReactionsCount($post['id']);

// Get approved comments
$comments = $blog->getComments($post['id'], 'approved');

// Set page title
$page_title = htmlspecialchars($post['title']) . ' - ' . SITE_NAME;
$page_description = !empty($post['excerpt']) ? $post['excerpt'] : substr(strip_tags($post['content']), 0, 160);

// Include header
include 'includes/header.php';
?>

<!-- Post Header -->
<section class="page-header bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <h1 class="display-5"><?php echo htmlspecialchars($post['title']); ?></h1>
                <div class="post-meta my-4">
                    <span class="text-muted me-3">
                        <i class="far fa-calendar-alt me-1"></i> 
                        <?php echo date('F j, Y', strtotime($post['published_at'])); ?>
                    </span>
                    <span class="text-muted me-3">
                        <i class="far fa-eye me-1"></i> 
                        <?php echo number_format($post['view_count']); ?> views
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Post Content -->
<article class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php if (!empty($post['featured_image'])): ?>
                    <div class="post-featured-image mb-4">
                        <img src="assets/images/blog/<?php echo htmlspecialchars($post['featured_image']); ?>" 
                             class="img-fluid rounded" alt="<?php echo htmlspecialchars($post['title']); ?>">
                    </div>
                <?php endif; ?>
                
                <div class="post-content">
                    <?php echo $post['content']; ?>
                </div>

                <!-- Reactions -->
                <div class="post-reactions mt-5 pt-4 border-top">
                    <h5 class="mb-3">React to this post</h5>
                    <div class="reaction-buttons d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary react-btn" data-reaction="like">
                            <i class="far fa-thumbs-up me-1"></i> Like <span class="badge bg-primary"><?php echo $reactions['like'] ?? 0; ?></span>
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary react-btn" data-reaction="love">
                            <i class="far fa-heart me-1"></i> Love <span class="badge bg-primary"><?php echo $reactions['love'] ?? 0; ?></span>
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary react-btn" data-reaction="laugh">
                            <i class="far fa-laugh-squint me-1"></i> Haha <span class="badge bg-primary"><?php echo $reactions['laugh'] ?? 0; ?></span>
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary react-btn" data-reaction="wow">
                            <i class="far fa-surprise me-1"></i> Wow <span class="badge bg-primary"><?php echo $reactions['wow'] ?? 0; ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Comments Section -->
<section class="comments-section bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="comments-header mb-5">
                    <h3 class="mb-4">Comments (<?php echo count($comments); ?>)</h3>
                    
                    <!-- Comment Form -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Leave a Comment</h5>
                            <form id="comment-form" class="mt-3">
                                <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                                <input type="hidden" name="parent_id" id="parent_id" value="0">
                                <div class="mb-3">
                                    <label for="author_name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="author_name" name="author_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="author_email" class="form-label">Email (will not be published) *</label>
                                    <input type="email" class="form-control" id="author_email" name="author_email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="comment_content" class="form-label">Comment *</label>
                                    <textarea class="form-control" id="comment_content" name="content" rows="3" required></textarea>
                                    <div id="reply-to" class="mt-2 small text-muted" style="display: none;">
                                        Replying to: <span id="replying-to"></span>
                                        <button type="button" class="btn-close btn-sm float-end" id="cancel-reply"></button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Comments List -->
                <div class="comments-list">
                    <?php if (empty($comments)): ?>
                        <div class="alert alert-info">No comments yet. Be the first to comment!</div>
                    <?php else: ?>
                        <?php foreach ($comments as $comment): ?>
                            <div class="card mb-3 comment" id="comment-<?php echo $comment['id']; ?>">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="comment-avatar">
                                                <?php echo strtoupper(substr($comment['author_name'], 0, 1)); ?>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="mb-0 fw-bold"><?php echo htmlspecialchars($comment['author_name']); ?></h6>
                                                <small class="text-muted">
                                                    <?php echo date('M j, Y \a\t g:i a', strtotime($comment['created_at'])); ?>
                                                </small>
                                            </div>
                                            <p class="mb-2"><?php echo nl2br(htmlspecialchars($comment['content'])); ?></p>
                                            <button class="btn btn-sm btn-outline-secondary btn-reply" 
                                                    data-comment-id="<?php echo $comment['id']; ?>"
                                                    data-author-name="<?php echo htmlspecialchars($comment['author_name']); ?>">
                                                <i class="fas fa-reply me-1"></i> Reply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Handle comment form submission
$('#comment-form').on('submit', function(e) {
    e.preventDefault();
    
    const form = $(this);
    const submitBtn = form.find('button[type="submit"]');
    const originalBtnText = submitBtn.html();
    
    // Disable button and show loading state
    submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Posting...');
    
    $.ajax({
        url: 'submit_comment.php',
        type: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                // Show success message
                alert('Thank you for your comment! It will be visible after approval.');
                form.trigger('reset');
                // Reset reply form if it was a reply
                if ($('#parent_id').val() !== '0') {
                    cancelReply();
                }
            } else {
                alert('Error: ' + (response.message || 'Unable to post comment. Please try again.'));
            }
        },
        error: function() {
            alert('An error occurred. Please try again.');
        },
        complete: function() {
            submitBtn.prop('disabled', false).html(originalBtnText);
        }
    });
});

// Handle reply button click
$('.btn-reply').on('click', function() {
    const commentId = $(this).data('comment-id');
    const authorName = $(this).data('author-name');
    
    // Set parent ID
    $('#parent_id').val(commentId);
    
    // Update reply indicator
    $('#replying-to').text(authorName);
    $('#reply-to').show();
    
    // Scroll to comment form
    $('html, body').animate({
        scrollTop: $('#comment-form').offset().top - 100
    }, 300);
    
    // Focus on comment textarea
    $('#comment_content').focus();
});

// Handle cancel reply
$('#cancel-reply').on('click', function() {
    cancelReply();
});

function cancelReply() {
    $('#parent_id').val('0');
    $('#reply-to').hide();
}

// Handle reaction buttons
$('.react-btn').on('click', function() {
    const btn = $(this);
    const reaction = btn.data('reaction');
    const postId = <?php echo $post['id']; ?>;
    
    $.ajax({
        url: 'submit_reaction.php',
        type: 'POST',
        data: {
            post_id: postId,
            reaction_type: reaction
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                // Update reaction count
                const countElement = btn.find('.badge');
                countElement.text(response.new_count);
                
                // Visual feedback
                btn.addClass('active');
                setTimeout(() => {
                    btn.removeClass('active');
                }, 1000);
            } else {
                alert(response.message || 'Unable to process reaction');
            }
        },
        error: function() {
            alert('An error occurred. Please try again.');
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>
