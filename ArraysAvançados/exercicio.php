<?php

//crie um array com compact com variaveis

$nome = 'lobo';
$tipo = 'cachorro';
$patas = 4;

$animal = compact('nome', 'tipo','patas');

foreach($animal as $animals){
    echo "$animals <br>";
}