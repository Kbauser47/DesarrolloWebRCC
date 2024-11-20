<?php



if (isset($_GET["dia"])) {
    $dia = $_GET["dia"];

    if ($dia >= 1 && $dia <= 7) {



        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
        ?>

        <label for="">Selecciona un día de la semana</label>
        <select name="dias" id="">
            <?php
            for ($i = 1; $i <= 7; $i++) {
                if ($i == $dia) {
                    ?>
                    <option value="" selected><?php echo $dias[$i - 1] ?></option>
                    <?php
                } else {
                    ?>
                    <option value=""><?php echo $dias[$i - 1] ?></option>
                    <?php
                }
            }
            ?>
        </select>
        <?php
    } else {
        echo "<h3>El valor debe estar entre 1 y 7 </h3>";
    }
} else {
    echo "<h3>Debe ingresar un valor </h3>";
}
?>


