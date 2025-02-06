<?php

function parImpar($var)
{
    if ($var % 2 == 0) {
        echo "par";
    } else {
        echo "impar";
    }
}

parImpar(10);