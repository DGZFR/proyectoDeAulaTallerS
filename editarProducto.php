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
      <a href="proveedores.php" class="btn btn-primary btn-lg">Proveedores</a>
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
$view = "SELECT * from productos where md5(id) = '$id'";
$result = $db_link->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

	$ID = $_GET['id'];

	$categoria = $_POST['categoria'];
	$nombre = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$compra = $_POST['compra'];
	$pormenor = $_POST['pormenor'];
	$proveedor = $_POST['proveedor'];

	$insert = "UPDATE productos set categoria = '$categoria', nombre = '$nombre', cantidad = '$cantidad', compra = '$compra', pormenor = '$pormenor', proveedor = '$proveedor' where md5(id) = '$ID'";
	
	if($db_link->query($insert)== TRUE){

			echo "<script>window.location.href='productos.php';</script>";			
	}else{

		echo "Ooppss No Fue posible editar el registro" . $conn->error;
		header('location:productos.php');
	}
	
	$db_link->close();
}

?>
   
    <br>
    <form action="" method="POST">
    
	
	
	
	
	 <table border="0" align="center">
    
	

				<TR>
		<TD>
				
		<label  class="control-label">Categoria:</label>	
		
		
	<input type="text" class="form-control input-sm"id="txtbox" name="categoria" placeholder="Categoria" value="<?php echo $row['categoria'];?>" required>
  
						
</TD> 



	<TD>
				
		<label  class="control-label">Nombre:</label>	
		
		
	  <input type="text" class="form-control input-sm"id="txtbox" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'];?>" required>

						
</TD> 
				
				
				<TD><label  class="control-label">Precio Compra:</label>	
						
				
				<input type="text" class="form-control input-sm" id="txtbox" name="compra" placeholder="Precio de Compra" value="<?php echo $row['compra'];?>" required>
    
				</TD> 
				
				
	</TR>
	
	
	<TD><label  class="control-label">Cantidad Disponible:</label>	
							
 <input type="text" class="form-control input-sm" id="txtbox" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad'];?>" required>


		</TD>
	
	<TD><label  class="control-label">Precio Venta</label>	
							
 
<input type="text" class="form-control input-sm" id="txtbox" name="pormenor" placeholder="Precio Venta" value="<?php echo $row['pormenor'];?>" required>
 

		</TD>
	
	<TD><label  class="control-label">Proveedor´:</label>	
							
 
<select name="proveedor" class="form-control input-sm"  id="txtbox">
    
           <?php
require('config.php');
$query="SELECT nombreprov FROM proveedor";
$result1=mysqli_query($db_link, $query);
while ($row1=mysqli_fetch_array($result1)){?>
	<option><?php echo $row1['nombreprov']; ?></option>
       <?php
}?>
    
	</select>

		</TD>
	
	
  
   
    <br>
    <tr  align="center">
    <td></td>
	
    <td><br><input type="SUBMIT"  name="update" class="btn btn-info" id="btnnav" value="Actualizar"></a></td>
	
	<td><br><a href="productos.php"><input type="Button"class="btn btn-info" value="Ir Atras"></a></td>
	
	
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
