<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
		$pageName = "SKILLS";
		include"include/header.php";
		include"include/navbar.php";
		include"include/carousel.php";
	?>
	<header class="masthead text-light text-center">
		<div class="container">
			<h1>Mijn skills</h1>
		</div>
	</header>

	<section>
		<div class="container" id="progressOne">
  			<div class="progress" style="height: 4%;">
	    			<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="5" style="width: 80%; background-color: rgb(241, 101, 41);">
	      				<span>HTML5</span>
	    			</div>
	    	</div>
	    	<div class="progress mt-3" style="height: 4%;">
	    			<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="5" style="width: 70%; background-color: rgb(27, 131, 190);">
	      				<span>CSS</span>
	    			</div>
  			</div>
  			<div class="progress mt-3" style="height: 4%;">
	    			<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="5" style="width: 65%; background-color: rgb(255, 218, 62);">
	      				<span>JavaScript</span>
	    			</div>
  			</div>
  			<div class="progress mt-3 mb-5" style="height: 4%;">
	    			<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="5" style="width: 40%; background-color: rgb(79, 91, 147);">
	      				<span>PHP</span>
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
