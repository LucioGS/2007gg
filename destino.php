<html>
<head>
</head>
<body>
<?php

	$el_nombre = $_POST["nombre"];
	$los_apellidos = $_POST["apellidos"];

	/* echo "<a href='destino2.php?nombre=" . $el_nombre . "&apellidos=" . $los_apellidos . "'>REENVIAR</a>"; */

	echo "<a href='destino2.php?nombre=$el_nombre&apellidos=$los_apellidos'>REENVIAR</a>";


?>
</body>
</html>

