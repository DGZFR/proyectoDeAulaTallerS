<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
$myid = $_SESSION['myid'];
$mylogin = $_SESSION['lastlogin'];
$myrole = $_SESSION['role'];
	
$user_online = true;	
}else{
$user_online = false;
}
?>