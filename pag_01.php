<?php

require "protect.php";

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
		<div align="right">
				<a href="logout.php"><button id="button">Sair</button></a>
		</div>
		<div id="faixa1">
			<h1>Registro de Ocorrências</h1>
		</div>
		<div id="caixa">
			<!-- <img src="img/cosvib.png" align="left">  <img src="img/cosvib.png" align="right"> -->
			<div id="central"><p>Olá, <?php echo '<strong>' . $_SESSION['nome'] . '</strong>'; ?>! O que você gostaria de fazer? Inserir um novo aluno, ou consultar registros e ocorrências?</p></div>
			<div align="center">

				<a href="consulta.php">
				<div id="bloco">
					<h2>Consultar Aluno</h2>
				</div>
				</a><br>

				<a href="cadastro.php">
				<div id="bloco">
					<h2>Cadastrar Novo Aluno</h2>
				</div>

			</div><br>
			</a>
		</div>
	</body>
</html>
