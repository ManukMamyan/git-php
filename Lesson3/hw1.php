<?php

$number = 0;

while ($number < 100) {
    if ($number % 3 == 0 && $number != 0) echo $number ."\n";
    $number++;
}