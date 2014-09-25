<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Información PHP</title>
</head>
<body>
	<?php
// Imprime ejemplo 'Versión actual de PHP: 5.3.8'
echo 'Versión actual de PHP: ' . phpversion();

// Imprime ejemplo '2.0' o nada si la extensión no está habilitada
echo phpversion('tidy');
?>
</body>
</html>