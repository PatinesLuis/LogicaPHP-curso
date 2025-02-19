<?php

//cria uma data passando de parametro hora, minuto, segundo, mes, dia e ano

//hora/minuto/segundo/mês/dia/ano

$dataNascimento = mktime(11,32,44,7,3,2002);

echo $dataNascimento . "<br>";

echo date('d/M/Y',$dataNascimento);