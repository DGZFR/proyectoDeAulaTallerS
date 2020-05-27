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
			    	
			<h1><strong>Modulo Agregar Proveedor</strong> </h1>
				<p>Panel de control | <span class="label label-info">Supervisor</span></p>
				<p>
			
					<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
  <a href="productos.php" class="btn btn-primary btn-lg">Productos</a>
	<a href="clientes.php" class="btn btn-primary btn-lg">Clientes</a>
      <a href="reportes.php" class="btn btn-primary btn-lg">Reporte Ventas</a>
				

				</p>
			</div>
		</div>

		
		
		
		
		 <form action="logicaAgregarProveedor.php" method="POST">
		
		 <table border="0" align="center">
    
	

				<TR>
		
	<TD>
				
		<label  class="control-label">Nombre Proveedor:</label>	
		
		
	   <input type="text"  class="form-control input-sm"id="txtbox" name="nombreprov" placeholder="Ingrese Nombre " required>
   
						
</TD> 
		


	<TD>
				
		<label  class="control-label">Persona Encargada:</label>	
		
		
	 <input type="text" class="form-control input-sm" id="txtbox" name="encargado" placeholder="Ingrese Encargado" required>
    
						
</TD> 
				
				
				<TD><label  class="control-label">Direccion:</label>	
						
				
	
	 <input type="text" class="form-control input-sm"id="txtbox" name="direccion" placeholder="Ingrese Direccion" required>
  
				</TD> 
				
				
	</TR>
	
	
	<TD><label  class="control-label">Telefono:</label>	
							
 
     <input type="text" class="form-control input-sm"id="txtbox" name="telefono" maxlength="11" placeholder="Ingrese Telefono" required>
  
		</TD>
	
	
	
	
	
  
   
    <br>
    <tr  align="center">
    <td></td>
	
    <td><br><input type="SUBMIT"  name="update" class="btn btn-info" id="btnnav" value="Registrar Proveedor"></a></td>
	
	<td><br><a href="proveedores.php"><input type="Button"class="btn btn-info" value="Ir Atras"></a></td>
	
    </tr>
    
    </table>
	    </form>
	
    
</div>
</div>
</div>
		
		
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
