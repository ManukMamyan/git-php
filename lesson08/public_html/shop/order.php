<?php

// поключаем конфигурации приложения
require '../../engine/core.php';


function routeIndex()
{
    $id = $_SESSION['auth']['id'];

    $order = getItemArray("select * from `order` where user_id={$id}");

    if ($order) {
        foreach ($order as $val) {
            $orderItem[] = getItem("select * from `order_item` where order_id={$val['id']}");
        }

        foreach ($orderItem as $productsId) {
            $products[] = getItem("select * from `product` where id={$productsId['product_id']}");
        }

        echo render('shop/order', [
            'order' => $order,
            'orderItem' => $orderItem,
            'products' => $products,
        ]);
    } else {
        header("Location: /");
    }

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