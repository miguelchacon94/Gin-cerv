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
			<li><a href=index.html>Home</a></li>
  			<li><a class="active" href="Cervezas/index.php">Cervezas</a></li>
  			<li><a href="">Vinos</a></li>
  			<li><a href="Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="../Login/index.html">Entrar</a></li>
  			<li><a href="">About Us</a></li>
  		</ul>
		</nav>
		<ul>

		<?php

		$dbhost = "localhost";
  		$dbuser = "selection";
 		$dbpass = "";
 		$dbname = "gin_cerv";
 		$tablename= "cerveza";
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
    // output data of each row
    				while($row = $result->fetch_assoc()) {
       				 echo "<li> <p> Nombre: " . $row["nombre"]. " </p> <p>Tipo: " . $row["tipo"]. "</p><p> Lugar: " . $row["lugar"]. "</p></li>";
    					}
    					}			
				
				} else {
		// Failure
		// $message = "Subject creation failed";
				die("Database query failed. " . mysqli_error($connection));
			}
		?>
		</ul>
	</body>


<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>