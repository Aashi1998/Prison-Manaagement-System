<?php

if(isset($_POST['Login']))
{	
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"d");

// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
		$user1=$_POST['name'];
		$pass1=$_POST['pass'];
		$sql="SELECT password FROM users WHERE username='$user1'";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($res);
		$rs=$row['password'];
		if($rs==$pass1)
		{
			header("Location: HOMEPAGE.php");
			$_SESSION['Username']=$user;
			$_SESSION['success']="WELCOME TO ANGOLA PRISON";
			
		}
		
		else {
			header("Location: h.php");
		}
 mysqli_close($conn);
}
?>