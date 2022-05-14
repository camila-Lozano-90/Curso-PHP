<?php

require_once 'BD.php'; //incluyo la cadena de conexion php




//recibimos la data formulario

$NOMBRE = $_POST['nombre'];
$APELLIDO = $_POST['apellidos'];
$EMAIL = $_POST['email'];
$ESPECIALIDAD = $_POST['especialidad'];




//hacer el proceso de request  - response

$sql = 'INSERT INTO medico (NOMBRE_MEDICO, APELLIDOS_MEDICO, EMAIL, ESPECIALIDAD) VALUES (?, ?, ?, ?);';
$sentencia= $PDO->prepare($sql); //prepara consulta
$sentencia->execute([$NOMBRE,$APELLIDO,$EMAIL,$ESPECIALIDAD]); //ejecuta la sentencia 

header('location:../index.php');




