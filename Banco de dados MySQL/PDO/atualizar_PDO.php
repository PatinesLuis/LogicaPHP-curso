<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$id = 12;
$nome = "teclado gamer sony";
$descricao = "teclado da sony colorido";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->execute();