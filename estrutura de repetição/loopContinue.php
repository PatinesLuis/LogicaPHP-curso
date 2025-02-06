<?php

$a = 10;

while ($a > 0) {

    if ($a == 5 || $a == 7) {
        echo "pulou a execução $a <br>";
        $a--;
        continue;
    }

    if ($a == 3) {
        break;
    }
    echo "Executando o loop $a <br>";

    $a--;
}