<!DOCTYPE html>
<html lang="es">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';


?>
  <head>
      <script>


function nobackbutton(){
	
   window.location.hash="no-back-button";
	
   window.location.hash="Again-No-back-button" //chrome
	
   window.onhashchange=function(){window.location.hash="no-back-button";}
	
}
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Perfil Vendedor</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />

	
	
	<link rel="stylesheet" type="text/css" href="css78/css1.css">
  </head>


<body onload="nobackbutton();">




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
			    	
				<h1><strong>Bienvenido</strong> </h1>
				<p>Panel de control | <span class="label label-info">Vendedor</span></p>
				<p>
			
					<a href="clientesvendedor.php" class="btn btn-primary btn-lg">Registrar Nuevo Cliente</a>
					
					<a href="VerPedidosrolVend.php" class="btn btn-primary btn-lg">Ver Pedidos</a>
				

				</p>
			</div>
		</div>
		
		<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="37" align="right">
        
        <form action="busquedaproductovendedor.php" method="get" ecntype="multipart/data-form">
        <input type="text" name="query" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="Buscar Producto..." /><input type="submit" id="btnsearch" value="Buscar" name="search" />
        </form>
     	</td>
      </tr>
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #030; background: #030; color:#FFF;"><p align="center"> Seleccionar Productos</p> </th>
    </tr>
    
      <tr height="30px">
        <th style="border-bottom:1px solid #333;"> Categoria </th>
        <th style="border-bottom:1px solid #333;"> Nombre </th>
        <th style="border-bottom:1px solid #333;"> Precio </th>
        <th style="border-bottom:1px solid #333;"> Cantidad Stock </th>
        <th style="border-bottom:1px solid #333;"> Proveedor </th>
        <th style="border-bottom:1px solid #333;"> Hacer Pedido </th>
      </tr>
      
       
      
       <?php
require('config.php');
$query="SELECT * FROM productos";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:35px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['categoria']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['nombre']; ?> </td>
        <td style="border-bottom:1px solid #333;">$ <?php echo $row['pormenor']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['cantidad']; ?> unidades. </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['proveedor']; ?> </td>
		
        <td style="border-bottom:1px solid #333;">
        
        
        <a href="pasarelapagos.php?id=<?php echo md5($row['id']);?>"><input type="button" value="Pedir" style="width:90px; height:30px; color:#black; background: #black; border:1px solid #930; border-radius:3px;"></a>
        
        </td>
      </tr>
   <?php
}?>
      
	  
    </table>
    
  </td>
  </tr>
</table>
	</div>
</div><!-- /.container -->





<br><br><br><br><br><br><br><br>



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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>







