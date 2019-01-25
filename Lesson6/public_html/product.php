<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// логика страницы
if (isset($_GET['id'])) {
    $product = getItem('select * from `products` WHERE id ='.$_GET['id']);

    echo render('site/singepage', [
        'product' => $product
    ]);
} else {
    $products = getItemArray('select * from `products` ORDER BY id DESC');

    echo render('site/products', [
        'products' => $products
    ]);
}

