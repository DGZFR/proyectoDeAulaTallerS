<?php
session_start();
require('config.php');

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];


	$registrarse="INSERT INTO clientes(nombre,telefono,direccion) VALUES('$nombre','$telefono','$direccion')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$registrarse);
		header('location:clientesvendedor.php');

mysqli_close($db_link);
?>
