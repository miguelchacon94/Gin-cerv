<!DOCTYPE html>
<html>
<head>
	<title>Gin&cerv</title>
	<meta charset="utf-8" />
	<meta http-equiv=”Content-Language” content=”es”/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" >
</head>
<body>
	<header align="center"><h1>Licores</h1></header>
	<body>
		<nav>
		<ul>
			<li><a href=../index.php>Home</a></li>
  			<li><a href="../Cervezas/index.php">Cervezas</a></li>
  			<li><a href="../Vinos/vino.php">Vinos</a></li>
  			<li><a class="active" href="index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="../About/index.html">About Us</a></li>
		</ul>
		</nav>
		<div>
		<?php

		$dbhost = "localhost";
  		$dbuser = "selection";
 		$dbpass = "";
 		$dbname = "gin_cerv";
 		$tablename= "licor";
 		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 		 // Test if connection succeeded
 		 if(mysqli_connect_errno()) {
 		   die("Database connection failed: " . 
        		 mysqli_connect_error() . 
        		 " (" . mysqli_connect_errno() . ")"
   			 );
 		 }
 		 	$query = "SELECT * FROM `$tablename`" ;
 		 	$result = mysqli_query($connection, $query);
 		 	if ($result) {
				if ($result->num_rows > 0) {
					$contador=0;
					$iterador=0;
					echo '<div class="row">';
    				while($row = $result->fetch_assoc()) {

       				 if ($contador<4) {
    						
    					
       				 echo '<div class="col-md-4"> <img src="images/'.$row["nombre"]. '.jpg" alt="Licor" width="200px" height="250px"> <p> Nombre:'  . $row["nombre"]. " </p> <p>Tipo: " . $row["tipo"]. "</p> <p> Lugar: " . $row["lugar"]. "</p></div>";
       				 $contador+1;
       				 }else{
       				 	$contador=0;
       				 	echo "</div>";
       				 	echo '<div class="row">';
       				 	echo '<div class="col-md-4"> <img src="images/'.$row["nombre"]. '.jpg" alt="Licor" width="200px" height="250px"> <p> Nombre:'  . $row["nombre"]. " </p> <p>Tipo: " . $row["tipo"]. "</p> <p> Lugar: " . $row["lugar"]. "</p></div>";
       				 	$contador+1;
       				 }
    					}
							echo "</div>";
    					}
    					
    								
				
				} else {
				die("Database query failed. " . mysqli_error($connection));
			}
			mysqli_close($connection);
		?>
		</div>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>