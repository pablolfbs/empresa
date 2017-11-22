<?php
session_start();

$usuario = $_SESSION['usuario'];

if (!isset($usuario)) {
	header('Location: index.php?erro=1');
}
?>

<!doctype html>
<html lang="pt-br">
<head>
	<title>Produtos</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/footer.css">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-sm navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="home.php">
					<img src="img/logo.png" width="40" height="40" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav float-left">
						<li class="nav-item active">
							<a class="nav-link" href="home.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="empresa_logado.php">empresa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="produtos.php">produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><?= $usuario ?></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="sair.php">sair</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<section class="container" style="margin: 30px auto;">
			<div class="row">
				<article class="col-sm-4" style="width: 20rem;">
					<a href="#" class="badge-light">
						<div class="card bg-light mb-5" style="max-width: 20rem;">
							<img class="card-img-top" src="img/fogos.jpg" alt="Card image cap">
							<div class="card-body">
								<h4 class="card-title">Light card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</a>
				</article>
				<article class="col-sm-4" style="width: 20rem;">
					<a href="#" class="badge-light">
						<div class="card bg-light mb-5" style="max-width: 20rem;">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h4 class="card-title">Light card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</a>
				</article>
				<article class="col-sm-4" style="width: 20rem;">
					<a href="#" class="badge-light">
						<div class="card bg-light mb-5" style="max-width: 20rem;">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h4 class="card-title">Light card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</a>
				</article>
			</div>
			<div class="row">
				<article class="col-sm-4" style="width: 20rem;">
					<a href="#" class="badge-light">
						<div class="card bg-light mb-3" style="max-width: 20rem;">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h4 class="card-title">Light card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</a>
				</article>
				<article class="col-sm-4" style="width: 20rem;">
					<a href="#" class="badge-light">
						<div class="card bg-light mb-3" style="max-width: 20rem;">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h4 class="card-title">Light card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</a>
				</article>
				<article class="col-sm-4" style="width: 20rem;">
					<a href="#" class="badge-light">
						<div class="card bg-light mb-3" style="max-width: 20rem;">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h4 class="card-title">Light card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</a>
				</article>
			</div>
		</section>

		<footer class="footer-distributed">
		
		  <div class="footer-left">
		
			<h3>Empresa<span>logo</span></h3>
		
			<p class="footer-links">
			  <a href="#">Home</a>
			  ·
			  <a href="#">Blog</a>
			  ·
			  <a href="#">Pricing</a>
			  ·
			  <a href="#">About</a>
			  ·
			  <a href="#">Faq</a>
			  ·
			  <a href="#">Contact</a>
			</p>
		
			<p class="footer-company-name">Empresa &copy; 2017</p>
		  </div>
		
		  <div class="footer-center">
		
			<div>
			<i class="fa fa-map-marker"></i>
			<p><span>Rua Santa Luzia, 735</span> Rio de Janeiro, Brasil</p>
			</div>
		
			<div>
			  <i class="fa fa-phone"></i>
			  <p>+1 555 123456</p>
			</div>
		
			<div>
			  <i class="fa fa-envelope"></i>
			  <p><a href="mailto:suporte@company.com">suporte@empresa.com</a></p>
			</div>
		
		  </div>
		
		  <div class="footer-right">
		
			<p class="footer-company-about">
			  <span>Sobre a Empresa</span>
			  Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
			</p>
		
			<div class="footer-icons">
		  
			  <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
			  <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
			  <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
			  <a href="http://www.github.com"><i class="fa fa-github"></i></a>
		  
			</div>
		
		  </div>
		
		</footer>

		<script src="https://use.fontawesome.com/8da311f277.js"></script>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
	</html>
