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

		public function exibirIndividual(string $matricula): array
		{
			$exibirPorNome = $this->conexao->prepare("SELECT * FROM alunos WHERE matricula= ?");

			$exibirPorNome-> bind_param('s', $matricula);

			$exibirPorNome-> execute();

			$aluno = $exibirPorNome->get_result()->fetch_assoc();

			return $aluno;
		}

		/*public function exibeOcorrencia(string $matricula): array
		{
			$exibe = $this->conexao->query("SELECT * FROM ocorrencias WHERE matricula=$matricula");

			/*$exibe-> bind_param('s', $matricula);

			$exibe->execute();

			$exibeAluno = $exibe->get_result()->fetch_assoc();

			return $exibeAluno;
		}*/

		public function deletaAluno(string $matricula): void
		{
			$deletar = $this->conexao->prepare("DELETE FROM alunos WHERE matricula =?");

			$deletar-> bind_param('s', $matricula);

			$deletar-> execute();
		}

		public function alteraAluno(string $nome, string $nascimento, string $turma, string $turno, string $matricula): void
		{
			$alterar = $this->conexao->prepare("UPDATE alunos SET nome=?, nascimento=?, turma=?, turno=? WHERE matricula=?");

			$alterar-> bind_param('sssss', $nome, $nascimento, $turma, $turno, $matricula);

			$alterar-> execute();
		}

		/*public function insereOcorrencia(string $ocorrencia)
		{
			$inserir = $this->conexao->prepare("INSERT INTO alunos(ocorrencia) VALUES(?)");

			$inserir-> bind_param('s', $ocorrencia);

			$inserir-> execute();
		}*/

	}


?>