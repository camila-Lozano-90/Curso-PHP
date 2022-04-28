<?php
#definimos las variables
$cantDePersonas = $_POST['cantDePersonas'];
$vlrPlatillo = 0;
$totalFac = 0;

if($cantDePersonas == 1){
    $vlrPlatillo = 14000;
    $totalFac = $vlrPlatillo * $cantDePersonas;
}if($cantDePersonas > 200 && $cantDePersonas <= 300){
    $vlrPlatillo = 11000;
    $totalFac = $vlrPlatillo * $cantDePersonas;
}if($cantDePersonas > 300){
    $vlrPlatillo = 9000;
    $totalFac = $vlrPlatillo * $cantDePersonas;
}else{
    echo 'No se ha podido realizar la factura';
};

echo 'Cantidad de personas'.$cantDePersonas.'<br>'.'costo individual cobrado: '.$vlrPlatillo.'<br>'.'Costo total: '.$totalFac;

?>