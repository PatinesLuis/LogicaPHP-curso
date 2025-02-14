<?php

$arra = [
    [1,2,3],
    [4,5,6]
];

print_r($arra). "<br>";

echo "<br>" . $arra[1][1];
echo "<br> <br>";

$mult = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
];

//loop no array externo
for ($i = 0; $i<count($mult); $i++){

    //imprimento array
    echo "imprimindo array externo ". ($i + 1). "<br>"; 

    //imprimindo array interno
    for($j = 0; $j <count($mult[$i]); $j++){
        echo $mult[$i][$j]. "<br>";
    }
}