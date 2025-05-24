<?php
// Start the session
session_start();

// Get the requested page from the URL, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define the allowed pages
$allowed_pages = ['home', 'education', 'forum', 'support', 'report'];

// Check if the requested page is allowed
if (!in_array($page, $allowed_pages)) {
    $page = 'home'; // Default to home if the page is not allowed
}

// Include the header
include 'header.php';

// Include the requested page
include $page . '.php';

// Include the footer
include 'footer.php';
?>
