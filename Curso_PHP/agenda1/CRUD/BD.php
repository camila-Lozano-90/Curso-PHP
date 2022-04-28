<?php

#conexion a la base de datos de manera tradicional

#Usuario y clave de MySQL
$usuario = 'root';
$password = '';


try{
    //creamos el conector instanciando la clase PDO
    $PDO = new PDO('mysql:host=localhost;dbname=agenda',$usuario,$password);   //usamos la clase PDO de PHP con el conector mysql
    /* var_dump($PDO);
    echo '<br>';
    echo 'conexión exitosa'; */
}catch(PDOException $error){
    echo 'Ha ocurrido un error en la conexión';   #mensaje de error para el usuario
   # echo 'El error es: '.$error->getMessage();   #mensaje de error para el desarrollador
}