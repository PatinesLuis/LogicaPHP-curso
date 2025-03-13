<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli ($host, $user,$pass,$db);

if($conn->connect_errno){
    echo "erro: " . mysqli_connect_error();
}