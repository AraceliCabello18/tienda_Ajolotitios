
<?php session_start();

require_once "../procesos/conexion.php";
require_once "../clases/metodosCrud.php";

if (isset($_SESSION['usuario'])) {

?>

<?php include "header.php"; ?>

<!-- Page Content -->
<br><br>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">Administrador de Usuarios</h1>
                <p class="lead">
                    <div class="row">
                        <div class="col">
                            <form action="procesos/insertar.php" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="gasto">Usuario</label>
                                        <input type="text" require class="form-control" name="gasto" required>

                                        <label for="gasto">Password</label>
                                        <input type="password" require class="form-control" name="concepto" required>

                                        <br>
                                        <button class="btn btn-info">Agregar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                       
                    <table class="table table-hover table-condensed table-bordered" id="iddatatable">                            
                        <tr>
                                <td>Numero de Usuario</td>
                                <td>Usuario</td>
                                <td>Password</td>
                                <td>Fecha de registro</td>
                                <td>Eliminar</td>
                            </tr>

                                <?php
                                    $obj= new metodos();
                                    $sql="SELECT id,
                                    usuario,
                                    password ,fecha 
                                    FROM t_usuarios";

                                    $datos=$obj->mostrarDatos($sql);

                                    foreach ($datos as $key){
                                ?>

                            <tr>
                                <td><?php echo $key ['id'];?></td>
                                <td><?php echo $key ['usuario'];?></td>
                                <td><?php echo $key ['password'];?></td>

                                <td><a href="procesos/eliminar.php?id=<?php echo $key['id']?>"><button class="btn btn-danger">Eliminar</button></a></td>
                            
                            </tr>
                                <?php
                                    }
                                ?>
                        </table>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
    </script>



<?php 

}else{
    header("location:../vistas/usuarios.php");
}

?>