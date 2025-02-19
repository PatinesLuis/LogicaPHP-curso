<?php

//classes abstratas não podem ser instanciadas.

abstract class Teste{

    public static function testando(){
        echo "metodo de uma classe abstrata <br>";
    }
}

//t = new Teste;

teste::testando();