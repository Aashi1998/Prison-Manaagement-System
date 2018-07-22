<?php

if(isset($_POST['up'])) 
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
	$sal=$_POST['cr'];
	$otime=$_POST['odate'];
	$cn=$_POST['cn'];
	$sql2="SELECT P_NO from prisoner where PID=$sid";
	$res=mysqli_query($conn, $sql2);
	$res1=mysqli_fetch_array($res, MYSQLI_ASSOC);

	if($res1['P_NO']=='Transferred'){

		$sql= "UPDATE prisoner SET Name='$name' , age=$age,crime='$sal' , cn=$cn, released='$otime' where PID=$sid ";
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
	else{
			$age1=$_POST['pri'];
		$sql= "UPDATE prisoner SET Name='$name' ,P_NO='$age1', age=$age,crime='$sal' , cn=$cn, released='$otime' where PID=$sid ";
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

}
?>