<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<meta http-equiv=”Content-Language” content=”es”/>
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
		session_start();
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		} else {

   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='index.html'>Login</a>";
exit;
}
$now = time();
if($now > $_SESSION['expire']) {
session_destroy();
echo "Su sesion a terminado, <a href='login.html'>Necesita Hacer Login</a>";
exit;
}


						?>
						<select name="accion">

						<option>Añadir</option>

						<option>Eliminar</option>

						<option>Actualizar</option>

						</select>
						<br>
						<select name="donde" action="acceso.php">

						<option>Cervezas</option>

						<option>Vinos</option>

						<option>Licores</option>

						<option>Otros</option>

						<input type="submit" onclick="" />
						</select>
						<button type="button" src="logout.php">Cerrar Sesion</button>
					<?php

function cerrarSesion(){
	header('Location: ../index.html');
unset($username);
unset($Password);
//$_SESSION = array();


//if (ini_get("session.use_cookies")) {
  //  $params = session_get_cookie_params();
    //setcookie(session_name(), '', time() - 42000,
        //$params["path"], $params["domain"],
        //$params["secure"], $params["httponly"]
    //);
//}

// Finalmente, destruir la sesión.
echo "<p> cerrar</p>";
//header('Location: ../index.html');
}

		mysqli_close($connection);

 		 ?>
</body>
</html>