<?php

class Humano {
    public $olhos = 2;
    public $maos = 2;
    private $nome;

    public function falar(){
        echo "bla bla bla";
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

}

class Professor extends Humano{
    private $materia;

    public function setMateria($m){
        $this->materia = $m;
    }

    public function getMateria(){
        echo "eu dou aula de $this->materia <br>";
    }
}

$vanessa = new Professor;

$vanessa->setNome("Vanessa");
$vanessa->setMateria("Quimica");

echo "Eu sou a professora " . $vanessa->getNome(). "<br>";
echo $vanessa->getMateria();

echo $vanessa->falar();
