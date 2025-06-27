<?php
$page_stylesheets = ['event_page.css'];
include '../includes/header.php';
?>

<main id="main">

    <!-- ======= Hero Banner Section ======= -->
    <section id="hero-banner" class="hero-banner" style="background-image: url('../assets/images/event_page/event_p_hero.jpeg');">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="animate__animated animate__fadeInDown">Our Events</h1>
                    <p class="animate__animated animate__fadeInUp">Join our vibrant community. Learn, connect, and grow with us.</p>
                </div>
            </div>
        </div>
    </section><!-- End Hero Banner Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Events</h2>
                <p>Explore our calendar of tech events, workshops, hackathons, and networking opportunities</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="events-flters">
                        <li data-filter="*" class="filter-active">All Events</li>
                        <li data-filter=".filter-hackathon">Hackathons</li>
                        <li data-filter=".filter-nacos-week">NACOS Week</li>
                    </ul>
                </div>
            </div>

            <div class="row events-container" data-aos="fade-up" data-aos-delay="100">

                <?php foreach (SITE_EVENTS as $event) : ?>
                    <div class="col-12 events-item <?php echo $event['filter']; ?>">
                        <div class="event-card d-flex">
                            <div class="card-img flex-shrink-0" style="width: 40%;">
                                <img src="../assets/images/event_page/<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>" class="img-fluid h-100">
                            </div>
                            <div class="card-body flex-grow-1" style="width: 60%;">
                                <h5 class="card-title"><?php echo $event['title']; ?></h5>
                                <p class="card-text"><?php echo $event['description']; ?></p>
                                <div class="card-meta">
                                    <span class="category"><?php echo $event['category']; ?></span>
                                    <span class="date"><?php echo $event['date']; ?></span>
                                </div>
                                <a href="<?php echo $event['link']; ?>" class="btn-details">View Details <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section><!-- End Events Section -->

    <!-- ======= Upcoming Events Section ======= -->
    <section id="upcoming-events" class="upcoming-events section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Upcoming Events</h2>
                <p>Mark your calendars for these exciting upcoming events</p>
            </div>

            <div class="row">
                <?php foreach (UPCOMING_EVENTS as $event) : ?>
                    <div class="col-md-6">
                        <div class="upcoming-event d-flex">
                            <div class="upcoming-event-img flex-shrink-0">
                                <img src="../assets/images/event_page/<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>" class="img-fluid">
                            </div>
                            <div class="upcoming-event-info">
                                <h4><?php echo $event['title']; ?></h4>
                                <p><i class="far fa-calendar-alt"></i> <?php echo $event['date']; ?></p>
                                <p><?php echo $event['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Upcoming Events Section -->

</main><!-- End #main -->

<!-- Isotope JS -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<!-- Events JS -->
<script src="../assets/js/events.js"></script>

<?php
include '../includes/footer.php';
include '../includes/scripts.php';
?>