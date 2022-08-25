<?php

	if(!isset($_SESSION)){

		session_start();
	}

	if(!isset($_SESSION['id'])){

		die("<p>Você não pode acessar essa página, pois não está logado.</p><p><a href='index.php'>Clique aqui</a> para ser redirecionado para a página de login</p>");

	}

