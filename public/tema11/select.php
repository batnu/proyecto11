<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Enlace</title>
</head>
<body>
<?php
class Select
	{
		public $opcion1;
		public $opcion2;
		public $opcion3; 
		public function imprimete() {
			$opcion1 = "<option value=$this->opcion1>$this->opcion1</option>";
			$opcion2 = "<option value=$this->opcion2>$this->opcion2</option>";
			$opcion3 ="<option value=$this->opcion3>$this->opcion3</option>";
			echo "<select>".$opcion1.$opcion2.$opcion3."</select>";	
		}

	}
	$coches = new Select();
	$coches->opcion1 = "opel";
	$coches->opcion2 = "renault";
	$coches->opcion3 = "seat";
	$coches->imprimete();
	
?>
</body>
</html>
