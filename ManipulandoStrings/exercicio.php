<?php

$string = "o rato roeu a roupa do rei de roma";
$cont = 0;
for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] == "a") {
        $cont++;
    }
}

echo $cont;