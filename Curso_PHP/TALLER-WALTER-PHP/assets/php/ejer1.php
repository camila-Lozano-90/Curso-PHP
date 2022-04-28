<?php
#definimos las variables
$estrato = $_POST['estrato'];
$vlrMetroCúbico = 0;
$consumoAgua = $_POST['consumo'];
$totalFactura = 0;

if($estrato == 1){
    $vlrMetroCúbico = 5000;
    $totalFactura = $vlrMetroCúbico * $consumoAgua;
}if($estrato == 2){
    $vlrMetroCúbico = 6500;
    $totalFactura = $vlrMetroCúbico * $consumoAgua;
}if($estrato == 3){
    $vlrMetroCúbico = 7000;
    $totalFactura = $vlrMetroCúbico * $consumoAgua;
}if($estrato == 4){
    $vlrMetroCúbico = 8000;
    $totalFactura = $vlrMetroCúbico * $consumoAgua;
}if($estrato == 5){
    $vlrMetroCúbico = 9200;
    $totalFactura = $vlrMetroCúbico * $consumoAgua;
}else{
    echo 'No se pudo efectuar el cálculo';
};

echo 'El estrato es: '.$estrato.'<br>'.'El valor por metro Cúbico es: '.$vlrMetroCúbico.'<br>'.'El total es: '.$totalFactura;
?>