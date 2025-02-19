<?php

//permite tratar datas como um objeto

$data = new DateTime();

print_r($data);
echo "<br>";

//format formata a data
//modify altera a data
echo $data->format('d/m/y') . "<br>";

//data - 10 dias
$data->modify("-10 days");
echo $data->format('d/m/y') . "<br>";

