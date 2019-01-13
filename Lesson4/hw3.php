<?php

function gallery($dir)
{
    $img = scandir($dir);
    foreach ($img as $image) {
        $src = "$dir/$image";
        if (!is_dir($src)) {
            echo "<img class='gal-images' src='$src'>";
        }
    }
}

?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<html>
<body>
<div class="container">

    <?php gallery('./img'); ?>

</div>
<div class="wrap">
    <div id="modal_form">
        <div id="nav-btn"></div>
        <div id="gallery_img"></div>
    </div>
    <div id="overlay"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>