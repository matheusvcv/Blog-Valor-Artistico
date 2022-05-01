<?php
	
	require"conex.php";
	require"src/artigos.php";

	$obj_artigo = new Artigos($conexao);
	$artigo = $obj_artigo-> exibirPorId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="img/cosvi.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Valor Artístico</title>
</head>
<body>
	<div id="">

		<h1><?php echo nl2br($artigo['titulo']); ?></h1>

		<p><?php echo $artigo['conteudo'] ?></p>

		<div>
			<a class="botao botao-block" href="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>