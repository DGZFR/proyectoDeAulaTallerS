<!DOCTYPE html>
<html lang="es">
  <head>
     
    <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Perfil vendedor</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />

	
	
	<link rel="stylesheet" type="text/css" href="../vista/css788/css1.css">
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
				<h1><strong>Modulo Clientes</strong> </h1>
				<p>Panel de control | <span class="label label-info">Vendedor</span></p>
				<p>
				
				<a href="VerPedidosrolVend.php" class="btn btn-primary btn-lg">Ver Pedidos</a>
			
						<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
						
						
     
      
				</p>
			</div>
		</div>
		
		
  </tr>
  
  <br>
  

</table>

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





    
   
    <form action="registroclienterolvendedor.php" method="POST">
    <table border="0" align="center">
    
	

				<TR>
		<TD><label  class="control-label">Nombre Cliente:</label>	
						
	<input type="text" class="form-control input-sm"id="txtbox" name="nombre" placeholder="Ingrese Nombre" required>				
				</TD> 
				
				<TD><label  class="control-label">Numero Telefono:</label>	
						
	<input type="text" class="form-control input-sm"id="txtbox" name="telefono" placeholder="Ingrese Telefono" required>				
				</TD> 
				
				
				<TD><label  class="control-label">Direccion:</label>	
						
	<input type="text" class="form-control input-sm"id="txtbox" name="direccion" placeholder="Ingrese Direccion" required>				
				</TD>
	</TR>
	
	
	
  
   
    <br>
    <tr  align="center">
    <td></td>
	
    <td><br><input type="SUBMIT" class="btn btn-info" id="btnnav" value="Registrar"></a></td>
	
	
	
    </tr>
    
    </table>
    </form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript">
    window.history.forward();
    function noBack(){ 
    window.history.forward();
     }


 $(document).ready(function() {
            noBack();
}); 
</script>   




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>







