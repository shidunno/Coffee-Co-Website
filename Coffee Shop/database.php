<?php 
    $server = "localhost";
    $username = "root";
    $password = "qazplm09";
    $database = "coffee_shop";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        echo "not connected";
        exit;
    }
?>