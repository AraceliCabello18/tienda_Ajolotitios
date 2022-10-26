<?php

require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";

    $categoria=$_POST['categoriaSelect'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
	$cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];


    $datos=array($categoria,
    $nombre,
    $descripcion,
	$cantidad,
	$precio);

    $obj=new articulos();
    if ($obj-> insertaArticulo($datos)==1) {
        header("location:../../vistas/articulos.php");
    } else {
        echo "fallo al agregar";
    }