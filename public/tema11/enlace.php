<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Enlace</title>
</head>
<body>
<?php
class Enlace
	{
		public $enunciado;
		public $enlace; 
		public function mostrar() {
			echo 'Este es un enlace a' .'<a href=https://'.$this->enlace.'>'. $this->enunciado .'</a>';	
		}

	}
	$google = new Enlace();
	$google->enunciado =" Google";
	$google->enlace="www.google.es";	
	$google->mostrar();
	echo "<br/>";
	$google = new Enlace();
	$google->enunciado =" Marca";
	$google->enlace="www.marca.com";	
	$google->mostrar();
?>
</body>
</html>

