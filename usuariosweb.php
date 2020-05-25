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
			    	
			<h1><strong>Modulo Control Roles</strong> </h1>
				<p>Panel de control | <span class="label label-info">Supervisor</span></p>
				<p>
			
				<a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
  <a href="productos.php" class="btn btn-primary btn-lg">Productos</a>
	<a href="clientes.php" class="btn btn-primary btn-lg">Clientes</a>
      <a href="reportes.php" class="btn btn-primary btn-lg">Reporte Ventas</a>
				

				</p>
			</div>
		</div>
		
		<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
   
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #066; color:#033; border-radius:3px;">
    
     <tr>
     <th colspan="6" align="center" height="55px" style="border-bottom:1px solid #033; background: #066; color:#FFF;"><div style="position:relative; left:200px;  ">Usuarios Registrados En La Plataforma</div></th>
    </tr>
    
      <tr height="30px">
       
  <th style="border-bottom:1px solid #333;">     <div style="position:relative; left:40px; top:1px; ">  Usuario    </div></th>
       
   
        <th style="border-bottom:1px solid #333;">  <div style="position:relative; left:70px; top:1px; "> Rol</div></th>
        <th style="border-bottom:1px solid #333;"><div style="position:relative; left:180; top:1px; "> Accion </div> </th>
      </tr>
      
       
      
       <?php
require('config.php');
$query="SELECT * FROM tbl_users";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:25px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['usuario']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['role']; ?> </td>
        <td style="border-bottom:1px solid #333;">
        
        
         
		 <a href="asignarRol.php?member_no=<?php echo md5($row['member_no']);?>"><input type="button" value="AsignarRol" style="width:90px; height:30px; color:#black; background: #black; border:1px solid #930; border-radius:3px;"></a>
        <a href="borrarUsuario.php?member_no=<?php echo md5($row['member_no']);?>"><input type="button" value="Eliminar" style="width:90px; height:30px;  border:1px solid #red; border-radius:3px;;"></a>
      
        </td>
      </tr>
   <?php
}?>
      
    </table>
    
  </td>
  </tr>
</table>
<br><br><br><br><br><br><br>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>







