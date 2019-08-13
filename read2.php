<?php
	include('read_details.php');
	$code =$_GET['code'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>read the message</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
</head>
<body>
   <?php
  	$query = "SELECT * FROM send WHERE code='$code'";
	$data = mysqli_query($db,$query);
	$row=mysqli_fetch_assoc($data);
	   //echo $row["code"].'  '.$row["subject"]
	?>
	<form method="post" action="">
		<h1>jUstSEND</h1>

	<div class="input">
		<p>Name : <?php echo $row["name"]?></p>
	</div>

	<div class="input">
		<p>Subject : <?php echo $row["subject"]?></p>
	</div>

	<div class="input">
		<p><?php echo $row["message"]?></p>
	</div>
	<a href="index.php">back</a>
</form>
</body>
</html>