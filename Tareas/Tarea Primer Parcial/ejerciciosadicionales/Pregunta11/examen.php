<?php

    class Examen {
        
        private $cadena1;
        private $cadena2;


        function __construct($cadena1, $cadena2){
            $this -> $cadena1 = $cadena1;
            $this -> $cadena2 = $cadena2;
        }


        public function cruzar(){
            $letraComun = '';

            for ($i=0; $i < strlen($this->cadena1);$i++){
                $letra = $this->cadena1[$i];
            }



        }



        


    }


?>