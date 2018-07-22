<?php

if(isset($_POST['addp'])) 
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
	$gid=$_POST['gid'];
	$name=$_POST['name'];
	$pri=$_POST['pri'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$crime=$_POST['cr'];
	
	$indate=$_POST['indate'];
	$otime=$_POST['odate'];
	$cn=$_POST['cn'];
		$pic=$_POST['pic'];
		$sql= "INSERT INTO prisoner VALUES ($gid,'$name','$pri','$sex',$age, '$crime','$indate','$otime',$cn,'$pic','Not Given')";
		$result=mysqli_query($conn , $sql);
		if ( $result )
		{
			echo "<script type='text/javascript'> alert('Added Successfully'); </script>" ;
	  	header("Location: HOMEPAGE.php ");
		}
		else
		{
		header("Location: HOMEPAGE.php ");
	
		}

}
?>