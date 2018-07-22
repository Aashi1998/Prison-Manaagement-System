<?php

if(isset($_POST['login']))
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
		$user1=$_POST['uname'];
		$pass1=$_POST['psw'];
		$sql="SELECT pass FROM jailor WHERE Name='$user1'";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($res);
		$rs=$row['pass'];
		if($rs==$pass1)
		{
			header("Location: HOMEPAGE1.php");
			$_SESSION['Username']=$user;
			$_SESSION['success']="WELCOME TO ANGOLA PRISON";
			
		}
		else {
			header("Location: h.php");
		}
 mysqli_close($conn);
}
?>