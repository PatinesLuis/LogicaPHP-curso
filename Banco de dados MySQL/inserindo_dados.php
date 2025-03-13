<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli ($host, $user,$pass,$db);

$table = "itens";
$nome = "xicara";
$descricao = "a xicara mais foda do mundo";

$query = "INSERT INTO $table (nome,descricao) VALUES ('$nome', '$descricao')";

$conn->query($query);

$conn->close();