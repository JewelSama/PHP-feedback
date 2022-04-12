<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'Flabagasted');
    define('DB_NAME', 'php_dev');

    //Create connection

$conn = new mysqli('localhost', 'jewel', 'Flabagasted', 'php_dev');

//Check connection
if($conn->connect_error){
    die('Connection Failed ' . $conn->connect_error);
}
