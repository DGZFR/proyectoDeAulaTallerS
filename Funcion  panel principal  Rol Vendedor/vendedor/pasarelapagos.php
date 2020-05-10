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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	
	<link rel="stylesheet" type="text/css" href="css78/css1.css">
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
			    	
				<h1><strong>Modulo Transaccional</strong> </h1>
				<p>Panel de control | <span class="label label-info">Vendedor</span></p>
				<p>
			
					<a href="clientesvendedor.php" class="btn btn-primary btn-lg">Registrar Nuevo Cliente</a>
					
					<a href="VerPedidosrolVend.php" class="btn btn-primary btn-lg">Ver Pedidos</a>
				
                    <a href="index.php" class="btn btn-primary btn-lg">Menu Principal</a>
				</p>
			</div>
		</div>
		
		
		
		
		  <div id="popup-box2" class="popup-position1">
<div id="popup-wrapper2">
<div id="popup-container2">
   
<?php
include 'config.php';

$id = $_GET['id'];
$view = "SELECT * from productos where md5(id) = '$id'";
$result = $db_link->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

	$ID = $_GET['id'];
	
$view1 = "SELECT cantidad from productos where md5(id) = '$id'";
$result1 = $db_link->query($view);
$row2 = $result->fetch_assoc();
	
	$cantrestarstock = $_POST['cantrestarstock'];
	$fecha=$_POST['fecha'];
	$cantidad=$_POST['cantidad'];
	
	$cliente=$_POST['cliente'];
	$categoria=$_POST['categoria'];
	$nombre=$_POST['nombre'];
	$precioventa=$_POST['precioventa'];
	$cantrestarstock=$_POST['cantrestarstock'];
	$total=$_POST['total'];
	$cancelado=$_POST['cancelado'];
	$devueltas=$_POST['devueltas'];
	$ganado = $_POST['ganancia'];

	$insert1 = "UPDATE productos set cantidad = cantidad - '$cantrestarstock' where md5(id) = '$ID'";
	$insert = "INSERT INTO ventas(fecha,cliente,categoria,nombre,precioventa,cantidad,total,ganancia,cancelado,devueltas) VALUES('$fecha','$cliente','$categoria','$nombre','$precioventa','$cantrestarstock','$total','$ganado','$cancelado','$devueltas')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$insert);
	if($db_link->query($insert1)== TRUE){

			echo "pedido correcto";
			header('location:index.php');			
	}
	
	$db_link->close();
}

?>
   
    <br>
    <form action="" method="POST">
    
    <table border="0" align="center">  
    
    <?php
	
	if(isset($_POST['sub']))
	{
	
	@$total = $_POST['total'];
	@$cancelado = $_POST['cancelado'];
	@$cantrestarstock = $_POST['cantrestarstock'];
	@$ganancia = $_POST['ganancia'];
	
	@$ganancia = $ganancia;
	@$cantrestarstock = $cantrestarstock;
	@$ten = $cancelado;
	@$devuelto = $cancelado - $total;
	}
	
	?>
    
    

    
    <form method="POST">
    
    <?php
    
	if(isset($_POST['calculate']))
	{
	@$precioventa = $_POST['precioventa'];
	@$cantrestarstock = $_POST['cantrestarstock'];
	@$ganancia = $_POST['ganancia'];
	@$compra = $_POST['compra'];
	
	@$cantrestarstock = $cantrestarstock;
	@$total = $precioventa * $cantrestarstock;
	@$ganancia = $total - $cantrestarstock * $compra;
	}
	
	
	?>
    
		
	
    <form method="post">
    <tr>
    <td><input type="text" id="txtbox" name="compra" value="<?php echo $row['compra'];?>" hidden><br></td>
    </tr>
    
	
	
	
	
	
	
	<form class="form-horizontal" role="form" id="datos_pedido">
				<div class="row">
				  
				  <div class="col-md-3">
				  <label for="proveedor" class="control-label">Fecha Pedido:</label>
					 
					  <input class="proveedor form-control" type="text" name="fecha" id="txtbox" value="<?php echo "  ". date("Y/m/d")?>" readonly> 
					</select>
					
					
					
					

    
  
				  </div>
				  
					<div class="col-md-3">
					
					
    
    
 
						<label for="transporte" class="control-label">Categoria Del Pedido:</label>	
						<input type="text" class="form-control input-sm"id="txtbox" name="categoria" value="<?php echo $row['categoria'];?>" readonly>
					</div>
					
					<div class="col-md-2">
						<label for="condiciones" class="control-label">Nombre Producto</label>
						
				<input type="text" class="form-control input-sm"id="txtbox" name="nombre" value="<?php echo $row['nombre'];?>" readonly>
    
					
					</div>
					
					
							
				</div>
	
 <hr>
 <div style="position:relative; left:-10px;  ">
	 <div class="col-md-3">
				  <label for="proveedor" class="control-label">Precio Venta:</label>
					 
					<input class="proveedor form-control" type="text" id="txtbox" name="precioventa" value="<?php echo $row['pormenor'];?>" readonly>
					</select>
					<tr>

    

  
				  </div>
				  
</div>
    
	<div class="col-md-3">
					
 
						<label for="transporte" class="control-label">Cantidad A Vender:</label>	
						
						<input type="text" class="form-control input-sm"id="txtbox" name="cantrestarstock" value="<?php echo @$cantrestarstock ?>" placeholder="ingrese la cantidad" required>				
				
				
			
				
				</div>
	
	

	
	
	<div class="col-md-2">
						<label for="condiciones" class="control-label">Monto Total A Pagar:</label>
						
			
    <input type="text" id="txtbox" name="total" value="<?php echo @$total ?>" readonly>
<input type="submit" name="calculate" value="Calcular " id="btncalc">
	
	
					
					</div>
	
	
    
	
		<div style="position:relative; left:-190px; top:107px; ">
	 <div class="col-md-3">
				  <label for="proveedor" class="control-label">Ganancia Del Pedido:</label>
					 
					  
<input type="text" class="proveedor form-control" id="txtbox" name="ganancia" value="<?php echo @$ganancia ?>" readonly>



				</select>
					
			
				  </div>
				  </div>
				 

    </form>
    
    
	
	
	<div style="position:relative; left:-770px; top:50px; ">
	
	<div class="col-md-3">
					
 
						<label for="transporte" class="control-label">Monto Cancelado Por Cliente:</label>	
						
					<input type="text" class="form-control input-sm" id="txtbox" value="<?php echo @$ten ?>" name="cancelado" >
    
					
					</div>
					
					
					
					</div>
	
	
	<div style="position:relative; left:280px; top:-5px; ">
		<div class="col-md-2">
	
						<label for="condiciones" class="control-label">Valor A Devolver:</label>
						
			
    
	<input type="text" class="form-control input-sm" id="txtbox" name="devueltas" value="<?php echo @$devuelto ?>" readonly>
    <input type="submit" value="Calcular" name="sub" id="btncalc">
					
					</div>
					
					</div>
	
	<div style="position:relative; left:-1000px; top:220px; ">
		

   <strong>Seleccione Cliente:</strong>
    <select  name="cliente" id="txtbox" readonly>
    
    <?php
	require('config.php');
	$query="SELECT * FROM clientes";
	$result=mysqli_query($db_link, $query);
	while ($row1=mysqli_fetch_array($result)){?>
    
	<option><?php echo $row1['nombre']; ?></option>
    					
	<?php
}?>
    
    </select>
    

			</div>	
				
    </form>
	
    
    
    <br><br><br><br><br><br><br>
   <tr  align="center">
    <td>&nbsp;  </td>
    <td>
    <br>
   

	<input type="SUBMIT" class="btn btn-info"name="update" id="btnnav"  value="Hacer Pedido"></form>
 
    </td>
    </tr>
	

    
    </table>

</div>
</div>
</div>
  

</table>

</div>

 <hr>
		
		
		
		
		
		
		
		
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







