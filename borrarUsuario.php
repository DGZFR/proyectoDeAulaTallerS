<?php
	include 'config.php';
	$member_no = $_GET['member_no'];
	$sql = "Delete from tbl_users where md5(member_no) = '$member_no'";
	if($db_link->query($sql) === true){
			echo "<script>window.location.href='usuariosweb.php';</script>";
	}else{
		echo "Oppps, no fue posible el borrado ";
	}
	$db_link->close();
?>