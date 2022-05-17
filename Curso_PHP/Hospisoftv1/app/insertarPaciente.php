<?php

require_once 'BD.php'; //incluyo la cadena de conexion php




//recibimos la data formulario

   # filter_var ... filtra que el tipo de datos llegue correctamente en el tipo de dato que debe de insertarse

$NOMBRE = filter_var(trim($_POST['nombre'],FILTER_DEFAULT));
$APELLIDO =  filter_var(trim($_POST['apellido'],FILTER_DEFAULT));
$EMAIL =  filter_var(trim($_POST['email'],FILTER_DEFAULT));
$TELEFONO =  filter_var(trim($_POST['telefono'],FILTER_DEFAULT));
$MOVIL =  filter_var(trim($_POST['movil'],FILTER_DEFAULT));
$FECHA_NAC =  filter_var(trim($_POST['fecha_nace'],FILTER_DEFAULT));
$EPS_PACIENTE =  filter_var(trim($_POST['eps'],FILTER_DEFAULT));
$USUARIO_PACIENTE =  filter_var(trim($_POST['usuario'],FILTER_DEFAULT));
$PASS_PACIENTE =  password_hash($_POST['password'], PASSWORD_DEFAULT);

//encriptación de la pwd
 # $PASS_PACIENTE = password_hash($PASS_PACIENTE, PASSWORD_DEFAULT);


//hacer el proceso de request  - response

$sql = 'INSERT INTO paciente (NOMBRES_PACIENTE, APELLIDOS_PACIENTE, EMAIL_PACIENTE, TELEFONO_PACIENTE, MOVIL_PACIENTE, FECHA_NAC_PACIENTE, EPS_PACIENTE, USUARIO_PACIENTE, PASSWORD_PACIENTE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';
$sentencia= $PDO->prepare($sql); //prepara consulta
$sentencia->execute([$NOMBRE,$APELLIDO,$EMAIL,$TELEFONO,$MOVIL,$FECHA_NAC,$EPS_PACIENTE,$USUARIO_PACIENTE,$PASS_PACIENTE]); //ejecuta la sentencia 


  # var_dump(($sentencia->rowCount()));

$resultado =  $_SESSION['INSERCIÓN EXITOSA'];

header('location:../frmRegistroPaciente');




