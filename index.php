<?php
    include_once('controllers/loginController.php');
    $loginController = new loginController();

    if(isset($_GET['logout'])){
        $loginController->logout();
    }else if(!empty($_POST)){

        $loginController->autentication($_POST);

    }else{
        $loginController->session();

    }

?>