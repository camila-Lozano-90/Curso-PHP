<?php
#definimos las variables
$claseUva = $_POST['tipo'];
$tamaño = $_POST['tamaño'];
$precioIni = $_POST['precioIni'];
$cantKilo = $_POST['cantKilo'];
$vlrKilo = 0;
$total = 0;

if($claseUva == 'A' && $tamaño == 1){
    $vlrKilo = $precioIni  + 2000;
    $total = $vlrKilo * $cantKilo;
}if($claseUva == 'A' && $tamaño == 2){
    $vlrKilo = $precioIni  + 1000;
    $total = $vlrKilo * $cantKilo;
}if($claseUva == 'B' && $tamaño == 1){
    $vlrKilo = $precioIni  - 500;
    $total = $vlrKilo * $cantKilo;
}if($claseUva == 'B' && $tamaño == 2){
    $vlrKilo = $precioIni  - 900;
    $total = $vlrKilo * $cantKilo;
}

echo 'tipo Uva: '.$claseUva.'<br>'.'tamaño Uva: '
.$tamaño.'<br>'.'precio inicial: '.$precioIni.'<br>'.'precio total es: '.$total;

?>