<?php

$arr = [5,2,8,22,99,35,96,13];

sort($arr);

print_r($arr);

echo "<br>";

rsort($arr);
print_r($arr);

echo "<br>";

$ranking = [
    "matheus" => 33,
    "Luis" => 95,
    "jessica" => 5,
    "pedro" => 23,
    "lucas" => 76
];

arsort($ranking);

foreach($ranking as $pessoas => $pontos){
    echo "<ol> <li>$pessoas => $pontos </li></ol><br>";
}
