<?php

//se refere a instancia atual do objeto
//podendo alterar um valor de uma propriedade do objeto (tradução this = este)

class Animal{
    public $nome;

    function escolherNome($n){
        $this->nome = $n;
    }

    function latir(){
        return "au au";
    }

    //chamando outra função com a propriedade this
    function latirForte(){
        return strtoupper($this->latir());
    }
}




$cachorro = new Animal;

$cachorro->escolherNome("Savitar");

echo "O nome do cachorro é: $cachorro->nome <br>";
echo $cachorro->latirForte();