<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// страница с формой входа

function login() {

    if (isLoggedUser()) {
        header("Location: /user.php?action=home");
    }

    $error = false;


    if (isset($_POST['login_btn'])) {

        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);

        if (!empty($login) && !empty($password)) {

            $checkUser = getItem("SELECT * FROM users WHERE login='{$login}'");

            if ($checkUser['password'] == $password) {
                if (isset($_POST['remember'])) {
                    loginUser($login, $checkUser['user_group'], true);
                } else {
                    loginUser($login, $checkUser['user_group']);
                }
                header("Location: /user.php?action=home");
            } else {
                $error = 'Неверный логин или пароль';
            }
        } else {
            $error = 'Заполните все поля.';
        }
    }

    echo render('user/login', [
        'error' => $error
    ]);
}

function register() {
    $error = false;

    if (isset($_POST['register_btn'])) {
        $name = htmlspecialchars($_POST['name']);
        $login = htmlspecialchars($_POST['login']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (!empty($name) && !empty($login) && !empty($email) && !empty($password)) {

            $checkUser = getItem("SELECT * FROM users WHERE login='{$login}'");

            if ($checkUser['login'] == $login) {
                $error = "Логин уже занят";
            } else {

                $sql = "INSERT INTO users (user_name, login, email, password, user_group) VALUES ('{$name}', '{$login}', '{$email}', '{$password}', '1')";

                if (execute($sql)) {
                    if (isset($_POST['remember'])) {
                        loginUser($login, true);
                    } else {
                        loginUser($login);
                    }
                    header("Location: /user.php?action=home");
                } else {
                    $error = "Ошибка регистрации...";
                }
            }
        } else {
            $error = "Заполните все поля";
        }
    }

    echo render('user/register', [
        'error' => $error
    ]);
}

function home() {
    $user = getItem("SELECT * FROM users WHERE login='{$_SESSION['auth']['login']}'");
    echo render('user/home', [
        'user' => $user
    ]);
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

switch ($action) {
    case 'login':
        login();
        break;
    case 'logout':
        logoutUser();
        break;
    case 'register':
        register();
        break;
    case 'home':
        home();
        break;
    default:
        header("Location: /");
}