<?php

header('Content-Type: text/html; charset=UTF-8');

$section = isset($_GET['section']) ? $_GET['section'] : 'home';

$blogPosts = [
    ['title' => 'Getting Started with PHP', 'excerpt' => 'Learn the basics of PHP scripting for the web.'],
    ['title' => 'Mastering jQuery AJAX', 'excerpt' => 'How to load content dynamically without page reloads.'],
    ['title' => 'Responsive Design Tips', 'excerpt' => 'Make your website look great on every device.'],
];

$products = [
    ['name' => 'Wireless Mouse', 'price' => '$19.99'],
    ['name' => 'Mechanical Keyboard', 'price' => '$59.99'],
    ['name' => 'USB-C Hub', 'price' => '$24.99'],
];

switch ($section) {

    case 'about':
        echo '<h2>About Us</h2>';
        echo '<p>We are a small team dedicated to building great web experiences using PHP, jQuery, and AJAX.</p>';
        break;

    case 'blog':
        echo '<h2>Latest Blog Posts</h2>';
        foreach ($blogPosts as $post) {
            echo '<div class="blog-post">';
            echo '<h3>' . htmlspecialchars($post['title']) . '</h3>';
            echo '<p>' . htmlspecialchars($post['excerpt']) . '</p>';
            echo '</div><hr>';
        }
        break;

    case 'products':
        echo '<h2>Our Products</h2>';
        echo '<ul>';
        foreach ($products as $product) {
            echo '<li>' . htmlspecialchars($product['name']) . ' - ' . htmlspecialchars($product['price']) . '</li>';
        }
        echo '</ul>';
        break;

    case 'contact':
        echo '<h2>Contact Us</h2>';
        echo '<p>Email: support@example.com<br>Phone: (123) 456-7890</p>';
        break;

    case 'home':
    default:
        echo '<h2>Welcome to our Website</h2>';
        echo '<p>This content was loaded dynamically using jQuery and AJAX, without refreshing the page.</p>';
        break;
}
?>