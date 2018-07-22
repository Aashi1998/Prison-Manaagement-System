<?php

if(isset($_POST['uj'])) 
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
	$sid=$_POST['sid'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$sal=$_POST['sal'];
	$cn=$_POST['cn'];
	$otime=$_POST['odate'];
	$indate=$_POST['indate'];
	
	
		$sql= "UPDATE jailor SET Name='$name' , age=$age, cn=$cn, addr='$sal' ,joning='$indate', ter='$otime' where JID=$sid ";
		$result=mysqli_query($conn , $sql);
		if ( $result )
		{
			echo "Successful";
		}
		else
		{
			echo "UnSuccessful";
	
		}

}
?>