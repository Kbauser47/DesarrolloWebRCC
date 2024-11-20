<?php


class cola
{

    private $elementos = array();
    private $tipo;
    private $delante;

    private $final;

    public function __construct($tipo)
    {

        $this->tipo = $tipo;
        $this->delante = 0;
        $this->final = -1;
    }

    public function insertarDetras($elemento)
    {

        $this->final++;
        $this->elementos[$this->final] = $elemento;
    }

    public function insertarDelante($elemento)
    {
        $this->final++;
        for ($i = $this->final; $i > 0; $i--) {
            $this->elementos[$i] = $this->elementos[$i - 1];
        }
        $this->elementos[$this->delante] = $elemento;
    }

    public function eliminar()
    {
        if ($this->delante > $this->final) {
            echo "La cola esta vacia, no hay nada que eliminar";
        } else {
            for ($i = 0; $i < $this->final; $i++) {
                $this->elementos[$i] = $this->elementos[$i + 1];

            }
            $this->final--;

            echo "el elemento a sido eliminado";
        }
    }


    public function mostrar()
    {

        if ($this->delante > $this->final) {
            echo "La cola esta vacia </br>";
        } else {
            for ($i = 0; $i <= $this->final; $i++) {
                echo $this->elementos[$i] . "</br>";
            }
        }
    }

}



