<?php

//setDate -> recebe o ano, mês e dia, alterando completamente a data;
//setTime -> recebe hora, minuto, e segundo, alterando o tempo da data;

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(1999,12,01);

print_r($data);
echo "<br>";

$data->setTime(16,22,56);
print_r($data);
echo "<br>";