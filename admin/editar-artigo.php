<?php

	require "../conex.php";
	require "../src/artigos.php";
	require "../src/redireciona.php";

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$obj_artigo = new Artigos($conexao);

		$art = $obj_artigo-> alterar($_POST['titulo'], $_POST['resumo'], $_POST['conteudo'], $_POST['id']);

		redireciona('/ValorArtistico/admin/index.php');

	}

	$artigo = new Artigos($conexao);
	$art = $artigo-> exibirPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="../img/cosvi.png" type="image/x-icon">
	<link rel="stylesheet" href="../style.css" type="text/css">
	<title>Editar Artigos</title>
</head>
<body>
	<h1>Editar Artigo</h1>

	<div id="artcompleto">
		<form action="editar-artigo.php" method="POST">
			<p>
				<label for="titulo"><strong>Digite o novo título do artigo:</strong></label><br>
				<input type="text" name="titulo" id="titulo" value="<?php echo $art['titulo']; ?>"/>
			</p>
			<p>
				<label for="resumo"><strong>Digite o novo resumo do artigo:</strong></label><br>
				<textarea type="text" name="resumo" id="resumo"><?php echo $art['resumo']; ?></textarea>
			</p>
			<p>
				<label for="conteudo"><strong>Digite aqui o novo conteúdo do artigo:</strong></label><br>
				<textarea type="text" name="conteudo" id="conteudo"><?php echo $art['conteudo']; ?></textarea>
			</p><br>
			<p>
				<input type="hidden" name="id" value="<?php echo $art['id']; ?>">
			</p>

			<button class="botao">Alterar</button>
			<button class="botao"><a href="index.php">Voltar</a></button>

		</form>
		
	</div>

</body>