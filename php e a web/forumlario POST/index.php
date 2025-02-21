<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="cadastro.php" method="post">
        <div>
            <input type="text" name="marca" placeholder="marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="teto solar">teto solar
            <input type="checkbox" name="opcionais[]" value="pelicula">pelicula
            <input type="checkbox" name="opcionais[]" value="blindado">blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>
</html>