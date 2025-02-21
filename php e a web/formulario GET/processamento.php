<?php

print_r($_GET);
echo '<br>';

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
}else{
    $nome = "padrao";
    $idade = "padrao";
}


?>

<h1>Seu nome é <?= $nome ?> e sua idade é <?= $idade ?></h1>