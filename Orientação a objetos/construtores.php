<?php
//pelos construtores podemos inicializar objetos com valores de propriedades únicos para cada objeto

class Carro{
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor,$marca){
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }

}

$ferrari = new Carro(4,"azul","ferrari");

echo "o carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";