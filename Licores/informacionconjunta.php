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
  			<li><a  href="../Cervezas/index.php">Cervezas</a></li>
 			<li><a href="../Vinos/index.php">Vinos</a></li>
  			<li><a class="active" href="index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="../About/index.html">About Us</a></li>
  		</ul>
		</nav>

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
 		  		 if ($_POST) {
 					 $nombre = $_POST['tipo'];

    		$query  = "SELECT * ";
			$query .= "FROM licor ";
			$query .= "WHERE tipo = '$nombre'";

			$result = mysqli_query($connection, $query);
			if ($result) {
				$contador=0;
					$iterador=0;
					echo '<div class="row">';
			while($row = $result->fetch_assoc()) {
    					if ($contador<4) {
    						
    					
       				 echo '<div class="col-md-4"> '; 
       				 echo '<img src="images/'.$row["nombre"]. '.jpg" alt="' .$row["nombre"]. '" width="350px" height="350px"  ><p  > Nombre:'  . $row["nombre"]. ' </p> <p>Tipo: ' . $row["tipo"]. "</p> <p> Lugar: " . utf8_encode($row["lugar"]). "</p></div>";
       				 $contador+1;
       				 $iterador+1;
       				 }else{
       				 	$contador=0;
       				 	echo "</div>";
       				 	echo '<div class="row">';
       				 	echo '<div class="col-md-4"> <img src="images/'.$row["nombre"]. '.jpg" alt="' .$row["nombre"]. '"" width="350px" height="350px"   > <p> Nombre:'  . $row["nombre"]. " </p> <p>Tipo: " . $row["tipo"]. "</p> <p> Lugar: " . utf8_encode($row["lugar"]). "</p></div>";
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

}else{
	echo "<p>Error</p>";
	die("Database query failed. " . mysqli_error($connection));
} 

	mysqli_close($connection);

 		 ?>
</body>
</html>