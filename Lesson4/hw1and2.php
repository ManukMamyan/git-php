<?php

function gallery($dir)
{
    $img = scandir($dir);
    foreach ($img as $image) {
        $src = "$dir/$image";
        if (!is_dir($src)){
            echo "<a target='_blank' href='$src'><img src='$src'></a>";
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
</body>
</html>
