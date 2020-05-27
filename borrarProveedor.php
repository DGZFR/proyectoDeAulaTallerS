<?php
	include 'config.php';
	$id = $_GET['id'];
	$sql = "Delete from proveedor where md5(id) = '$id'";
	if($db_link->query($sql) === true){
		
	echo "<script>window.location.href='proveedores.php';</script>";
		
	}else{
		echo "Oppps, no fue posible el borrado ";
	}
	$db_link->close();
?>