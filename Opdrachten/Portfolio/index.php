	<?php 
		$pageName = "OVER MIJ";
		include"include/header.php";
		include"include/navbar.php";
	?>
	<header class="homeHeader masthead text-light text-center mt-5 pt-1">
		<div class="container">
			<h1 class="mt-3" id="fullName">Rogier van der Gaag</h1>
			<h2 class="mb-0 pb-4" id="functie">Applicatie- en mediaontwikkelaar</h2>
		</div>
	</header>
		<div id="carouselControl" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselControl" data-slide-to="0" class="active"></li>
		    	<li data-target="#carouselControl" data-slide-to="1"></li>
		    	<li data-target="#carouselControl" data-slide-to="2"></li>
		  	</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="img-fluid" src="https://picsum.photos/1500/500/?image=1050" alt="first slide">
				</div>
				<div class="carousel-item">
					<img class="img-fluid" src="https://picsum.photos/1500/500/?image=718" alt="second slide">
				</div>
				<div class="carousel-item">
					<img class="img-fluid" src="https://picsum.photos/1500/500/?image=10" alt="third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselControl" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselControl" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>
	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-md-6">
					<h2>Welkom op mijn pagina!</h2>
					<p class="lead" id="homeInfo">Mijn ben Rogier van der Gaag, ik ben 16 jaar oud en ik zit op het Davinci College in Dorderecht. Ik doe hier de opleiding Applicaite- en mediaontwikkelaar. Bedankt voor het bezoeken van mijn website. Als u nog eventuele vragen heeft kunt u naar het contact formelier gaan in de navigatie bar of u kunt <a href="contact.php">hier</a> klikken</p>
				</div>
				<div class="col-xl-6 col-md-6">
					<img class="mb-5 w-100" id="Photo" src="img/ikwerk.JPG" alt="werken">
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












