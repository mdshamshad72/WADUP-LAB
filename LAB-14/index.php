<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dynamic Navigation Menu - AJAX Demo</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
    nav { background: #2c3e50; padding: 10px; }
    nav ul { list-style: none; margin: 0; padding: 0; display: flex; }
    nav ul li { margin-right: 20px; }
    nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
        cursor: pointer;
        border-radius: 4px;
        transition: background 0.3s;
    }
    nav ul li a:hover, nav ul li a.active {
        background: #1abc9c;
    }
    #content {
        padding: 30px;
        min-height: 300px;
    }
    #loading {
        display: none;
        color: #888;
        font-style: italic;
    }
</style>
</head>
<body>

<nav>
    <ul id="nav-menu">
        <li><a href="#" class="nav-link active" data-section="home">Home</a></li>
        <li><a href="#" class="nav-link" data-section="about">About</a></li>
        <li><a href="#" class="nav-link" data-section="blog">Blog Posts</a></li>
        <li><a href="#" class="nav-link" data-section="products">Products</a></li>
        <li><a href="#" class="nav-link" data-section="contact">Contact</a></li>
    </ul>
</nav>

<p id="loading">Loading...</p>
<div id="content">
    <h2>Welcome to our Website</h2>
    <p>Click a menu item above to load content dynamically without refreshing the page.</p>
</div>

<script>
$(document).ready(function() {

    $('.nav-link').on('click', function(e) {
        e.preventDefault();

        // Highlight active menu item
        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        var section = $(this).data('section');

        // Show loading indicator
        $('#loading').show();
        $('#content').fadeOut(100);

        // AJAX request to fetch section content from server
        $.ajax({
            url: 'load_content.php',
            type: 'GET',
            data: { section: section },
            dataType: 'html',
            success: function(response) {
                $('#content').html(response).fadeIn(300);
            },
            error: function(xhr, status, error) {
                $('#content').html('<p>Sorry, something went wrong loading this section.</p>').fadeIn(300);
            },
            complete: function() {
                $('#loading').hide();
            }
        });
    });

});
</script>

</body>
</html>
