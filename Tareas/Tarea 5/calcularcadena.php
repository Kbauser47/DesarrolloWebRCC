<?php



class operacionesCadena{
    private $cadena ="";


    
    public function __construct($cadena){
        $this->cadena = $cadena;
    }

    public function invertir(){
         $cadenaInvertida = strrev($this->cadena);
         echo "Cadena invertida:".$cadenaInvertida. "<br>";
    }

    public function mayusculas(){
        $cadenaMayuscula = strtoupper($this->cadena);
        echo "Cadena en Mayusculas:".$cadenaMayuscula."<br>";
    }

    public function minusculas(){
        $cadenaMinuscula = strtolower($this->cadena);
        echo "Cadena en Minusculas:".$cadenaMinuscula."<br>";
    }

}

$cadena = $_GET['cadenita'];

$operacion = new operacionesCadena($cadena);

$operacion->invertir();

$operacion->minusculas();

$operacion->mayusculas();


?>