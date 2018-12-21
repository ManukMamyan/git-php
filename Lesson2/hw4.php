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

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum':
            return sum($arg1, $arg2);
            break;
        case 'diff':
            return diff($arg1, $arg2);
            break;
        case 'multipl':
            return multipl($arg1, $arg2);
            break;
        case 'div':
            return div($arg1, $arg2);
            break;
    }
}

echo mathOperation(5, 3, 'sum'); // 8
echo mathOperation(7, 2, 'diff'); // 5
echo mathOperation(3, 4, 'multipl'); // 12
echo mathOperation(15, 5, 'div'); // 3