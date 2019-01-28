<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../../engine/core.php';

function routeIndex()
{
    $products = getItemArray("select * from `product` ORDER BY id DESC");

    echo render('admin/product/products', [
        'products' => $products
    ]);
}

function routeEdit() {
    $error = false;
    $id = $_GET['id'];
    $product = getItem("select * from `product` where id={$id}");

    if (isset($_POST['edit-product'])) {

        $name = htmlspecialchars($_POST['name']);
        $article = htmlspecialchars($_POST['article']);
        $price = htmlspecialchars($_POST['price']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $category = htmlspecialchars($_POST['category']);
        $description = htmlspecialchars($_POST['description']);

        if (!empty($name) && !empty($article) && !empty($price) && !empty($quantity) && !empty($category) && !empty($description)) {

            if (isset($_FILES['photo1']) && isset($_FILES['photo2']) && isset($_FILES['photo3'])) {

                if ($_FILES['photo1']['name'] == "") {
                    $photo1 = $product['photo1'];
                } else {
                    move_uploaded_file($_FILES['photo1']['tmp_name'], "../img/products/{$_FILES['photo1']['name']}");
                    $photo1 = "/img/products/{$_FILES['photo1']['name']}";
                }
                if ($_FILES['photo2']['name'] == "") {
                    $photo2 = $product['photo2'];
                } else {
                    move_uploaded_file($_FILES['photo2']['tmp_name'], "../img/products/{$_FILES['photo2']['name']}");
                    $photo2 = "/img/products/{$_FILES['photo2']['name']}";
                }
                if ($_FILES['photo1']['name'] == "") {
                    $photo3 = $product['photo3'];
                } else {
                    move_uploaded_file($_FILES['photo3']['tmp_name'], "../img/products/{$_FILES['photo3']['name']}");
                    $photo3 = "/img/products/{$_FILES['photo3']['name']}";
                }

                $sql = "UPDATE product SET 
`article`='{$article}', `name`='{$name}', `description`='{$description}', `price`='{$price}', `quantity`='{$quantity}', 
`category_id`='{$category}', `photo1`='{$photo1}', `photo2`='{$photo2}', `photo3`='{$photo3}' WHERE id='{$id}'";

                if (execute($sql)) {
                    header("Location: /admin/product.php");
                } else {
                    $error = "Ошибка запроса в БД";
                }
            } else {
                $error = "Необходимо выбрать все 3 фотографии";
            }
        } else {
            $error = "Поля не могут быть пустыми";
        }
    }

    echo render('admin/product/edit', [
        'product' => $product,
        'error' => $error,
    ]);


}

function routeDelete() {
    execute("delete from product where id = {$_GET['id']}");
    header("Location: /admin/product.php");
}

function routeAdd() {
    $error = false;

    if (isset($_POST['add-product'])) {
        $name = htmlspecialchars($_POST['name']);
        $article = htmlspecialchars($_POST['article']);
        $price = htmlspecialchars($_POST['price']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $category = htmlspecialchars($_POST['category']);
        $description = htmlspecialchars($_POST['description']);

        if (!empty($name) && !empty($article) && !empty($price) && !empty($quantity) && !empty($category) && !empty($description)) {
            if (isset($_FILES['photo1']) && isset($_FILES['photo2']) && isset($_FILES['photo3'])) {
                move_uploaded_file($_FILES['photo1']['tmp_name'], "../img/products/{$_FILES['photo1']['name']}");
                $photo1 = "/img/products/{$_FILES['photo1']['name']}";
                move_uploaded_file($_FILES['photo2']['tmp_name'], "../img/products/{$_FILES['photo2']['name']}");
                $photo2 = "/img/products/{$_FILES['photo2']['name']}";
                move_uploaded_file($_FILES['photo3']['tmp_name'], "../img/products/{$_FILES['photo3']['name']}");
                $photo3 = "/img/products/{$_FILES['photo3']['name']}";

                $sql = "INSERT INTO product (article, `name`, description, price, quantity, category_id, photo1, photo2, photo3) VALUES 
('{$article}', '{$name}', '{$description}', '{$price}', '{$quantity}', '{$category}', '{$photo1}', '{$photo2}', '{$photo3}')";

                if (execute($sql)) {
                    header("Location: /admin/product.php");
                } else {
                    $error = "Ошибка запроса в БД";
                }
            } else {
                $error = "Необходимо выбрать все 3 фотографии";
            }
        } else {
            $error = "Необходимо заполнить все поля";
        }
    }
    echo render('admin/product/add', [
        'error' => $error
    ]);
}

route();