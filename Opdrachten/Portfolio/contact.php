	<?php
		$pageName = "CONTACT";
		include"include/header.php";
		include"include/navbar.php";
		include"include/carousel.php"; 
	?>
	<header class="masthead text-light text-center">
		<div class="container">
			<h1>Contact</h1>
		</div>
	</header>

	<section class="section mt-5">
		<div class="container">
				<form action="contactform.php" method="post">
					<div class="row">	
						<div class="col-sm-6">
					    	<div class="form-group">
					      		<label for="firstname">Voornaam</label>
					      		<input type="name" class="form-control" id="firstname" placeholder="Vul hier uw voornaam in*" name="firstname" pattern="[A-Za-z0-9]+" required >
					    	</div>
					    </div>
					    <div class="col-sm-6">
					    	<div class="form-group">
					      		<label for="surname">Achternaam</label>
					      		<input type="name" class="form-control" id="surname" placeholder="Vul hier uw achternaam*" name="surname" pattern="[A-Za-z0-9]+" required>
					    	</div>
					    </div>
				  	</div>
				    	<div class="form-group">
				      		<label for="email">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Vul hier uw emailadres in*" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>		      			
				    	</div>
				    	<div class="form-group">
				    		<label for="file">Bestand</label>
							<div class="input-group">
							  	<div class="custom-file">
							    	<input type="file" class="custom-file-input">
							    	<label class="custom-file-label">Bestand kiezen</label>
							  	</div>
							</div>
						</div>
				    	<div class="form-group">
				      		<label for="tel">Telefoonnummer</label>
				      		<input type="tel" class="form-control" id="tel" placeholder="Vul hier uw telefoonnummer in" name="tel"  pattern="[0-9]+">
				    	</div>
						<div class="form-group">
						   	<label for="comment">U kunt een bericht achterlaten</label><br>
							<textarea class="pl-2" placeholder="Vul hier uw bericht in*" name="comment" rows="5" cols="40" required></textarea>
						</div>
			    		<button name="submit" type="submit" class="btn btn-primary mb-4">Verzenden</button>
			  	</form>
			</div>
		</div>
	</section>
	<?php include"include/footer.php" ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>