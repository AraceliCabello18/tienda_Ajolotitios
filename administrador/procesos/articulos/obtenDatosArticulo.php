<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Articulos.php";

	$obj= new articulos();


	$id_articulo=$_POST['id_articulo'];

	echo json_encode($obj->obtenDatosArticulo($id_articulo));

 ?>