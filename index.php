<?php

require 'conex.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>
<body>
	<div id="caixa">
		<div id="central">
			<img src="img/cosvib.png" alt="logo">
			<h1>Entrar no Sitema de Registros</h1>
			<form method="POST" action="">

				<p>Digite seu Usuário:</p><input type="text" name="usuario"><br>
				<p>Digite sua Senha:</p><input type="password" name="senha"><br>
			<?php

				if(isset($_POST['usuario']) || isset($_POST['senha'])) {

					if(strlen($_POST['usuario']) == 0){

						echo "<br>Por favor, preencha o campo destinado ao nome de usuário. <br>";

					}else if(strlen($_POST['senha']) == 0){

						echo "<br>Por favor, preencha o campo destinado à senha.<br>";
					} else {

						$usuario = $conex->real_escape_string($_POST['usuario']);
						$senha = $conex->real_escape_string($_POST['senha']);

						$codigo_consulta = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
						$sql_consulta = $conex->query($codigo_consulta) or die("Falha na execução do código SQL" . $conex->error);

						$quantidade = $sql_consulta->num_rows;

						if($quantidade === 1){

							$usuario = $sql_consulta->fetch_assoc();

							if(!isset($_SESSION)){

								session_start();
							}

								$_SESSION['id'] = $usuario['id'];
								$_SESSION['nome'] = $usuario['nome'];

								header('Location: pag_01.php');
							}else{

								echo "<br> Falha ao logar! E-mail ou senha incorretos. <br>";
							}

						}
					}

			?>
				<br><input type="submit" value="Entrar">
			</form>
		</div>
	</div>	
</body>