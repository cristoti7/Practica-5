<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario</title>
<link rel="stylesheet" href="Color.css">

</head>

<body>
<form method="POST" action="sesioniniciada.php">
	<fieldset>
		<legend>LOGIN</legend>
		<label id="lblcodigo">C&oacute;digo</label><br/>
		<input type="text" name="codigo" id="txtcodigo" size="20" maxlength="3" required><br/>
		<label id="lblcontraseña">Password</label><br/>
		<input type="password" name="contra" id="pass" size="20" maxlength="3" required><br/>
		<input type="submit" name="btnenviar" value="Entrar" required>
	</fieldset>
	</form>
</body>
</html>
