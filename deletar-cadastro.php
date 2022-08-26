<?php

	require "protect.php"; 
	require "conex.php";
	require "src/aluno.php";


	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$deletar = New Aluno($conex);
		$deletar-> deletaAluno($_POST['matricula']);

		header('Location:consulta.php');
		
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<link rel="stylesheet" href="style.css">
		<title>Deletar Cadastro</title>
	</head>
	<body>
		<div align="right">
			<a href="logout.php"><button id="button">Sair</button></a>
		</div>
		<div id="caixa">
			<div id="central">
			<h1>Você realmente quer excluir esse cadastro?</h1>
				<form method="POST" action="deletar-cadastro.php">
					<input type="hidden" name="matricula" value="<?php echo $_GET['matricula']; ?>">
						<button id="button">Excluir</button>
				</form><br>
				<a href="pag_01.php"><button id="button">Voltar</button></a>
			</div>
		</div>
	</body>
</html>