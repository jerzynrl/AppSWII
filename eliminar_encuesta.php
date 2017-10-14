<?php 
	
	include("clase/conectar.php");
	$id_encuesta = $_GET['id_encuesta'];
	$stmt = $conn->prepare("DELETE FROM encuesta WHERE id_encuesta='$id_encuesta'");
	$stmt->execute();
?>


<html>
	<head>
		<title>Eliminar Paciente</title>
	</head>
	
	<body>
		<center>
				<script language="javascript" name="accion">alert("Encuesta Eliminada")</script>
				<script language="javascript"> location.href='datos.php'; </script>
			<p></p>		
						
		</center>
	</body>
</html>