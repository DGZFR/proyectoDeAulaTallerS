<?php
date_default_timezone_set('America/Bogota');

if (isset($_POST['reg_mode'])) {
checkusuario();	
}else{
header("location:../");		
}


function checkusuario() {
	
try {
	require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$usuario = $_POST['usuario'];
	$account_type = $_POST['acctype'];
	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE usuario = :usuario");
	$stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$records = count($result);
	
	if ($account_type == "101") {
	$role = "vendedor";	
	}else{
	$role = "supervisor";	
	}
	
	if ($records > 0) {
	header("location:../registrarse.php?p=$role&r=0927");	
		
	}else{
	
	if ($account_type == "101") {
	registrarse_as_vendedor();
	}else{
	registrarse_as_supervisor();
	}
	
		
	}
					  
	}catch(PDOException $e)
    {
    header("location:../registrarse.php?p=$role&r=4568");
    }
}

function registrarse_as_vendedor() {
	
	
	
	

try {
	require '../constants/db_config.php';
	require '../constants/uniques.php';
	$role = 'vendedor';
    $account_type = $_POST['acctype'];
    $last_login = date('d-m-Y h:m A [T P]');
	$member_no = 'EM'.get_rand_numbers(9).'';
    $usuario = $_POST['usuario'];
    $login = md5($_POST['password']);
	
	
	

	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO tbl_users (usuario, last_login,role,login, member_no) 
	VALUES (:usuario, :lastlogin,:role,:login, :memberno)");
    $stmt->bindParam(':usuario', $usuario);
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':role', $role);
	$stmt->bindParam(':login', $login);
	$stmt->bindParam(':memberno', $member_no);
    $stmt->execute();
	header("location:../login.php?p=vendedor&r=1123");	
		
	}catch(PDOException $e)
    {
		
    header("location:../registrarse.php?p=vendedor&r=4568");
  
	}	
	 

}


?>