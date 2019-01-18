<?php

include './resource/database.php';

$img = execute('select * from `gallery` ORDER BY views DESC');

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="resource/style.css">
</head>
<body>
<p class="logo"><img src="./img/logo/logo.png" alt="logo"></p>
<div class="container">
    <?php
    while ($row = mysqli_fetch_assoc($img)) {
        echo "
            <a href='image.php?id=" . $row['id'] . "'>
                <img class='gal-images'
                src='" . $row['src'] . "' 
                alt='" . $row['name'] . "'/> 
            </a> ";}
    ?>
</div>

</body>
</html>
