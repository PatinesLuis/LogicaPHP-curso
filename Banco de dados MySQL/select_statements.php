<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli ($host, $user,$pass,$db);

$id = 4;

//retornando todos itens após o id 4
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i",$id); //S = STRING - I = INTEGER - D = DOUBLE 

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);

echo "<br><br><br>";

$novoID = 6;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
$stmt->bind_param("i",$novoID); //S = STRING - I = INTEGER - D = DOUBLE 
$stmt->execute();
$result = $stmt->get_result();

$item = $result->fetch_row();
print_r($item);

$conn->close();



