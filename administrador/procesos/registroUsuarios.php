<?php
include './conexion.php';
$conexion = conexion();
$user = $_POST['usuario'];
$pass = $_POST['password'];
$pass = sha1($pass);
$sql = "INSERT INTO Admin(usuario, password)
            VALUE('$user','$pass')";
$respuesta = mysqli_query($conexion, $sql);
if ($respuesta) {
    header('location:../index.php');
}else{
    echo'no se puede hacer nada :(';
}
?>