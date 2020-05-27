<!DOCTYPE html>
<html lang="es">
  <head>
    <?php session_start();?>
    <meta charset="utf-8">


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
     
       
     
           

<div style="position:absolute; left:100px;">	<a href="../cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
  
	   </div>
 
    </nav>




<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		
		
		
		<div class="jumbotron">
			<div class="container text-center">
			    	
			<h1><strong>Modulo Editar Productos</strong> </h1>
				<p>Panel de control | <span class="label label-info">Supervisor</span></p>
				<p>
			
					<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
      <a href="clientes.php" class="btn btn-primary btn-lg">Clientes</a>
      <a href="productos.php" class="btn btn-primary btn-lg">Productos</a>
      <a href="reportes.php" class="btn btn-primary btn-lg">Reporte Ventas</a>
				

				</p>
			</div>
		</div>


  
  <div id="popup-box2" class="popup-position1">
<div id="popup-wrapper1">
<div id="popup-container1">
    

<?php

include 'config.php';

$id = $_GET['id'];
$view = "SELECT * from proveedor where md5(id) = '$id'";
$result = $db_link->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

	$ID = $_GET['id'];

	$nombreprov = $_POST['nombreprov'];
	$encargado = $_POST['encargado'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	

	$insert = "UPDATE proveedor set nombreprov = '$nombreprov', encargado = '$encargado', direccion = '$direccion', telefono = '$telefono' where md5(id) = '$ID'";
	
	if($db_link->query($insert)== TRUE){

	 echo "<script>window.location.href='proveedores.php';</script>";		
	}else{

		echo "Ooppss No Fue posible editar el registro" . $conn->error;
		header('location:proveedores.php');
	}
	
	$db_link->close();
}

?>
   
    <br>
    <form action="" method="POST">
    
	
	
	
	
	 <table border="0" align="center">
    
	

				<TR>
		<TD>
				
		<label  class="control-label">Nombre Proveedor:</label>	
		
		
	<input type="text" class="form-control input-sm"id="txtbox" name="nombreprov" placeholder="Ingrese Proveedor" value="<?php echo $row['nombreprov'];?>" required>
  
						
</TD> 



	<TD>
				
		<label  class="control-label">Persona Encargada:</label>	
		
		
	  <input type="text" class="form-control input-sm"id="txtbox" name="encargado" placeholder="Ingrese Encargado" value="<?php echo $row['encargado'];?>" required>

						
</TD> 
				
				
				<TD><label  class="control-label">Direccion:</label>	
						
				
				<input type="text" class="form-control input-sm" id="txtbox" name="direccion" placeholder="Ingrese Direccion" value="<?php echo $row['direccion'];?>" required>
    
				</TD> 
				
				
	</TR>
	
	
	<TD><label  class="control-label">Telefono:</label>	
							
 <input type="text" class="form-control input-sm" id="txtbox" name="telefono" placeholder="Ingrese Telefono" value="<?php echo $row['telefono'];?>" required>


		</TD>
	
	
    <br>
    <tr  align="center">
    <td></td>
	
    <td><br><input type="SUBMIT"  name="update" class="btn btn-info" id="btnnav" value="Actualizar"></a></td>
	
	<td><br><a href="proveedores.php"><input type="Button"class="btn btn-info" value="Ir Atras"></a></td>
	
	
    </tr>
    
    </table>
	
	
	
	
	<table border="0" align="center">    
   

    
 
    
    <br><br>
    <br><br>
    <br><br>
    
    </table>

</div>
</div>
</div>
  
  <br>
  
  
</table>

</div>
<script type="text/javascript">
    window.history.forward();
    function noBack(){ 
    window.history.forward();
     }
  

 $(document).ready(function() {
            noBack();
}); 

</script>   

</body>
</html>
