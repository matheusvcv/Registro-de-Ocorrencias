<?php
	require "conex.php";

	class Aluno
	{
		private $conexao;

		public function __construct(mysqli $conexao)
		{
			$this->conexao = $conexao;

		}

		public function adicionaAluno(string $nome, string $matricula, string $nascimento, string $turma, string $turno)
		{
			$adicionar = $this->conexao->prepare("INSERT INTO alunos(nome, matricula, nascimento, turma, turno) VALUES(?,?,?,?,?)");

			$adicionar-> bind_param('sssss', $nome, $matricula, $nascimento, $turma, $turno);

			$adicionar-> execute();
		}

		public function exibirAlunos(): array
		{
			$exibir = $this->conexao->query("SELECT nome, matricula, nascimento, turma, turno FROM alunos");

			$alunos = $exibir-> fetch_all(MYSQLI_ASSOC);

			return $alunos;
		}

		public function exibirPorNome(string $nome): array
		{
			$exibirPorNome = $this->conexao->prepare("SELECT * FROM alunos WHERE nome=?");

			$exibirPorNome-> bind_param('s', $nome);

			$exibirPorNome-> execute();

			$aluno = $exibirPorNome->get_result()->fetch_assoc();

			return $aluno;
		}

		public function deletaAluno(string $nome): void
		{
			$deletar = $this->conexao->prepare('DELETE FROM alunos WHERE name = ?');

			$deletar = bind_param('s', $nome);

			$deletar = execute();
		}


	}


?>