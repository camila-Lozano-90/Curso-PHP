<?php
require_once 'bd.php'; //incluyo la cadena de conexion php

//hacer el proceso de request  - response

$sql = 'SELECT * FROM medico';
$sentencia = $PDO->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia 
$resultado = $sentencia->fetchAll(PDO :: FETCH_OBJ);
/* echo'<pre>';
var_dump($resultado);
echo'</pre>'; */



/* echo '<pre>';

var_dump($resultado);

echo '</pre>'; */

?>













