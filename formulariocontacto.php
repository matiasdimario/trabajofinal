<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estiloscontacto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<title>Contacto</title>
</head>
<body>
	
</body>
</html>
<?php include ('header.php')?>
<section>
	<form action="enviar_consulta.php" method="post" class="formulario">
	
	<label for="nombre">Nombre</label>
	<input type="text" name='nombre' class="contacto_input">

	<label for="apeliido">Apellido</label>
	<input type="text" name='apellido' class="contacto_input">

	<label for="correo">Correo</label>
	<input type="text" name='correo' class="contacto_input">

	<label for="mensaje">Mensaje</label>
	<textarea name='mensaje' class="contacto_input" cols="30" rows="10"></textarea>

	<input type="submit" value="Enviar Consulta" class="enviarconsulta">
	<?php
	
	if(isset($_GET['ok'])){
		echo '<h3>Su mensaje ha sido enviado con exito</h3>';
	}
	?>
	</form>
</section>
