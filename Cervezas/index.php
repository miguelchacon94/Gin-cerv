<!DOCTYPE html>
<html lang="es">
<head>
	<title>Gin&cerv</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv=”Content-Language” content=”es”>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" >
</head>
<body>
	
	<header align="center"><h1>Cervezas</h1></header>
	<body>
		<nav>
		<ul>
			<li><a href=../index.html>Home</a></li>
  			<li><a class="active" href="index.php">Cervezas</a></li>
 			<li><a href="../Vinos/vino.php">Vinos</a></li>
  			<li><a href="../Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="../Login/index.html">Entrar</a></li>
  			<li><a href="../About/index.html">About Us</a></li>
  		</ul>
		</nav>
		

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
					$contador=0;
					$iterador=0;
					echo '<div class="row">';
    				while($row = $result->fetch_assoc()) {
    					if ($contador<4) {
    						
    					
       				 echo '<div class="col-md-4"> '; 
       				 echo '<img src="ImagenesCerv/'.$row["nombre"]. '.jpg" alt="' .$row["nombre"]. '" width="200px" height="250px" ><p  > Nombre:'  . $row["nombre"]. ' </p> <p>Tipo: ' . $row["tipo"]. "</p> <p> Lugar: " . utf8_encode($row["lugar"]). "</p></div>";
       				 $contador+1;
       				 $iterador+1;
       				 }else{
       				 	$contador=0;
       				 	echo "</div>";
       				 	echo '<div class="row">';
       				 	echo '<div class="col-md-4"> <img src="ImagenesCerv/'.$row["nombre"]. '.jpg" alt="' .$row["nombre"]. '" width="200px" height="250px" > <p> Nombre:'  . $row["nombre"]. " </p> <p>Tipo: " . $row["tipo"]. "</p> <p> Lugar: " . utf8_encode($row["lugar"]). "</p></div>";
       				 	$contador+1;
       				 	$iterador+1;
       				 }
    					}
    					if ($contador<3) {
    						$resto=(3-$contador)*4;
    						echo '<div class="col-md-'.$resto.'"></div>';
    					}
							echo "</div>";
    					}			
				
				} else {
		// Failure
		// $message = "Subject creation failed";
				die("Database query failed. " . mysqli_error($connection));
			}
			
			mysqli_close($connection);
		?>
		<div class="row">
			<div class="col-md-3"></div><div class="col-md-6">
				
		<p >¿De que cerveza quieres saber nuestra opinión?</p>
		<form action="informacioncompleta.php" method="POST" >
<select name="cerveza">
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
					while($row = $result->fetch_assoc()) {
			echo'<option name = "nombre" value="'.$row["nombre"].'">'.htmlspecialchars($row["nombre"]).'</option>';
		}
	}
}
mysqli_close($connection);
 ?>
</select>
<p ><input type="submit" /></p>
</form>
</div>
<div class="col-md-3"></div>
</div>
      <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
	

</html>