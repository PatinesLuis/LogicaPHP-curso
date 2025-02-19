<?php

class Humano{

}

class Animal{

}

class Professor extends Humano{

}

$marcos = new Humano;
$pedro = new Professor;

if($marcos instanceof Animal){
    echo "marcos é um humano";
}else{
    echo "marcos não é um humano";
}

echo "<br>";


if($pedro instanceof Humano){
    echo "pedro é um humano";
}else {
    echo "pedro não é um humano";
}
