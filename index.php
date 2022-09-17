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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title>Valor Artístico</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fundo_preto">

	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="img/cosvip.png"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Features</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Pricing</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link disabled">Disabled</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="faixa">	
	</div>

	<div id="container">

		<table width="100%"> 

			<tr>
				<th><a href="experiencias-escritas.php" target="_self" style="color:white;">Experiências Escritas</a></th>	
				<th><a href="podcast.php" target="_self" style="color:white;">VA PodCast</a></th>
				<th><a href="costaviana-enterprise.php" target="_self" style="color:white;">CostaViana Enterprise</a></th>
				<th><a href="pagina-desenvolvedor.php" target="_self" style="color:white;">Página do Desenvolvedor</a></th>
				<th><a href="https://github.com/matheusvcv/Blog-Valor-Artistico" target="_blank" style="color:white;">Colabore Com o Código do Blog</a></th>

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

			<br><div class="quadradop" id="q1">
			</div>
			
		</div><br>

			<h1>Experiências Escritas</h1>

			<p><q>Todos os elementos da boa escrita dependem da habilidade do escritor de escolher uma palavra em vez de outra. E o que prende e mantém nosso interesse tem tudo a ver com essas escolhas.</q><em><strong>Francine Prose.</strong></em></p><br>

			<br><div align="center">
				<div class="quadrado" id="q2">
				</div>

				<div class="quadrado" id="q3">
				</div>

				<div class="quadrado" id="q4">
				</div>
			</div><br>

			<p>Sabe quando você e exposto a algum tipo de expressão artística humana e ela te toca de tal forma que você simplesmente precisa falar sobre isso?</p>
			<p>Essa parte do blog é destinada para exposição doe artigos de pessoas que decidiram expressar esses sentimentos de maneira escrita. Clique no botão abaixo e seja direcionado para a nossa biblioteca de artigos e entenda como a arte foi recebida pelos nossos escritores voluntários:</p><br>

			<div align="center">

				<br><a class="botao" href="experiencias-escritas.php">Experiências Escritas</a>

			</div><br>

			<h1>Nosso PodCast</h1>

			<p>O poder dos podcasts está relacionado com a conexão profunda com o ouvinte e a facilidade no consumo.</p><br>

			<br><div align="center">
				<div class="quadrado" id="q6">
				</div>

				<div class="quadrado" id="q7">
				</div>
			</div>

			<p>O <strong><em>"Valor Artístico PodCast"</em></strong> será formado por um grupo de amigos falando sobre suas próprias experiências artísticas. Faleremos sobre filmes, séries, jogos, livros, viagens, experiências, museus e sobre muitas outras coisas. O diferencail, é que abordaremos todos esses temas sem utilizar nenhum tipo de padrão técnico. Falaremos sobre tudo isso com base somente no valor artístico. Serão visões totalmente únicas e autenticas, que teferão sentir e refletir.</p><br>

			<div align="center">

				<a class="botao" href="podcast.php">V.A. PodCast</a>

			</div><br>

			

			<br><div align="center">

				<img src="img/enfeite.png" alt="enfeite">

			</div><br>



			<h1>CostaViana Enterprise</h1>

			<p>O blog Valor Artístico é um produto CostaViana Enterprise. Logo abaixo, você poderá ler um pequeno resumo sobre a ideia central deste projeto que ainda está em formação, mas tem potêncial para se tornar enorme. A logo do projeto é uma onça-pintada, como forma de representar poder, singularidade e adaptabilidade..</p><br>

			<div align="center">

				<img src="img/cosvib.png" alt="logo CVE">

			</div>

				<p>A CostaViana Enterprise é um projeto de empresa de tecnologia voltada para o desenvolvimento dos mais variados tipos de software.</p>
				<p>O nosso objetivo é produzir Aplicações Web, Jogos, Aplicativos Mobile e qualquer outro tipo de software que facilite nosso dia-a-dia e/ou promova entretenimento.</p>
				<p>A ideia é atrair demandas para serem desenvolvidas por estudantes colaboradores, que irão trabalhar juntos e compartilhar conhecimentos enquanto colocam em prática tudo o que estão estudando.</p>
				<p>As demandas irão servir para a criação de portfólios e para gerar acumulo de experiências, de modo capacitar cada vez mais nossos estudantes colaboradores.</p>

			</div><br>



			<h1>Conheça Nosso Desenvolvedor</h1>

			<p>Caso queira conhecer o desenvolvedro do blog Valor Arístico clique no botão logo abaixo, e seja redirecionado para a página de divulgação deste:</p><br>

			<br><div align="center">

			<a class="botao" href="pagina-desenvolvedor.php">Página do Desenvolvedor</a>

			</div><br>

			<br><div align="center">

			<br><img src="img/lond.png">

			</div><br>



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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>