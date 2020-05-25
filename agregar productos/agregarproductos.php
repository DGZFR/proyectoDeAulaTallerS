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
			    	
			<h1><strong>Modulo Agregar Productos</strong> </h1>
				<p>Panel de control | <span class="label label-info">Supervisor</span></p>
				<p>
			
					<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
      <a href="clientes.php" class="btn btn-primary btn-lg">Clientes</a>
      <a href="proveedores.php" class="btn btn-primary btn-lg">Proveedores</a>
      <a href="reportes.php" class="btn btn-primary btn-lg">Reporte Ventas</a>
				

				</p>
			</div>
		</div>

		
		
		
		
		 <form action="logicaAgregarProducto.php" method="POST">
		
		 <table border="0" align="center">
    
	

				<TR>
		<TD>
				
		<label  class="control-label">Categoria:</label>	
		
		
	
  
 
    <select name="categoria" class="form-control input-smid="txtbox">
    <option> Carnes Rojas</option>
    <option> Especiales </option>
    <option> Entradas </option>
    <option> Comidas De Mar </option>
	<option> Jugos</option>
	<option> Ensaladas</option>
	<option> Pastas</option>
	<option> Comida Mexicana</option>
	<option> Pizzas</option>
    </select>
   			
</TD> 



	<TD>
				
		<label  class="control-label">Nombre Producto:</label>	
		
		
	 <input type="text" class="form-control input-sm"id="txtbox" name="nombre" placeholder="Nombre Del Producto" required>
  
						
</TD> 
				
				
				<TD><label  class="control-label">Cantidad Disponible:</label>	
						
				
	 <input type="text" class="form-control input-sm" id="txtbox" min="1" name="cantidad" maxlength="11" placeholder="ingrese la cantidad" required>
   
	
				</TD> 
				
				
	</TR>
	
	
	<TD><label  class="control-label">Precio De Compra:</label>	
							
 
<input type="text" class="form-control input-sm"id="txtbox" name="compra" maxlength="11" placeholder="ingrese precio" required>
   
		</TD>
	
	<TD><label  class="control-label">Precio Venta</label>	
							
 <input type="text" class="form-control input-sm"id="txtbox" name="pormenor" maxlength="11" placeholder="precio de venta" required>


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
	
    <td><br><input type="SUBMIT"  name="update" class="btn btn-info" id="btnnav" value="Registrar Producto"></a></td>
	
	<td><br><a href="productos.php"><input type="Button"class="btn btn-info" value="Ir Atras"></a></td>
	
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
