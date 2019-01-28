<?php

// поключаем конфигурации приложения
require '../engine/core.php';

// выводим список (БД)
function routeIndex()
{
    $items = getItemArray("select * from reviews ORDER BY id DESC");

    echo render('reviews/list', [
        'items' => $items,
    ]);
}

// добавить новый (POST form)
// ?action=add => routeAdd
function routeAdd()
{
    if (!isLoggedUser()) header("Location: /reviews.php");

    $error = false;

    if (isset($_POST['add_comment'])) {
        $name = $_SESSION['auth']['name'];
        $email = $_SESSION['auth']['email'];
        $content = htmlspecialchars($_POST['content']);

        if (!empty($content)) {

            $sql = "INSERT INTO reviews (user_name, email, content) VALUES ('{$name}', '{$email}', '{$content}')";

            if (execute($sql)) {
                header("Location: /reviews.php");
            } else {
                $error = 'Что-то пошло не так!';
            }
        } else {
            $error = 'Нельзя оставить пустой отзыв';
        }
    }
    echo render('reviews/add', [
        'error' => $error,
    ]);
}

// удалить (GET button)
function routeDelete()
{
    if (!isAdmin()) {
        header("Location: /reviews.php");
    } else {
        $id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;

        if ($id) {
            $sql = "delete from reviews where id = {$id}";
            execute($sql);
        }

        header("Location: /reviews.php");
    }
}

// запуск маршрутизации
route();