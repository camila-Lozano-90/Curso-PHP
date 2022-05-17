<?php

require_once 'BD.php'; //incluyo la cadena de conexion php

$id=$_GET['ID_MEDICO'];

//recibimos la data formulario


//hacer el proceso de request  - response

$sql = "DELETE FROM medico WHERE ID_MEDICO = {$id}";
$sentencia= $PDO->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia 

header('location:../index.php');
