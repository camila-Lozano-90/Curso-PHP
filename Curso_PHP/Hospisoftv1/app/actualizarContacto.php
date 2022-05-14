<?php

require_once 'BD.php'; //incluyo la cadena de conexion php




//recibimos la data formulario
$id=$_POST['id'];
$NOMBRE=$_POST['nombre'];
$APELLIDO=$_POST['Apellido'];
$EMAIL=$_POST['Email'];
$TELEFONO=$_POST['Telefono'];
$MOVIL=$_POST['movil'];




//hacer el proceso de request  - response

$sql = "UPDATE contacto SET nombre =?, Apellido =?, Email =?, Telefono =?, Movil = ? WHERE Id = {$id}";
$sentencia= $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$NOMBRE,$APELLIDO,$EMAIL,$TELEFONO,$MOVIL]); //ejecuta la sentencia 

header('location:../index.php');    