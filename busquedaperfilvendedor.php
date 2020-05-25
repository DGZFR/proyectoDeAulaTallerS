
<html lang="es">
  <head>

    <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Perfil Vendedor</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../vista/assets/css/overhang.min.css" />

	
	
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
				<h1><strong>Modulo Productos</strong> </h1>
				<p>Panel de control | <span class="label label-info">Vendedor</span></p>
				<p>
			
						<a href="vendedor.php" class="btn btn-primary btn-lg">Menu Principal</a>
     
      
				</p>
			</div>
		</div>
		
<body>



<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td width="750" align="right">
        
        <form action="busquedaperfilvendedor.php" method="get" ecntype="multipart/data-form">
        <input type="text" name="query" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="Buscar Clientes..." /><input type="submit" id="btnsearch" value="Buscar" name="search" />
      
<a href="clientesvendedor.php" id="btnsearch">Salir De Busqueda</a>
	  </form>
        
        </td>
        
        <td width="127" height="37" align="right">
        </tr>
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #999; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #033; background: #999; color:#FFF;"><p align="center">Informacion De Busqueda</p></th>
    </tr>
    
      <tr height="30px">
      <th style="border-bottom:1px solid #333;"> <div style="position:relative; left:90px;">Nombre</div> </th>
        <th style="border-bottom:1px solid #333;"> <div style="position:relative; left:120px;">Telefono </div> </th>
        <th style="border-bottom:1px solid #333;"> <div style="position:relative; left:135px;">Direccion </div> </th>
      
      </tr>
      
					<?php
					include 'config.php';
					
					if(isset($_GET['search'])){
						$query = $_GET['query'];

						$sql = "select * from clientes where nombre like '%$query%'";

						$result = $db_link->query($sql);
						if($result->num_rows > 0){
							while($row1 = $result->fetch_array()){
		
						?>
						<tr align="center" style="height:25px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row1['nombre']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row1['telefono']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row1['direccion']; ?> </td>
  
        <td style="border-bottom:1px solid #333;">
        
        
        </td>
      </tr>
						<?php
					
							}

						}else{
							echo "<center>No hay registros</center>";
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