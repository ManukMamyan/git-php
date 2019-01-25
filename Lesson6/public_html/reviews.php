<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// логика страницы

if (isset($_GET['add'])) {
    if (isset($_POST['name']) && isset($_POST['review'])) {
        $userName = strip_tags(htmlspecialchars($_POST['name']));
        $userEmail = strip_tags(htmlspecialchars($_POST['email']));
        $userReview = strip_tags(htmlspecialchars($_POST['review']));

        if (strlen($userName) == 0 && strlen($userReview) == 0) {
            $error = "Заполните все обязательные поля!";
            echo render('reviews/add', [
                'error' => $error
            ]);
        } else {
            $sql = "INSERT INTO reviews (user_name, user_email, user_review) VALUES ('{$userName}', '{$userEmail}', '{$userReview}')";
            if (execute($sql)) {
                $reviews = getItemArray('select * from `reviews` ORDER BY id DESC');
                echo render('reviews/view', [
                    'reviews' => $reviews
                ]);
            } else {
                $error = "Ошибка Базы данных!";
                echo render('reviews/add', [
                    'error' => $error
                ]);
            }
        }
    } else {
        $error = "";
        echo render('reviews/add', [
            'error' => $error
        ]);
    }
}

if (isset($_GET['view'])) {
    $reviews = getItemArray('select * from `reviews` ORDER BY id DESC');
    echo render('reviews/view', [
        'reviews' => $reviews
    ]);
}

