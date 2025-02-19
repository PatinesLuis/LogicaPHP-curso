<?php
//recebe uma string como parametro, um texto sinalizando o tempo;
//a função tenta interpretar e transformar em data;

$data = strtotime("5 days");

echo $data . "<br>";


$dataAtual = date('d/m/y', $data);

echo "$dataAtual <br>";

$doisMeses = strtotime("2 months");

echo date('d/m/y', $doisMeses);
