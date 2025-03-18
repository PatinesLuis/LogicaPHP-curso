<?php

include_once("db.php");

include_once("dao/carDao.php");

$carDao = new CarDao($conn);

$cars = $carDao->findAll();
?>

<h1>Insirda um carro</h1>

<form action="process.php" method="post">
    <div>
        <label for="brand">Marca do carro</label>
        <input type="text" name="brand" placeholder="insira a marca">
    </div>
    <div>
        <label for="brand">Kilometragem</label>
        <input type="text" name="km" placeholder="insira a kilometragem">
    </div>
    <div>
        <label for="brand">Cor do carro</label>
        <input type="text" name="color" placeholder="insira a cor">
    </div>
    <input type="submit" value="Enviar">
</form>

<ul>
    <?php foreach($cars as $car):?>
        <li><?= $car->getBrand()?> - <?= $car->getKm()?> - <?= $car->getColor()?></li>
    <?php endforeach; ?>
</ul>