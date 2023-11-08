<?php
/*
$sname = "localhost";
$uname = "root";
$password = "";
$dbName = "users1";

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if (!$conn) {
    echo "Connection Failed!";
}


$sname = "dfkpczjgmpvkugnb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$uname = "tlebx5gnlgzv2jae";
$password = "yzb3u2dvou6cmwwu";
$dbName = "i9t5zecos08o6qyz";
*/

$sname = getenv('DB_HOST');
$uname = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbName = getenv('DB_NAME');

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if (!$conn) {
    echo "Connection Failed!";
}