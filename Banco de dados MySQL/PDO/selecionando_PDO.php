<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$id = 11;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = :id");
$stmt->bindparam(":id",$id);
$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC); //fetchall retorna mais de um item

print_r($data);
