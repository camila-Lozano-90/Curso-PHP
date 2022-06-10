<?php
/**
*Clase que hereda Vehículos (base del proyecto)
*@author lozano
*@version 1.0 junio 2022
*@copyright CuTecnova s.a.s
**/

require_once 'Vehiculo.php';
Class Campero extends Vehiculo
{
    public function __construct($numeroRuedas,$placa,$numeroPuertas,$tieneTraccion,$color,$capacidadDeCarga)
    {
        $this->capacidadDeCarga = $capacidadDeCarga;
        parent::__construct($numeroRuedas,$placa,$numeroPuertas,$tieneTraccion,$color);
    }
    private int $capacidadDeCarga;
    #método getter ****************************************************
    ## return string
    public function mostrarCapacidad()
    {
        return "<br>"."La capacidad de carga del vehículo es:"."<br>".$this->capacidadDeCarga;
    } 
}
   
$Lamborgini = new Campero(3,"ERP-K32",3,true,"Caca como tus ojos :')",1000);
echo $Lamborgini -> mostrarPlaca();
echo $Lamborgini -> mostrarCapacidad();
?>