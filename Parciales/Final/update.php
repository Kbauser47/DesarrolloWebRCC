<?php 
include 'conexion.php';


$id=$_GET['id'];
$sql="SELECT imagen, autor,anio,ideditorial, idcarrera FROM libros WHERE id=$id ";
$otro=$con->query($sql);

                ?>
<form action="javascript:actualizar()" method="post" enctype="multipart/form-data" id="formulario">
                <img src="images/<?php echo $otro['imagen']; ?>">
                <input type="file" name="imagen" id="imagen"><br>
                <input type="hidden" name="id" value="<?php echo $otro['id'];?>">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo"  value="<?php echo $otro['titulo'];?>"><br>
                <label for="editorial">Editorial</label>
                <input type="text" name="editorial"  value="<?php echo $otro['ideditorial'];?>"><br>
                <label for="anio">Año</label>
                <input type="text" name="anio"  value="<?php echo $otro['anio'];?>"><br>
                <label for="carrera">Carrera</label>
                <input type="date" name="carrera"  value="<?php echo $otro['idcarrera'];?>"><br>
                <input type="submit" value="Actualizar">
            </form>