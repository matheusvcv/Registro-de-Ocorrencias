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
				<th>Editar dados</th>
				<th>Adicionar Ocorrência</th>
				<th>Deletar</th>

			</tr>
				<?php var_dump($alunos) ?>

				<?php foreach($alunos as $aluno): ?>
			<tr>	
					<td><a href="pag-aluno.php?matricula=<?php echo $aluno['matricula']; ?>"><?php echo $aluno['nome']; ?></a></td>
					<td><?php echo $aluno['matricula']; ?></td>
					<td><?php echo $aluno['nascimento']; ?></td>
					<td><?php echo $aluno['turma']; ?></td>
					<td><?php echo $aluno['turno']; ?></td>
					<td><a href="editar-cadastro.php?matricula=<?php echo $aluno['matricula']; ?>"><img src="img/update.png"></a></td>
					<td><a href="inserir-ocorrencia.php?matricula=<?php echo $aluno['matricula']; ?>"><img src="img/mais.png"></a></td>
					<td><a href="deletar-cadastro.php?matricula=<?php echo $aluno['matricula']; ?>"><img src="img/delete.png"></a></td>
			</tr>
				<?php endforeach; ?>
		</table><br>
		<a href="index.php"><button>Sair</button></a>
	</body>
</html>