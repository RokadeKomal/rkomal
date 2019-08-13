<?php 
	include_once'post_details.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<form method="post" action="post_details.php" enctype="multipart/form-data">
		<div class="header1">
	    	<h1>JUstSend</h1>
		</div>
		<div class="input">
			<input type="text" name="name" placeholder="Your name">
		</div>
		<div class="input">
			<input type="text" name="email" placeholder="Your email or phone">
		</div>
		<div class="input">
			<input type="text" name="subject" placeholder="Subject">
		</div>
		<div class="input">
			<textarea name="message" cols="32" rows="10" placeholder="Your message"></textarea>
		</div>

		<div class="selectfiles">
	 		<input type="file" name="image" id="fileSelect" >
		</div>
			<button class="button" name="submit"><b>submit</b></button>
	</form>
</div>
</body>
</html>

