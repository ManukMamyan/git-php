<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// логика страницы
function mathOperation($arg1, $arg2, $operation){

    $arg1 = (int)htmlspecialchars(preg_replace("/[^0-9]/", '', $arg1));
    $arg2 = (int)htmlspecialchars(preg_replace("/[^0-9]/", '', $arg2));

    switch ($operation) {
        case 'sum':
            $result = $arg1 + $arg2;
            break;
        case 'diff':
            $result = $arg1 - $arg2;
            break;
        case 'multipl':
            $result = $arg1 * $arg2;
            break;
        case 'div':
            if ($arg2 == 0) {
                $result = 'На ноль делить нельзя';
                break;
            }
            $result = $arg1 / $arg2;
            break;
    }
    return $result;
}

if (isset($_GET['btn'])) {
    if (isset($_POST['operation']) && isset($_POST['first-number']) && isset($_POST['second-number'])) {
        $result = mathOperation($_POST['first-number'], $_POST['second-number'], $_POST['operation']);
    } else {
        $result = 'Заполните все поля';
    }
    echo render('calculator/buttons', [
        'result' => $result,
    ]);
}

if (isset($_GET['select'])) {
    if (isset($_POST['operation']) && isset($_POST['first-number']) && isset($_POST['second-number'])) {
        $result = mathOperation($_POST['first-number'], $_POST['second-number'], $_POST['operation']);
    } else {
        $result = 'Заполните все поля';
    }
    echo render('calculator/select', [
        'result' => $result,
    ]);
}
