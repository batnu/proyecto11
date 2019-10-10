<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formularios amigables</title>
</head>
<body>
	<h1>Formulario usables</h1>
	<?php if (! $_POST) { 
		include 'formulario.php';
	}else {
		if (! isset($_POST['name'])) {
			echo "No he recibido el nombre";
		}elseif (strlen($_POST['name'])<3) {
			echo "El nombre es demasiado corto";
		}elseif (! isset($_POST['email'])) {
			echo "No he recibido el email";
		}elseif (strlen($_POST['email'])<6) {
			echo "El correo electrónico no es válido";
		}elseif (! isset($_POST['password'])||!isset($_POST['password2'])) {
			echo "No he recibido las dos contraseñas";
		}elseif (strlen($_POST['password'])<6) {
			echo "La contraseña debe tener al menos 6 caracteres";
		}elseif ($_POST['password'] != $_POST['password2']) {
			echo "Las contraseñas no coinciden";
		}else{
			echo "Todo bien, pasamos a registrar ese usuario";
		}
	} ?>
</body>
</html>