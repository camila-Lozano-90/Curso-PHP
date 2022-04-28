<?php

$nombre =  $_POST['nombre'];
$edad =  $_POST['edad'];

if($edad > 18){
    echo "su nombre es: ".$nombre;
}else{
    echo"tas muy posho";
}