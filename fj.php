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
		$sql= "UPDATE jailor set feed='$name' where JID=$gid";
		$result=mysqli_query($conn , $sql);
		if ( $result )
		{
	
	  	header("Location: HOMEPAGE.php ");
		}
		else
		{
		header("Location: HOMEPAGE.php ");
	
		}

}
?>