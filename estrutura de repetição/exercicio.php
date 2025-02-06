<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = 0;

while ($i < count($arr)) {
    $numero = $arr[$i];

    if ($numero == 30 || $numero == 40) {
        $i++;
        continue;

    }
    echo "elemento: $numero <br>";
    $i++;
}
