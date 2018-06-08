<!DOCTYPE html>
<html lang="es">
<head>
	<title>Gin&cerv</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv=”Content-Language” content=”es”>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv=“refresh” content=“30”>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/CSS.css" >
	<script src='js/elevator.js'></script>
</head>
<body>
	
	<header align="center"><h1>Cervezas</h1></header>
	<body>
		<nav>
		<ul>
			<li><a href=../index.php>Home</a></li>
  			<li><a class="active" href="index.php">Cervezas</a></li>
 			<li><a href="../Vinos/vino.php">Vinos</a></li>
  			<li><a href="../Licores/index.php">Licores generales</a></li>
  			<li><a href="">Otros licores</a></li>
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
	<footer>
		<div class="do-the-thing">
                <div class="elevator">
                    <svg class="sweet-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" height="100px" width="100px">
                        <path d="M70,47.5H30c-1.4,0-2.5,1.1-2.5,2.5v40c0,1.4,1.1,2.5,2.5,2.5h40c1.4,0,2.5-1.1,2.5-2.5V50C72.5,48.6,71.4,47.5,70,47.5z   M47.5,87.5h-5v-25h5V87.5z M57.5,87.5h-5v-25h5V87.5z M67.5,87.5h-5V60c0-1.4-1.1-2.5-2.5-2.5H40c-1.4,0-2.5,1.1-2.5,2.5v27.5h-5  v-35h35V87.5z"/>
                        <path d="M50,42.5c1.4,0,2.5-1.1,2.5-2.5V16l5.7,5.7c0.5,0.5,1.1,0.7,1.8,0.7s1.3-0.2,1.8-0.7c1-1,1-2.6,0-3.5l-10-10  c-1-1-2.6-1-3.5,0l-10,10c-1,1-1,2.6,0,3.5c1,1,2.6,1,3.5,0l5.7-5.7v24C47.5,41.4,48.6,42.5,50,42.5z"/>
                    </svg>
                    
                </div>
            </div>


	</footer>

	<script>

            // Simple elevator usage.
            var elementButton = document.querySelector('.elevator');
            var elevator = new Elevator({
                element: elementButton,
                mainAudio: './music/elevator.mp3', // Music from http://www.bensound.com/
                endAudio:  './music/ding.mp3'
            });

        </script>
</body>

</html>