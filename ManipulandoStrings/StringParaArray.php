<?php

$frase = "testando frase para Array";


$array = explode(" ", $frase); 
// convertente string para array

print_r($array);
echo "<br>";

//convertendo array para string

$arr = ["maça", "pera", "batata"];

$str = implode(", ", $arr);

echo $str;