<?php

$nombre = $_POST['nombre'];
$edad = $_POST ['edad'];
$sexo = $_POST ['sexo'];

if($edad > 18 and $sexo == "Masculino"){
    echo"persona: ".$nombre."<br>".$edad."<br>".$sexo;
}else{
    echo"no calificas nene";
};
