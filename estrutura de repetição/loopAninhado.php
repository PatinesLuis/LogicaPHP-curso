<?php

$i = 1;

while ($i <= 10) {

    echo "loop externo $i <br>";
    $i++;

    $j = 0; //segundo contador

    while ($j <= 5) {
        echo "- loop interno $j <br>";
        $j++;
    }
}