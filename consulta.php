<?php

	require "conex.php";
	require "src/aluno.php";

	$exibe_alunos = New Aluno($conex);

   $alunos = $exibe_alunos-> exibirAlunos();

   foreach($alunos as $aluno){

   		echo $aluno['nome'] . ' ' . $aluno['matricula'] . ' ' . $aluno['turma'] . ' ' . $aluno['turno'] . ' ' . '<br>';

   }

   ?>

   <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<link rel="stylesheet" href="style.css">
		<title>Registro de Alunos</title>
	</head>
	<body>
		<h1>Alunos Cadastrados</h1>
		<table>
			<tr>
				<th>Nome</th>
				<th>Matrícula</th>
				<th>Turma</th>
				<th>Turno</th>
			</tr>
		</table>
	</body>
</html>

