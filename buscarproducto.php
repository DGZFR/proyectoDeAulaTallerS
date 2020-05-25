<!DOCTYPE html>
<html lang="es">
  <head>

    <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Perfil Vendedor</title>

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
				<h1><strong>Modulo Productos</strong> </h1>
				<p>Panel de control | <span class="label label-info">supervisor</span></p>
				<p>
			
						<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
     
      
				</p>
			</div>
		</div>
		
<body>



<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td width="750" align="right">
        
        
        <a href="productos.php" id="btnsearch" style="border:1px solid #CCC;  width:210px; height:30px;">Salir De Busqueda</a>

        
        </td>
        
        <td width="127" height="37" align="right">
        </tr>
    
    </table></th>


  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #030; background: #030; color:#FFF;"> <p align="center"> Resultados Busqueda De Producto </p>	</th>
    </tr>
    
      <tr height="30px">
        <th style="border-bottom:1px solid #333;"> Categoria </th>
        <th style="border-bottom:1px solid #333;"> Nombre </th>
        <th style="border-bottom:1px solid #333;"> Precio Unitario </th>
        <th style="border-bottom:1px solid #333;"> Cantidad Stock </th>
        <th style="border-bottom:1px solid #333;"> Proveedor </th>
        <th style="border-bottom:1px solid #333;"> Realizar Pedido </th>
      </tr>
      
					<?php
					include 'config.php';
					
					if(isset($_GET['search'])){
						$query = $_GET['query'];

						$sql = "select * from productos where categoria like '%$query%' or nombre like '%$query%'";

						$result = $db_link->query($sql);
						if($result->num_rows > 0){
							while($row = $result->fetch_array()){?>
						 <tr align="center" style="height:35px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['categoria']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['nombre']; ?> </td>
        <td style="border-bottom:1px solid #333;">$ <?php echo $row['pormenor']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['cantidad']; ?> unidades. </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['proveedor']; ?> </td>
		
        <td style="border-bottom:1px solid #333;">
        
        
          <a href="editarProducto.php?id=<?php echo md5($row['id']);?>"><input type="button" value="Editar" style="width:90px; height:30px; color:#black; background: #black; border:1px solid #930; border-radius:3px;"></a>
        <a href="borrarProducto.php?id=<?php echo md5($row['id']);?>"><input type="button" value="Eliminar" style="width:90px; height:30px;  border:1px solid #red; border-radius:3px;;"></a>
      
        </td>
      </tr>
						<?php
					
							}

						}else{
							echo "<center>No se encuentran registros</center>";
						}
					}
				$db_link->close();
				?>
				</table>
                </td>
  </tr>
</table>
<br><br><br>
<div id="bdcontainer"></div>

<div id="footer">
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
   </a>	
    </td>
</tr>
</table>
</div>

</div>


<div id="popup-box1" class="popup-position">
<div id="popup-wrapper">
<div id="popup-container">
    
    <br />

</div>
</div>
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