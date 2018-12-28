<?php

function sayTime(){
    date_default_timezone_set('Europe/Moscow');

    $dateFormat = date('a');
    $dateHour = date('h');
    $dateMin = date('i');

    if ($dateFormat == 'pm') {
        $dateHour += 12;
    }

 echo "$dateHour ".correctWord($dateHour, 'часов', 'часа', 'час').
     " $dateMin ".correctWord($dateMin, 'минут', 'минуты', 'минута');
}

function correctWord($date, $word1, $word2, $word3) {

    $dateLastDigit = $date % 10;

    if ($date >= 5 && $date <= 20) {
        return $word1;
    } else if ($dateLastDigit > 1 && $dateLastDigit < 5) {
        return $word2;
    } else if ($dateLastDigit == 1) {
        return $word3;
    } else {
        return $word1;
    }
}

sayTime();