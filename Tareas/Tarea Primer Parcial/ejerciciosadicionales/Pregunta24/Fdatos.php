<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        table {
            border-collapse: collapse;
           
            
        }

        th, td {
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }

        th {
            font-weight: bold;
           
        }
    </style>
</head>
<body>


<?php

include("conexion.php");

$sql = "SELECT id,nombre from carreras";


$filas = $_POST['filas'];

setcookie("filas",$filas,time()+3600);

?>

<div>
<form action="insertar.php" method="post">
<table>

<tr>
    <th></th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>CU</th>
    <th>Sexo</th>
    <th>Carrera</th>

</tr>

<?php

for($i=0; $i<$filas;$i++){
    ?>
    <tr>
        <td><?php echo $i+1 ?></td>
        <td> <input type="text" name="txtNombre<?php echo $i ?>">  </td>
        <td> <input type="text" name="txtApellido<?php echo $i ?>"></td>
        <td> <input  name="txtCU<?php echo $i ?>"></td>
        <td> 
            <input type="radio" name="txtSexo<?php echo $i ?>" value="M"> Masculino
            <input type="radio" name="txtSexo<?php echo $i ?>" value="F"> Femenino
        </td>
        <td>  
        <select name="carrera_id<?php echo $i ?>">
        <?php
        $carreras = $con->query($sql);
        while($carrera = $carreras->fetch_assoc()){
            ?>
            <option value="<?php echo $carrera['id'] ?>"><?php echo $carrera['nombre'] ?></option>
            <?php
        }
        ?>
        </select>
        </td>
    </tr>
    <?php
}
?>
</table>

<input type="submit" value="Insertar">

</form>


<a href="">borrar</a>   

</div>



<?php

?>

</body>
</html>
