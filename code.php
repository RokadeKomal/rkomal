<?php
include('post_details.php');
$code = $_GET['code'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>code</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

</head>
<body>
	<form method="post" action="post_details.php">
			<h1>jUstSEND</h1>
			<h3>Message Code</h3>
		<div class="content">
			<input type="text" name="code" value=<?php echo $code;?> readonly>
			<button><a href="index.php">BACK</a></button>
		</div>
			
</body>
</html>