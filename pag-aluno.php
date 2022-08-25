<?php
	require "protect.php";
	require "conex.php";
	require "src/aluno.php";

	$cadastroAluno = New Aluno($conex);
	$aluno = $cadastroAluno->exibirIndividual($_GET['matricula']);

	$exibeOcorrencia = New Aluno($conex);
	$ocorrencias = $exibeOcorrencia->exibirOcorrencias($_GET['matricula']);

	
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
	<div id="caixa">
	<h1>Págino do Aluno</h1>
		<h2>Dados cadastrais: <img src="img/cosvib.png" align="right"></h2>
		
		<strong><p>Nome: </strong><?php echo $aluno['nome']; ?></p>
		<strong><p>Matrícula: </strong><?php echo $aluno['matricula']; ?></p>
		<strong><p>Data de Nascimento: </strong><?php $nas = strtotime($aluno['nascimento']); echo date('d/m/y', $nas);?></p>
		<strong><p>Turma: </strong><?php echo $aluno['turma']; ?></p>
		<strong><p>Turno: </strong><?php echo $aluno['turno']?></p>

		<div id="central">
			<h2>Ocorrências</h2>
		</div>

			<?php foreach($ocorrencias as $ocorrencia): ?>

				<div id="faixa">
					<strong><p>Data ocorrencia:</strong> 
					<?php 
						$usoData = strtotime($ocorrencia['data_ocorrencia']); 
						echo date('y/m/d', $usoData);

					?></p>
				</div>
				
				<div id="container">
					<strong><p>Ocorrencia:</p></strong> 
					<p><?php echo $ocorrencia['ocorrencia']; ?></p>
				<p>
					<a href="deletar-ocorrencia.php?id=<?php echo $ocorrencia['id']; ?>"><button id="button">Excluir</button>
				</p>
				</div><br>

			<?php endforeach; ?>
	</div><br>
	<div id="central">
		<a href="consulta.php" rel="next"><button id="button">Voltar</button></a>
	</div>
</body>
</html>