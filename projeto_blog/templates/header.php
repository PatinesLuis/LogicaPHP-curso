<?php
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog codar</title>
    <!-- ESTILO DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>style/style.css">
    <!-- FONTES DO PROJETO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?=$BASE_URL?>img/logo.svg" alt="blog codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?=$BASE_URL?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">categorias</a></li>
                <li><a href="#" class="nav-link">sobre</a></li>
                <li><a href="<?=$BASE_URL?>/contato.php" class="nav-link">contato</a></li>
            </ul>
        </nav>
    </header>
