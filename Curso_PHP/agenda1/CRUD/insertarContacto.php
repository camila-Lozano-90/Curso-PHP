<?php
require_once 'bd.php'; #incluyo la cadena de conexión de php


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$movil = $_POST['movil'];

#hacer el proceso de request - response

$sql = 'INSERT INTO contacto (nombre, apellidos, email, telefono, movil) VALUES (?,?,?,?,?)';
$sentencia = $PDO->prepare($sql);  #prepara la consulta
$sentencia->execute([$nombre, $apellidos, $email, $telefono, $movil]);   #ejecuta la sentencia sql

header('Location:../index.php');
?>