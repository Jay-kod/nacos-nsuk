<?php
/**
 * About NACOS Page
 * 
 * @package Nacos
 * @since 1.0.0
 */

// Set the base path for includes
$base_path = dirname(__DIR__);

// Include config
require_once $base_path . '/includes/config.php';

// Set page title and current page for navigation
$page_title = 'About NACOS – Department of Computer Science';
$current_page = 'about';

// Add custom CSS for about page
$custom_css = '<link rel="stylesheet" href="' . rtrim(BASE_URL, '/') . '/assets/css/about_page.css">';

// Add header
include $base_path . '/includes/header.php';
?>

<!-- 
    ===================================
    PAGE SECTIONS:
    1. Header (About NACOS)
    2. Who We Are
    3. Our Objectives
    4. Activities & Events
    5. Executive Council
    6. Vision & Mission
    7. Milestones
    ===================================
-->

<head>
    <link rel="stylesheet" href="assets/css/about_page.css">
</head>

<!-- ===== Page Header ===== -->
<header class="about-header">
    <div class="header-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">About NACOS</h1>
                <p class="lead">Department of Computer Science – NSUK Chapter</p>
            </div>
        </div>
    </div>
</header>

<style>
.about-header {
    height: 60vh;
    min-height: 400px;
    background-image: url('/nacos_1/assets/images/slider/slide1.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    display: flex;
    align-items: center;
}

.header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(9, 97, 30, 0.8) 0%, rgba(9, 97, 30, 0.9) 100%);
    z-index: 1;
}

.about-header .container {
    position: relative;
    z-index: 2;
}

.about-header h1 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 5);
    color: #fff;
}

.about-header p {
    font-size: 1.5rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 5);
    color: #fff;
}

@media (max-width: 768px) {
    .about-header {
        height: 50vh;
        min-height: 300px;
    }
    
    .about-header h1 {
        font-size: 2.5rem;
    }
    
    .about-header p {
        font-size: 1.2rem;
    }
}
</style>

<style>
/* Objective Cards Styles */
#our-objectives {
    padding: 5rem 0;
    background-color: #f8f9fa;
    position: relative;
    overflow: hidden;
}

.objective-card {
    border-radius: 12px;
    padding: 2.5rem 1.5rem;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    border: none;
    height: 100%;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

/* Card Backgrounds */
.objective-card-1 { background: linear-gradient(135deg, #b1dfbb 0%, #c8f0d8 100%); }
.objective-card-2 { background: linear-gradient(135deg, #b1dfbb 0%, #c8f0d8 100%); }
.objective-card-3 { background: linear-gradient(135deg, #b1dfbb 0%, #c8f0d8 100%); }
.objective-card-4 { background: linear-gradient(135deg, #b1dfbb 0%, #c8f0d8 100%); }

.objective-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

/* Hover Backgrounds */
.objective-card-1:hover { background: linear-gradient(135deg, #28a745 0%, #218838 100%); }
.objective-card-2:hover { background: linear-gradient(135deg, #218838 0%, #1e7e34 100%); }
.objective-card-3:hover { background: linear-gradient(135deg, #1e7e34 0%, #1a7431 100%); }
.objective-card-4:hover { background: linear-gradient(135deg, #1a7431 0%, #155d27 100%); }

/* Icons */
.objective-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: #fff;
    font-size: 1.8rem;
    transition: all 0.4s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Icon Colors */
.objective-card-1 .objective-icon { background: linear-gradient(135deg, #218838 0%, #1e7e34 100%); }
.objective-card-2 .objective-icon { background: linear-gradient(135deg, #1e7e34 0%, #1a7431 100%); }
.objective-card-3 .objective-icon { background: linear-gradient(135deg, #1a7431 0%, #155d27 100%); }
.objective-card-4 .objective-icon { background: linear-gradient(135deg, #155d27 0%, #0f4b1f 100%); }

.objective-card:hover .objective-icon {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Text Styles */
.objective-card h3 {
    color: #1a472a;
    font-size: 1.3rem;
    margin-bottom: 1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
    padding-bottom: 0.5rem;
}

.objective-card h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 2px;
    background: #28a745;
    transition: all 0.3s ease;
}

.objective-card:hover h3::after {
    width: 60px;
    background: #fff;
}

.objective-card p {
    color: #495057;
    line-height: 1.7;
    margin-bottom: 0;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}

.objective-card:hover h3,
.objective-card:hover p {
    color: #fff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

/* Responsive Styles */
@media (max-width: 767px) {
    .objective-card {
        max-width: 350px;
        margin-left: auto;
        margin-right: auto;
    }
}
</style>

<style>
.event-card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.event-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.event-image {
    height: 150px;
    overflow: hidden;
}

.event-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.4s ease;
}

.event-content {
    padding: 1.5rem;
    background-color: #fff;
}

.event-content h3 {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #1a472a;
}

.event-content p {
    font-size: 0.95rem;
    color: #495057;
    margin-bottom: 0;
}
</style>

<main class="container py-5">
    <!-- ===== Who We Are Section ===== 
         Introduction to NACOS including its establishment and purpose -->
    <section id="who-we-are" class="mb-5 pt-4">
        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="row g-0">
                <!-- Text Content (Left on desktop, Top on mobile) -->
                <div class="col-lg-8 p-4 p-lg-5 d-flex flex-column">
                    <h2 class="mb-4" style="color: #1a472a;">About NACOS-NSUK</h2>
                    <p class="lead">The Nigerian Association of Computing Students (NACOS) at Nasarawa State University, Keffi, is a university-led organization dedicated to promoting excellence in computing and technology education.</p>
                    <p>Since its establishment in 2005, NACOS has been at the forefront of fostering technological innovation and academic excellence among computing students. The association provides a vibrant platform for students to develop technical skills, connect with industry professionals, and engage in impactful projects.</p>
                    <p class="mb-0">Through a variety of programs — including workshops, hackathons, and networking events — NACOS helps bridge the gap between academic learning and real-world applications in technology. Our commitment is to empower students with the tools, knowledge, and exposure needed to thrive in the ever-evolving tech industry.</p>
                </div>
                
                <!-- Image (Right on desktop, Bottom on mobile) -->
                <div class="col-lg-4">
                    <img src="/nacos_1/assets/images/team_p/team.jpeg" 
                         alt="NACOS Team" 
                         class="img-fluid h-100 w-100 object-fit-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Vision & Mission Section ===== 
         Core vision and mission statements of NACOS -->
    <section id="vision-mission" class="py-1 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="vision-box p-4 p-lg-5 h-100 rounded-3" style="background: linear-gradient(135deg, #1a7431 0%, #0f4b1f 100%);">
                        <div class="d-flex align-items-center mb-4">
                            <i class="fas fa-eye fa-2x text-white me-3"></i>
                            <h2 class="text-white mb-0">Our Vision</h2>
                        </div>
                        <p class="text-white mb-0">To be the leading student tech association that inspires excellence, innovation, and technological advancement in Nigeria's educational landscape.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-box p-4 p-lg-5 h-100 rounded-3" style="background: linear-gradient(135deg, #0f4b1f 0%, #1a7431 100%);">
                        <div class="d-flex align-items-center mb-4">
                            <i class="fas fa-bullseye fa-2x text-white me-3"></i>
                            <h2 class="text-white mb-0">Our Mission</h2>
                        </div>
                        <p class="text-white mb-0">To empower computing students with the knowledge, skills, and opportunities needed to excel in the technology industry through quality education, practical training, and professional development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Our Objectives Section ===== 
         Key goals and purposes of the NACOS organization -->
    <section id="our-objectives" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Objectives</h2>
                    <div class="title-underline"></div>
                </div>
            </div>
            <div class="row g-4">
                <!-- Objective 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="objective-card objective-card-1">
                        <div class="objective-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Promote Tech</h3>
                        <p>Foster interest in computing and emerging technologies among students.</p>
                    </div>
                </div>
                
                <!-- Objective 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="objective-card objective-card-2">
                        <div class="objective-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Build Community</h3>
                        <p>Create a supportive network for computer science students to connect and collaborate.</p>
                    </div>
                </div>
                
                <!-- Objective 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="objective-card objective-card-3">
                        <div class="objective-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Encourage Innovation</h3>
                        <p>Provide platforms for creative problem-solving and project development.</p>
                    </div>
                </div>
                
                <!-- Objective 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="objective-card objective-card-4">
                        <div class="objective-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Bridge Gaps</h3>
                        <p>Connect students with industry professionals and academic resources.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Activities & Events Section ===== 
         List of regular programs and events organized by NACOS -->
    <section id="activities-events" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Activities & Events</h2>
                    <div class="title-underline"></div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <!-- Event 1 -->
                <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                    <a href="events.php" class="text-decoration-none h-100">
                        <div class="event-card h-100">
                            <div class="event-image">
                                <img src="/nacos_1/assets/images/orientation-about.jpg" alt="Orientation" class="img-fluid">
                            </div>
                            <div class="event-content">
                                <h3>Orientation</h3>
                                <p>Welcome events for new students to the department</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- Event 2 -->
                <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                    <a href="events.php" class="text-decoration-none h-100">
                        <div class="event-card h-100">
                            <div class="event-image">
                                <img src="/nacos_1/assets/images/hackathon-about.jpg" alt="Hackathon" class="img-fluid">
                            </div>
                            <div class="event-content">
                                <h3>Hackathon</h3>
                                <p>Intensive coding competitions and innovation challenges</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- Event 3 -->
                <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                    <a href="events.php" class="text-decoration-none h-100">
                        <div class="event-card h-100">
                            <div class="event-image">
                                <img src="/nacos_1/assets/images/nacosw-about.jpg" alt="Nacos Week" class="img-fluid">
                            </div>
                            <div class="event-content">
                                <h3>Nacos Week & Hiking</h3>
                                <p>Annual Nacos Week and hiking events</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Executive Council Section ===== 
         Information about the student leadership team -->
    <section id="executive-council" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Meet Our Leadership</h2>
                    <div class="title-underline mb-2"></div>
                    <p class="lead mb-2">Our dedicated team of student leaders works tirelessly to make NACOS a thriving community for tech enthusiasts.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="team-cta p-4 p-lg-5 rounded-3" style="background: linear-gradient(135deg, #1a7431 0%, #0f4b1f 100%);">
                        <h3 class="text-white mb-2">Get to Know Our Team</h3>
                        <p class="text-white-75 mb-2">Meet the passionate students who are driving innovation and community at NACOS.</p>
                        <a href="team.php" class="btn btn-light btn-lg px-5 py-2 fw-bold">
                            Meet the Team <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Milestones Section ===== 
         Key achievements and notable accomplishments -->
    <section id="milestones" class="py-5 my-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Milestones</h2>
                    <p class="lead text-muted">Celebrating our journey of achievements and growth</p>
                </div>
            </div>
            
            <div class="milestones-container">
                <div class="milestone-item">
                    <div class="milestone-content">
                        <div class="milestone-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="milestone-text">
                            <h3>2023</h3>
                            <h4>First Hackathon</h4>
                            <p>Successfully hosted NACOS-NSUK's first-ever hackathon, bringing together talented students for innovation and collaboration.</p>
                        </div>
                    </div>
                </div>

                <div class="milestone-item">
                    <div class="milestone-content">
                        <div class="milestone-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="milestone-text">
                            <h3>2025</h3>
                            <h4>First Nacos Week</h4>
                            <p>Successfully hosted NACOS-NSUK's first-ever Nacos Week, fostering a strong network of tech enthusiasts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Milestones Section Styling */
        .milestones-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .milestones-container::before {
            content: '';
            position: absolute;
            width: 4px;
            background-color: #4e73df;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            border-radius: 2px;
        }

        .milestone-item {
            padding: 20px 0;
            position: relative;
            width: 100%;
        }

        .milestone-content {
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            width: 45%;
            position: relative;
            transition: all 0.3s ease;
        }

        .milestone-item:nth-child(odd) .milestone-content {
            margin-left: 5%;
        }

        .milestone-item:nth-child(even) .milestone-content {
            margin-left: 50%;
        }

        .milestone-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .milestone-icon {
            width: 50px;
            height: 50px;
            background: #4e73df;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            position: absolute;
            top: 20px;
            left: -75px;
            box-shadow: 0 0 0 5px #f8f9fc;
        }

        .milestone-item:nth-child(even) .milestone-icon {
            left: auto;
            right: -75px;
        }

        .milestone-text h3 {
            color: #4e73df;
            margin: 0 0 10px 0;
            font-size: 22px;
            font-weight: 700;
        }

        .milestone-text h4 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
        }

        .milestone-text p {
            margin: 0;
            color: #6c757d;
            line-height: 1.6;
            font-size: 15px;
        }

        /* Responsive Design */
        @media (max-width: 991.98px) {
            .milestones-container {
                padding: 0 30px;
            }
            
            .milestone-content {
                width: 90%;
                margin: 0 auto 40px !important;
            }
            
            .milestone-icon {
                left: 50% !important;
                right: auto !important;
                transform: translateX(-50%);
                top: -25px;
                margin: 0;
            }
            
            .milestone-item {
                padding: 40px 0 0;
            }
            
            .milestone-text {
                text-align: center;
            }
            
            .milestones-container::before {
                left: 30px;
            }
        }
        
        @media (max-width: 767.98px) {
            .milestone-content {
                width: 100%;
                padding: 15px;
            }
            
            .milestone-text h3 {
                font-size: 20px;
                margin-bottom: 5px;
            }
            
            .milestone-text h4 {
                font-size: 16px;
                margin-bottom: 8px;
            }
            
            .milestone-text p {
                font-size: 14px;
                line-height: 1.5;
            }
        }
        
        @media (max-width: 575.98px) {
            .milestones-container {
                padding: 0 15px;
            }
            
            .milestone-content {
                padding: 15px 10px;
            }
            
            .milestone-icon {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
        }
    </style>

</main>

<?php
// Add footer
include $base_path . '/includes/footer.php';
?>
