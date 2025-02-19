<?php

class Humano {
    public $idade = 29;

    public function falar(){
        echo "ola mundo <br>";
    }

    //como o metodo é privado, precisa-se criar um metodo para acessa-lo
    private function gritar(){
        echo "AAAAAAAAAAAAAAA <br>";
    }
    //metodo de acesso
    public function acessarGrito(){
        $this->gritar();
    }


    protected function caminhar(){
        echo "caminhando <br>";
    }

    public function acessoCaminhar(){
        $this->caminhar();
    }
}

class Programador extends Humano{

}

$luis = new Humano;

$luis-> falar();
$luis->acessarGrito();
$luis->acessoCaminhar();

$matheus = new Programador;

echo $matheus->falar();
echo $matheus->acessarGrito();
echo $matheus->acessoCaminhar();