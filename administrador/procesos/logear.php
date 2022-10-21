<?php session_start();
include "./conexion.php";
$conexion = conexion();
$user = $_POST['usuario'];
$pass = $_POST['password'];
$pass = sha1($_POST['password']);
$sql = "SELECT * FROM t_usuarios
        WHERE usuario = '$user'
        AND password = '$pass'";
$respuesta = mysqli_query($conexion, $sql);
if (mysqli_num_rows($respuesta) > 0) {
    $_SESSION['usuario'] = $user;
    header('location:../inicio.php');
}else{
    echo'Tu Credencial de Usuario No es Valida :(';
}
?>