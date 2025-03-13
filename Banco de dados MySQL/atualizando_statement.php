<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli ($host, $user,$pass,$db);

$id = 11;
$nome = "microfone profissinal";
$descricao = "microfone da multilazer";

$stmt = $conn->prepare("UPDATE itens SET nome = ?,descricao = ? WHERE id = ?");
$stmt->bind_param("ssi",$nome,$descricao,$id);
$stmt->execute();

if($stmt->error){
    echo "erro na executação";
}else{
    echo 'DADOS ATUALIZADOS';
}

$conn->close();

