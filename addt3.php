<?php

if(isset($_POST['addt'])) 
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
	$gid=$_POST['tid'];
    $pid=$_POST['pid'];
	$age=$_POST['tf'];
	$sal=$_PO['tt'];
	$odate=$_POST['odate']; 
	$cn=$_POST['res'];
	$pic=$_POST['vh'];
	
		$sql= "INSERT INTO transfer VALUES ($gid,$pid,'$age','$sal',' $cn','$odate','$pic')";
		$result=mysqli_query($conn , $sql);
		if ( $result )
		{	$sql1="UPDATE prisoner SET P_NO = 'Transferred' WHERE PID= $pid ";
			$result1=mysqli_query($conn , $sql1);
	  		header("Location: HOMEPAGE1.php ");
		}
		else
		{
		header("Location: HOMEPAGE1.php ");
	
		}

}
?>