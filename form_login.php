<?php

session_start();

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
			<form method="POST" action="dados_login.php">
				<p>Digite seu Usuário:</p><input type="text" name="usuario"><br>
				<p>Digite sua Senha:</p><input type="text" name="senha"><br>
				<br><input type="submit" value="Entrar">
			</form>
		</div>
	</div>	
</body>
</html>