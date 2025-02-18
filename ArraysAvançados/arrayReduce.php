<?php

//tem como objetivo reduzir um array a apenas um valor

$arr = [2,2,1,5];

function soma ($a, $b){
    return $a + $b;
}

$resultado = array_reduce($arr,"soma");

echo $resultado;