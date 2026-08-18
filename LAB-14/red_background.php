<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>jQuery - Set Background Color to Red</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<style>
    body { font-family: Arial, sans-serif; padding: 30px; }
    p, h1, h2, button { padding: 8px; margin: 10px 0; }
</style>
</head>
<body>

<h1 id="main-heading">This is a Heading</h1>
<h2 class="sub-heading">This is a Sub-heading</h2>

<p class="text">This is the first paragraph.</p>
<p class="text">This is the second paragraph.</p>

<button id="action-btn">Click Me</button>
<button class="action-btn">Another Button</button>

<br><br>
<button id="trigger">Turn Elements Red</button>

<script>
$(document).ready(function() {

    $('#trigger').on('click', function() {
        $('#main-heading, .sub-heading, .text, #action-btn, .action-btn')
            .css('background-color', 'red');
    });

});
</script>

</body>
</html>