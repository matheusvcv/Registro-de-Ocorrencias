<?php

	require "conex.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<link rel="stylesheet" href="style.css">
		<title>Cadastro</title>
	</head>
<body>
	<h1>Cadastro de Alunos</h1>
		<form method="POST" action="adiciona.php">

			<strong>Nome do Aluno:</strong><br>
			<input type="text" name="nome"><br>
			<br><strong>Matricula do Aluno:</strong><br>
			<input type="text" name="matricula"><br>
			<br><strong>Data de Nascimento Aluno:</strong><br>
			<input type="date" name="data"><br>
			<br><strong>Turma:</strong><br>
			<input type="text" name="turma"><br>
			<br><strong>Turno:</strong><br>
			<input type="text" name="turno"><br>
			<br><input type="submit" value="Cadastrar">

		</form>

</body>
</html>

