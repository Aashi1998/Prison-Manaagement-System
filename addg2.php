<?php

if(isset($_POST['addg'])) 
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
	$age=$_POST['age'];
	$sal=$_POST['sal'];
	$shift=$_POST['shift'];
	$indate=$_POST['indate'];
	$odate=$_POST['odate'];
	$cn=$_POST['cn'];
	$pic=$_POST['pic'];
	
		$sql= "INSERT INTO GUARDS VALUES ($gid,'$name',$age, $cn,'$shift','$indate','$odate',$sal,'$pic','Not Given')";
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