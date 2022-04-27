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
	}
