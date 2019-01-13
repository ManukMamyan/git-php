<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    'root',
    'gallery'
);

function getItem(string $sql) {
    global $connection;
    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getItemArray(string $sql) {
    global $connection;
    $result = mysqli_query($connection, $sql);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function execute(string $sql) {
    global $connection;
    $result = mysqli_query($connection, $sql);

    return $result;
}
