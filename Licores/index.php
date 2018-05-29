<!DOCTYPE html>
<html>
<head>
	<title>Gin&cerv</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" >
</head>
<body>
	<header align="center"><h1>Cervezas</h1></header>
	<body>
		<nav>
		<ul>
			<li><a class="active" href=../index.html>Home</a></li>
  			<li><a href="../Cervezas/index.php">Cervezas</a></li>
  			<li><a href="">Vinos</a></li>
  			<li><a href="Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="../Login/index.htm">Entrar</a></li>
  			<li><a href="">About Us</a></li>
		</ul>
		</nav>
		<div>
		<?php
			 
			$data = file_get_contents("js/licores.json");
			$licores = json_decode($data);

			
			echo "<br><br>";
			foreach ($licores as $licor) {
			echo $licor->name . "   "; 
			echo "<br>";
	
			}
		?>
		</div>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>