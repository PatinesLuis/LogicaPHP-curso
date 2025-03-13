<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli ($host, $user,$pass,$db);

$nome = "SUPORTE DE MICROFONE";
$descricao = "suporte com o material resistente";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");
$stmt->bind_param("ss",$nome,$descricao); //S = STRING - I = INTEGER - D = DOUBLE

$stmt->execute();