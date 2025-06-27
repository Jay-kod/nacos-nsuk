<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <?php include '../includes/head.php'; ?>
    <title>Gallery - NACOS</title>
    <link rel="stylesheet" href="../assets/css/gallery_page.css?v=1.1">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <div class="gallery-hero">
        <div class="gallery-hero-content">
            <h1>NACOS Gallery</h1>
            <p>Explore our memorable moments and events</p>
        </div>
    </div>

    <main class="gallery-container">
        <div class="gallery-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="events">Events</button>
            <button class="filter-btn" data-filter="hackathons">Hackathons</button>
        </div>

        <div class="gallery-grid">
            <?php
            $gallery = [
                // Events
                ['src' => '../assets/images/gallery_page/event_g1.jpg', 'title' => 'Annual Tech Conference', 'desc' => 'October 2022', 'category' => 'events', 'hover_desc' => 'Our biggest tech conference of the year.'],
                ['src' => '../assets/images/gallery_page/event_g2.jpg', 'title' => 'Tech Summit 2023', 'desc' => 'March 2023', 'category' => 'events', 'hover_desc' => 'A summit exploring the future of technology.'],
                ['src' => '../assets/images/gallery_page/event_g3.jpg', 'title' => 'NACOS Awards Night', 'desc' => 'December 2022', 'category' => 'events', 'hover_desc' => 'Celebrating the achievements of our members.'],
                ['src' => '../assets/images/gallery_page/event_g4.jpg', 'title' => 'Freshers Orientation', 'desc' => 'September 2023', 'category' => 'events', 'hover_desc' => 'Welcoming the new students to the department.'],
                ['src' => '../assets/images/gallery_page/event_g5.jpg', 'title' => 'Alumni Networking', 'desc' => 'June 2023', 'category' => 'events', 'hover_desc' => 'Connecting current students with our alumni.'],
                ['src' => '../assets/images/gallery_page/event_g6.jpg', 'title' => 'Dinner with Executives', 'desc' => 'July 2023', 'category' => 'events', 'hover_desc' => 'An evening with the NACOS executives.'],
                ['src' => '../assets/images/gallery_page/event_g7.jpg', 'title' => 'Final Year Send-off', 'desc' => 'August 2023', 'category' => 'events', 'hover_desc' => 'Bidding farewell to our graduating students.'],
                ['src' => '../assets/images/gallery_page/event_g8.jpg', 'title' => 'Games Festival', 'desc' => 'May 2023', 'category' => 'events', 'hover_desc' => 'A day of fun and games for all members.'],

                // Hackathons
                ['src' => '../assets/images/gallery_page/hack_g1.jpg', 'title' => 'HackaNACOS 2022', 'desc' => 'November 2022', 'category' => 'hackathons', 'hover_desc' => '24-hour hackathon focused on solving real-world problems.'],
                ['src' => '../assets/images/gallery_page/hack_g2.jpg', 'title' => 'Code Sprint', 'desc' => 'February 2023', 'category' => 'hackathons', 'hover_desc' => 'A competitive coding event.'],
                ['src' => '../assets/images/gallery_page/hack_g3.jpg', 'title' => 'AI Challenge', 'desc' => 'April 2023', 'category' => 'hackathons', 'hover_desc' => 'Building innovative solutions with AI.'],
                ['src' => '../assets/images/gallery_page/hack_g4.jpg', 'title' => 'Design-a-thon', 'desc' => 'January 2023', 'category' => 'hackathons', 'hover_desc' => 'A design competition for UI/UX enthusiasts.'],
                ['src' => '../assets/images/gallery_page/hack_g5.jpg', 'title' => 'Capture The Flag', 'desc' => 'October 2023', 'category' => 'hackathons', 'hover_desc' => 'A cybersecurity competition.'],
                ['src' => '../assets/images/gallery_page/hack_g6.jpg', 'title' => 'Game Jam', 'desc' => 'July 2022', 'category' => 'hackathons', 'hover_desc' => 'Creating a game from scratch in 48 hours.'],
                ['src' => '../assets/images/gallery_page/hack_g7.jpg', 'title' => 'Mobile App Contest', 'desc' => 'September 2022', 'category' => 'hackathons', 'hover_desc' => 'Developing innovative mobile applications.'],
                ['src' => '../assets/images/gallery_page/hack_g8.jpg', 'title' => 'Web Dev Challenge', 'desc' => 'May 2022', 'category' => 'hackathons', 'hover_desc' => 'A challenge for aspiring web developers.'],
            ];

            foreach ($gallery as $item) {
                echo '<figure class="gallery-item" data-category="' . $item['category'] . '">';
                echo '<img class="gallery-img" src="' . $item['src'] . '" alt="' . htmlspecialchars($item['title']) . '">';
                echo '<div class="gallery-hover-desc">';
                echo '<h4>' . htmlspecialchars($item['title']) . '</h4>';
                echo '<p>' . htmlspecialchars($item['hover_desc']) . '</p>';
                echo '<p><small>' . htmlspecialchars($item['desc']) . '</small></p>';
                echo '</div>';
                echo '<figcaption class="gallery-caption">';
                echo '<h3>' . htmlspecialchars($item['title']) . '</h3>';
                echo '<p>' . htmlspecialchars($item['desc']) . '</p>';
                echo '</figcaption>';
                echo '</figure>';
            }
            ?>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Set active class on button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const filter = button.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') === filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>