<!doctype html>
<html lang="es_ES">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
<head>

	
	<title>Crear Nueva Cuenta </title>
	
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

</head>


<body class="not-transparent-header">

	<div class="container-wrapper">


		<header id="header">


			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
						<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a  href="index.php">Pagina Principal</a></li>
							<div style="position:absolute; left:900px;  "><a class="btn btn-primary" href="login.php">Iniciar Sesion</a></div>
							
						
						</ul>
					</div>
				
					
					

					
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>
	
	
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					
					<h4 class="modal-title text-center">Crea tu cuenta </h4>
					
				</div>
				
				
				
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Cerrar</button>
				</div>
				
			</div>



			
		</header>


		<div class="main-wrapper">


			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="#">Registrarse---></a></li>
						<li><a href="./login.php"><span>IniciarSesion</span></a></li>
					</ol>
					
				</div>
				
			</div>


			<div class="login-container-wrapper">	
	
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">
								
                                <?php
							
								if (isset($_GET['p'])) {
								$position = $_GET['p'];
                                if ($position == "vendedor") {
                                include 'constants/registro2-vendedor.php';
								}else{
                               
								}	

                                if ($position == "supervisor") {
                                include 'constants/registro2-supervisor.php';
								}else{

								}								
								}else{
		                        
								}
								
								?>

									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								

							</div>
							
							

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
						
				</div>
			
			</footer>
			
		</div>


	</div> 
<script type="text/javascript">
function val(){
if(frm.password.value == "")
{
	alert("Ingrese su Contraseña.");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("La contraseña debe tener como minimo 8 caracteres");
	frm.password.focus();
	return false;
}

if((frm.password.value).length > 20)
{
	alert("La contraseña debe tener como maximo 20 caracteres");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("Ingrese otra vez su contraseña");
	return false;
}
if(frm.confirmpassword.value != frm.password.value)
{
	alert("Las contraseñas no son iguales");
	return false;
}

return true;
}
</script>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>

</html>