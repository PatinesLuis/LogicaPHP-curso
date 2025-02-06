<?php

function countVowels($string)
{
    $separador = str_split($string);
    $cont = 0;
    foreach ($separador as $itens) {
        if ($itens == "a" || $itens == "e" || $itens == "i" || $itens == "o" || $itens == "u") {
            $cont++;
        }
    }
    return $cont;
}

echo countVowels("lucas henrique");




