

<?php 
	class articulos{
		
		public function insertaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$fecha=date('Y-m-d');

			$sql="INSERT into articulos (categoria,
										nombre,
										descripcion,
										cantidad,
										precio,
										fechaCaptura) 

							values ('$datos[0]',
									'$datos[1]',
									'$datos[2]',
									'$datos[3]',
									'$datos[4]',
									'$datos[5]')";
			return mysqli_query($conexion,$sql);
		}
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();
			$result=mysqli_query($conexion,$sql);
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function actualizaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE articulos set categoria='$datos[0]',
										nombre='$datos[1]',
										descripcion='$datos[2]',
										cantidad='$datos[3]',
										precio='$datos[4]'
						where id_producto='$datos[5]'";

			return mysqli_query($conexion,$sql);
		}
		

		public function eliminaArticulo($id_producto){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE FROM articulos 
					WHERE id_producto='$id_producto'";
			return $result=mysqli_query($conexion,$sql);

		}

	}

 ?>