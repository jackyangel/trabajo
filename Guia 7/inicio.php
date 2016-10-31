<?php 
 require_once('seguridad.php');
 require_once('consulta.php');
 $_SESSION["autenticado"] = "si";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
</head>
<body>
	<?php
	   /*if(isset($_GET["errorusuario"]))
	      if($_GET["errorusuario"]=="si"){
	?>
	<script language="javascript">alert("Datos incorrectos");</script>
	<?php 
	}*/
	?>
	<div class="log col-md-4 col-md-offset-4">
	<h1><center>Compras</center></h1>
	<small>Usuario <?php echo utf8_encode($_SESSION['nombreusr']); ?></small>
	<p>Para comprar ingresa la cnatidad del producto que deseas y luego has click en comprar. El precio indicado es por unidad.</p>
		<form class="form-inline" style="margin-bottom:10px; width:100%;" method="get" action="compra.php">
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputAmount"></label>
		    <div class="input-group">
		      <div class="input-group-addon" style="width:100px;">camisa</div>
		      <input type="text" class="form-control" name="cantidad1" placeholder="Cantidad" style="width:100px;" required>
		      <div class="input-group-addon">$10</div>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary" >comprar </button>
		</form>

		<form class="form-inline" style="margin-bottom:10px; width:100%;" method="get" action="compra2.php">
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputAmount"></label>
		    <div class="input-group">
		      <div class="input-group-addon" style="width:100px">pantalon</div>
		      <input type="text" class="form-control" name="cantidad2" placeholder="Cantidad" style="width:100px;">
		      <div class="input-group-addon">$20</div>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary" >comprar</button>
		</form>
		<form class="form-inline" style="margin-bottom:10px; width:100%;" method="get" action="compra3.php">
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputAmount"></label>
		    <div class="input-group">
		      <div class="input-group-addon" style="width:100px">zapatos</div>
		      <input type="text" class="form-control" name="cantidad3" placeholder="Cantidad" style="width:100px;">
		      <div class="input-group-addon">$50</div>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary" >comprar</button>
		</form>
		<p>A continuación se muestra su compra:</p>
		<table class="table table-bordered">
			<tr>
				<td>Producto</td>
				<td>Cantidad</td>
				<td>Precio total</td>
			</tr>
			<tr>
				<td> <?php echo $producto1; ?> </td>
				<td> <?php echo $cant; ?> </td>
				<td> $<?php echo $pre; ?> </td>
			</tr>
			<tr>
				<td> <?php echo $producto2;?> </td>
				<td> <?php echo $cant2; ?> </td>
				<td> $<?php echo $pre2;?> </td>
			</tr>
			<tr>
				<td> <?php echo $producto3;?> </td>
				<td> <?php echo $cant3; ?> </td>
				<td> $<?php echo $pre3; ?> </td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>
				<td>Total a pagar</td>
				<td>$ <?php echo $total; ?></td>
			</tr>
		</table>
		<center><p>Para regresar de click <a href="inicio.php" class="btn btn-warning">Aquí</a></p></center>
	</div>	
</body>