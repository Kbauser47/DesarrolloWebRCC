<?php

class Estante {
    public $fila1 = [];
    public $fila2 = [];
    public $fila3 = [];
    public $tope1 = 0;
    public $tope2 = 0;
    public $tope3 = 0;

    public function insertarLibro($fila, $libro) {
        switch ($fila) {
            case 1:
                $this->fila1[$this->tope1++] = $libro;
                break;
            case 2:
                $this->fila2[$this->tope2++] = $libro;
                break;
            case 3:
                $this->fila3[$this->tope3++] = $libro;
                break;
        }
    }

    public function mostrar($fila) {
        switch ($fila) {
            case 1:
                return $this->fila1;
            case 2:
                return $this->fila2;
            case 3:
                return $this->fila3;
        }
        return [];
    }

    public function mostrarArmario() {
        return [
            'fila1' => $this->fila1,
            'fila2' => $this->fila2,
            'fila3' => $this->fila3,
        ];
    }
}

if (!isset($_SESSION['estante'])) {
    $_SESSION['estante'] = serialize(new Estante());
}
?>
