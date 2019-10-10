<?php ini_set('display_errors', 1) ?>
<h1>Esta es mi primera pagina web</h1>

<?php
	$soyvariable= "Pepe Pérez";
	echo $soyvariable; 
 ?>

 <h4>Soy otra etiqueta</h4>
 <?php
 	$yo='Pepa';
	if ($yo=='Pepe') {
	 		echo "Yo soy Pepep";
	 	} else{
	 		echo "Yo no soy Pepe";
	 	}	
 ?>
 <br/><br/>
 <?php echo "Esto se imprime porque quiero"; ?>
<br/><br/>
 <?php 
 	$cadena = "Soy una cadena <br/>"; 

 	echo $cadena;
 	
 	$cadena = 4;
 	
 	echo $cadena."<br/>";
 	
 	$cadena=3.75;
 	
 	echo $cadena."<br/>";

 	$numero = 6;

 	var_dump($cadena);

 	echo "<br/>";

 	echo ($cadena + $numero)."<br/>";
 	$nombre ='Pepe';
 	$cadena1="Mi nombre es $nombre";
 	$cadena2 = 'Mi nombre es $nombre';
 	echo $cadena1."<br/>";
 	echo $cadena2."<br/>";
 	echo 'Mi nombre es '.$nombre.'<br/>';
 ?>
 Mi nombre es <?= $nombre ?> <br/>
 <?php
 	echo empty($cadena) ? "está vacía<br/>" : "No está vacía<br/>";
 	//Seria equivalente a : if($numero){echo "hay alumnos en clase";}else{"no hay alumnos";}
 	echo $numero ? "Hay alumnos en clase<br/>" : "No ha alumnos<br/>";

 	$vector=['Juan','Pepe','Julian',2];
 	var_dump($vector);
 ?>
 <br/>
 <?php
 	$vector[] = "jaime";
 	var_dump($vector);
 	echo "<br/>";
 	$capital['España'] = "Madrid";
 	$capital['Francia'] = "París";
 	var_dump($capital);
 	echo "<br/>";
 	$capital[]=['Italia' => "Roma"];
 	var_dump($capital);
 	echo "<br/>";
 	var_dump($capital[0]['Italia']);
 	unset($capital[0]);
 	echo "<br/>";
 	var_dump($capital);
 	echo "<br/>";
 	$capital['España'] = "Madrid";
 	$capital['Francia'] = "París";
 	$capital['Italia'] = "Roma";
 	foreach ($capital as $key => $value) {
 		echo "La capital de ".$key." es ".$value."<br/>";
 	}
 ?>
 <br/><br/>
<ol>
	<?php foreach ($capital as $key => $value) : ?>
		<li>La capital de <?= $key ?> es <?= $value ?></li>
	<?php endforeach?>
</ol>

<a href="tema6/index.php"> tema6</a>