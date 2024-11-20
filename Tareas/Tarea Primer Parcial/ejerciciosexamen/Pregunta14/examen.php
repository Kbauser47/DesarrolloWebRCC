<?php
class Examen {
    private $n;
    private $cadena;
    private $a;
    private $b;
    private $c;

    // Constructor para inicializar las propiedades
    public function __construct($n, $cadena, $a, $b, $c) {
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    // Método para calcular y mostrar los números Fibonacci hasta n
    public function calcularFibonacci() {
        echo "<select>";
        $fibonacci = [0, 1];

        for ($i = 2; $i < $this->n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        foreach ($fibonacci as $num) {
            echo "<option value='$num'>$num</option>";
        }
        echo "</select>";
    }

    // Método para calcular y mostrar el número mayor entre a, b y c
    public function calcularMayor() {
        $numeros = [$this->a, $this->b, $this->c];
        $mayor = max($numeros);

        foreach ($numeros as $numero) {
            if ($numero == $mayor) {
                echo "<strong>$numero</strong> ";
            } else {
                echo "$numero ";
            }
        }
    }

    // Método para mostrar la cadena en forma de pirámide
    public function piramide() {
        $len = strlen($this->cadena);
        
        for ($i = 1; $i <= $len; $i++) {
            echo substr($this->cadena, 0, $i) . "<br>";
        }
    }
}

// Menú de acceso
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST['opcion'];
    switch ($opcion) {
        case 'Fibonacci':
            $n = intval($_POST['n']);
            $examen = new Examen($n, "", 0, 0, 0);
            echo "<h3>Fibonacci:</h3>";
            $examen->calcularFibonacci();
            break;

        case 'Mayor':
            $a = intval($_POST['a']);
            $b = intval($_POST['b']);
            $c = intval($_POST['c']);
            $examen = new Examen(0, "", $a, $b, $c);
            echo "<h3>Mayor de tres números:</h3>";
            $examen->calcularMayor();
            break;

        case 'Piramide':
            $cadena = $_POST['cadena'];
            $examen = new Examen(0, $cadena, 0, 0, 0);
            echo "<h3>Pirámide de la cadena:</h3>";
            $examen->piramide();
            break;

        default:
            echo "Opción no válida.";
    }
} else {
    ?>
    <form method="post">
        <h3>Seleccione una opción:</h3>
        <label><input type="radio" name="opcion" value="Fibonacci" required> Fibonacci</label><br>
        <label><input type="radio" name="opcion" value="Mayor"> Mayor</label><br>
        <label><input type="radio" name="opcion" value="Piramide"> Pirámide</label><br><br>

        <div id="fibonacci-params" style="display:none;">
            <label for="n">Ingrese el valor de n (para Fibonacci):</label>
            <input type="number" name="n" id="n"><br><br>
        </div>

        <div id="mayor-params" style="display:none;">
            <label for="a">Ingrese el valor de a:</label>
            <input type="number" name="a" id="a"><br>
            <label for="b">Ingrese el valor de b:</label>
            <input type="number" name="b" id="b"><br>
            <label for="c">Ingrese el valor de c:</label>
            <input type="number" name="c" id="c"><br><br>
        </div>

        <div id="piramide-params" style="display:none;">
            <label for="cadena">Ingrese la cadena:</label>
            <input type="text" name="cadena" id="cadena"><br><br>
        </div>

        <input type="submit" value="Ejecutar">
    </form>

    <script>
        // Mostrar los parámetros necesarios según la opción seleccionada
        document.querySelectorAll('input[name="opcion"]').forEach(function(elem) {
            elem.addEventListener('change', function() {
                document.getElementById('fibonacci-params').style.display = 'none';
                document.getElementById('mayor-params').style.display = 'none';
                document.getElementById('piramide-params').style.display = 'none';
                
                if (this.value === 'Fibonacci') {
                    document.getElementById('fibonacci-params').style.display = 'block';
                } else if (this.value === 'Mayor') {
                    document.getElementById('mayor-params').style.display = 'block';
                } else if (this.value === 'Piramide') {
                    document.getElementById('piramide-params').style.display = 'block';
                }
            });
        });
    </script>
    <?php
}
?>
