<?php include 'conexion.php';

$sql="SELECT imagen, l.id, titulo,autor,anio,e.editorial, c.carrera FROM libros l
 left join editoriales e on l.ideditorial=e.id left join carreras c on l.idcarrera = c.id";
if(isset ($_GET['ordenar'])){
    $sql.=" order by ".$_GET['ordenar'];
}
$resultado=$con->query($sql);

?>
    <div class="col">
        <a href="#" class="btn btn-primary">Todos</a>
        <a href="javascript:ordenar('Ingeniería en Sistemas de Información')" class="btn btn-primary">Ingenieria en sistemas de Informacion</a>
        <a href="javascript:ordenar('Licenciatura en Administración de Empresas')" class="btn btn-primary">Licenciatura en administracion de empresas</a>
        <a href="javascript:ordenar('Ingeniería Industrial')" class="btn btn-primary">Ingenieria Industrial</a>
        <a href="javascript:ordenar('Licenciatura en Psicología')" class="btn btn-primary">Licenciatura en Psicologia</a>
        <a href="javascript:ordenar('Medicina')" class="btn btn-primary">Medicina</a>
    </div>
<table class="table table-striped" style="border: 1px solid black;">

    <tr>
        <th><h5>Imagen</h5></th>
        <th><h5>Titulo</h5></th>
        <th><h5>Autor</h5></th>
        <th><h5>Editorial</h5></th>
        <th><h5>Año</h5></th>
        <th><h5>Carrera</h5></th>
        <th><h5>Acciones</h5></th>
    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
        <td> <img src="images/<?php echo $fila['imagen'];   ?>" width="100px" >   </td>
        <td><?php echo $fila['titulo'];?></td>
        <td><?php echo $fila['autor'];?></td>
        <td><?php echo $fila['editorial'];?></td>
        <td><?php echo $fila['anio'];?></td>
        <td><?php echo $fila['carrera'];?></td>
        <td>
      
        <td> <div class="row"><div class="col"> 
        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formularioModal" onclick="editar(<?php echo $fila['id'];?>)">Editar</a> 
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmarModal" onclick="setValor(<?php echo $fila['id'];?>)" >Eliminar</a> </div> </div></td>
      
       
    </tr>

    <?php }?>
   

</table>
<div class="modal fade" id="confirmarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmar Eliminación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Esta Seguro que quiere eliminar  el elemento
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="eliminar()">Eliminar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="formularioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Formulario de Edicion</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal">
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
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="eliminar()">Eliminar</button>
            </div>
          </div>
        </div>
      </div>s