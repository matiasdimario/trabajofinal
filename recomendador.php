<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recomendador</title>
	<link href="css\lightbox.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="estilosrecomendador.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
<?php include("header.php")?>
<section>
<h1 id="bienvenida">Bienvenido al Recomendador, pensa que topico te llama mas la atencion y te muestro recomendaciones.</h1>

	<div class="tags">
		<ul>
			<li><a href="recomendador.php?nom=romance">Romance</a></li>
			<li><a href="recomendador.php?nom=terror">Terror</a></li>
			<li><a href="recomendador.php?nom=epoca moderna">Epoca Moderna</a></li>
			<li><a href="recomendador.php?nom=epoca victoriana">Epoca Victoriana</a></li>
		</ul>

	</div>
	<?php
	$nombre = "";
	$autora = "";
	$sinopsis = "";
	$portada ="";

	if (isset($_GET['nom'])){
		switch(($_GET['nom'])){
			case 'romance':
				$nombre = "Corte de Rosas y Espinas";
				$autora = "Sarah J. Maas";
				$sinopsis = "Este libro es el primero de la serie Corte de Espinas y Rosas. Combina la fantasía con una historia romántica cautivadora. La protagonista, Feyre, se ve arrastrada al mundo de las hadas, donde se enamora de Tamlin, un misterioso ser inmortal. Es una mezcla de romance, acción y elementos fantásticos.";
				$portada = "./recursos/corte_de_rosas_y_espinas.jpg";
				break;
			case 'terror':
				$nombre = "El ciclo de la Luna Roja";
				$autora = "José Antonio Cotrina";
				$sinopsis = "Esta serie de libros mezcla la fantasía con el terror en un mundo donde las criaturas de pesadilla acechan a los humanos durante la noche. La historia sigue a un grupo de jóvenes con habilidades especiales que luchan por sobrevivir y descubrir la verdad detrás de las criaturas que los acechan.";
				$portada = "./recursos/el_ciclo_de_la_luna_roja.jpg";
				break;
			case 'epoca moderna':
				$nombre = "American Gods";
				$autora = "Neil Gaiman";
				$sinopsis = "Esta novela combina fantasía, mitología y elementos de terror. La historia sigue a Shadow Moon, un ex-convicto que se encuentra en medio de una guerra entre los antiguos dioses mitológicos y los nuevos dioses modernos. Es un libro intrigante y lleno de suspenso.";
				$portada = "./recursos/american_gods.jpg";
				break;
			case 'epoca victoriana':
				$nombre = "Jonathan Strange y el señor Norrell";
				$autora = "Susanna Clarke";
				$sinopsis = "Este libro combina la fantasía con la época victoriana. Se desarrolla en una Inglaterra alternativa en la que dos magos intentan revivir la magia en el mundo. Es una historia detallada y atmosférica que te sumerge en la época victoriana con elementos mágicos.";
				$portada = "./recursos/jonathan_strange_y_el_senor_norrel.jpg";
				break;
			
		}
	}
	?>
	<div class="recomendaciones">
	<h2><?php echo $nombre;?> </h2>
	<h3><?php echo $autora;?></h3>
	<p><?php echo $sinopsis;?></p>
	<div class="contenedorimg">
		<img class="portadas" src="<?php echo $portada?>"alt="<?php echo $nombre?>">
	</div>
</section>
<script src="js\lightbox-plus-jquery.min.js"></script>
</body>
</html>