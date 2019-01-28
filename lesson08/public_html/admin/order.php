<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../../engine/core.php';

// Список заказов
function routeIndex()
{
    $order = getItemArray("select * from `order`");

    echo render('admin/order/order', [
        'order' => $order
    ]);
}


// Подробнее о заказе
function routeOrder() {
    $id = $_GET['id'];

    $order = getItem("select * from `order` where id={$id}");

    $orderItem = getItemArray("select * from `order_item` where order_id={$id}");
    $user = getItem("select * from `users` where id={$order['user_id']}");

    foreach ($orderItem as $productsId) {
        $products[] = getItem("select * from `product` where id={$productsId['product_id']}");
    }

    echo render('admin/order/orderitem', [
        'orderItem' => $orderItem,
        'user' => $user,
        'products' => $products
    ]);

}

function routeDelete() {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sqlOrder = "delete from `order` where id = {$id}";
        $sqlItems = "delete from `order_item` where order_id = {$id}";
        if (execute($sqlItems) && execute($sqlOrder)) {
            renderJson([
                'result' => 'OK',
                'status' => 'delete',
                'errors' => null,
            ]);
        } else {
            renderJson([
                'result' => 'ERROR',
                'errors' => [
                    'Database error'
                ],
            ]);
        }
    } else {
        renderJson([
            'result' => 'ERROR',
            'errors' => [
                'Invalid POST data'
            ],
        ]);
    }
}

route();