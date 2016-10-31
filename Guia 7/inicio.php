<?php
  require_once('seguridad.php');
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
	<div class="log col-md-4 col-md-offset-4">
	<h1><center>Bienvenido <?php echo utf8_encode($_SESSION['nombreusr']); ?></center></h1>
		<center><img src="img/bienvenido.jpg" alt="holi"></center>
		<center><p>Para realizar una compra de click <a href="compras.php" class="btn btn-success">Aquí</a></p></center>
		<center><p>Para salir de su sesión de click <a href="logout.php" class="btn btn-warning">Aquí</a></p></center>
	</div>	
</body>
</html>	
