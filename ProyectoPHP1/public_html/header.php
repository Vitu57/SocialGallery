<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: right;">
		<?php
		//Mantengo la sesion. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
		session_start();
		if(isset($_SESSION['nombre'])){
			echo "<a href='logout.php'>Cerrar sesion de ".$_SESSION['nombre']."</a>&nbsp;&nbsp;";
		}else{
			header("Location: home.php");
		}
		?>
	</div> 
</body>
</html>