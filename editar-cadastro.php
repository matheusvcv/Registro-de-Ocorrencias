<?php
	require 'conex.php';
	require 'src/aluno.php';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$alt_alunos = New Aluno($conex);
		$alt_alunos->alteraAluno($_POST['nome'], $_POST['nascimento'], $_POST['turma'], $_POST['turno'], $_POST['matricula']);

		header("Location:consulta.php");

	}

	$alunos = New Aluno($conex);
	$aluno = $alunos-> exibirIndividual($_GET['matricula']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<title>Editar Cadastro</title>
	</head>
	<body>

		<h1>Alterar dados dos Alunos</h1>


			<form method="POST" action="editar-cadastro.php">		
				<p><strong>Nome:</strong> <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>"></p>
				<p><strong>Matricula:</strong> <input type="text" name="matricula" value="<?php echo $aluno['matricula']; ?>"></p>
				<p><strong>Data de Nascimento:</strong> <input type="text" name="nascimento" value="<?php echo $aluno['nascimento']; ?>"></p>
				<p><strong>Turma:</strong> <input type="text" name="turma" value="<?php echo $aluno['turma']; ?>"></p>
				<p><strong>Turno:</strong> <input type="text" name="turno" value="<?php echo $aluno['turno']; ?>"></p>

					<input type="hidden" name="matricula" value="<?php echo $aluno['matricula'];?>">
					<input type="submit" value="Aletrar">
			</form>
	</body>
</html>