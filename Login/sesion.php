<?php  
        $dbhost = "localhost";
		$dbuser = "selection";
 		$dbpass = "";
 		$dbname = "gin_cerv";
 		$tablename= "usuario";
 		$username= $_POST['nombre'];
 		$Password= $_POST['password'];
 		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 		 // Test if connection succeeded
 		 if(mysqli_connect_errno()) {
 		   die("Database connection failed: " . 
        		 mysqli_connect_error() . 
        		 " (" . mysqli_connect_errno() . ")"
   			 );
 		 }
 		 $query = "SELECT *  FROM `$tablename` WHERE nombre_usuario = '$username'" ;
 		 $result = mysqli_query($connection, $query);
 		 	if ($result) {
 		 		$result=mysqli_fetch_assoc($result);
					if (password_verify ($Password,$result["password"])) {
						$_SESSION['loggedin'] = true;
   						$_SESSION['username'] = $username;
                        $_SESSION['password'] = $Password;
    					header('Location: aches.php');


    					} else {
                            echo '<script name="accion">alert("Usuario o contraseña incorrecta") </script>';
    						//header('Location: index.html');

    					}
    				}

    				mysqli_close($connection);

						?>