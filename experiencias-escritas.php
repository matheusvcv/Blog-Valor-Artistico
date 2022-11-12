<?php
	
	require"conex.php";
	require"src/artigos.php";

	$artigo = new Artigos($conexao);
	$artigos = $artigo-> exibirArtigos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="img/cosvi.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Experiências Escritas</title>
</head>
<body>
	<div id="texto">
			<h1>Experiências Escritas</h1>
		</div>

			<div id="artcompleto">

				<?php foreach($artigos as $artigo): ?>

				<h2><?php echo $artigo['titulo']; ?></h2>

				<p><?php echo $artigo['resumo']; ?></p>
				<p><a href="artigo.php?id=<?php echo $artigo['id']; ?>">Leia Mais</a></p>

				<?php endforeach; ?>

			</div>
	</div><br>

		<div id="icone">

			<a href="index.php"><img src="img/voltar.png" height="50" width="50"></a><br>
			<a href="index.php">Voltar</a>
			
		</div>

</body>
</html>