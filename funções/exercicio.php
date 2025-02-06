<?php

$array = [2, 6, 8, 99, 5, 33, 8];

function maiorQueSete($array)
{

    foreach ($array as $itens) {
        if ($itens > 7) {
            echo $itens . "<br>";
        }
    }
}

maiorQueSete($array);