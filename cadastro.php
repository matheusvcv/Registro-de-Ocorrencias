<?php
	
	require "protect.php";
	require "conex.php";
	require "src/aluno.php";


	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$adiciona = New Aluno($conex);
		$adiciona-> adicionaAluno($_POST['nome'], $_POST['matricula'], $_POST['data'], $_POST['turma'], $_POST['turno']);

		header('Location: consulta.php');
		die();
	}


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
	<div align="right">
		<a href="logout.php"><button id="button">Sair</button></a>
	</div>
	<div id="caixa">
		<h1><img src="img/cosvib.png" align="left"> Cadastro de Alunos <img src="img/cosvib.png" align="right"></h1>
			<form method="POST" action="cadastro.php">

				<div id="central">
					<strong>Nome do Aluno:</strong><br>
					<input type="text" name="nome"><br>
					<br><strong>Matricula do Aluno:</strong><br>
					<input type="text" name="matricula"><br>
					<br><strong>Data de Nascimento Aluno:</strong><br>
					<input type="date" name="data"><br>
					<br><strong>Turma:</strong><br>
					<input type="text" name="turma"><br>
					<br><strong>Turno:</strong><br>
					<select name="turno">
						<option value="Resposta Ausente">Escolha uma opção</option>
						<option value="Matutino">Matutino</option>
						<option value="Vespertino">Vespertino</option>
						<option value="Integral">Integral</option>
					</select><br>
					<br><input type="submit" value="Cadastrar">
					<input type="reset" value="Limpar">
				</div>
			</form>
			<a href="pag_01.php"><button id="button">Voltar</button></a>
	</div>
</body>
</html>

