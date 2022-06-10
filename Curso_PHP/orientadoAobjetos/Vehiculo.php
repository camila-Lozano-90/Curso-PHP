<?php
/**
*Clase base del proyecto
*@author lozano
*@version 1.0 junio 2022
*@copyright CuTecnova s.a.s
**/

class Vehiculo
{
    //atributos de la clase
    // tener en cuenta la visibilidad de los atributos
    public int $numeroRuedas;
    private string $placa;
    protected int $numeroPuertas;
    private bool $tieneTraccion;  # el vehículo tiene tracción en las cuatro ruedas "true or false"
    public static string $color;

    //métodos de la clase
    /* public function Vehiculo(){

    } */
    // método mágico para crear la clase - método constructor  -setter
    public function __construct($numeroRuedas,$placa,$numeroPuertas,$tieneTraccion,$color)
    {
        $this->numeroRuedas = $numeroRuedas;
        $this->placa = $placa;
        $this->numeroPuertas = $numeroPuertas;
        $this->tieneTraccion = $tieneTraccion;
        self::$color = $color;
    }
    #método getter ****************************************************
    ## return string
    public function mostrarPlaca()
    {
        return "<br>"."La placa del vehículo es:"."<br>".$this->placa;
    }
    ## return bool
    public function mostrarEstadoTraccion()
    {
        if($this->tieneTraccion == true){
            return "<br>"."¿El vehículo tiene tracción? "."<br>"."¡Pero claro que porsupollo!";
        }
        else{
            return "<br>"."¿El vehículo tiene tracción? "."<br>"."No compadrito :(";
        }
    }
    ## return string
    public function mostrarColor()
    {
        return "<br>"."El colorcirijillo es:"."<br>".self::$color;
    }

    /**
     # Get the value of numeroRuedas
     
    public function getNumeroRuedas()
    {
        return $this->numeroRuedas;
    }

    
     # Set the value of numeroRuedas
     #
     # @return  self
     
    public function setNumeroRuedas($numeroRuedas)
    {
        $this->numeroRuedas = $numeroRuedas;

        return $this;
    }
    **/ 
}
$moto = new Vehiculo(2,"BWK-452L",'0',true,"Caca como tus ojos :')");  ## instanciar la clase 
echo $moto->mostrarEstadoTraccion();  ## llamamos el método o atributo y lo imprimimos en la página
echo $moto->mostrarColor();
# éste es el final de la clase ******************************************************************

/* $campero = new Vehiculo(4,"VDK-89A",2,true);
$susuki = new Vehiculo(4,"COL-454",4,true);
$willis = new Vehiculo(4,"MED-436",4,false);
$bws = new Vehiculo(2,"ARM-78O",2,false);
var_dump($susuki); */















?>