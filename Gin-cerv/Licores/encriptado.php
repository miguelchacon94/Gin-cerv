<!DOCTYPE html>
<html>
<head>
	<title>encriptado</title>
</head>
<body>
	<?php
	$pass=123456;
	$opciones = [
    'cost' => 12,
];
$encriptado = password_hash($pass, PASSWORD_BCRYPT, $opciones);
echo $encriptado." ".password_verify ($pass,$encriptado);

	?>
</body>
</html>