<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../../engine/core.php';


if (!isAdmin()) header("Location: /");
echo render('admin/index');