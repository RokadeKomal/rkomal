<?php
include('connection.php');
include('post_details.php');

$db =mysqli_connect($servername,$username,$password,$dbname);

if($db->connect_error)
{
	die("connection failed".$db);
}
if(isset($_POST['submit']))
{
	$code=$_POST['code'];

	header('location:read2.php?code='.$code);
}
?>