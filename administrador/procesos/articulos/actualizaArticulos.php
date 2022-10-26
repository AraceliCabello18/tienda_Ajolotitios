<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";


		
	    $categoriaSelect=$_POST['categoriaSelect'];
	    $nombre=$_POST['nombre'];
	    $descripcion=$_POST['descripcion'];
	    $cantidad=$_POST['cantidad'];
	    $precio=$_POST['precio'];
		$id_producto=$_POST['id_producto'];

		$datos=array(
		$categoriaSelect,
		$nombre,
		$descripcion,
		$cantidad,
		$precio,
		$id_producto);

	$obj=new articulos();
	if ($obj->actualizaArticulo($datos)==1) {
		header("location:../../vistas/articulos.php");
	} else {
		echo "fallo al actualizar";
	}

 ?>