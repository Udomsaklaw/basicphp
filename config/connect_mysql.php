<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "phpbasicdb";

//connect Databse
$connect = mysqli_connect($host, $user, $pass, $dbname);

//เข้าหรัส utf-8
mysqli_set_charset($connect, 'utf8');

//Check connect Database
if ($connect) {
    //echo "connect database success";
} else {
    echo "connect database fail!!";
}
