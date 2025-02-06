<?php

$x = 4;

while ($x <= 30) {
    echo "o x é $x <br>";
    if ($x === 24) {
        echo 'parando loop';
        break;
    }
    $x += 2;
}