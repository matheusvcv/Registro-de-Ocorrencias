<?php
	require "conex.php";

	class Aluno
	{
		private $conexao;

		public function __construct(mysqli $conexao)
		{
			$this->conexao = $conexao;

		}

		public function exibirAlunos(): array
		{
			$exibir = $this->conexao->query("SELECT nome, matricula, turma, turno FROM alunos");

			$alunos = $exibir-> fetch_all(MYSQLI_ASSOC);

			return $alunos;
		}


	}


?>