<!-- Falta fazer Jquery para fazer carossel de imagens 
	Improvisei um pouco com CSS animation KeyFrames
	*Falta media querie no CSS para nao quebrar layout.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="our parterns">
	<meta name="keywords" content="site">
	<title> Our Parterns - View - By Tiago </title>
	<link rel="stylesheet" href="css/style.css" />
	<!--Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="parceiros">
		<div class="container">
			<h2 class="section-title">Nossos Parceiros</h2>
			<hr width="1000" style="margin-top: 30px;margin-left: 40px;">
			<div class="flex-container">
				<div class="one">
					<img src="images/4.png"/>
				</div>
				<div class="two">
					<img src="images/4.png"/>
				</div>
				<div class="three">
					<img src="images/4.png"/>
				</div>
				<div class="four">
					<img src="images/4.png"/>
				</div>
			</div>
		</div>
	</div>
	<div class="call-out">
		<div class="logo">
			<img src="images/4.png" height="100">
		</div>
		<div class="text-call-out">
			<h4>
Over 20 years of experience we’ll ensure you get the best guidance</h4>
		</div>
		<div class="float-right">
			<a href="#" class="link" target="_blank">Requisite-nos</a>
		</div>
	</div>
	<div class="about">
		<div class="container_about">
			<div class="col-md-3">
				<h3 class="footer-title">Sobre nós</h3>
				<p>lorem lorem lorem lorem lorem
					lorem lorem lorem lorem lorem
				</p>
				<a href="" style="line-height:4;margin-left: 30px;color: white;">Saiba Mais</a>
			</div>
			<div class="col-md-3">
				<h3 class="footer-title">Nossos serviços</h3>
				<ul style="list-style: none;color: white;padding-left: 30px;">
					<li>Costumer</li>
					<li>Costumer2</li>
					<li>Costumer3</li>
					<li>Costumer4</li>		
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="footer-title">Contate-nos</h3>
				<p>lorem lorem lorem lorem lorem
					lorem lorem lorem lorem lorem
				</p>
			</div>
			<div class="col-md-3">
				<h3 class="footer-title">Newsletter</h3>
				<p>lorem lorem lorem lorem lorem
					lorem lorem lorem lorem lorem
				</p>
				<form action="" method="post">
					<input type="text" id="email" placeholder="email..">
					<button class="env_button">Enviar</button>
				</form>
			</div>
		</div>
	</div>
			
	<footer>
		<div class="container_footer">
			<hr>
			<p>Copyright (C) Todos os direitos reservados - Tiago</p>
		</div>
	</footer>


	<script>
		/*$(document).ready(function(){
			alert("oi mundo!");
		}); */
	</script>
</body>
</html>