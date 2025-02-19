<?php
//permitem o reuso de código sem hierarquia de classes, sem herança

trait Objeto{
    
    public function teste(){
        echo "testando";
    }
}

class Central{

    use Objeto;
    // pode utilizar varias traits, outras classes trait
}

$x = new Central;

$x->teste();