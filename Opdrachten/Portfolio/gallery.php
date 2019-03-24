<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php 
		$pageName = "OPDRACHTEN";
		include"include/header.php";
		include"include/navbar.php";
		include"include/carousel.php"; 
	?>
	<header class="masthead text-light text-center">
		<div class="container">
			<h1>Opdrachten</h1>
		</div>
	</header>
	<section class="gallerySection">
		<div class="container mt-3 mb-3">
			<div class="row">
				<div class="col-xl-3 col-md-6 pb-md-2">
					<a class="text-dark" href="websites/Pizza-calculator/pizza.html">
						<div class="cardContainer card">
							<img src="img/pizza.png" class="card-img-top" alt="pizza">
							<div class="card-body">
								<h3 class="card-title">Pizza calculator</h3>
								<p class="card-text lead">
									Dit is de eerste opdracht die ik heb gemaakt. We moesten zorgen dat er een invul alert op het scherm tevoorschijn kwam en dat je daar het aantal en de grote pizza's kon bestellen.
								</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-md-6">
					<a class="text-dark" href="websites/Handy/handy.html">
						<div class="cardContainer card">
							<img src="img/handy.png" class="card-img-top" alt="handy">
							<div class="card-body">
								<h3 class="card-title">Handy opdracht</h3>
								<p class="card-text lead">
									Bij deze opdracht moesten wij een website namaken. Het was een leuke website om te maken.
								</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-md-6">
					<a class="text-dark" href="websites/Lingo/lingo.html">
						<div class="cardContainer card">
							<img src="img/lingo.png" class="card-img-top" alt="lingo" style="width: 100%;">
							<div class="card-body">
								<h3 class="card-title">Lingo opdracht</h3>
								<p class="card-text lead">
									De opdracht die wij hier moesten maken was het spel lingo. 
								</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-md-6">
					<a class="text-dark" href="websites/Responsive/index.html">
						<div class="cardContainer card">
							<img src="img/responsive.png" class="card-img-top" alt="responsive">
							<div class="card-body">
								<h3 class="card-title">Responsive opdracht</h3>
								<p class="card-text lead">
									Bij deze opdracht moesten wij een pagina namaken die responsive is. Dit betekend dat die op verschillende schermgrotes aanpast. 
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php include"include/footer.php" ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
