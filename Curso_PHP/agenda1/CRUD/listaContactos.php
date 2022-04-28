<?php
require_once 'bd.php'; #incluyo la cadena de conexión de php

#hacer el proceso de request - response

$sql = 'SELECT * FROM contacto';
$sentencia = $PDO->prepare($sql);  #prepara la consulta
$sentencia->execute();   #ejecuta la sentencia sql
$resultado = $sentencia->fetchAll(); #el FETCH_OBJ devuelve el resultado como un arreglo ordenado

/* echo '<pre>';
var_dump($resultado);  #almacena el resultado de la consulta en formato array de php
echo '<pre>'; */ 
?>