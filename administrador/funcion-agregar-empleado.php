<?php
	include('config.php');
 	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "";
	$db_name = "db_politicos";

 	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	$insert_empleado = "INSERT INTO `tbl_usuarios`(`nombre`, `apellidos`, `direccion`, `email`, `telefono1`, `telefono2`,`roll`, `habilidades`) VALUES  ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[direccion]', '$_POST[email]', '$_POST[telefono1]', '$_POST[telefono2]' , '$_POST[roll]', '$_POST[habilidades]') ";

	if ($conexion->query($insert_empleado) === TRUE) {
		//header("location:pagina-empleados.php");
		echo "Insercion exitosa";
	}else {
 		echo "Error de insercion SQL." . $insert_empleado . "<br>". $conexion->error;  
   }

	mysqli_close($conexion);
?>