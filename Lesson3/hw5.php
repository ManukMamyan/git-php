<?php

function replace(string $a) {
    return str_replace(' ', '_', $a);
}

echo replace('Клара у карла украла макларен');