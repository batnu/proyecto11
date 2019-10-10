<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formularios amigables</title>
</head>
<body>
	<h1>Formulario usables</h1>
	<?php 
	function showErrors($errors){
		echo '<ul>';
		foreach ($errors as $error) {
			echo '<li>'.$error.'</li>';
		}
		echo '</ul>';
	}

	if (! $_POST) { 
		include 'formulario.php';
	}else {
		$errors = [];
		if (! isset($_POST['name'])) {
			$errors[] = "No he recibido el nombre";
		}
		if (strlen($_POST['name'])<3) {
			$errors[] = "El nombre es demasiado corto";
		}
		if (! isset($_POST['email'])) {
			$errors[] = "No he recibido el email";
		}
		if (strlen($_POST['email'])<6) {
			$errors[] = "El correo electrónico no es válido";
		}
		if (! isset($_POST['password'])||!isset($_POST['password2'])) {
			$errors[] = "No he recibido las dos contraseñas";
		}if (strlen($_POST['password'])<6) {
			$errors[] = "La contraseña debe tener al menos 6 caracteres";
		}
		if ($_POST['password'] != $_POST['password2']) {
			$errors[] = "Las contraseñas no coinciden";
		}
		if ($errors) {
			showErrors($errors);
			include 'formulario.php';
		} else {
			echo 'Todo bien, pasamos a registrar ese usuario';
		}
	} ?>

</body>
</html>