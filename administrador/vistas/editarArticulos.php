<?php session_start();



require_once "../clases/Conexion.php";

$obj=new conectar();
$conexion=$obj->conexion();

$id_producto=$_GET['id_producto'];
$sql="SELECT categoria,
nombre,
descripcion,
cantidad,
precio
FROM articulos WHERE id_producto='$id_producto'";

$result=mysqli_query($conexion,$sql);
$ver=mysqli_fetch_row($result);


if(isset($_SESSION['usuario'])){

?>

<?php include "dependencias.php"; ?>

<div class="container px-5 my-5" style="background:color:red;">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light">Actualizar datos de articulos</div>
          </div>

		  <form  action="../procesos/articulos/actualizaArticulos.php" method="POST">

						<input type="text" name="id_producto" hidden="" value="<?php echo $id_producto?>">


						<label>Categoria</label>
						<select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect" value="<?php echo $ver[0]?>">
							<option value="Mazda">Mazda</option>
							<option value="BMW">BMW</option>
							<option value="Subaru">Subaru</option>
						</select>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm"  name="nombre" value="<?php echo $ver[1]?>">
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" name="descripcion" value="<?php echo $ver[2]?>">
						<label>Cantidad</label>
						<input type="number" class="form-control input-sm" name="cantidad" value="<?php echo $ver[3]?>">
						<label>Precio</label>
						<input type="number" class="form-control input-sm"  name="precio" value="<?php echo $ver[4]?>">

						<p></p>
						<button class="btn btn-info">Actualizar</button>
					</form>

          
            

        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="abremodalUpdateArticulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza Articulo</h4>
					</div>
					<div class="modal-body">
					<form  action="../procesos/articulos/actualizaArticulos.php" method="POST">

						<input type="text" name="id_producto" hidden="" value="<?php echo $id_producto?>">


						<label>Categoria</label>
						<select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect" value="<?php echo $ver[0]?>">
							<option value="Mazda">Mazda</option>
							<option value="BMW">BMW</option>
							<option value="Subaru">Subaru</option>
						</select>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm"  name="nombre" value="<?php echo $ver[1]?>">
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" name="descripcion" value="<?php echo $ver[2]?>">
						<label>Cantidad</label>
						<input type="number" class="form-control input-sm" name="cantidad" value="<?php echo $ver[3]?>">
						<label>Precio</label>
						<input type="number" class="form-control input-sm"  name="precio" value="<?php echo $ver[4]?>">

						<p></p>
						<button class="btn btn-info">Actualizar</button>
					</form>
						
					</div>
				</div>
			</div>
		</div>




	

	<?php 
}else{
	header("location:../vistas/usuarios.php");
}
?>
