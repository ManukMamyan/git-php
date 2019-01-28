<?php

// поключаем конфигурации приложения
require '../engine/core.php';

function routeIndex()
{
    // перехват стандартного действия
    routeLogin();
}

// страница с формой входа
function routeLogin()
{
    // редирект если уже авторизован
    if (isLoggedUser()) {
        header("Location: /user.php?action=home");
    }

    $error = false;

    // проверка данных из формы
    if (isset($_POST['login_btn'])) {

        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);

        if (!empty($login) && !empty($password)) {

            $user = getItem("select * from users where login='{$login}'");

            if ($user != false) {
                if (password_verify($password, $user['password'])) {
                    if (isset($_POST['remember'])) {
                        loginUser($login, true);
                    } else {
                        loginUser($login);
                    }

                    header("Location: /user.php?action=home");
                } else {
                    $error = 'Неверный логин или пароль';
                }
            } else {
                $error = 'Пользователь не найден';
            }
        } else {
            $error = 'Заполните все поля.';
        }

    }

    echo render('user/login', [
        'error' => $error
    ]);
}

function routeLogout()
{
    logoutUser();
}

function routeHome()
{
    $user = getItem("SELECT * FROM users WHERE id='{$_SESSION['auth']['id']}'");
    echo render('user/home', [
        'user' => $user
    ]);
}

function routeRegister()
{
    $error = false;

    // грузим из POST
    if (isset($_POST['register_btn'])) {
        $name = htmlspecialchars($_POST['name']);
        $login = htmlspecialchars($_POST['login']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (!empty($name) && !empty($login) && !empty($email) && !empty($password)) {

            $checkUser = getItem("SELECT * FROM users WHERE login='{$login}'");

            if ($checkUser['login'] != $login) {

                // хешируем пароль
                $password = password_hash($password, PASSWORD_DEFAULT);

                // готовим запрос SQL
                $sql = "INSERT INTO users (user_name, login, email, password) VALUES ('{$name}', '{$login}', '{$email}', '{$password}')";

                if (execute($sql)) {
                    // авторизуем
                    loginUser($login, true);
                    header("Location: /user.php?action=home");
                } else {
                    $error = "Ошибка регистрации";
                }
            } else {
                $error = "Логин уже занят";
            }
        } else {
            $error = "Заполните все поля";
        }
    }

    echo render('user/register', [
        'error' => $error
    ]);
}

route();