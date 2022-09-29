<html>
	<head>
		<title>Verificar</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/main.css">
	</head>
	<body>

<?php

	$resultado = $_POST["resultado"];
	$vidas = $_POST["vidas"];

	echo "<form style='display:none' method='POST' ";

	if($resultado == "muerte"){
		$vidas--;
		$_POST["vidas"] = $vidas;
		if($vidas == 0){
			echo "action='Muerte.php'>"; 
		} else {
			echo "action='". $_SERVER['HTTP_REFERER'] ."'>";  
		}
	} else if($resultado != "anterior"){
		echo "action='". $resultado .".php'>"; 
	} else {
		$paginaAnterior = basename($_SERVER['HTTP_REFERER']);
		$paginaDirigir = null;

		if($paginaAnterior == "Sala%202.php"){
			$paginaDirigir = "index.php";
		} else if($paginaAnterior == "Sala%203.php") {
			$paginaDirigir = "Sala 2.php";
		} else if($paginaAnterior == "Sala%204.php") {
			$paginaDirigir = "Sala 3.php";;
		}
		echo "action='". $paginaDirigir ."'>";
		echo $paginaDirigir;
		
	}

	echo "<input value='". $vidas ."' name='vidas'><button id='botonSubmit'>a</button></form>";
	echo "<script>document.getElementById('botonSubmit').click();</script>";


?>
</body>
</html>