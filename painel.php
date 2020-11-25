<?php
	if(!isset($_SESSION)) session_start();
	
	if(!isset($_SESSION['usuario'])) {
		session_destroy();
		header('Location: index.php');
		exit;
	}
	
	//echo "Olá, " . $_SESSION['usuario'];
	//echo "<a href='index.php'></br>Retornar para a página de login</a>";
?>
<!doctype html>
	<html>
		<html lang="pt-br">	

			<head>

				<title>Pagina.Romulo</title>
				<meta charset="utf-8" />
				<meta name="description" content="Aqui será a descrição do contúdo" />
				<meta name="Keywords" content="dados, particulares, complementos, seo, meta tags, curso" />
				<meta name"author" content="Romulo de Oliveira Azevedo" />
				<link rel="stylesheet" type="text/css" href="normalize.css" />
				<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />  
				<link rel="stylesheet" type="text/css" href="natureza.css" />
			</head>

		<body>

			<div class="header">
				<div class="linha">
					<header>
						<div class="coluna col4">
							<h1 class="logo">Romulus</h1>							
						</div>
						<div class="coluna col8">
							<nav class="ok">
								<ul class="menu inline sem-marcador">
									<li><a href="index.html">Home</a></li>
									<li><a href="clientes.html">Clientes</a></li>
									<li><a href="servicos.html">Serviços</a></li>
									<li><a href="sobre.html">Sobre</a></li>
									<li><a href="contato.html">Contato</a></li>
								</ul>
							</nav>							
						</div>						
					</header>
				</div>				
			</div>
			<div class="linha">
				<section>
					<div class="coluna col3 sidebar">
						<h3>Clientes satisfeitos</h3>

						<ul class="sem-marcador sem-padding">
							<li><a href="">Nome da Empresa 1</a></li>
							<li><a href="">Nome da Empresa 2</a></li>
							<li><a href="">Nome da Empresa 3</a></li>
							<li><a href="">Nome da Empresa 4</a></li>
							<li><a href="">Nome da Empresa 5</a></li>
							<li><a href="">Nome da Empresa 6</a></li>
							<li><a href="">Nome da Empresa 7</a></li>
						</ul>
							<a href="clientes.html" class="botao">Ver todos &raquo;</a>
					</div>
					<div class="coluna col9">
						<h2>Trabalhos: <em>Company</em></h2>
						<img src="../_img/semantica1.jpg" alt="" />

						<p>Texto aleatório, continua com uma interrupção como exemplo para criar uma pagina web.</p>
						<a href="clientes.html" class="botao">Verificar outros trabalhos &raquo;</a>						
					</div>
				</section>
			</div>
			<div class="conteudo-extra">
				<div class="linha">
					<div class="coluna col7">
						<article>
							<h2>Como um site pode ajudar sua empresa</h2>

							<p>Quero me tornar um programador de web frontend, tanto no html5 quanto no php como também no Java</p>
							<p>Teste este item para verificar se as paginas estão contemplando os jogos de laptops</p>
							<p>Dentro de uma LI, teremos uma LG, com o titulo da notícia.</p>
						
						</article>
					</div>
					<div class="coluna col5">
						<h3>Últimas notícias</h3>
						<ul class="sem-marcador sem-padding notícias">
							<li>
								<img src="../_img/semantica1.jpg" alt="" />
								<h4>Título da notícia publicada no site</h4>
								<p>Paralelepipedo1, segue como se fosse um texto ou text. <a href="">Leia mais &raquo;</a></p>

							</li>
							<li>
								<img src="../_img/semantica1.jpg" alt="" />
								<h4>Título da notícia publicada no site</h4>
								<p>Paralelepipedo2, segue como se fosse um texto ou text. <a href="">Leia mais &raquo;</a></p>

							</li>
							<li>
								<img src="../_img/semantica2.jpg" alt="" />
								<h4>Título da notícia publicada no site</h4>
								<p>Paralelepipedo3, segue como se fosse um texto ou text. <a href="">Leia mais &raquo;</a></p>

							</li>
						</ul>
					</div>
				</div>			
			</div>
			<div class="footer">
				<div class="linha">
					<footer>
						<div class="coluna col4"></div>
						<div class="coluna col8">
							<span>&copy; 2019 - Romulo Desenvolvimento de TI</span>
						</div>
					</footer>
				</div>	
			</div>
		</body>
	</html>
