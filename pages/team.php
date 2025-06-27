<?php
// Set the base path for includes
$base_path = dirname(__DIR__);

// Include config
require_once $base_path . '/includes/config.php';

$page_title = "Our Team - NACOS NSUK";
$page_description = "Meet the dedicated team behind NACOS NSUK";
$current_page = "team";

// Include header
include $base_path . '/includes/header.php';
?>

<main class="container-fluid p-0">
    <!-- Hero Section -->
    <header class="team-hero" style="background-image: linear-gradient(rgba(40, 167, 69, 0.85), rgba(40, 167, 69, 0.85)), url('<?php echo BASE_URL; ?>/assets/images/team/team_page_hero.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-4 fw-bold mb-3">Our Team</h1>
                    <p class="lead mb-4">Meet the dedicated individuals leading NACOS-NSUK to greater heights</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container py-5">
        <!-- Team Section -->
        <section class="team-section" id="team">
            <div class="container">
                <!-- Row 1: President (Single Card) -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/president.jpg" class="img-fluid" alt="President">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Kennedy Kefas Bulus</h4>
                                <p class="position">President</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2: 3 Cards -->
                <div class="row g-4 mb-5">
                    <!-- Vice President -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/sec_gen.jpg" class="img-fluid" alt="Secretary General">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Ademu Abdulhadi</h4>
                                <p class="position">Secretary General</p>
                            </div>
                        </div>
                    </div>

                    <!-- vice president -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/v_president.jpg" class="img-fluid" alt="vice president">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Abdulwasiu  Suliyat</h4>
                                <p class="position">Vice President</p>
                            </div>
                        </div>
                    </div>

                    <!-- Financial Secretary -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/fin_sec.jpg" class="img-fluid" alt="Financial Secretary">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Umar Faruk  Muhammad</h4>
                                <p class="position">Financial Secretary</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 3: 3 Cards -->
                <div class="row g-4 mb-5">
                    <!-- asst secretary general -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/a_sec_gen.jpg" class="img-fluid" alt="asst secretary general">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Nwala Queen-Ester</h4>
                                <p class="position">Asst. Secretary General</p>
                            </div>
                        </div>
                    </div>

                    <!-- treaserer -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/treasurer.jpg" class="img-fluid" alt="treaserer">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Salau Abibat Omobolanle</h4>
                                <p class="position">Treasurer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Auditor -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/auditor.jpg" class="img-fluid" alt="Auditor General">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>James Jonathan Atanbe</h4>
                                <p class="position">Auditor General</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 4: 3 Cards -->
                <div class="row g-4 mb-5">
                    <!-- dierector of academics -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/d_academics.jpg" class="img-fluid" alt="director of academics">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Emmanuel Christiana Odepe</h4>
                                <p class="position">Director of Academics</p>
                            </div>
                        </div>
                    </div>

                    <!-- Director of Software -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/d_software.jpg" class="img-fluid" alt="Director of software">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Mark Ishaya Jatau</h4>
                                <p class="position">Director of Software</p>
                            </div>
                        </div>
                    </div>

                    <!-- Director of Social -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/d_social.jpg" class="img-fluid" alt="Director of Social">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Okeke Gibson Chidubem</h4>
                                <p class="position">Director of Social</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 5: 3 Cards -->
                <div class="row g-4">
                    <!-- Director of Sports -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/d_sport.jpg" class="img-fluid" alt="Director of sports">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Muhammad Hamza</h4>
                                <p class="position">Director of Sports</p>
                            </div>
                        </div>
                    </div>

                    <!-- Director of Welfare -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/d_welfare.jpg" class="img-fluid" alt="Director of welfare">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Ucheonye Victoria Onyekachukwu</h4>
                                <p class="position">Director of Welfare</p>
                            </div>
                        </div>
                    </div>

                    <!-- public relations officer -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card h-300">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/pro.jpg" class="img-fluid" alt="Public Relations Officer">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Osaguona Emmanuel Osazuwa</h4>
                                <p class="position">Public Relations Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Staff Advisors Section -->
        <section class="py-5 bg-light mt-5">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title mb-4">Our Esteemed Staff Advisors</h2>
                        <p class="lead">Guiding and supporting the NACOS-NSUK team with their expertise and experience</p>
                        <div class="divider mx-auto my-4"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- Staff Advisor 1 -->
                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="team-card h-200">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/user.jpg" class="img-fluid" alt="Staff Advisor 1">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Email"><i class="fas fa-envelope"></i></a>
                                    <a href="#" class="social-icon" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Prof. B. A. Ajayi</h4>
                                <p class="position">Staff Advisor</p>
                                <p class="text-muted">Head of Computer Science Department</p>
                            </div>
                        </div>
                    </div>

                    <!-- Staff Advisor 2 -->
                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="team-card h-200">
                            <div class="team-img-wrapper">
                                <img src="<?php echo BASE_URL; ?>/assets/images/team/user.jpg" class="img-fluid" alt="Staff Advisor 2">
                                <div class="social-links">
                                    <a href="#" class="social-icon" title="Email"><i class="fas fa-envelope"></i></a>
                                    <a href="#" class="social-icon" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Mr. A. Tahir</h4>
                                <p class="position">Exam Officer</p>
                                <p class="text-muted">Level Coordinator 400L</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
    /* Team Section Styling */
    .team-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
    }

    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .team-img-wrapper {
        position: relative;
        height: 320px;
        overflow: hidden;
        flex-shrink: 0;
        border-radius: 10px 10px 0 0;
    }

    .team-card.president .team-img-wrapper {
        height: 350px;
    }

    .team-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        transition: all 0.5s ease;
        transform: scale(1);
    }

    .team-card:hover .team-img-wrapper img {
        transform: scale(1.1);
    }

    .social-links {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(40, 167, 69, 0.8) 0%, rgba(25, 135, 84, 0.9) 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        opacity: 0;
        transform: translateY(100%);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 10px 10px 0 0;
    }

    .team-card:hover .social-links {
        opacity: 1;
        transform: translateY(0);
    }

    .social-icon {
        color: white;
        font-size: 18px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        transform: translateY(20px);
        opacity: 0;
    }

    .team-card:hover .social-icon {
        transform: translateY(0);
        opacity: 1;
    }

    .social-icon:nth-child(1) { transition-delay: 0.1s; }
    .social-icon:nth-child(2) { transition-delay: 0.2s; }
    .social-icon:nth-child(3) { transition-delay: 0.3s; }

    .social-icon:hover {
        background: white;
        color: #28a745;
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .team-info {
        padding: 20px;
        text-align: center;
    }

    .team-info h4 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .team-info p {
        color: #6c757d;
        margin-bottom: 0;
    }

    .team-info .position {
        color: #28a745;
        font-weight: 600;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .team-card {
            margin-bottom: 30px;
        }
        
        .team-card.president .team-img-wrapper {
            height: 280px;
        }
    }

    /* Team Hero Section */
    .team-hero {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 60vh;
        min-height: 400px;
        display: flex;
        align-items: center;
        position: relative;
    }
</style>

<?php
// Include footer
include $base_path . '/includes/footer.php';
?>