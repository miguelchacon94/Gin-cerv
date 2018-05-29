<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" 
</head>
<body>
	<nav>
		<ul>
			<li><a href=../index.html>Home</a></li>
  			<li><a href="../Cervezas/index.php">Cervezas</a></li>
  			<li><a href="">Vinos</a></li>
  			<li><a href="../Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a class="active" href="../Login/index.htm">Entrar</a></li>
  			<li><a href="">About Us</a></li>
  		</ul>
		</nav>
		<?php
		$dbhost = "localhost";
  		$dbuser = "selection";
 		$dbpass = "";
 		$dbname = "gin_cerv";
 		$tablename= "usuario";
 		$username= $_POST['nombre'];
 		$Password= $_POST['password'];
 		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 		 // Test if connection succeeded
 		 if(mysqli_connect_errno()) {
 		   die("Database connection failed: " . 
        		 mysqli_connect_error() . 
        		 " (" . mysqli_connect_errno() . ")"
   			 );
 		 }
 		 $query = "SELECT * FROM `$tablename` WHERE nombre_usuario = `$username`" ;
 		 	$result = mysqli_query($connection, $query);
 		 	if ($result) {
				if ($result->num_rows > 0) {
					if (password_verify ($Password,$row["password"])) {
						?>
						<select name="accion">

						<option>Añadir</option>

						<option>Eliminar</option>

						<option>Actualizar</option>

						</select>

						<select name="donde" action="acceso.php">

						<option>Cervezas</option>

						<option>Vinos</option>

						<option>Licores</option>

						<option>Otros</option>

						<input type="submit" />
						</select>

					<?php
					}else{
						echo "<p>Usuario o password incorrecta</p>";
					}

				}else{
					echo "error 1";
				}
			}else
			echo "error 2";

 		 ?>
</body>
</html>