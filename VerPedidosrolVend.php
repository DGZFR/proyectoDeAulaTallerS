<!DOCTYPE html>
<html lang="es">
  <head>
      

  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Perfil Vendedor</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../vista/assets/css/overhang.min.css" />

	
	
	<link rel="stylesheet" type="text/css" href="../vista/css78/css1.css">
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
				<h1><strong>Registros De Pedidos </strong></h1>
				<p>Panel de control | <span class="label label-info">Vendedor</span></p>
				<p>
			<a href="clientesvendedor.php" class="btn btn-primary btn-lg">Registrar Nuevo Cliente</a>
					<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
					
					

				</p>
			</div>
		</div>
		
		<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="37" align="right">
        
        <form action="BusquedaPedidoCliente.php" method="get" ecntype="multipart/data-form">
        <input type="text" name="query" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="Buscar Pedido, Ingrese Cliente..." /><input type="submit" id="btnsearch" value="Buscar" name="search" />
        </form>
     	</td>
      </tr>
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px"  style="border-bottom:1px solid #030; background: #030; color:#FFF;"><p align="center"> Seleccionar Productos</p> </th>
    </tr>
    
      <tr height="40px">
        <th style="border-bottom:1px solid #333;"> Fecha Pedido </th>
        <th style="border-bottom:1px solid #333;"> Nombre Cliente </th>
        <th style="border-bottom:1px solid #333;"> Categoria del pedido </th>
        <th style="border-bottom:1px solid #333;"> Descripcion Del Pedido </th>
        <th style="border-bottom:1px solid #333;"> Numero De Unidades</th>
        <th style="border-bottom:1px solid #333;"> Valor Del Pedido</th>
	    <th style="border-bottom:1px solid #333;"> Total Cancelado</th>
		<th style="border-bottom:1px solid #333;"> Devueltas Al cliente</th>
      </tr>
      
       
      
       <?php
require('config.php');
$query="SELECT * FROM ventas";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:35px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['fecha']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['cliente']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['categoria']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['nombre']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['cantidad']; ?>unidades. </td>
		<td style="border-bottom:1px solid #333;"> $<?php echo $row['total']; ?> </td>
		  <td style="border-bottom:1px solid #333;">$<?php echo $row['cancelado']; ?> </td>
		   <td style="border-bottom:1px solid #333;">$<?php echo $row['devueltas']; ?> </td>
		
       
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
	<script type="text/javascript" src="../vista/assets/js/overhang.min.js"></script>
    <script src="../vista/assets/js/app.js"></script>
  </body>
</html>







