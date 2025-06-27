<?php if (!defined('BASE_URL')) exit('Direct access not allowed'); ?>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Widget 1: About -->
            <div class="footer-widget about-widget">
                <h3 class="footer-logo">
                    <a href="<?php echo BASE_URL; ?>" class="d-flex align-items-center">
                        <img src="<?php echo BASE_URL; ?>/assets/images/nacos_nsuk_logo.png" alt="NACOS Logo" class="footer-logo-img"> NACOS NSUK
                    </a>
                </h3>
                <p>Empowering students through technology education, innovation, and community building since 2008.</p>
                <div class="social-links">
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="github"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Widget 2: Quick Links -->
            <div class="footer-widget links-widget">
                <h4 class="widget-title" style="color: #ffffff;">Quick Links</h4>
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li><a href="nacos_1/pages/about.php">About Us</a></li>
                    <li><a href="nacos_1/pages/activities.php">Activities</a></li>
                    <li><a href="nacos_1/pages/events.php">Events</a></li>
                    <li><a href="nacos_1/pages/team.php">Our Team</a></li>
                    <li><a href="nacos_1/pages/gallery.php">Gallery</a></li>
                </ul>
            </div>

            <!-- Widget 3: Contact Us -->
            <div class="footer-widget contact-widget">
                <h4 class="widget-title" style="color: #ffffff;">Contact Us</h4>
                <ul class="contact-list">
                    <li><i class="fas fa-map-marker-alt"></i> Computer Science Department, Nasarawa State University, Keffi.</li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:nacos@uti.edu">nacosnsuk@gmail.com</a></li>
                    <li><i class="fas fa-phone"></i> <a href="tel:+15551234567">+234 812 266 1713</a></li>
                </ul>
            </div>

            <!-- Widget 4: Newsletter -->
            <div class="footer-widget newsletter-widget">
                <h4 class="widget-title" style="color: #ffffff;">Newsletter</h4>
                <p>Subscribe to our newsletter for event updates and tech news.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-text">&copy; <?php echo date('Y'); ?> NACOS NSUK - Nasarawa State University, Keffi Chapter. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<!-- Back to Top Button -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Header scroll class
        const header = document.querySelector('#header');
        if (header) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        }

        // Gallery filter logic
        const filterButtons = document.querySelectorAll('.gallery-filters .filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-grid .gallery-item');

        if (filterButtons.length > 0 && galleryItems.length > 0) {
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Manage active button state
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Show/hide gallery items
                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') === filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        }

        // Back to top button logic
        const backToTopButton = document.querySelector('.back-to-top');
        if (backToTopButton) {
            const toggleBackToTop = () => {
                if (window.scrollY > 100) {
                    backToTopButton.classList.add('active');
                } else {
                    backToTopButton.classList.remove('active');
                }
            }
            window.addEventListener('load', toggleBackToTop);
            document.addEventListener('scroll', toggleBackToTop);

            backToTopButton.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>

<script>
    // Preloader logic
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            // No timeout needed, hide it as soon as the DOM is ready
            preloader.classList.add('hidden');
        }
    });
</script>

<!-- Vendor JS Files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?php echo rtrim(BASE_URL, '/'); ?>/assets/js/main.js"></script>

<?php if (isset($GLOBALS['blog_page'])): ?>
    <script>
        // Add any blog-specific JS here
    </script>
<?php endif; ?>

</body>
</html>