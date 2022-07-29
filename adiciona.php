<?php

	require "conex.php";

		$nome = $_POST['nome'];
		$matricula = $_POST['matricula'];
		$data = $_POST['data'];
		$turma = $_POST['turma'];
		$turno = $_POST['turno'];

	$inserir = $conex-> query("INSERT INTO alunos VALUES('$nome', '$matricula', '$data', '$turma', '$turno')");