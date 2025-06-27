<?php
session_start();

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');      // Default XAMPP username
define('DB_PASS', '');         // Default XAMPP password (empty)

// Base URL configuration
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/nacos_1');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set timezone
date_default_timezone_set('Africa/Lagos');  // Change to your timezone

// Site Name
define('SITE_NAME', 'NACOS NSUK');

// Site Statistics
define('SITE_STATS', [
    [
        'icon' => 'fas fa-graduation-cap',
        'number' => 5000,
        'label' => 'Graduates'
    ],
    [
        'icon' => 'fas fa-trophy',
        'number' => 120,
        'label' => 'Awards Won'
    ],
    [
        'icon' => 'fas fa-handshake',
        'number' => 85,
        'label' => 'Industry Partners'
    ]
]);

// Upcoming Events
define('UPCOMING_EVENTS', [
    [
        'title' => 'NACOS Final Year Student Week',
        'date' => 'July 15-20, 2023',
        'description' => 'Special events and celebrations for our graduating members.',
        'image' => 'coming_soon1.jpeg'
    ],
    [
        'title' => 'Tech Innovation Hackathon',
        'date' => 'August 5-7, 2023',
        'description' => 'A competitive hackathon focusing on innovative tech solutions.',
        'image' => 'coming_soon2.jpeg'
    ]
]);

// Site Events
define('SITE_EVENTS', [
    [
        'title' => 'NACOS Week 2023',
        'category' => 'NACOS Week',
        'filter' => 'filter-nacos-week',
        'date' => 'August 14-19, 2023',
        'image' => 'nacos_week1.jpg',
        'description' => 'A week-long series of events including workshops, competitions, and social gatherings for all members.',
        'link' => '#'
    ],
    [
        'title' => 'AI & Robotics Hackathon',
        'category' => 'Hackathon',
        'filter' => 'filter-hackathon',
        'date' => 'September 22-24, 2023',
        'image' => 'hacks_1.jpg',
        'description' => 'A 3-day hackathon focused on creating innovative solutions using AI and robotics.',
        'link' => '#'
    ]
]);
?>