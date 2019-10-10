<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
	<p>
		<label for="name">Nombre</label>
		<input type="text" name="name" value="<?= $_POST['name'] ?>"/>
	</p>
	<p>
		<label for="email">Correo electrónico</label>
		<input type="email" name="email" value="<?= $_POST['email'] ?>" />
	</p>
	<p>
		<label for="password">Introduzca su contraseña</label>
		<input type="password" name="password"/>
	</p>
	<p>
		<label for="password2">Introduzca otra vez su contraseña</label>
		<input type="password" name="password2"/>
	</p>
	<p>
		<label>
			<input type="submit" name="enviar" value="enviar"/>
		</label>
	</p>
</form>