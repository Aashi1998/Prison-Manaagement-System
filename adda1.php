<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"d");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['ADD'])){
	$user1=$_POST['uname'];
	$name=$_POST['name'];
	$email1=$_POST['email'];

		$sql="INSERT INTO USERS (username, name, email_id) VALUES ('$user1','$name','$email1')";
		$result=mysqli_query($conn,$sql);
		if($result){
	  header("location: HOMEPAGE.php");
			
		}
		else
		{
			echo "fail";
			 header("location: HOMEPAGE.php");
		}
	}
	
?>