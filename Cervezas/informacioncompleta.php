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
			<li><a href=../index.html>Home</a></li>
  			<li><a class="active" href="index.php">Cervezas</a></li>
 			<li><a href="../Vinos/vino.php">Vinos</a></li>
  			<li><a href="../Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
  			<li><a href="../Login/index.html">Entrar</a></li>
  			<li><a href="">About Us</a></li>
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
 		 $nombre = $_POST['cerveza'];
 		 if ($_POST) {
    // asignar w1 y w2 a dos variables
    		$query  = "SELECT * ";
			$query .= "FROM cerveza ";
			$query .= "WHERE nombre = '$nombre'";
			$query .= "LIMIT 1"; 

			$result = mysqli_query($connection, $query);
			if ($result) {
			if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<img src="ImagenesCerv/'.$row["nombre"]. '.jpg" alt="'.$row["nombre"].'" width="200px" height="250px"> <p> Nombre:'  . $row["nombre"]. " </p> <p>Tipo: " . $row["tipo"]. "</p> <p> Lugar: " . $row["lugar"]. "</p><p>Opinion: </p><p>".$row["opinion"]."</p>";
    }
}

}else{
	echo "<p>Error</p>";
	die("Database query failed. " . mysqli_error($connection));
} 
}
	

 		 ?>

</body>
</html>