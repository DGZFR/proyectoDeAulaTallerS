<!DOCTYPE html>
<html lang="es">
  <head>
    <?php session_start();?>

    <title>Perfil Supervisor</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />

	
	
	<link rel="stylesheet" type="text/css" href="css788/css1.css">
	<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>
  </head>

  <body>






<nav class="navbar navbar-inverse navbar-fixed-top">
     
       
     
           


	<div style="position:absolute; left:1100px;">	<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
      </div>
 
    </nav>




<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Reportes De Ventas</strong> </h1>
				<p>Panel de control | <span class="label label-info">Supervisor</p>
				<p>
			
						<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
      <a href="productos.php" class="btn btn-primary btn-lg">Productos</a>
      <a href="clientes.php" class="btn btn-primary btn-lg">Clientes</a>
      <a href="proveedores.php" class="btn btn-primary btn-lg">Proveedores</a>
      
				</p>
			</div>
		</div>
		
		<table border="0" align="center" cellpadding="0" cellspacing="0" width="80%">
      
      <tr>
      <form action="reportes.php" method="get" ecntype="multipart/data-form">
        <td width="48%" height="37" align="right"><input type="date" name="d1" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="2015-05-13" required /></td>
        <td width="15%" align="left"> <input type="date" name="d2" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="2015-06-13" required  /> </td>
        <td width="0%" align="left"><input type="submit" id="btnsearch" value="Buscar" name="search" /></td>
        </form>
      </tr>
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #030; background: #030; color:#FFF;"> <p align="center">Ventas Registradas Por Rango De Fecha </p></th>
    </tr>
    
      <tr height="30px">
      	<th style="border-bottom:1px solid #333;"> Fecha </th>
      	<th style="border-bottom:1px solid #333;"> Nombre Cliente</th>
        <th style="border-bottom:1px solid #333;"> Producto Vendido Cliente </th>
        <th style="border-bottom:1px solid #333;"> Cantidad Vendida </th>
        <th style="border-bottom:1px solid #333;"> Monto Pagado </th>
        <th style="border-bottom:1px solid #333;"> Ganancias </th>
      </tr>
      
        
      
       <?php
require('config.php');

if(isset($_GET['search'])){
			$d1 = $_GET['d1'];
			$d2 = $_GET['d2'];
			
$query="SELECT * FROM ventas WHERE fecha BETWEEN '$d1' and '$d2'";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:35px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['fecha']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['cliente']; ?> </td>
 
        <td style="border-bottom:1px solid #333;"> <?php echo $row['nombre']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['cantidad']; ?>unidades. </td>
		<td style="border-bottom:1px solid #333;"> $<?php echo $row['total']; ?> </td>
		  <td style="border-bottom:1px solid #333;">$<?php echo $row['ganancia']; ?> </td>
		  
		  
      </tr>
   <?php
}}?>
      
    </table>
    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-bottom-color: #030; border-right-color: #030; border-bottom-style: solid; border-right-style: solid; border-bottom-width: 1px; border-right-width: 1px;">
      <tr>
        <td width="20%" style="border-left-color: #030; border-left-style: solid; border-left-width: 1px;">&nbsp;</td>
        <td width="20%">&nbsp;</td>
        <td width="39%">&nbsp;</td>
        <td width="11%" style="border-bottom-color: #030; border-bottom-style: solid; border-bottom-width: 1px; border-left-color: #030; border-right-color: #030; border-left-style: solid; border-right-style: solid; border-left-width: 1px; border-right-width: 1px; height:35px;">Ventas</td>
        <td width="10%" style="border-bottom-color: #030; border-bottom-style: solid; border-bottom-width: 1px ; height:35px;">Ganancia</td>
      </tr>
      <tr>
        <td style="border-bottom-color: #030; border-bottom-style: none; border-bottom-width: 1px; border-right-width: 1px; border-top-width: 1px; border-left-color: #030; border-left-style: solid; border-left-width: 1px;">Total Ingresos:</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border-left-color: #030; height:35px; border-right-color: #030; border-left-style: solid; border-right-style: solid; border-left-width: 1px; border-right-width: 1px;">
        
        <?php
			if(isset($_GET['search'])){
			$d1 = $_GET['d1'];
			$d2 = $_GET['d2'];
				$view1 = "SELECT sum(total) FROM ventas WHERE fecha BETWEEN '$d1' and '$d2'";
				$results=mysqli_query($db_link, $view1);
				for($i=0; $rows = mysqli_fetch_array($results); $i++){
				$total=$rows['sum(total)'];
				echo "$"." ".$total;
				}
			}
	  ?>
        
        </td>
        <td height = "35px">
        
        <?php
		if(isset($_GET['search'])){
			$d1 = $_GET['d1'];
			$d2 = $_GET['d2'];

				$view2 = "SELECT sum(ganancia) FROM ventas WHERE fecha BETWEEN '$d1' and '$d2'";
				$results1=mysqli_query($db_link, $view2);
				for($i=0; $rowss = mysqli_fetch_array($results1); $i++){
				$ganancia=$rowss['sum(ganancia)'];
				echo "$"." ".$ganancia;
				}
		}
	  ?>
        
        </td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
  </tr>
</table>

    
  </td>
  </tr>
</table>
<br><br><br><br><br><br><br>
<div id="bdcontainer"></div>

<div id="footer">
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
    Proyecto de Aula Taller De Ingenieria De Software</a>	
    </td>
</tr>
</table>
</div>

</div>




 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>







