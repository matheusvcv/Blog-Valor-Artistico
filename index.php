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

	<!-- Início do NavBar -->

	<nav class="navbar navbar-expand-lg navbar-dark fundo_preto fixed-top">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="img/cosvip.png"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Início</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="experiencias-escritas.php">Experiências Escritas</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="costaviana-enterprise.php">CostaViana Enterprise</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="pagina-desenvolvedor.php">Página do Desenvolvedor</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- Início do Carrossel  -->

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active" data-bs-interval="3000">
	      <img src="img/regicida.jpg" class="d-block w-100 imagem-carrossel-um">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>O Regicida!</h5>
	        <p class="text-center">As profundas nuances do ser humano. O que é a honra?.</p>
	      </div>
	    </div>
	    <div class="carousel-item" data-bs-interval="3000">
	      <img src="img/poke2.png" class="d-block w-100 imagem-carrossel-um">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Imersão e Alegria</h5>
	        <p class="text-center">O inocente sentimento de felicidade ao vivenciar sua jornada Pokemon.</p>
	      </div>
	    </div>
	    <div class="carousel-item" data-bs-interval="3000">
	      <img src="img/metal.jpg" class="d-block w-100 imagem-carrossel-um" style="color: black;">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Kept You Waiting Huh?</h5>
	        <p class="text-center">Como metal gear solid ajudou a construir um ser humano?</p>
	      </div>
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>

		<div>

			<h1 id="sn">Sobre Nós:</h1>

			<p>O Valor Artístico é um blog que tem o intuito de trazer ao público conteúdos voltados à sensação que sentimos quando algo nos toca profundamente. Nosso intuito é compartilhar essas experiências, de modo à conectar uma pluralidade de experiências individuais e aprender uns com os outros. Acreditamos que o compartilhamento de sentimentos ajuda na compreensão humana e na construção de relacionamentos.</p><br>

			<p><strong>Atenção:</strong> Entendemos que cada indivíduo é dententor de uma sensibilidade artística única, que tem a ver com sua própria inividualidade e essência. Sendo assim, a arte fala com cada um nós de maneira específica. Não acreditamos na utilização de padrões técncos para avaliar expressões artísticas, e nem na hierarquização de obras ou experiências. O Valor Artístico tem a ver com perspectivas e é qualitativo, não quantitativo.</p><br>
			
		</div>

		<hr>

			<h1>Experiências Escritas</h1><br>

			<div align="center">
				<div class="quadrado" id="q2">
				</div>

				<div class="quadrado" id="q3">
				</div>

				<div class="quadrado" id="q4">
				</div>
			</div><br>

			<p><q>Todos os elementos da boa escrita dependem da habilidade do escritor de escolher uma palavra em vez de outra. E o que prende e mantém nosso interesse tem tudo a ver com essas escolhas.</q><em><strong>Francine Prose.</strong></em></p>


			<p>Sabe quando você e exposto a algum tipo de expressão artística humana e ela te toca de tal forma que você simplesmente precisa falar sobre isso?</p>
			<p>Essa parte do blog é destinada para exposição doe artigos de pessoas que decidiram expressar esses sentimentos de maneira escrita. Clique no botão abaixo e seja direcionado para a nossa biblioteca de artigos e entenda como a arte foi recebida pelos nossos escritores voluntários:</p>

			<div align="center">

				<br><a class="botao" href="experiencias-escritas.php">Experiências Escritas</a>

			</div><br>

			<hr>

			<br><h1>Nosso PodCast</h1>

			<br><p>O poder dos podcasts está relacionado com a conexão profunda com o ouvinte e a facilidade no consumo.</p><br>

			<br><div align="center">
				<div class="quadrado" id="q6">
				</div>

				<div class="quadrado" id="q7">
				</div>
			</div><br>

			<br><p>O <strong><em>"Valor Artístico PodCast"</em></strong> será formado por um grupo de amigos falando sobre suas próprias experiências artísticas. Faleremos sobre filmes, séries, jogos, livros, viagens, experiências, museus e sobre muitas outras coisas. O diferencail, é que abordaremos todos esses temas sem utilizar nenhum tipo de padrão técnico. Falaremos sobre tudo isso com base somente no valor artístico. Serão visões totalmente únicas e autenticas, que teferão sentir e refletir.</p><br>

			<div align="center">

				<a class="botao" href="podcast.php">V.A. PodCast</a>

			</div><br>

			<hr>

			<h1>CostaViana Enterprise</h1>

			<br><p>O blog Valor Artístico é um produto CostaViana Enterprise. Logo abaixo, você poderá ler um pequeno resumo sobre a ideia central deste projeto que ainda está em formação, mas tem potêncial para se tornar enorme. A logo do projeto é uma onça-pintada, como forma de representar poder, singularidade e adaptabilidade..</p><br>

			<div align="center">

				<img src="img/cosvib.png" alt="logo CVE">

			</div><br>

				<p>A CostaViana Enterprise é um projeto de empresa de tecnologia voltada para o desenvolvimento dos mais variados tipos de software.</p>
				<p>O nosso objetivo é produzir Aplicações Web, Jogos, Aplicativos Mobile e qualquer outro tipo de software que facilite nosso dia-a-dia e/ou promova entretenimento.</p>
				<p>A ideia é atrair demandas para serem desenvolvidas por estudantes colaboradores, que irão trabalhar juntos e compartilhar conhecimentos enquanto colocam em prática tudo o que estão estudando.</p>
				<p>As demandas irão servir para a criação de portfólios e para gerar acumulo de experiências, de modo capacitar cada vez mais nossos estudantes colaboradores.</p>

			</div><br>

		<hr>

			<h1>Conheça Nosso Desenvolvedor</h1>

			<br><p>Caso queira conhecer o desenvolvedro do blog Valor Arístico clique no botão logo abaixo, e seja redirecionado para a página de divulgação deste:</p><br>

			<br><div align="center">

			<a class="botao" href="pagina-desenvolvedor.php">Página do Desenvolvedor</a>

			</div><br>

			<br><div align="center">


			</div><br>



	<div id="container1" style="background-color: whitesmoke;">

		<div id="logo">
			
			<a href="https://www.instagram.com/matheusvcv/" target="_blank" type="external"><img src="img/insta.png" alt="instagram" align="left" width="28" height="28"></a>

			<a href="https://www.linkedin.com/in/matheusvcv/" target="_blank" type="external"><img src="img/in.png" alt="Linkedin" align="left"  width="28" height="28"></a>

			<a href="https://www.youtube.com/channel/UCuosS6TLk6g00axCYUM98UQ" target="_blank" type="external"><img src="img/tube.png"  align="left"  alt="YouTube" width="28" height="28"></a>

			<a href="https://github.com/matheusvcv" target="_blank" type="external"><img src="img/git.png" alt="github"  align="left"  width="28" height="28"></a>

			<img src="img/cosvib.png" alt="logo CVE">
			<img src="img/logo.png" alt="logo VA">

		</div>
	</div><br>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>