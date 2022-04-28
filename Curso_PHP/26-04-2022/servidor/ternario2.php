<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo var_dump($edad <= 18);
    echo '<br>';
    #Operador ternario
    echo $edad <=18? 'eres mayor de edad': '000001000101001001010';
    // ? es la difurcación true, : es la difurcación false
    ?>
</body>
</html>