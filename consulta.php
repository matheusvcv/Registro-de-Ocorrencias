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
				<th>Nascimento</th>
				<th>Turma</th>
				<th>Turno</th>
				<th>Adicionar Ocorrência</th>
				<th>Deletar</th>
			</tr>
				<?php foreach($alunos as $aluno): ?>
			<tr>	
					<td><a href="pag-aluno.php?nome=<?php echo $aluno['nome']; ?>"><?php echo $aluno['nome']; ?></a></td>
					<td><?php echo $aluno['matricula']; ?></td>
					<td><?php echo $aluno['nascimento']; ?></td>
					<td><?php echo $aluno['turma']; ?></td>
					<td><?php echo $aluno['turno']; ?></td>
					<td><img src="img/maais.png"></td>
					<td><a href="deletar-cadastro.php"><img src="img/del.png"></a></td>

			</tr>
				<?php endforeach; ?>
		</table>
		<a href="index.php"><button>Sair</button></a>
	</body>
</html>