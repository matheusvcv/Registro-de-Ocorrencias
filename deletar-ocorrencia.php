<?php

require "protect.php";
require "conex.php";
require "src/aluno.php";


if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$ocorrencia = New Aluno($conex);
	$deletaOcorrencia = $ocorrencia->deletaOcorrencias($_GET['id']);

	header('Location: consulta.php');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width initial-scale=1.0">
		<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
		<link rel="stylesheet" href="style.css">
		<title>Deletar Ocorrência</title>
	</head>
<body>
	<div id="caixa">
		<h1>Excluir Ocorrências</h1>
	</div>
	<div id="caixa">
		<h1>Você realmente deseja excluir essa ocorrência?</h1>
		<form method="POST" action="">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<button id="button">Excluir</button>
			</form><br>
			<a href="pag_01.php"><button id="button">Voltar</button></a>
		</div>
	</div>
</body>