<?php
//classes
class Humano {
    public $idade;
    public $profissão;

    public function falar(){
        echo "ola";
    }
}

if(class_exists("Humano")){
    echo "classe existe<br>";
}else{
    echo "A classe não existe";
}

print_r(get_class_vars("Humano"));
echo "<br>";
//objetos

$Luis = new Humano;

if(is_object($Luis)){
    echo "é um objeto <br>";
}

echo get_class($Luis);
