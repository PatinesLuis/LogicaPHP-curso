<?php
class Pessoa{

    public $idade = 22;
    public $olhos = "marrom";

    function falar(){
        echo "olha eu sou um objeto";
    }
    function somar($x, $y){
        echo $x + $y ."<br>";
    }
}


$lucas = new Pessoa;
$luis = new Pessoa;

$luis->falar();

$luis->somar(5, 10);
$lucas->somar(10,12);

echo "idade objeto " . $luis->idade;


