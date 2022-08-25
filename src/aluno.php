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

		public function adicionaOcorrencia(string $data_ocorrencia, string $ocorrencia, string $matricula)
		{
			$inserir = $this->conexao->prepare("INSERT INTO ocorrencias(data_ocorrencia, ocorrencia, matricula) VALUES(?,?,?)");

			$inserir-> bind_param('sss', $data_ocorrencia, $ocorrencia, $matricula);

			$inserir-> execute();
		}

		public function exibirAlunos(): array
		{
			$exibir = $this->conexao->query("SELECT nome, matricula, nascimento, turma, turno FROM alunos");

			$alunos = $exibir-> fetch_all(MYSQLI_ASSOC);

			return $alunos;
		}

		public function exibirOcorrencias(string $matricula): array
		{

			$exibirOcorrencias = $this->conexao->query("SELECT id, data_ocorrencia, ocorrencia FROM ocorrencias WHERE matricula = $matricula");

			$ocs = $exibirOcorrencias-> fetch_all(MYSQLI_ASSOC);

			return $ocs;

		}


		public function exibirIndividual(string $matricula): array
		{
			$exibirPorNome = $this->conexao->prepare("SELECT * FROM alunos WHERE matricula= ?");

			$exibirPorNome-> bind_param('s', $matricula);

			$exibirPorNome-> execute();

			$aluno = $exibirPorNome->get_result()->fetch_assoc();

			return $aluno;

		}

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

		public function alteraOcorrencia(string $data_ocorrencia, string $ocorrencia, string $matricula): void
		{
			$alterar = $this->conexao->prepare("UPDATE alunos SET data_ocorrencia=?, ocorrencia=? WHERE matricula=?");

			$alterar-> bind_param('sss', $data_ocorrencia, $ocorrencia, $matricula);

			$alterar-> execute();
		}

		public function getDados()
		{
			$getDados = $this->conexao->query("SELECT usuario, senha FROM login");

			$dados = $getDados->fetch_all(MYSQLI_ASSOC);

			return $dados;

		}

		public function deletaOcorrencias(string $id): void
		{
			$deleta = $this->conexao->prepare("DELETE FROM ocorrencias WHERE id = ?");

			$deleta-> bind_param('i', $id);

			$deleta-> execute();
		}


	}


?>