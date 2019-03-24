<?php  
	if(isset($_POST["submit"])){
		$firstname = $_POST["firstname"];
		$surname = $_POST["surname"];
		$email = $_POST["email"];
		$tel = $_POST["tel"];
		$comment = $_POST["comment"];

		$mailTo = "rogier.vandergaag@outlook.com";
		$headers = "From: " . $email;
		$txt = "Je hebt een mail ontvangen van " . $firstname . " " . $surname;

		mail($mailTo, $txt, $comment, $headers);
		header("Location: contact.php?mailsend");
	}
?>