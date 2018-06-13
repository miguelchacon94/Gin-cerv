<!DOCTYPE html >
<html lang="es">
<head>
	<title>Gin&cerv</title>
	<meta charset="utf-8" />
	<meta http-equiv=”Content-Language” content=”es”/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" >
	<link href="css/hover.css" rel="stylesheet" media="all">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
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

	 
	<header class="inicial"><h1 align="center">Gin&Cerv</h1></header>
	<body>
		
		<nav>
		<ul>
			<li><a class="active" href=index.php>Home</a></li>
  			<li><a href="Cervezas/index.php">Cervezas</a></li>
  			<li><a href="Vinos/index.php">Vinos</a></li>
  			<li><a href="Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="About/index.html">About Us</a></li>
		</ul>
	</nav>
	
	<div class="row">
		<div class='col-md-1'></div>
      <div class="col-md-5">
				<div > <a href="Vinos/index.php" class="hvr-curl-top-left"> <img 	src="Imagenes\Vinos\Vinos.jpg" alt="Vinos" width="280px" height="250px" > </a> <h4> Vinos </h4> </div>
			</div>
      <div class="col-md-5">
			<div> <a href="Cervezas/index.php" class="hvr-curl-top-right"> <img src="Imagenes\Cervezas.jpeg" alt="Cervezas" width="280px" height="250px"> </a> <h4> Cervezas </h4></div>
			<div class='col-md-1'></div>
	</div>
    </div>

	<div class="row">
		<div class='col-md-1'></div>
		<div class="col-md-5">
		<div > <a href="Licores/index.php" class="hvr-curl-bottom-left"> <img src="Imagenes\Licores.jpg" alt="Licores" width="280px" height="250px"> </a>  <h4> Licores generales </h4> </div>
		</div>
		<div class="col-md-5">
		<div > <a href="" class="hvr-curl-bottom-right"> <img src="Imagenes\Otros\Otros.jpg" alt="Otros" width="280px" height="250px" > </a> </a> <h4> Otros licores </h4> </div>
		<div class='col-md-1'></div>
	</div>
	</div>

</body>
	<footer>
		<p>Si sigue usted navegando es que acepta nuestros <a href="aviso_legal.html"> Terminos y condiciones</a>.</p>
	</footer>
	<script>
function Reproducir(){
document.all.sound.src = "cerveza.mp3"}
</script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>