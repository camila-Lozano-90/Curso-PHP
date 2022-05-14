<?php


//conection a la base de datos de la forma tradicional


$usuario= 'root';
$password= '';


//creo cadena conexion 
try{
    //creamos el conector instanciando la clase PDO
    $PDO = new PDO('mysql:host=localhost;dbname=hospisoft',$usuario,$password); //usamos clas PDO con el conector MYSQL
    
  /*   var_dump($pdo);
    echo '<br>';
    echo 'conexion exitosa'; */





}catch(PDOException $ERROR){
    echo 'ah ocurrido un error a la conexion'; //MENSAJE DE ERROR PARA USUARIO 
    #echo 'el error es :'. $ERROR->getMessage(); //MENSAJE DE ERROR PARA PROGRAMADO

}




