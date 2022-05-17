<?php

require_once 'BD.php'; //incluyo la cadena de conexion php




//recibimos la data formulario
$id=$_POST['id'];
$NOMBRE=$_POST['nombre'];
$APELLIDO=$_POST['apellidos'];
$EMAIL=$_POST['email'];
$ESPECIALIDAD=$_POST['especialidad'];




//hacer el proceso de request  - response

$sql = "UPDATE medico SET NOMBRE_MEDICO =?, APELLIDOS_MEDICO =?, EMAIL =?, ESPECIALIDAD =? WHERE ID_MEDICO = ($id)";
$sentencia= $PDO->prepare($sql); //prepara consulta
$sentencia->execute([$NOMBRE,$APELLIDO,$EMAIL,$ESPECIALIDAD]); //ejecuta la sentencia 

header('location:../index.php');    