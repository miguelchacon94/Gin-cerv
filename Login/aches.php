<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<meta http-equiv=”Content-Language” content=”es”/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" 
</head>
<body>
	<nav>
		<ul>
			<li><a href=../index.html>Home</a></li>
  			<li><a href="../Cervezas/index.php">Cervezas</a></li>
  			<li><a href="../Vinos/vino.php">Vinos</a></li>
  			<li><a href="../Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a class="active" href="../Login/index.html">Entrar</a></li>
  			<li><a href="">About Us</a></li>
  		</ul>
		</nav>
		<?php
		session_start();
		if(isset($_SESSION['username'])){


						?>
						<select name="accion">

						<option>Añadir</option>

						<option>Eliminar</option>

						<option>Actualizar</option>

						</select>
						<br>
						<select name="donde" action="">

						<option>Cervezas</option>

						<option>Vinos</option>

						<option>Licores</option>

						<option>Otros</option>

						<input type="submit" onclick="" />
						</select>
						<button type="button" src="logout.php">Cerrar Sesion</button>
	<?php
}else{
	header('Location: index.html');
}
	?>
}
			
</body>
</html>