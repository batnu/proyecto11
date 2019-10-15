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
		private $enunciado;
		private $enlace; 
		
		public function __construct($enunciado,$enlace){
			$this->enunciado = $enunciado;
			$this->enlace = $enlace;
		}
		
		public function mostrar() {
			$salida = 'Este es un enlace a ' .'<a href=https://'.$this->enlace.'>'. $this->enunciado .'</a>';	
			return $salida;
		}

	}
	$google = new Enlace("Google","www.google.es");
	echo $google->mostrar();
	echo "<br/>";
	$google = new Enlace("Marca","www.marca.com");
	echo $google->mostrar();
	
	?>
</body>
</html>

