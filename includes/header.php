<?php 
require_once __DIR__ . '/config.php';
$current_script = basename($_SERVER['SCRIPT_NAME']);
$current_page = str_replace('.php', '', $current_script);
$is_homepage = ($_SERVER['SCRIPT_NAME'] === '/nacos_1/index.php');

// If we're on the blog page, set current_page to 'news' to match the navigation
if (strpos($_SERVER['SCRIPT_NAME'], 'blog.php') !== false) {
    $current_page = 'news';
}

// Function to check if current page is active
function isActive($page_name, $current) {
    if (is_array($page_name)) {
        return in_array($current, $page_name) ? 'active' : '';
    }
    return $page_name === $current ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NACOS - National Association of Computing Students</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet with Cache Busting -->
    <link rel="stylesheet" href="<?php echo rtrim(BASE_URL, '/'); ?>/assets/css/style.css?v=1.3">

    <!-- Page-specific Stylesheets -->
    <?php if (isset($page_stylesheets) && is_array($page_stylesheets)): ?>
        <?php foreach ($page_stylesheets as $stylesheet): ?>
            <link rel="stylesheet" href="<?php echo rtrim(BASE_URL, '/'); ?>/assets/css/<?php echo $stylesheet; ?>?v=1.0">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Favicons -->
    <link href="<?php echo BASE_URL; ?>/assets/images/nacos_nsuk_logo.png" rel="icon">
    <link href="<?php echo BASE_URL; ?>/assets/images/nacos_nsuk_logo.png" rel="apple-touch-icon">

    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transition: opacity 0.5s ease-out;
        }

        #preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .preloader-content {
            text-align: center;
        }

        .preloader-content img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
            animation: pulse 1.5s infinite;
        }

        .preloader-text {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary);
            margin-top: 15px;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* Custom Header Styles */
        :root {
            --primary: #033c09;
            --secondary: #f3f9f4;
            --accent: #27ae60;
            --white: #ffffff;
        }

        /* Remove default margin and padding */
        body {
            margin: 0;
            padding: 0;
        }

        /* Ensure header starts at the very top */
        #header {
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
        }

        /* Adjust hero section to start right after header */
        .hero-carousel {
            margin-top: 0;
        }

        /* Header Styles */
        #header {
            transition: all 0.3s ease-in-out;
            padding: 15px 0;
            background: transparent !important;
        }
        
        #header.scrolled {
            background: var(--white) !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        
        #header .navbar {
            padding: 0;
        }
        
        #header .navbar-brand {
            padding: 0;
        }
        
        #header .header-logo-img {
            height: 50px;
            width: auto;
            transition: all 0.3s ease;
        }
        
        #header.scrolled .header-logo-img {
            height: 40px;
        }
        
        #header .logo-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--white);
            margin-left: 10px;
            transition: all 0.3s ease;
        }
        
        #header.scrolled .logo-text {
            color: var(--primary);
            font-size: 1.3rem;
        }
        
        #header .logo-text span {
            color: var(--accent);
        }
        
        #header .nav-link {
            color: var(--white);
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.2rem;
            position: relative;
            transition: all 0.3s ease;
        }
        
        #header.scrolled .nav-link {
            color: var(--primary);
        }
        
        #header .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--accent);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: all 0.3s ease;
        }
        
        #header .nav-link:hover::after,
        #header .nav-link.active::after {
            width: 70%;
        }
        
        #header .nav-link:hover,
        #header .nav-link.active {
            color: var(--accent);
        }
        
        #header .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        
        #header .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }
        
        #header .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        #header.scrolled .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%283, 60, 9, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        @media (max-width: 991.98px) {
            #header {
                background: var(--white) !important;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }
            
            #header .logo-text {
                color: var(--primary);
            }
            
            #header .nav-link {
                color: var(--primary);
                padding: 0.5rem 0;
                margin: 0.5rem 0;
            }
            
            #header .navbar-collapse {
                padding: 1rem 0;
                background: var(--white);
                border-radius: 0.5rem;
                margin-top: 1rem;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            }
        }
    </style>
</head>
<body class="<?php echo isset($GLOBALS['blog_page']) ? 'blog-page' : ''; ?>">
<!-- ======= Preloader ======= -->
<div id="preloader">
    <div class="preloader-content">
        <img src="<?php echo BASE_URL; ?>/assets/images/nacos_nsuk_logo.png" alt="NACOS Logo">
        <div class="preloader-text">NACOS NSUK</div>
    </div>
</div>

<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            
            <a class="navbar-brand d-flex align-items-center" href="<?php echo BASE_URL; ?>">
                <img src="<?php echo BASE_URL; ?>/assets/images/nacos_nsuk_logo.png" alt="NACOS Logo" class="header-logo-img">
                <span class="logo-text">NACOS<span> NSUK</span></span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('index', $current_page); ?>" href="<?php echo BASE_URL; ?>">
                            <i class="fas fa-home d-lg-none me-2"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('about', $current_page); ?>" href="<?php echo rtrim(BASE_URL, '/'); ?>/pages/about.php">
                            <i class="fas fa-info-circle d-lg-none me-2"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('events', $current_page); ?>" href="<?php echo rtrim(BASE_URL, '/'); ?>/pages/events.php">
                            <i class="fas fa-calendar-alt d-lg-none me-2"></i>Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('gallery', $current_page); ?>" href="<?php echo rtrim(BASE_URL, '/'); ?>/pages/gallery.php">
                            <i class="fas fa-images d-lg-none me-2"></i>Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('blog', $current_page); ?>" href="<?php echo rtrim(BASE_URL, '/'); ?>/pages/blog.php">
                            <i class="fas fa-newspaper d-lg-none me-2"></i>Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('contact', $current_page); ?>" href="<?php echo rtrim(BASE_URL, '/'); ?>/pages/contact.php">
                            <i class="fas fa-envelope d-lg-none me-2"></i>Contact
                        </a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle me-1"></i> Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="<?php echo rtrim(BASE_URL, '/'); ?>/dashboard">Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?php echo rtrim(BASE_URL, '/'); ?>/profile.php">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?php echo rtrim(BASE_URL, '/'); ?>/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    // Preloader
    function hidePreloader() {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            preloader.style.visibility = 'hidden';
            // Remove preloader from DOM after animation
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        }
    }

    // Hide preloader when page is fully loaded
    if (document.readyState === 'complete') {
        hidePreloader();
    } else {
        window.addEventListener('load', hidePreloader);
        // Fallback in case load event doesn't fire
        setTimeout(hidePreloader, 5000);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('header');
        
        if (header) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
            
            // Initialize on page load in case of refresh while scrolled
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            }
        }
    });
</script>

<main id="main">