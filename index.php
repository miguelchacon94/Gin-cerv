<!DOCTYPE html >
<html lang="es">
<head>
	<title>Gin&cerv</title>
	<meta charset="utf-8" />
	<meta http-equiv=”Content-Language” content=”es”/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" >
	<script language="Javascript" src="http://gd.geobytes.com/gd?after=-1&variables=GeobytesCountry,GeobytesCity,GeobytesR egion"></script>
</head>
<body>
	<script type="text/javascript">
		var ciudad = sGeobytesCity;
		var pais = sGeobytesCountry;
	</script>
	<?php

	$dbhost = "localhost";
  		$dbuser = "insertation";
 		$dbpass = "";
 		$dbname = "gin_cerv";
 		$tablename= "visita";

 		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
 		if(mysqli_connect_errno()) {
 		   die("Database connection failed: " . 
        		 mysqli_connect_error() . 
        		 " (" . mysqli_connect_errno() . ")"
   			 );
 		 }
	
	$hoy = date("y.m.d"); 
	$ciudad = "<script> document.write(ciudad) </script>";
	$pais = "<script> document.write(pais) </script>"; 
	//echo "siudad: " .$ciudad ." Pais: ".$pais ; 
	//solo funciona si es en un servidor real, no local
	$query = "INSERT INTO `$tablename` (id, ciuada, pais, fecha) VALUES (,'$ciudad','$pais','$hoy')" ; 
	$connection->close();                   
?> 

	 
	<header align="center"><h1>Gin&Cerv</h1></header>
	<body>
		<nav>
		<ul>
			<li><a class="active" href=index.php>Home</a></li>
  			<li><a href="Cervezas/index.php">Cervezas</a></li>
  			<li><a href="Vinos/vino.php">Vinos</a></li>
  			<li><a href="Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="About/index.html">About Us</a></li>
		</ul>
	</nav>
	</body>
	<div class="row">
			<div class='col-md-2'></div>
      <div class="col-md-5">
				<a href="Vinos/vino.php"> <img 	src="Imagenes\Vinos\Vinos.jpg" alt="Cargando vinos..." width="280px" height="250px" > </a>
      </div>
      <div class="col-md-5">
				<a href="Cervezas/index.php"> <img src="Imagenes\Cervezas.jpeg" alt="Cargando cervezas..." width="280px" height="250px"> </a>
      </div>
    </div>

<br><br>

	<div class="row">
		<div class='col-md-2'></div>
		<div class="col-md-5">
			<a href="Licores/index.php"> <img src="Imagenes\Licores.jpg" alt="Cargando licores..." width="280px" height="250px"> </a>
		</div>
		<div class="col-md-5">
			<a href=""> <img src="Imagenes\Otros\Otros.jpg" alt="Cargando otros..." width="280px" height="250px"/> </a>
		</div>
	</div>
	<footer>
	</footer>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>