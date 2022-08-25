<?php
require 'conexao.php';

if(isset($_POST['usuario']) || isset($_POST['senha'])) {

	if(strlen($_POST['usuario']) == 0){

		echo "Por favor, preencha o campo destinado ao nome de usuário.";

	}else if(strlen($_POST['senha']) == 0){

		echo "Por favor, preencha o campo destinado à senha.";
	} else {

		$usuario = $conex->real_scape_string($_POST['usuario']);

		$senha = $conex->real_scape_string($_POST['senha']);

		$codigo_consulta = "SELECT usuario, senha FROM login WHERE usuario = $usuario AND senha = $senha";
		$sql_consulta = $conex->query($codigo_consulta) or die("Falha na execução do código SQL" . $conex->error);

		$quantidade = $sql_consulta-> num_rows;

		if($quantidade == 1){

			$usuario = $sql_consulta->fetch_assoc();

			if(!isset($_SESSION)){

				session_start();

				$usuario['id'] = $_SESSION['id'];
				$usuario['nome'] = $_SESSION['nome'];

				header('Location: pag_01.php');
			}else{

				echo "Falha ao logar! E-mail ou senha incorretos.";
			}

		}
	}
}
?>