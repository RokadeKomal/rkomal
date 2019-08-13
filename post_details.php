<?php
include('connection.php');

$db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    /*if($db->connect_error){
        die("connection failed:".$db);
    }
    else{
        echo"connected";
    }*/
   
function codegeneration()
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $b= substr(str_shuffle($permitted_chars), 0, 4);
    return $b;
}

if(isset($_POST['submit'])){
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Subject=$_POST['subject'];
	$Message=$_POST['message'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $code=codegeneration();

	$upload="INSERT INTO send(name,email,subject,message,image,code) VALUES('$Name','$Email','$Subject','$Message','$image','$code')";
    if(mysqli_query($db,$upload)){
        header('location:code.php?code='.$code);
    }
}
?>