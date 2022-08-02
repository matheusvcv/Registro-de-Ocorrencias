<?php
	
	require"conex.php";
	require"src/aluno.php";

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$insere = New Aluno($conex);
		$insere-> adicionaAluno($_POST['nome'], $_POST['matricula'], $_POST['data'], $_POST['turma'], $_POST['turno'], $_POST['ocorrencia']);

		header("Location: consulta.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="img/cosvi.png">
	<title></title>
</head>
<body>
	<h1>Nova ocorrência</h1>
	<form method="POST" action="inserir-ocorrencia.php">
		<p><strong>Data da ocorrência:</strong></p><input type="date" name="data_ocorrencia"><br>
		<strong><p>Relate o ocorrido:</p></strong><textarea name="ocorrencia" placeholder="Escreva aqui o ocorrido" cols="30" rows="10"></textarea><br>
		<br><input type="submit" value="Registrar">
	</form>
</body>
</html>