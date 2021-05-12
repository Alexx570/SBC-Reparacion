<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/ocultar.js"></script>

	<?php include "php/source/metas.html";?>
</head>
<body>
	<?php
		if ($_POST["tipo"] == "television")
		{
			include "php/views/tv.php";
			
		}
		else
		{
			include "php/views/estereo.php";	
		}
		?>
</body>
</html>