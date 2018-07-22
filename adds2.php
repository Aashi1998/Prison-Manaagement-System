<?php

if(isset($_POST['adds'])) 
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
	$gid=$_POST['sid'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$des=$_POST['dest'];
	$sal=$_POST['sal'];
	$shift=$_POST['shift'];
	$otime=$_POST['odate'];
	$indate=$_POST['indate'];
	$cn=$_POST['pic'];
	
		$sql= "INSERT INTO STAFF VALUES ($gid,'$name',$age, '$des','$shift', '$indate','$otime',$sal,'$cn','Not Given')";
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