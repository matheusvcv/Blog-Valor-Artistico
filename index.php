<?php

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
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Valor Artístico</title>
</head>
<body>
	<div class="faixa">	
	</div>

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

				<img src="img/logob.png" alt="logo">
		</div>
	</div>

	<div class="faixa">
	</div>

		<div>

			<h1 id="sn">Sobre Nós:</h1>

			<p>O Valor Artístico é um blog que tem o intuito de trazer ao público conteúdos voltados à sensação que sentimos quando algo nos toca profundamente. Nosso intuito é compartilhar essas experiências, de modo à conectar uma pluralidade de experiências individuais e aprender uns com os outros. Acreditamos que o compartilhamento de sentimentos ajuda na compreensão humana e na construção de relacionamentos.</p><br>

			<p><strong>Atenção:</strong> Entendemos que cada indivíduo é dententor de uma sensibilidade artística única, que tem a ver com sua própria inividualidade e essência. Sendo assim, a arte fala com cada um nós de maneira específica. Não acreditamos na utilização de padrões técncos para avaliar expressões artísticas, e nem na hierarquização de obras ou experiências. O Valor Artístico tem a ver com perspectivas e é qualitativo, não quantitativo.</p><br>

			<div class="quadradop" id="q1">
			</div>
			
		</div>

			<h1>Experiências Escritas</h1>

			<p><q>Todos os elementos da boa escrita dependem da habilidade do escritor de escolher uma palavra em vez de outra. E o que prende e mantém nosso interesse tem tudo a ver com essas escolhas.</q><em><strong>Francine Prose.</strong></em></p><br>

			<div align="center">
				<div class="quadrado" id="q2">
				</div>

				<div class="quadrado" id="q3">
				</div>

				<div class="quadrado" id="q4">
				</div>
			</div>

			<p>Sabe quando você e exposto a algum tipo de expressão artística humana e ela te toca de tal forma que você simplesmente precisa falar sobre isso?</p>
			<p>Essa parte do blog é destinada para exposição doe artigos de pessoas que decidiram expressar esses sentimentos de maneira escrita. Clique no botão abaixo e seja direcionado para a nossa biblioteca de artigos e entenda como a arte foi recebida pelos nossos escritores voluntários:</p><br>

			<div align="center">

			<br><a class="botao" href="experiencias-escritas.php">Experiências Escritas</a>

			</div>

			<h1>Nosso PodCast</h1>

			<h1>CostaViana Enterprise</h1>

			<h1>Conheça Nosso Desenvolvedor</h1>

	<div class="faixa">	
	</div>

	<div id="container1">

		<div id="logo">
			
			<a href="https://www.instagram.com/matheusvcv/" target="_blank" type="external"><img src="img/insta.png" alt="instagram" align="left" width="28" height="28"></a>

			<a href="https://www.linkedin.com/in/matheusvcv/" target="_blank" type="external"><img src="img/in.png" alt="Linkedin" align="left"  width="28" height="28"></a>

			<a href="https://www.youtube.com/channel/UCuosS6TLk6g00axCYUM98UQ" target="_blank" type="external"><img src="img/tube.png"  align="left"  alt="YouTube" width="28" height="28"></a>

			<a href="https://github.com/matheusvcv" target="_blank" type="external"><img src="img/git.png" alt="github"  align="left"  width="28" height="28"></a>


			<img src="img/cosvib.png" alt="logo CVE">
			<img src="img/rodlogo.png" alt="logo VA">

			<img src="img/php.png" alt="php"  align="right"  width="28" height="28">
			<img src="img/html.png" alt="html"  align="right"  width="28" height="28">
			<img src="img/css.png" alt="css"  align="right"  width="28" height="28">
			
		</div>
	</div>

	<div class="faixa">	
	</div>

</body>
</html>