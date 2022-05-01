<?php

	require "../conex.php";
	require "../src/artigos.php";

	$artigo = new Artigos($conexao);
	$artigos = $artigo-> exibirArtigos();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="../img/cosvi.png" type="image/x-icon">
	<link rel="stylesheet" href="../style.css" type="text/css">
	<title>Página Administrativa</title>
</head>
<body>
	<h1>Página Administrativa Valor Artístico</h1>

	<div id="artcompleto">

		<h2>Editar ou Excluir Artigos:</h2>

		<?php foreach($artigos as $art): ?>
		<p><strong> - <?php echo $art['titulo']; ?></strong></p><br>
	
			<nav>	
				<a class="botao" href="editar-artigo.php?id=<?php echo $art['id'];?>">Editar</a>

				<a class="botao" href="excluir-artigo.php?id=<?php echo $art['id'];?>">Excluir</a>
			</nav>

		<?php endforeach; ?>
	</div>

	<div id="artcompleto">

	<h2>Adicionar um novo artigo:</h2>

		<a class="botao" href="adicionar-artigo.php">Adicionar Artigo</a>

	</div>
</body>
</html>