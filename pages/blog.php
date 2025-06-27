<?php
// Set the base path for includes
$base_path = dirname(__DIR__);

// Include config and Blog class
require_once $base_path . '/includes/config.php';
require_once $base_path . '/includes/Blog.php';

// Set this as a blog page for header styling
$GLOBALS['blog_page'] = true;

// Initialize blog
$blog = new Blog();

// Get all posts
$posts = $blog->getPosts();

// Set page title and current page for navigation
$page_title = 'Blog - ' . SITE_NAME;
$current_page = 'blog';

// Add inline style to fix the header spacing
$header_style = "
    <style>
        html { 
            margin: 0 !important; 
            padding: 0 !important; 
            overflow-x: hidden;
        }
        body { 
            padding-top: 0 !important; 
            margin: 0 !important;
        }
        #header { 
            position: fixed !important; 
            top: 0 !important; 
            left: 0 !important; 
            right: 0 !important; 
            z-index: 1000 !important;
            background: transparent !important;
            transition: all 0.3s ease-in-out !important;
        }
        #header.scrolled {
            background: var(--white) !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1) !important;
        }
        #header:not(.scrolled) .nav-link,
        #header:not(.scrolled) .logo-text {
            color: white !important;
        }
        .hero-section { 
            margin-top: 0 !important;
            padding-top: 80px !important;
        }
        @media (max-width: 991.98px) {
            .hero-section { 
                padding-top: 80px !important;
            }
        }
        @media (max-width: 991.98px) {
            #header {
                background: var(--white) !important;
            }
            
            #header .logo-text {
                color: var(--primary) !important;
            }
            
            #header .navbar-toggler-icon {
                background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(3, 60, 9, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\") !important;
            }
            
            #header .nav-link {
                color: var(--primary) !important;
            }
        }
    </style>
";

// Include header
include $base_path . '/includes/header.php';
echo $header_style; // Output the style after the header
?>

<!-- Blog Content -->
<main class="blog-page">
    <!-- Blog Hero Section -->
    <div class="gallery-hero">
        <div class="gallery-hero-content">
            <h1 class="display-4 fw-bold mb-3">NACOS NSUK Blog</h1>
            <p class="lead mb-4">Stay updated with the latest news, events, and insights from the Nigerian Association of Computing Students</p>
            
            <!-- Search Form -->
            <form class="search-form mx-auto mb-0" style="max-width: 700px;">
                <div class="input-group input-group-lg shadow">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search articles..." aria-label="Search articles">
                    <button class="btn btn-primary px-4" type="submit">
                        <i class="fas fa-search me-2"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Featured Post -->
    <section class="featured-section py-5">
        <div class="container">
            <div class="section-title">
                <h2>Featured Posts</h2>
                <p class="text-muted">Discover our latest and most popular articles</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card featured-post h-100" data-bs-toggle="modal" data-bs-target="#blogPostModal" data-post-id="post-1">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img src="<?php echo BASE_URL; ?>/assets/images/blog/featured-1.jpg" class="card-img-top" alt="Featured Post">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-primary">Featured</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="text-muted small me-3"><i class="far fa-calendar-alt me-1"></i> June 25, 2025</span>
                                <span class="badge bg-primary bg-opacity-10 text-primary">News</span>
                            </div>
                            <h3 class="h4 mb-3">NACOS NSUK Hosts Annual Tech Summit 2025</h3>
                            <p class="card-text">Join us for an exciting week of tech talks, workshops, and networking opportunities with industry leaders and innovators in the tech ecosystem.</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/team/user.jpg" class="rounded-circle img-fluid" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">NACOS Team</h6>
                                    <small class="text-muted">5 min read</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card featured-post h-100" data-bs-toggle="modal" data-bs-target="#blogPostModal" data-post-id="post-2">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img src="<?php echo BASE_URL; ?>/assets/images/blog/featured-2.jpg" class="card-img-top" alt="Featured Post">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="text-muted small me-3"><i class="far fa-calendar-alt me-1"></i> June 20, 2025</span>
                                <span class="badge bg-success bg-opacity-10 text-success">Events</span>
                            </div>
                            <h3 class="h4 mb-3">Coding Bootcamp: From Zero to Hero in 8 Weeks</h3>
                            <p class="card-text">Applications are now open for our intensive coding bootcamp. Learn web development, UI/UX design, and soft skills to kickstart your tech career.</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/team/user.jpg" class="rounded-circle img-fluid" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Tech Department</h6>
                                    <small class="text-muted">7 min read</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Articles -->
    <section class="recent-articles py-5 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Latest Articles</h2>
                <p class="text-muted">Stay updated with our newest content</p>
            </div>
            <div class="row g-4">
                <!-- Article 1 -->
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 blog-post" data-bs-toggle="modal" data-bs-target="#blogPostModal" data-post-id="post-3">
                        <div class="position-relative">
                            <img src="<?php echo BASE_URL; ?>/assets/images/blog/article-1.jpg" class="card-img-top" alt="Article Image">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                                <span class="badge bg-primary">Tutorial</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-muted small"><i class="far fa-calendar-alt me-1"></i> June 18, 2025</span>
                            </div>
                            <h3 class="h5 mb-3">Getting Started with Python for Data Science</h3>
                            <p class="card-text text-muted">Learn the basics of Python programming and how to use it for data analysis and visualization.</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/team/user.jpg" class="rounded-circle img-fluid" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Data Team</h6>
                                    <small class="text-muted">8 min read</small>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Article 2 -->
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 blog-post" data-bs-toggle="modal" data-bs-target="#blogPostModal" data-post-id="post-4">
                        <div class="position-relative">
                            <img src="<?php echo BASE_URL; ?>/assets/images/blog/article-2.jpg" class="card-img-top" alt="Article Image">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                                <span class="badge bg-success">Announcement</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-muted small"><i class="far fa-calendar-alt me-1"></i> June 15, 2025</span>
                            </div>
                            <h3 class="h5 mb-3">NACOS NSUK Wins National Hackathon 2025</h3>
                            <p class="card-text text-muted">Our team emerged victorious in the national hackathon competition with an innovative solution for education technology.</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/team/user.jpg" class="rounded-circle img-fluid" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Events Team</h6>
                                    <small class="text-muted">6 min read</small>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Article 3 -->
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 blog-post" data-bs-toggle="modal" data-bs-target="#blogPostModal" data-post-id="post-5">
                        <div class="position-relative">
                            <img src="<?php echo BASE_URL; ?>/assets/images/blog/article-3.jpg" class="card-img-top" alt="Article Image">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                                <span class="badge bg-info">Campus Life</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-muted small"><i class="far fa-calendar-alt me-1"></i> June 10, 2025</span>
                            </div>
                            <h3 class="h5 mb-3">A Day in the Life of a Computer Science Student</h3>
                            <p class="card-text text-muted">Follow our student reporter as they document a typical day in the life of a computer science student at NSUK.</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-2">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/team/user.jpg" class="rounded-circle img-fluid" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Campus Team</h6>
                                    <small class="text-muted">5 min read</small>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Blog Post Modal -->
<div class="modal fade" id="blogPostModal" tabindex="-1" aria-labelledby="blogPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blogPostModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img id="modalPostImage" src="" alt="Post Image" class="img-fluid rounded">
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center me-4">
                        <div class="avatar-sm me-2">
                            <img id="modalAuthorImage" src="" class="rounded-circle" alt="Author">
                        </div>
                        <div>
                            <h6 id="modalAuthorName" class="mb-0"></h6>
                            <small class="text-muted" id="modalPostDate"></small>
                        </div>
                    </div>
                    <span id="modalPostCategory" class="badge"></span>
                </div>
                <div id="modalPostContent" class="blog-content">
                    <!-- Content will be loaded here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="readFullPost">Read Full Post</button>
            </div>
        </div>
    </div>
</div>

<style>
/* Improved Blog Page Styles */
:root {
    --blog-card-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    --blog-card-shadow-hover: 0 10px 25px rgba(0, 0, 0, 0.1);
    --transition-base: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Base Typography */
.blog-page {
    line-height: 1.7;
    color: #4a5568;
}

.blog-page h1, 
.blog-page h2, 
.blog-page h3, 
.blog-page h4, 
.blog-page h5, 
.blog-page h6 {
    color: #1a202c;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 1rem;
}

/* Hero Section Improvements */
.gallery-hero {
    background-image: url('<?php echo BASE_URL; ?>/assets/images/hero/blog-hero.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 80vh;
    min-height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
    margin-top: 0 !important;
    padding: 80px 20px;
}

.gallery-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(3, 60, 9, 0.8) 0%, rgba(3, 60, 9, 0.6) 100%);
    z-index: 1;
}

.gallery-hero-content {
    position: relative;
    z-index: 2;
    max-width: 1000px;
    width: 100%;
    padding: 0 20px;
    animation: fadeInUp 0.8s ease-out;
}

.gallery-hero h1 {
    font-size: clamp(2.25rem, 5vw, 3.5rem);
    font-weight: 800;
    margin-bottom: 1.25rem;
    text-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
    line-height: 1.2;
}

.gallery-hero p {
    font-size: clamp(1.1rem, 2vw, 1.35rem);
    margin: 0 auto 2.5rem;
    opacity: 0.95;
    max-width: 800px;
    line-height: 1.7;
}

/* Search Form */
.search-form {
    max-width: 700px;
    margin: 0 auto 2.5rem;
    width: 100%;
}

.search-form .input-group {
    border-radius: 50px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    transition: var(--transition-base);
}

.search-form .input-group:focus-within {
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    transform: translateY(-2px);
}

.search-form .form-control {
    height: 60px;
    padding: 0.75rem 1.75rem;
    border: none;
    font-size: 1.1rem;
    border-radius: 50px 0 0 50px !important;
    transition: var(--transition-base);
}

.search-form .form-control:focus {
    box-shadow: none;
    border-color: rgba(40, 167, 69, 0.3);
}

.search-form .btn {
    padding: 0 2.5rem;
    font-weight: 600;
    background: var(--primary);
    border: none;
    transition: var(--transition-base);
    border-radius: 0 50px 50px 0 !important;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.95rem;
}

.search-form .btn:hover {
    background: #022b06;
    transform: none;
}

/* Categories */
.categories-scroll {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.75rem;
    margin: 0 auto;
    max-width: 1000px;
    padding: 0 15px;
}

.categories-scroll .btn-outline-light {
    border-radius: 50px;
    padding: 0.6rem 1.5rem;
    font-size: 0.95rem;
    transition: var(--transition-base);
    border-width: 2px;
    margin: 0;
    text-transform: capitalize;
    font-weight: 500;
    letter-spacing: 0.3px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(5px);
}

.categories-scroll .btn-outline-light:hover,
.categories-scroll .btn-outline-light.active {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Blog Content Sections */
.blog-page section {
    padding: 5rem 0;
    position: relative;
}

.blog-page .section-title {
    position: relative;
    margin-bottom: 3rem;
    text-align: center;
}

.blog-page .section-title h2 {
    font-size: 2.25rem;
    margin-bottom: 1rem;
    position: relative;
    display: inline-block;
    padding-bottom: 0.5rem;
}

.blog-page .section-title h2::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: var(--primary);
    border-radius: 3px;
}

/* Cards Styling */
.blog-page .card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    transition: var(--transition-base);
    height: 100%;
    display: flex;
    flex-direction: column;
    background: #fff;
    box-shadow: var(--blog-card-shadow);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.blog-page .card:hover {
    transform: translateY(-8px);
    box-shadow: var(--blog-card-shadow-hover);
}

.blog-page .card-img-top {
    height: 220px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.blog-page .card:hover .card-img-top {
    transform: scale(1.05);
}

.blog-page .card-body {
    padding: 1.75rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.blog-page .card-title {
    font-size: 1.35rem;
    margin-bottom: 0.75rem;
    line-height: 1.4;
}

.blog-page .card-text {
    color: #6b7280;
    margin-bottom: 1.25rem;
    flex-grow: 1;
}

.blog-page .card-footer {
    background: transparent;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    padding: 1rem 1.75rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Badges */
.blog-page .badge {
    font-weight: 600;
    padding: 0.35em 0.65em;
    border-radius: 6px;
    text-transform: uppercase;
    font-size: 0.7rem;
    letter-spacing: 0.5px;
}

/* Featured Posts */
.featured-post .card {
    border: none;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.featured-post .card-img-top {
    height: 280px;
}

.featured-post .badge {
    position: absolute;
    top: 15px;
    right: 15px;
    z-index: 2;
}

/* Pagination */
.pagination {
    margin-top: 3rem;
    justify-content: center;
}

.pagination .page-link {
    color: var(--primary);
    border: 1px solid #e2e8f0;
    padding: 0.6rem 1.1rem;
    margin: 0 0.25rem;
    border-radius: 8px !important;
    font-weight: 600;
    transition: var(--transition-base);
}

.pagination .page-link:hover {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.pagination .page-item.active .page-link {
    background: var(--primary);
    border-color: var(--primary);
    color: white;
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Utility Classes */
.hover-lift {
    transition: var(--transition-base);
}

.hover-lift:hover {
    transform: translateY(-5px);
}

.img-cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Lazy Loading */
.lazy-load {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.lazy-load.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Author Avatar */
.avatar-sm {
    width: 40px;
    height: 40px;
    overflow: hidden;
    flex-shrink: 0;
}

.avatar-sm img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 4px;
}

.author-info h6 {
    font-size: 0.875rem;
    margin-bottom: 0.15rem;
}

.author-info small {
    font-size: 0.75rem;
    color: #6c757d;
}
</style>

<script>
// Lazy load images with Intersection Observer
if ('IntersectionObserver' in window) {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                img.classList.add('lazy-load', 'visible');
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '100px 0px',
        threshold: 0.01
    });

    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });
}

// Add smooth scroll behavior for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 100,
                behavior: 'smooth'
            });
        }
    });
});

// Add active class to current nav link
const currentPage = window.location.pathname.split('/').pop() || 'index.php';
document.querySelectorAll('.nav-link').forEach(link => {
    if (link.getAttribute('href').includes(currentPage)) {
        link.classList.add('active');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Blog post data
    const blogPostsData = {
        'post-1': {
            title: 'NACOS NSUK Hosts Annual Tech Summit 2025',
            image: '<?php echo BASE_URL; ?>/assets/images/blog/featured-1.jpg',
            author: 'NACOS Team',
            authorImage: '<?php echo BASE_URL; ?>/assets/images/team/user.jpg',
            date: 'June 25, 2025',
            category: 'News',
            excerpt: 'Join us for an exciting week of tech talks, workshops, and networking opportunities with industry leaders and innovators in the tech ecosystem.',
            fullContent: `
                <p>We are thrilled to announce the Annual Tech Summit 2025, hosted by NACOS NSUK. This year's event promises to be bigger and better than ever before, featuring:</p>
                <ul>
                    <li>Keynote speeches from industry leaders</li>
                    <li>Hands-on workshops on cutting-edge technologies</li>
                    <li>Networking sessions with tech professionals</li>
                    <li>Hackathon with exciting prizes</li>
                    <li>Career fair with top tech companies</li>
                </ul>
                <p>Don't miss this opportunity to learn, connect, and grow in the tech industry. Register now to secure your spot!</p>
            `
        },
        'post-2': {
            title: 'Coding Bootcamp: From Zero to Hero in 8 Weeks',
            image: '<?php echo BASE_URL; ?>/assets/images/blog/featured-2.jpg',
            author: 'Tech Department',
            authorImage: '<?php echo BASE_URL; ?>/assets/images/team/user.jpg',
            date: 'June 20, 2025',
            category: 'Events',
            excerpt: 'Applications are now open for our intensive coding bootcamp. Learn web development, UI/UX design, and soft skills to kickstart your tech career.',
            fullContent: `
                <p>Our 8-week intensive coding bootcamp is designed to take you from beginner to job-ready developer. The program includes:</p>
                <ul>
                    <li>Full-stack web development (HTML, CSS, JavaScript, React, Node.js)</li>
                    <li>UI/UX design principles and tools</li>
                    <li>Version control with Git and GitHub</li>
                    <li>Agile development methodologies</li>
                    <li>Career preparation and interview skills</li>
                </ul>
                <p>No prior coding experience required. Limited seats available. Apply today!</p>
            `
        },
        'post-3': {
            title: 'Getting Started with Python for Data Science',
            image: '<?php echo BASE_URL; ?>/assets/images/blog/article-1.jpg',
            author: 'Data Team',
            authorImage: '<?php echo BASE_URL; ?>/assets/images/team/user.jpg',
            date: 'June 18, 2025',
            category: 'Tutorial',
            excerpt: 'Learn the basics of Python programming and how to use it for data analysis and visualization.',
            fullContent: `
                <h4>Introduction to Python for Data Science</h4>
                <p>Python has become the go-to language for data science due to its simplicity and powerful libraries. In this tutorial, we'll cover:</p>
                
                <h5>1. Setting Up Your Environment</h5>
                <p>Install Python and essential data science libraries:</p>
                <pre><code>pip install numpy pandas matplotlib seaborn jupyter</code></pre>
                
                <h5>2. Basic Data Analysis with Pandas</h5>
                <p>Learn how to load, clean, and analyze data using Pandas DataFrames.</p>
                
                <h5>3. Data Visualization</h5>
                <p>Create beautiful visualizations using Matplotlib and Seaborn to gain insights from your data.</p>
                
                <p>By the end of this tutorial, you'll have a solid foundation in using Python for data analysis and visualization.</p>
            `
        },
        'post-4': {
            title: 'NACOS NSUK Wins National Hackathon 2025',
            image: '<?php echo BASE_URL; ?>/assets/images/blog/article-2.jpg',
            author: 'Tech Team',
            authorImage: '<?php echo BASE_URL; ?>/assets/images/team/user.jpg',
            date: 'June 15, 2025',
            category: 'Achievements',
            excerpt: 'Our team emerged victorious in the national hackathon competition with an innovative solution for education technology.',
            fullContent: `
                <p>We are proud to announce that Team NACOS NSUK has won first place in the National Hackathon 2025 with their innovative education technology solution!</p>
                
                <h5>Project Overview</h5>
                <p>Our team developed an AI-powered learning platform that personalizes educational content based on individual learning styles and progress. The platform uses machine learning algorithms to adapt to each student's needs, providing a tailored learning experience.</p>
                
                <h5>Key Features</h5>
                <ul>
                    <li>Personalized learning paths</li>
                    <li>Real-time progress tracking</li>
                    <li>Interactive coding exercises</li>
                    <li>Collaborative learning tools</li>
                </ul>
                
                <p>The competition was fierce, with over 50 teams participating from universities across the country. We are honored to bring this victory to NSUK and look forward to further developing our solution.</p>
            `
        },
        'post-5': {
            title: 'A Day in the Life of a Computer Science Student',
            image: '<?php echo BASE_URL; ?>/assets/images/blog/article-3.jpg',
            author: 'Student Reporter',
            authorImage: '<?php echo BASE_URL; ?>/assets/images/team/user.jpg',
            date: 'June 10, 2025',
            category: 'Student Life',
            excerpt: 'Follow our student reporter as they document a typical day in the life of a computer science student at NSUK.',
            fullContent: `
                <h4>7:00 AM - Morning Routine</h4>
                <p>My day starts early with a quick workout and breakfast. As a computer science student, I've learned that taking care of my physical health is just as important as mental exercise.</p>
                
                <h4>8:30 AM - Morning Classes</h4>
                <p>First up is Data Structures and Algorithms. Today we're covering graph traversal algorithms. The professor uses real-world examples like social networks and GPS navigation to explain the concepts.</p>
                
                <h4>11:00 AM - Lab Session</h4>
                <p>In the computer lab, we're working on implementing the algorithms we learned in the morning. Pair programming with my lab partner helps us solve problems more efficiently.</p>
                
                <h4>1:00 PM - Lunch Break</h4>
                <p>Quick lunch with classmates. We often discuss interesting problems or new technologies we've discovered.</p>
                
                <h4>2:00 PM - Project Work</h4>
                <p>Working on my final year project - a mobile app that helps students manage their study schedules. I'm using React Native for the frontend and Firebase for the backend.</p>
                
                <h4>5:00 PM - Club Activities</h4>
                <p>NACOS meeting where we're planning the next hackathon. I'm part of the organizing committee, which gives me great leadership experience.</p>
                
                <h4>8:00 PM - Study Time</h4>
                <p>Reviewing the day's lessons and working on assignments. I try to wrap up by 11 PM to get enough rest for the next day.</p>
                
                <p>Being a computer science student is challenging but incredibly rewarding. Every day brings new problems to solve and new things to learn!</p>
            `
        }
    };

    // Initialize modal
    const blogPostModal = new bootstrap.Modal(document.getElementById('blogPostModal'));
    
    // Add click event to all blog posts
    document.querySelectorAll('.blog-post, .featured-post, .card[data-bs-toggle="modal"]').forEach(post => {
        post.addEventListener('click', function(e) {
            // Don't trigger if clicking on links or buttons inside the post
            if (e.target.tagName === 'A' || e.target.closest('a') || e.target.tagName === 'BUTTON' || e.target.closest('button')) {
                return;
            }
            
            // Prevent default modal behavior
            e.preventDefault();
            
            // Get post ID from data attribute
            const postId = this.getAttribute('data-post-id');
            const postData = blogPostsData[postId];
            
            if (postData) {
                // Update modal with post data
                document.getElementById('blogPostModalLabel').textContent = postData.title;
                document.getElementById('modalPostImage').src = postData.image;
                document.getElementById('modalAuthorImage').src = postData.authorImage;
                document.getElementById('modalAuthorName').textContent = postData.author;
                document.getElementById('modalPostDate').textContent = postData.date;
                document.getElementById('modalPostCategory').textContent = postData.category;
                document.getElementById('modalPostContent').innerHTML = `
                    <p class="lead">${postData.excerpt}</p>
                    <hr>
                    ${postData.fullContent}
                `;
                
                // Set up the "Read Full Post" button
                document.getElementById('readFullPost').onclick = function() {
                    // In a real app, this would redirect to the full blog post page
                    window.location.href = `blog-post.php?id=${postId}`;
                };
                
                // Show the modal
                blogPostModal.show();
            }
        });
    });

    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Header scroll effect
    const header = document.querySelector('.navbar');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }


    // Lazy loading images
    const lazyImages = document.querySelectorAll('img.lazy-load');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('visible');
                    imageObserver.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
            img.classList.add('visible');
        });
    }
});
</script>

<?php include $base_path . '/includes/footer.php'; ?>
