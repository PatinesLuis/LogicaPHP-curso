<?php

include_once("dao/carDao.php");
include_once("db.php");

$carDao = new CarDao($conn);

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

$carDao->create($newCar);

header("Location: index.php");