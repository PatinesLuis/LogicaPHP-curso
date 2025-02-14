<?php

//cria array a partir de variáveis

$marca = "mbw";
$motor = 3.0;
$tetosolar = true;
$porta = 2;

$carro = compact('marca', 'motor', 'tetosolar', 'porta');

print_r($carro);