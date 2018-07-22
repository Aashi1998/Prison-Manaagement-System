<?php

if(isset($_POST['login'])) 
{	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"d");

// Check connection
if (!$conn) {
	echo "fail1";
    die("Connection failed: " . mysqli_connect_error());
}
	$gid=$_POST['pid'];
	$name=$_POST['name'];
	$age=$_POST['rel'];
	$indate=$_POST['vdate'];
	$pic=$_POST['pic'];
	
		$sql= "INSERT INTO appointment VALUES ($gid,'$name','$age','$indate','$pic')";
		$result=mysqli_query($conn , $sql);
		if ( $result )
		{
	  	header("Location: h.php ");
		}
		else
		{
		header("Location:h.php ");
	
		}

}
?>