<?php

include './resource/database.php';

function openImg(int $id) {

    $img = getItem('select * from `gallery` WHERE id =' . $id);

    // Кнопки _________________________________________
    $forBtn = getItemArray('select * from `gallery`');
    $nextImg = $img['id'] + 1;
    $prevImg = $img['id'] - 1;


    $views = $img['views'] + 1;

    execute("UPDATE gallery SET views=$views WHERE id=" . $id);

    echo
        "<img src='" . $img['src'] . "' alt='" . $img['name'] . "'>
    <div class='images-info'>";

    if ($prevImg < 1) {
        echo "<a class='back-btn' href='index.php'>BACK</a>";
    } else {
        echo "<a class='back-btn' href='image.php?id=" . $prevImg . "'>BACK</a>";
    }

    echo "<div><p>Name</p>" . $img['name'] . "</div>
        <div><p>Max size</p>" . $img['size'] . "</div>
        <div><a class='home-btn' href='index.php'>В Начало</a></div>
        <div><p>Format</p>" . $img['format'] . "</div>
        <div><p>Views</p>" . $img['views'] . "</div>";

    if ($nextImg > count($forBtn)) {
        echo "<a class='next-btn' href='#'>NEXT</a>";
    } else {
        echo "<a class='next-btn' href='image.php?id=" . $nextImg . "'>NEXT</a>";
    }

    echo "</div>";
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Просмотр картинки</title>
    <link rel="stylesheet" href="resource/style.css">
</head>
<body>
<div class="container">
    <div class="images-wrap">
        <?php
        openImg($_GET['id']);
        ?>
    </div>
</div>
</body>
</html>
