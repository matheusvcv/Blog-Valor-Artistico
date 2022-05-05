<?php

	require "../conex.php";
	require "../src/artigos.php";
	require "../src/redireciona.php";

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$artigo = new Artigos($conexao);

		$artigo-> deletar($_POST['id']);

		redireciona('/ValorArtistico/admin/index.php');

	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="../img/cosvi.png" type="image/x-icon">
	<link rel="stylesheet" href="../style.css" type="text/css">
	<title>Excluir Artigo</title>
</head>
<body>
	<h1>Excluir um Artigo</h1>
	<div id="artcompleto">
	<h2>Tem certeza que gostaria de excluir este artigo?</h2>
		<form method="POST" action="excluir-artigo.php">
			<p>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<button class="botao">Excluir</button>
		</p>
	</form>
	</div>
</body>