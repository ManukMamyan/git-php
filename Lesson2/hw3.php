<?php

function sum(int $a, int $b){
    return $a + $b;
}

function diff(int $a, int $b){
    return $a - $b;
}

function multipl(int $a, int $b){
    return $a * $b;
}

function div(int $a, int $b){
    return $a / $b;
}

echo sum(3, 5); // 8
echo diff(7, 2); // 5
echo multipl(6, 4); // 24
echo div(20, 5); // 4