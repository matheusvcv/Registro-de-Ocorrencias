<?php

require "protect.php";
require "conex.php";
require "src/aluno.php";

$exibeOcorrencia = New Aluno($conex);
$ocorrencias = $exibeOcorrencia->exibirOcorrenciasPorId($_GET['id']);


if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$alterar = $exibeOcorrencia->alteraOcorrencia($_POST['data_ocorrencia'], $_POST['ocorrencia'], $_GET['id']);

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
		<title>Alterar Ocorrência</title>
	</head>
<body>
	<div align="right">
		<a href="logout.php"><button id="button">Sair</button></a>
	</div>
	<div id="caixa">
		<h1>Alterar Ocorrências</h1>
	</div>
	<div id="caixa">
		<?php foreach($ocorrencias as $ocorrencia): ?>
		
		<form method="post" action="">

		Data do ocorrido: <input type="date" name="data_ocorrencia" value="<?php echo $ocorrencia['data_ocorrencia']; ?>"><br>

		<br>Relato:<br>

		<br><textarea name="ocorrencia" cols="30" rows="10"><?php echo $ocorrencia['ocorrencia']; ?></textarea><br>

		<?php endforeach; ?>

		<input type="submit" value="Alterar">
		
		</form>

		<br><a href="pag_01.php"><button id="button">Voltar</button></a>
		
		</div>
	</div>
</body>