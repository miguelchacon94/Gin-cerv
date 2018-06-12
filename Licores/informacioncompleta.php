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
 			<li><a href="../Vinos/vino.php">Vinos</a></li>
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
 					 $nombre = $_POST['licor'];

    		$query  = "SELECT * ";
			$query .= "FROM licor ";
			$query .= "WHERE nombre = '$nombre'";
			$query .= "LIMIT 1"; 

			$result = mysqli_query($connection, $query);
			if ($result) {
			if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<img src="images/'.$row["nombre"]. '.jpg" alt="'.$row["nombre"].'"> <p> Nombre:'  . utf8_encode($row["nombre"]). " </p> <p>Tipo: " . utf8_encode($row["tipo"]). "</p> <p> Lugar: " . utf8_encode($row["lugar"]). "</p><p>Opinion: </p><p>".utf8_encode($row["opinion"])."</p>";
    }
}

}else{
	echo "<p>Error</p>";
	die("Database query failed. " . mysqli_error($connection));
} 
}
	mysqli_close($connection);

 		 ?>

</body>
</html>