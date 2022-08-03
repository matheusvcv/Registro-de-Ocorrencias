<?php
	session_start();
	$_SESSION['logged'];
	$_SESSION['logged'] = $_SESSION['logged'] ?? false;

	require 'conex.php';
	require 'src/aluno.php';

	$user = New Aluno($conex);

	$dados = $user->getDados();

	foreach ($dados as $dado){

		$usuario_bd = $dado['usuario'];
		$senha_bd = $dado['senha'];
	}

	$p_usuario = $_POST['usuario'] ?? NULL;
	$p_senha = $_POST['senha'] ?? NULL;

	if($p_usuario === $usuario_bd && $p_senha === $senha_bd){

		$_SESSION['usuario'] = $usuario_bd;
		$_SESSION['senha'] = $senha_bd;
		$_SESSION['logged'] = true;

	}

?>