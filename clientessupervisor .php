<!DOCTYPE html>
<html lang="es">
  <head>
     
    <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Perfil Supervisor</title>

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
				<h1><strong>Registros Clientes</strong> </h1>
				<p>Panel de control | <span class="label label-info">Supervisor</span></p>
				<p>
				
					<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
      <a href="productos.php" class="btn btn-primary btn-lg">Productos</a>
      <a href="proveedores.php" class="btn btn-primary btn-lg">Proveedores</a>
      <a href="reportes.php" class="btn btn-primary btn-lg">Reporte Ventas</a>
     
      
				</p>
			</div>
		</div>
		
		<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td width="750" align="right">
        
        <form action="buscarcliente.php" method="get" ecntype="multipart/data-form">
        <input type="text" name="query" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="Buscar Clientes..." /><input type="submit" id="btnsearch" value="Buscar" name="search" />
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
     <th colspan="6" align="center" height="55px" style="border-bottom:1px solid #033; background: #999; color:#FFF;">Registro De Clientes Restaurante</th>
    </tr>
    
      <tr height="30px">
        <th style="border-bottom:1px solid #333;"> <div style="position:relative; left:90px;">Nombre</div> </th>
        <th style="border-bottom:1px solid #333;"> <div style="position:relative; left:120px;">Telefono </div> </th>
        <th style="border-bottom:1px solid #333;"> <div style="position:relative; left:135px;">Direccion </div> </th>
      
       
      </tr>
      
        <!-- Search goes here! -->
 

  
  		<!-- Search end here -->
      
       <?php
require('config.php');
$query="SELECT * FROM clientes";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:25px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['nombre']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['telefono']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['direccion']; ?> </td>
        
        <td style="border-bottom:1px solid #333;">
        
       
        </td>
      </tr>
   <?php
}?>
      
    </table>
    
  </td>
  </tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br>
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


<div id="popup-box1" class="popup-position">
<div id="popup-wrapper">
<div id="popup-container">
    <div id="popup-head-color4">
    <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="#FFF"> X </font></a></p>
    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;">Registrar Nuevo Comensal</p>
    </div>
    <br>
    <form action="registroclienterolvendedor.php" method="POST">
    <table border="0" align="center">
    
    <tr>
    <td align="right">Nombre:</td>
    <td><input type="text" id="txtbox" name="nombre" placeholder="Nombre Cliente" required><br></td>
    </tr>
    
    <tr>
    <td align="right">Telefono:</td>
    <td><input type="text" id="txtbox" name="telefono" maxlength="11" placeholder="Numero de Contacto" required><br></td>
    </tr>
    
    <tr>
    <td align="right">Direccion:</td>
    <td><input type="text" id="txtbox" name="direccion" placeholder="Direccion" required><br></td>
    </tr>
    
   
    <br>
    <tr  align="left">
    <td>&nbsp;  </td>
    <td><input type="SUBMIT" id="btnnav" value="Registrar"></a></td>
    </tr>
    
    </table>
    </form>

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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>







