<?php 
require_once('conexion.php');
$result=$conexion->query('INSERT INTO compras VALUES("pantalon",'.$_GET['cantidad2'].',20)');
$conexion->close();
		if ($result) {
			echo '<script language="javascript">alert("compra realizada correctamente");</script>';
 			echo '<script type="text/javascript"> window.location.assign("compras.php");</script>';

		}
		else{

			echo '<script language="javascript">alert("Error en compra");</script>';
 			echo '<script type="text/javascript"> window.location.assign("compras.php");</script>';
		}
 ?>