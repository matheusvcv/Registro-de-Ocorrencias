<?php
	require "conex.php";
	require "src/aluno.php";

	$cadastroAluno = New Aluno($conex);
	$aluno = $cadastroAluno->exibirPorNome($_GET['nome']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<link rel="stylesheet" href="style.css">
		<title>Página do Aluno</title>
	</head>
<body>
	<h1>Págino do Aluno</h1>
	
	<strong><p>Nome: </strong><?php echo $aluno['nome']; ?></p>
	<strong><p>Matrícula: </strong><?php echo $aluno['matricula']; ?></p>
	<strong><p>Data de Nascimento: </strong><?php echo $aluno['nascimento']; ?></p>
	<strong><p>Turma: </strong><?php echo $aluno['turma']; ?></p>
	<strong><p>Turno: </strong><?php echo $aluno['turno']?></p>

	<a href="index.php"><button>Sair</button></a>
</body>
</html>