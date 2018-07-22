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
	$gid=$_POST['jid'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$add=$_POST['add'];
	$indate=$_POST['indate'];
	$rdate=$_POST['odate'];
	$cn=$_POST['cn'];
	$pic=$_POST['pic'];
	
		$sql= "INSERT INTO JAILOR(JID, Name, age,addr,cn, joning,ter,pic) VALUES ($gid,'$name',$age,'$add', $cn,'$indate','$rdate','$pic')";
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