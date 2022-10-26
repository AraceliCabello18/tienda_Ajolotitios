<?php session_start();



require_once "../clases/Conexion.php";

require_once "../clases/Articulos.php";



if(isset($_SESSION['usuario'])){

?>

<?php include "header.php"; ?>


<br><br>

		<div class="container mt-4">
			<h1>Articulos</h1>
			<div class="row">
				<div class="col-sm-4">
					<form  action="../procesos/articulos/insertaArticulos.php" method="POST">
						<label>Categoria</label>
						<select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
							<option value="Mazda">Jugueterias</option>
                            <option value="BMW">BMW</option>
                            <option value="Subaru">Subaru</option>
						</select>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
						<label>Cantidad</label>
						<input type="number" class="form-control input-sm" id="cantidad" name="cantidad">
						<label>Precio</label>
						<input type="number" class="form-control input-sm" id="precio" name="precio">
					
						<p></p>
						<button class="btn btn-info">Agregar</button>
					</form>
				</div>
				<div class="col-sm-8 mt-4">
				<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
					<tr>
						<td>Categoria</td>
						<td>Nombre</td>
						<td>Descripcion</td>
						<td>Cantidad</td>
						<td>Precio</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
					<?php
                        $obj= new articulos();
                    	$sql="SELECT id_producto,
						categoria,
                        nombre,
						descripcion,
						cantidad,
						precio FROM articulos";

                        $datos=$obj->mostrarDatos($sql);

                        	 foreach ($datos as $key){
                    ?>

					<tr>
						<td><?php echo $key ['categoria'];?></td>
                        <td><?php echo $key ['nombre'];?></td>
                        <td><?php echo $key ['descripcion'];?></td>
                         <td><?php echo $key ['cantidad'];?></td>
						 <td><?php echo $key ['precio'];?></td>

						 
						 <td><a href="editarArticulos.php?id_producto=<?php echo $key['id_producto']?>"><button class="btn btn-warning" data-toggle="modal" data-target="#abremodalUpdateArticulo">Editar</button></a></td>
						 <td><a href="../procesos/articulos/eliminarArticulo.php?id_producto=<?php echo $key['id_producto']?>"><button class="btn btn-danger">Eliminar</button></a></td>

                            
                    </tr>
                    <?php
                         }
                    ?>

					
				</table>
				</div>
			</div>
		</div>

	




	</body>
	</html>

	

	<?php 

}else{
	header("location:../vistas/usuarios.php");
}
?>