/**
 * NACOS Main JavaScript File
 * Handles all the interactive elements, animations, and dynamic content
 */

document.addEventListener('DOMContentLoaded', function() {
    // Back to Top Button
    const backToTopButton = document.getElementById('backToTop');
    
    // Show/hide back to top button on scroll
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Account for fixed header
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
                    bsCollapse.hide();
                }
            }
        });
    });
    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
    // Animate elements when they come into view
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;
            
            if (elementPosition < screenPosition) {
                element.classList.add('animated');
            }
        });
    };
    
    // Run animation on load and scroll
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);
    
    // Handle form submissions
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
    
    // Initialize counter animation for stats
    const animateCounters = function() {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the faster
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(animateCounters, 1);
            } else {
                counter.innerText = target;
            }
        });
    };
    
    // Run counter animation when stats section is in view
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const statsObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        statsObserver.observe(statsSection);
    }
    
    // Handle newsletter subscription
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value.trim();
            
            if (email) {
                // Here you would typically send the email to your server
                console.log('Subscribing email:', email);
                
                // Show success message (in a real app, you'd handle the server response)
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-success mt-3';
                alertDiv.textContent = 'Thank you for subscribing to our newsletter!';
                this.parentNode.insertBefore(alertDiv, this.nextSibling);
                
                // Clear the input
                emailInput.value = '';
                
                // Remove the alert after 5 seconds
                setTimeout(() => {
                    alertDiv.remove();
                }, 5000);
            }
        });
    }
    
    // Initialize any carousels
    const carousels = document.querySelectorAll('.hero-carousel');
    carousels.forEach(carousel => {
        new bootstrap.Carousel(carousel, {
            interval: 5000,
            touch: true
        });
    });
    
    // Add smooth scrolling to all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Account for fixed header
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Add a small delay for page transitions
window.addEventListener('load', function() {
    document.body.classList.add('page-loaded');
    
    // Remove loading class after a short delay
    setTimeout(function() {
        document.body.classList.remove('loading');
    }, 500);
});

// Blog Header Scroll Effect
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header-area');
    if (!header) return;

    // Add scroll event
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

    // Trigger on load in case page is scrolled
    if (window.scrollY > 50) {
        header.classList.add('header-scrolled');
    }
});