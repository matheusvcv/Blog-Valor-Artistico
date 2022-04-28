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
			$setArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo FROM artigos WHERE id=?");

			$setArtigo-> bind_param('s', $id);

			$setArtigo-> execute();

			$artigo = $setArtigo-> get_result()->fetch_assoc();

			return $artigo;
		}
	}
