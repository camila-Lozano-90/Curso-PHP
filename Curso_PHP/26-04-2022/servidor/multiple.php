<?php
//recibo valored del formulario
// $opcion $_POST['dato']
$opcion = 3;
#estructura de decisión múltiple
switch ($opcion) {
    case '1':
        echo ' ORDENASTE PIZZA';
        break;
    case '2':
        echo ' ORDENASTE PERRO CALIENTE';
        break;
    case '3':
        echo ' ORDENASTE HAMBURGUESA';
        break;
    case '4':
        echo ' ORDENASTE DESGRANADO';
        break;
    case '5':
        echo ' ORDENASTE ENSALADA';
        break;
    default:
        echo ' ***Debe de elegir una opción válida del menú***';
        break;    
}

echo '<br>';