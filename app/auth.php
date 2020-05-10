<?php
date_default_timezone_set('America/Bogota');
$last_login = date('d-m-Y h:m A [T P]');
require '../constants/db_config.php';
$myusuario = $_POST['usuario'];
$mypass = md5($_POST['password']);

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE usuario = :myusuario AND login = :mypassword");
	$stmt->bindParam(':myusuario', $myusuario);
	$stmt->bindParam(':mypassword', $mypass);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	
	if ($rec == "0") {
	 header("location:../login.php?r=0346");
	}else{

    foreach($result as $row)
    {
	$role = $row['role'];
	if ($role == "vendedor") {
	session_start();
    $_SESSION['logged'] = true;
    $_SESSION['myid'] = $row['member_no'];
	$_SESSION['lastlogin'] = $row['last_login'];
	$_SESSION['role'] = $role;
	
	}else{
	session_start();
    $_SESSION['logged'] = true;	
	$_SESSION['myid'] = $row['member_no'];
    $_SESSION['myusuario'] = $row['usuario'];
    $_SESSION['lastlogin'] = $row['last_login'];
	$_SESSION['role'] = $role;
	
		
	}
	
	if ($role == "supervisor"){
		session_start();
	}
	

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("UPDATE tbl_users SET last_login = :lastlogin WHERE usuario= :usuario");
	$stmt->bindParam(':lastlogin', $last_login);
    $stmt->bindParam(':usuario', $myusuario);
    $stmt->execute();
	header("location:../$role");
					  
	}catch(PDOException $e)
    {

    }
	

	}
	
	}

					  
	}catch(PDOException $e)
    {

    }

?>