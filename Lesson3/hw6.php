<?

$menu_arr = array(
    "Главная",
    "Бытовая техника" => array("Стиральные и сушильные машины","Климатическая техника","Пылесосы","Аксессуары для дома"),
    "Электроника" => array("Телевизоры","Мониторы","Спутниковое/цифровое ТВ","Аудио и DJ","Аксессуары"),
    "Доставка",
    "Контакты",
    "Скидки"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Меню PHP</title>
</head>
<body>
<div class="menu">
    <ul>
        <? foreach($menu_arr as $key=>$value):  ?>
            <? if(is_array($value)): ?>
                <li><?=$key;?>
                    <ul>
                        <? foreach($value as $val): ?>
                            <li><?=$val;?></li>
                        <? endforeach; ?>
                    </ul>
                </li>
            <? else: ?>
                <li><?=$value;?></li>
            <? endif; ?>
        <? endforeach; ?>
    </ul>
</div>
</body>
</html>