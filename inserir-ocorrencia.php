<?php
	
	require 'conex.php';
	require 'src/aluno.php';
	

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$ocorrencias = New Aluno($conex);
		$ocorrencias-> adicionaOcorrencia($_POST['data_ocorrencia'], $_POST['ocorrencia'], $_POST['matricula']);

		header('Location: consulta.php');
	}

	$alunos = New Aluno($conex);
	$aluno = $alunos-> exibirIndividual($_GET['matricula']);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="img/cosvi.png">
		<title>Inserir Ocorrência</title>
	</head>
	<body>
		<h1>Nova ocorrência</h1>

		<p>Deseja inserir um registro no cadastro de <strong><?php echo $aluno['nome']; ?></p></strong>

		<form method="POST" action="inserir-ocorrencia.php">

			<input type="text" name="matricula2"  value="<?php echo $_GET['matricula'] ?>">

			<p><strong>Data da ocorrência:</strong></p>
			<input type="date" name="data_ocorrencia"><br>

			<strong><p>Relate o ocorrido:</p></strong>
			<textarea name="ocorrencia" cols="30" rows="10"></textarea>

			<input type="hidden" name="matricula" value="<?php echo $aluno['matricula'];?>">

			<br><input type="submit" value="Registrar">
		</form>
	</body>
</html>