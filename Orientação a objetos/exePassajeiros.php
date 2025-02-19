<?php

class Passenger {
    public $nome;
    public $age;
    public $seatNumber;

    public function getName(){
        return $nome;
    }

    public function getAge(){
        return $age;
    }

    public function getSeatNumber(){
        return $seatNumber;
    }

    public function setSeatNumber($seatNumber){
        return $this->seatNumber = $seatNumber;
    }

}