

<?php if($posts){ 
	foreach ($posts as $key => $post) { ?>


		<h1><?php echo $post->name; ?></h1>				 	
		<h2>R$ <?php echo $post->price; ?></h2>	

		<p><?php echo $post->description; ?></p>




	<?php }
} ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />

</head>
<body class="single single-produto">

	<section class="box-section breadcrumbs">
		<div class="container">

			<ul>
				<li><a href="" title="Home"><i class="fas fa-home"></i></a></li>
				<li><i class="fas fa-chevron-right"></i></li>
				<li><a href="" title="Eletrônicos, áudio e vídeo">Eletrônicos, áudio e vídeo</a></li>
				<li><i class="fas fa-chevron-right"></i></li>
				<li><span>TVs</span></li>
			</ul>

		</div>
	</section>

	<section class="box-section">
		<div class="container">
			
			<h1>Smart TV Full HD LED 49” Samsung Serie J5290 Orsay - Wi-Fi 2 HDMI 1USB</h1>
			<div class="opnioes">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
				<i class="far fa-star"></i>
				<span>30 opniões</span>
			</div>

			<div class="row">
				<div class="col-8">
					
					<div class="galeria">
						<img src="assets/images/tv.jpg">

						<div class="paginacao">
							<span class="active"></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>

					<div class="info-destaque border-full">
						<i class="fas fa-star"></i>
						<span>49” POLEGADAS</span>
						<span>FULL HD</span>
						<span>HDMI</span>
						<a href=""class="btn btn-inline">Ver todas as características <i class="fas fa-chevron-down"></i></a>
					</div>

					<div class="conteudo border-full no-border-top">
						<h2>Descrição</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>

					<div class="border-full no-border-top">
						<h2>Características</h2>

						<ul class="caracteristicas">
							<li>
								<span>Marca</span>
								<span>Samsung</span>
							</li>
							<li>
								<span>Modelo</span>
								<span>J5290 Orsay</span>
							</li>
							<li>
								<span>Cor</span>
								<span>Preto</span>
							</li>
							<li>
								<span>Tamanho de tela</span>
								<span>49” polegadas</span>
							</li>
							<li>
								<span>Tecnologia da tela</span>
								<span>LED</span>
							</li>
							<li>
								<span>Tipo de resolução</span>
								<span>Full HD</span>
							</li>
							<li>
								<span>Smart TV</span>
								<span>Sim</span>
							</li>
							<li>
								<span>Frequência</span>
								<span>20 Hz</span>
							</li>
							<li>
								<span>Conversor digital</span>
								<span>Sim</span>
							</li>
							<li>
								<span>Wireless integrado</span>
								<span>Sim</span>
							</li>
							<li>
								<span>Conexões</span>
								<span>
									03 x HDMI<br>
									02 x USB<br>
									01 x AV/Componente Conjugado<br>
									01 x LAN (RJ45)<br>
									01 x Saída Digital Óptica<br>
									01 x Antena (Digital e Analógico)
								</span>
							</li>
							<li>
								<span>Voltagem</span>
								<span>Bivolt</span>
							</li>
							<li>
								<span>Consumo médio</span>
								<span>120W</span>
							</li>
						</ul>
					</div>

					<div class="border-full no-border-top">
						<h2>Opiniões sobre o produto</h2>
			
						<div class="opnioes opnioes-info">
							<span class="nota">3.8</span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
							<i class="far fa-star"></i>
							<span>Média entre 30 opniões</span>
						</div>

						<ul class="list-opnioes">
							<li class="opnioes opnioes-list">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>
								<span>Lorem Ipsum is simply dummy</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ipsum suspendisse ultrices. </p>
							</li>

							<li class="opnioes opnioes-list">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<span>Lorem Ipsum is simply dummy</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ipsum suspendisse ultrices. </p>
							</li>

							<li class="opnioes opnioes-list">
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<span>Lorem Ipsum is simply dummy</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ipsum suspendisse ultrices. </p>
							</li>

							<li class="opnioes opnioes-list">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<span>Lorem Ipsum is simply dummy</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ipsum suspendisse ultrices. </p>
							</li>
						</ul>

						<a href=""class="btn btn-inline">Ver todas as opniões <i class="fas fa-chevron-right"></i></a>
					</div>

					<div class="border-full no-border-top">
						<h2>Perguntas e respostas</h2>
					</div>
				</div>

				<div class="col-4">
					
				</div>
			</div>

		</div>
	</section>

</body>
</html>