<?php

$número = $_POST['número'];

if($número > 0){
    $resultado = sqrt($número);
    echo "La raíz cuadrada es: ".$resultado;
}elseif($número < 0){
    echo "Tiene raiz cuadrada imaginaria, reaccione >:'V";
};