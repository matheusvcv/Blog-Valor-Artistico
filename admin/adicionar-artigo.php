<?php

	require "../conex.php";
	require "../src/artigos.php";
	require "../src/redireciona.php";


	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$artigo = new Artigos($conexao);
		$artigo-> adicionar($_POST['titulo'], $_POST['resumo'], $_POST['conteudo']);

		redireciona('/ValorArtistico/index.php');		

	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="../img/cosvi.png" type="image/x-icon">
	<link rel="stylesheet" href="../style.css" type="text/css">
	<title>Adicionar Artigo</title>
</head>
<body>
	<h1>Adicionar Um Novo Artigo</h1>
	<div id="artcompleto">

		<form action="adicionar-artigo.php" method="POST">

		<p><strong>
			<label for="">Digite o título do novo artigo:</label>
			<input class="campo-form" type="text" name="titulo" id="titulo" />
		</strong></p>

		<p><strong>
			<label for="">Digite o resumo do novo artigo:</label>
			<textarea class="campo-form" type="text" name="resumo" id="resumo"></textarea>
		</strong></p>

		<p><strong>
			<label for="">Digite o conteúdo do novo artigo:</label>
			<textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
		</strong></p>
		<p>
        <input type="submit" value="Criar Artigo">
    	</p>

		</form>
	</div>
</body>