<?php

//crie um array com compact com variaveis

$nome = 'lobo';
$tipo = 'cachorro';
$patas = 4;

$animal = compact('nome', 'tipo','patas');

foreach($animal as $animals){
    echo "$animals <br>";
}

//Escreva uma função chamada soma Elementos que recebe um array de números como parâmetro.A função deve retornar a soma de todos os elementos do array.

$arr = [5,5,5,3];

function somaElementos($arr){
    return array_sum($arr);
}

echo somaElementos($arr) ."<br>";

//Escreva uma função chamada maiorElemento que recebe um array de números como parâmetro.

$num = [15,12,22,9,2];

function maiorElemento($dado){
    return max($dado);
}

echo maiorElemento($num);