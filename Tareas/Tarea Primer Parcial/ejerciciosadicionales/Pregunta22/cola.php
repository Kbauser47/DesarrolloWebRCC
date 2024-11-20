<?php
class Cola {
    private $tipo; 
    private $elementos; 

    public function __construct($tipo) {
        $this->tipo = $tipo;
        $this->elementos = [];
    }

    public function insertarDelante($elemento) {
        array_unshift($this->elementos, $elemento); 
    }

    public function insertarDetras($elemento) {
        array_push($this->elementos, $elemento); 
    }

    public function eliminar() {
        if (!empty($this->elementos)) {
            return array_shift($this->elementos); 
        }
        return null; 
    }

    public function mostrar() {
        return $this->elementos; 
    }

    public function getTipo() {
        return $this->tipo; 
    }
}
?>

