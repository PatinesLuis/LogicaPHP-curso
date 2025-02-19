<?php

$data1 = new DateTime();
$data2 = new DateTime();

$data2->setDate(2002,07,03);

print_r($data1);
echo '<br>';

print_r($data2);
echo '<br>';


$diferença = $data1->diff($data2);

print_r($diferença);
echo '<br>';

echo $diferença->format("%a days");