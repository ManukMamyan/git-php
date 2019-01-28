<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// логика страницы

function product() {
    $products = getItemArray('select * from `products` ORDER BY id DESC');

    echo render('products/products', [
        'products' => $products
    ]);
}

function singepage() {
    $product = getItem('select * from `products` WHERE id ='.$_GET['id']);

    echo render('products/singepage', [
        'product' => $product
    ]);
}


function addToCart() {
    $_SESSION['cart'][$_GET['id']]['id_product'] = $_GET['id'];
    header("Location: /product.php?action=cart");
}

function renderCart() {

    $products = [];

    $product = [];

    foreach ($_SESSION['cart'] as $cart => $prod) {
            $products[] = $prod;
    }

    foreach ($products as $row) {
        $product[] = getItem('select * from `products` WHERE id ='.$row['id_product']);
    }

    echo render('products/cart', [
        'product' => $product
    ]);
}

function deleteCart() {

    if (isset($_SESSION['cart'][$_GET['id']])) {
        unset($_SESSION['cart'][$_GET['id']]);
    } else {
        $_SESSION['cart'] = [];
    }
    header("Location: /product.php?action=cart");
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'product';
}


switch ($action) {
    case 'cart':
        renderCart();
        break;
    case 'singepage':
        singepage();
        break;
    case 'add':
        addToCart();
        break;
    case 'deletecart':
        deleteCart();
        break;
    case 'product':
        product();
        break;
    default:
        header("Location: /");
}
