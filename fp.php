<?php

if(isset($_POST['feed'])) 
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
	$name=$_POST['feed1'];
		$sql= "UPDATE prisoner set feed='$name' where PID=$gid";
		$result=mysqli_query($conn , $sql);
		if ( $result )
		{
	
	  	header("Location: HOMEPAGE1.php ");
		}
		else
		{
		header("Location: HOMEPAGE1.php ");
	
		}

}
?>