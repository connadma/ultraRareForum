<?php

$sname = "localhost";
$uname = "root";
$password = "";
$dbName = "users1";

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if (!$conn) {
    echo "Connection Failed!";
}
