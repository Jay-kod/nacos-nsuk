<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<!-- Main Content -->
<main>
    <!-- Hero Carousel Section -->
    <section id="hero-carousel" class="hero-carousel carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: linear-gradient(rgba(3, 39, 1, 0.8), rgba(3, 39, 1, 0.8)), url('<?php echo BASE_URL; ?>/assets/images/slider/slide1.jpg');">
                <div class="carousel-caption">
                    <div class="container">
                        <h5 class="animate__animated animate__fadeInDown">Welcome to NACOS</h5>
                        <h1 class="animate__animated animate__fadeInUp animate__delay-1s">Empowering Future Tech Leaders</h1>
                        <p class="animate__animated animate__fadeInUp animate__delay-2s">Join our vibrant community of tech enthusiasts and innovators at University of Tech Innovation</p>
                        <div class="carousel-buttons animate__animated animate__fadeInUp animate__delay-3s">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: linear-gradient(rgba(3, 39, 1, 0.8), rgba(3, 39, 1, 0.8)), url('<?php echo BASE_URL; ?>/assets/images/slider/slide2.jpg');">
                <div class="carousel-caption">
                    <div class="container">
                        <h5 class="animate__animated animate__fadeInDown">Upcoming Events</h5>
                        <h1 class="animate__animated animate__fadeInUp animate__delay-1s">Hackathon 2024</h1>
                        <p class="animate__animated animate__fadeInUp animate__delay-2s">Join us for the biggest coding competition of the year. Showcase your skills and win amazing prizes!</p>
                        <div class="carousel-buttons animate__animated animate__fadeInUp animate__delay-3s">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: linear-gradient(rgba(3, 39, 1, 0.8), rgba(3, 39, 1, 0.8)), url('<?php echo BASE_URL; ?>/assets/images/slider/slide3.jpg');">
                <div class="carousel-caption">
                    <div class="container">
                        <h5 class="animate__animated animate__fadeInDown">Workshops & Training</h5>
                        <h1 class="animate__animated animate__fadeInUp animate__delay-1s">Enhance Your Skills</h1>
                        <p class="animate__animated animate__fadeInUp animate__delay-2s">Participate in our workshops and training sessions conducted by industry experts</p>
                        <div class="carousel-buttons animate__animated animate__fadeInUp animate__delay-3s">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide-to="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide-to="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section><!-- End Hero Carousel Section -->

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About NACOS</h2>
                <p>We are a community of tech enthusiasts committed to innovation and excellence</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="about-card">
                        <div class="icon"><i class="fas fa-bullseye"></i></div>
                        <h4>Our Mission</h4>
                        <p>To foster a collaborative environment where students can enhance their technical skills, network with industry professionals, and work on projects that solve real-world problems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-card">
                        <div class="icon"><i class="fas fa-eye"></i></div>
                        <h4>Our Vision</h4>
                        <p>To be the leading student tech community that transforms students into industry-ready professionals and innovative problem solvers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-card">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <h4>Our Community</h4>
                        <p>A vibrant community of 850+ students passionate about technology and innovation, collaborating to create impactful solutions.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- Leadership Team Section -->
    <section id="leadership" class="section">
        <div class="container">
            <div class="leadership-header">
                <h2>Our Leadership Team</h2>
                <p>Meet the dedicated students who lead our organization with passion and expertise</p>
            </div>
            
            <div class="divider"></div>
            
            <div class="team-container">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo rtrim(BASE_URL, '/'); ?>/assets/images/team/user.jpg" alt="Kefas B. Kennedy">
                        <div class="member-socials">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="member-details">
                        <h4>Kefas B. Kennedy</h4>
                        <p>President</p>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo rtrim(BASE_URL, '/'); ?>/assets/images/team/user.jpg" alt="Zulai Muhammad">
                        <div class="member-socials">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="member-details">
                        <h4>Zulai Muhammad</h4>
                        <p>Vice President</p>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo rtrim(BASE_URL, '/'); ?>/assets/images/team/user.jpg" alt="Abdul Abubakar">
                        <div class="member-socials">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="member-details">
                        <h4>Abdul Abubakar</h4>
                        <p>Secretary</p>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo rtrim(BASE_URL, '/'); ?>/assets/images/team/user.jpg" alt="Habibi Abubakar">
                        <div class="member-socials">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="member-details">
                        <h4>Habibi Abubakar</h4>
                        <p>Treasurer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="partners-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Valued Partners</h2>
                <p>We collaborate with industry leaders to provide exceptional opportunities</p>
            </div>
        </div>
        <div class="partners-slider">
            <div class="partners-slide-track">
                <?php 
                $logos = ['cisco.png', 'cisco-.png', 'huawei.png', 'huawei-.png', 'mtn.png', 'mtn-.png'];
                $all_logos = array_merge($logos, $logos); // Duplicate for seamless scroll
                foreach ($all_logos as $logo) {
                    $alt = ucfirst(str_replace(['.png', '-'], '', $logo));
                    echo '<div class="partner-logo">';
                    echo '<img src="' . BASE_URL . '/assets/images/partners_logo/' . $logo . '" alt="' . $alt . '">';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section><!-- End Partners Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section testimonials-fix">
        <div class="container">
            <div class="section-title text-center">
                <h2>What Our Members Say</h2>
                <p>Hear from students who have benefited from NACOS activities</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p>"Joining NACOS transformed my university experience. The hackathons helped me develop practical skills that landed me an internship at a top tech firm."</p>
                        <div class="member-info">
                            <img src="<?php echo BASE_URL; ?>/assets/images/testimony_pics/user1.jpeg" alt="Jessica Tan">
                            <div class="member-details">
                                <h4>Jessica Tan</h4>
                                <span>Computer Science, 200L</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p>"The workshops and study groups organized by NACOS helped me excel in my courses. I've made lifelong friends and professional connections through this community."</p>
                        <div class="member-info">
                            <img src="<?php echo BASE_URL; ?>/assets/images/testimony_pics/user2.jpeg" alt="Michael Rodriguez">
                            <div class="member-details">
                                <h4>Michael Rodriguez</h4>
                                <span>Data Science, 100L</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p>"As an international student, NACOS provided me with a supportive community and valuable networking opportunities that helped me secure a job before graduation."</p>
                        <div class="member-info">
                            <img src="<?php echo BASE_URL; ?>/assets/images/testimony_pics/user3.jpeg" alt="Kenji Tanaka">
                            <div class="member-details">
                                <h4>Kenji Tanaka</h4>
                                <span>Software Engineering, 400L</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <!-- Upcoming Events Section -->
    <section id="events" class="events-section">
        <div class="container">

            <div class="section-title">
                <h2>Upcoming Events</h2>
                <p>Join our upcoming events and connect with the community</p>
            </div>

            <div class="events-container">
                <div class="event-item">
                    <div class="event-details">
                        <h3>Annual Hackathon 2023</h3>
                        <div class="event-meta">
                            <span><i class="far fa-calendar-alt"></i> October 15-17, 2023</span>
                            <span><i class="far fa-clock"></i> 9:00 AM - 11:00 PM</span>
                            <span><i class="fas fa-map-marker-alt"></i> University Innovation Hub</span>
                        </div>
                        <p>Join us for our flagship 48-hour coding competition with the theme "Tech for Social Good". Form teams of 3-5 and build innovative solutions to community challenges. Prizes include internships, tech gadgets, and funding for project development.</p>
                    </div>
                    <div class="event-action">
                        <a href="#" class="btn-register">Register Now</a>
                    </div>
                </div>

                <div class="event-item">
                    <div class="event-details">
                        <h3>Tech Career Fair</h3>
                        <div class="event-meta">
                            <span><i class="far fa-calendar-alt"></i> October 18, 2023</span>
                            <span><i class="far fa-clock"></i> 10:00 AM - 4:00 PM</span>
                            <span><i class="fas fa-map-marker-alt"></i> University Conference Center</span>
                        </div>
                        <p>Connect with recruiters from top tech companies including Google, Microsoft, Amazon, and local startups. Bring your resume and portfolio for internship and full-time opportunities. Workshops on resume building and interview skills will be held throughout the day.</p>
                    </div>
                    <div class="event-action">
                        <a href="#" class="btn-learn-more-event">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Upcoming Events Section -->

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Latest From Our Blog</h2>
                <p>Stay updated with tech insights and NACOS activities</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <img src="https://placehold.co/600x400/2d3436/ffffff?text=Blog+Post" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-meta">
                                <span><i class="far fa-calendar-alt"></i> Sep 5, 2023</span>
                                <span><i class="fas fa-user"></i> Alex Johnson</span>
                            </div>
                            <h5 class="card-title"><a href="#">How Our Hackathon Winners Built a Sustainable Farming App</a></h5>
                            <p class="card-text">Discover how a team of students created an AI-powered solution to help small farmers increase crop yields while conserving water resources.</p>
                            <a href="#" class="btn-read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <img src="https://placehold.co/600x400/636e72/ffffff?text=Blog+Post" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-meta">
                                <span><i class="far fa-calendar-alt"></i> Aug 28, 2023</span>
                                <span><i class="fas fa-user"></i> Maria Garcia</span>
                            </div>
                            <h5 class="card-title"><a href="#">Top 5 Emerging Technologies Every CS Student Should Learn</a></h5>
                            <p class="card-text">Explore the technologies that will shape the future of computing and how you can get started with them today.</p>
                            <a href="#" class="btn-read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <img src="https://placehold.co/600x400/b2bec3/ffffff?text=Blog+Post" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-meta">
                                <span><i class="far fa-calendar-alt"></i> Aug 15, 2023</span>
                                <span><i class="fas fa-user"></i> David Chen</span>
                            </div>
                            <h5 class="card-title"><a href="#">Building Your First Portfolio: A Guide for Student Developers</a></h5>
                            <p class="card-text">Practical advice on creating a standout portfolio that showcases your skills and projects to potential employers.</p>
                            <a href="#" class="btn-read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="section gallery-section">
        <div class="container">
            <div class="section-title" style="text-align: center; margin-bottom: 40px;">
                <h2 style="color: #27ae60; font-weight: 700;">Gallery</h2>
                <p>Visual memories of our events and activities</p>
            </div>

            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="events">Events</button>
                <button class="filter-btn" data-filter="hackathons">Hackathons</button>
            </div>

            <div class="gallery-grid">
                <?php
                // Define image paths for each category
                $image_paths = [
                    'events' => 'assets/images/nacos_h_event/',
                    'hackathons' => 'assets/images/nacos_h_hack/',
                    'workshops' => 'assets/images/nacos_pics/', // Fallback/general category
                    'meetings' => 'assets/images/meeting/' // Fallback/general category
                ];

                $image_files = [];
                foreach ($image_paths as $category => $path) {
                    $files = glob($path . '*.jpg');
                    if ($files) {
                        foreach ($files as $file) {
                            $image_files[] = ['path' => $file, 'category' => $category];
                        }
                    }
                }

                // Shuffle the array to mix the images for a better visual effect
                shuffle($image_files);

                // Loop through each image and create a gallery item
                if ($image_files) {
                    $i = 0;
                    foreach ($image_files as $image) {
                        $image_url = rtrim(BASE_URL, '/') . '/' . $image['path'];
                        echo '<div class="gallery-item" data-category="' . htmlspecialchars($image['category']) . '">';
                        echo '    <img src="' . htmlspecialchars($image_url) . '" alt="Gallery Image ' . ($i + 1) . '">';
                        echo '</div>';
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </section>

</main>

<?php require_once 'includes/footer.php'; ?>