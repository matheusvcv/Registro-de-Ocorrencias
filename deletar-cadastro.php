<?php 
	require "conex.php";
	require "src/aluno.php";

	$delete = New Aluno($conex);
	$deletar = $delete->deletaAluno($_POST['nome']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<link rel="stylesheet" href="style.css">
		<title>Deletar Cadastro</title>
	</head>
	<body>
	</body>
</html>