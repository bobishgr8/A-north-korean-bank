<?php
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : ''; // Get the routed URL
var_dump($url);
switch ($url) {
    case '':
        // Home page logic
        include 'index.html';
        break;

    case 'signup':
        // About page logic
        include 'signup.html';
        break;

    case 'about':
        // About page logic
        include 'about.html';
        break;
    
    case 'about':
        // About page logic
        include 'about.html';
        break;

    // Add more cases for additional routes

    default:
        // Handle 404 - page not found
        header('HTTP/1.0 404 Not Found');
        echo '404 - Page not found';
        break;
}
?>
