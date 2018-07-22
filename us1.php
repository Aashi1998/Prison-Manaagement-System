<?php

if(isset($_POST['us'])) 
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
	$shift=$_POST['shift'];
	$otime=$_POST['odate'];
	$indate=$_POST['indate'];
	
	
		$sql= "UPDATE staff SET name='$name' , age=$age, sal=$sal , Jdate='$indate', tdate='$otime' where SID=$sid ";
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