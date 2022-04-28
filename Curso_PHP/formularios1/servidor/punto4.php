<?php

$número = $_POST['número'];

if($número >= 0){
    echo "el número es: ".$número."su valor absoluto es: ".$número;
}if($número < 0){
    $numero = abs($_POST['número']);
    echo "el número es: ".$número."su valor absoluto es: ".$numero;
};