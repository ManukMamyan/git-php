<?
// задание 1
$a = 5;
$b = '05';
var_dump ( $a == $b ); //true, преобразование типов, b превращается в 5
var_dump (( int ) '012345' ); // 12345, строка преобразуется в целое число
var_dump (( float ) 123.0 === ( int ) 123.0 ); //false, потому,что типы данных разные
var_dump (( int ) 0 === ( int ) 'hello, world' ); //true, строка преобразуется в целое число, в строке
//нет чисел, пэтому получаем 0
?>

<?php

$h1 = "Заголовок";
$title = "Название";
$year = date('l, F jS, Y');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <style>
        .container {
            width: 500px;
            height: 300px;
            margin: 50px auto;
            padding: 15px;
            box-sizing: border-box;
            background-color: #f2f2f2;
            border-radius: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<div class="container">
    <h1><?php echo $h1 ?></h1>
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Amet asperiores aspernatur assumenda delectus dignissimos dolorum est
        exercitationem ipsum laboriosam magni maiores minima minus molestias
        nostrum nulla officia officiis placeat porro praesentium sequi soluta,
        tenetur voluptate voluptatum. Aliquid autem corporis nemo?</span>
    <p><?php echo $year ?>.</p>
</div>
</body>
</html>