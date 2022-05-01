<?php

//Algumas tags obsoletas de html estão sendo utilizadas por enquanto, até que seja aplicado CSS

	require "conex.php";
	require "src/artigos.php";

	$artigo = new Artigos($conexao);
	$artigos = $artigo-> exibirArtigos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
	<title>Valor Artístico</title>
</head>
<body>
	
	<div id="container">

		<table width="100%"> 
			<tr>
				<th><a href="" rel="" style="color:white;">VA PodCast</a></th>
				<th><a href="" rel="" style="color:white;">Valor Da Vida</a></th>
				<th><a href="" rel="" style="color:white;">Experiências em Texto</a></th>
				<th><a href="" rel="" style="color:white;">Conheça Nossos Projetos</a></th>
				<th><a href="" rel="" style="color:white;">CostaViana Enterprise</a></th>
			</tr>
		</table><br>

		<div id="logo">
			<picture id="logo">

				<source media="(max-width: 225px)" srcset="img/logo2.png" type="image/png">

				<source media="(max-width: 300px)" srcset="img/logo1.png" type="image/png">

				<img src="img/logob.png" alt="Imagem Grande">
			</picture>
		</div>
	</div>

		<div>

			<h1 id="sn">Sobre Nós:</h1>

			<p>O Valor Artístico é um blog que tem o intuito de trazer ao público conteúdos voltados à sensação que sentimos quando algo nos toca profundamente. Nosso intuito é compartilhar essas experiências, de modo à conectar uma pluralidade de experiências individuais e aprender uns com os outros. Acreditamos que o compartilhamento de sentimentos ajuda na compreensão humana e na construção de relacionamentos.</p>

			<p><strong>Atenção:</strong> Entendemos que cada indivíduo é dententor de uma sensibilidade artística única, que tem a ver com sua própria inividualidade e essência. Sendo assim, a arte fala com cada um nós de maneira específica. Não acreditamos na utilização de padrões técncos para avaliar expressões artísticas, e nem na hierarquização de obras ou experiências. O Valor Artístico tem a ver com perspectivas e é qualitativo, não quantitativo.</p>
			
		</div>

		<div id="texto">
			<h1>Experiências Escritas</h1>
		</div>

			<div id="artigo">

				<?php foreach($artigos as $artigo): ?>

				<h2><?php echo $artigo['titulo']; ?></h2>

				<p><?php echo $artigo['resumo']; ?></p><br>
				<p><a href="artigo.php?id=<?php echo $artigo['id']; ?>">Leia Mais</a></p>

				<?php endforeach; ?>

			</div>

	</div><br>


	<div align="center">
		<img src="img/rodape.png" alt="imagem de rodapé">
	</div>

</body>
</html>