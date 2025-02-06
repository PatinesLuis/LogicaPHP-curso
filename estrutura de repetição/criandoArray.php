<?php
$array = [];
for ($i = 1; $i <= 10; $i++) {

    array_push($array, $i);
}

print_r($array);

$arr = []; // Inicializa o array vazio

// Preenche o array com números de 0 a 10
for ($i = 0; $i <= 10; $i++) {
    array_push($arr, $i);
}

// Itera pelo array e imprime apenas os números ímpares
foreach ($arr as $num) {
    if ($num % 2 == 1) {
        echo $num . "<br>";
    }
}