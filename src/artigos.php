<?php

	class Artigos
	{
		private $mysql;

		public function __construct(mysqli $mysql)
		{
			$this->mysql = $mysql;
		}

		public function exibirArtigos(): array
		{
			$resultado = $this->mysql->query("SELECT id, titulo, conteudo, resumo FROM artigos");

			$artigo = $resultado-> fetch_all(MYSQLI_ASSOC);

			return $artigo;
		}

		public function exibirPorId(string $id): array
		{
			$setArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo, resumo FROM artigos WHERE id=?");

			$setArtigo-> bind_param('s', $id);

			$setArtigo-> execute();

			$artigo = $setArtigo-> get_result()->fetch_assoc();

			return $artigo;
		}

		public function adicionar(string $titulo, string $resumo, string $conteudo): void
		{
			$adiciona = $this->mysql->prepare("INSERT INTO artigos(titulo, resumo, conteudo) VALUES(?,?,?)");

			$adiciona-> bind_param('sss', $titulo, $resumo, $conteudo);

			$adiciona-> execute();

		}

		public function deletar(string $id): void
		{
			$deleta = $this->mysql->prepare("DELETE FROM artigos WHERE id=?");

			$deleta-> bind_param('s', $id);

			$deleta-> execute();

		}

		public function alterar(string $titulo, string $resumo, string $conteudo, string $id): void
		{
			$altera = $this->mysql->prepare("UPDATE artigos SET titulo=?, resumo=?, conteudo=? WHERE id=?");

			$altera-> bind_param('ssss', $titulo, $resumo, $conteudo, $id);

			$altera-> execute();
		}

		
	}
