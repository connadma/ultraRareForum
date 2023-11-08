<?php

$sname = getenv('DB_HOST');
$uname = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbName = getenv('DB_NAME');

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if (!$conn) {
    echo "Connection Failed!";
}