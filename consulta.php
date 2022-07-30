<?php

	require "conex.php";
	require "src/aluno.php";

	$exibe_alunos = New Aluno($conex);
  	$alunos = $exibe_alunos-> exibirAlunos();

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
				<?php foreach($alunos as $aluno): ?>
			<tr>	
					<td><?php echo $aluno['nome']; ?></td>
					<td><?php echo $aluno['matricula']; ?></td>
					<td><?php echo $aluno['turma']; ?></td>
					<td><?php echo $aluno['turno']; ?></td>
			</tr>
				<?php endforeach; ?>
		</table>
	</body>
</html>