<!DOCTYPE html>
<html>
<head>
	<title>Sesi&oacute;n</title>
	<link rel="stylesheet" href="Color2.css">

</head>
<body>
<?php
$codigo = $_POST['codigo'];
$contra = $_POST['contra'];

if ($codigo == "100" && $contra == "udg") {
  echo "<h1 id='BIENVENIDO'>BIENVENIDO</h1>";
	# code...
} else {
	echo "<h1>ERROR</h1>";

	# code...
}

?>
<form method="post" action="login.php">
	<input type="submit" id="input" name="btnregresar" value="REGRESAR" size="50">
</form>

</body>
</html>
