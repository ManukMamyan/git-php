<?php

$number = 0;

do {
    if ($number == 0) {
        echo $number." – это ноль. \n";
    } else if ($number % 2) {
        echo $number." – нечетное число. \n";
    } else {
        echo $number." – четное число. \n";
    }
    $number++;
} while ($number <= 10);