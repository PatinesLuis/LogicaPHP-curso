<?php
// criam um modelo de definição de uma classe
//toda classe que implementar interface deverá implementar também suas propriedades e metodos.
interface Caracteristicas {
    public function falar();
    const nome ="matheus";
}

class Humano implements Caracteristicas{
    public $idade = 29;

    public function falar(){
        echo "olha mundo! <br>";
    }

    public function falarNome(){
        echo "meu nome é: ". self::nome;
    }
    

}

$matheus = new Humano;

$matheus ->falar();

$matheus ->falarNome();