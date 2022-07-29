<?php

	$conex = new mysqli("localhost", "root", "", "lista-alunos");

	$conex-> set_charset('utf8');

		if($conex === false){

			echo "Problema na conexão.";
		}
?>