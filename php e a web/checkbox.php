<?php
    
    if(isset($_POST['ingredientes'])){
        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="checkbox" name="ingredientes[]" id="" value="tomates">tomates
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" id="" value="abobora">abobora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" id="" value="cebola">cebola
        </div>
        <div>
            <input type="submit" id="" value="enviar">
        </div>
    </form>
</body>
</html>