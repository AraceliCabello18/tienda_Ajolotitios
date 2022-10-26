<?php 


require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";

$id_producto=$_GET['id_producto'];

$obj=new articulos();

if ($obj->eliminaArticulo($id_producto)==1) {

	header("location:../../vistas/articulos.php");
} else {
	echo "fallo al eliminar";
}

 ?>