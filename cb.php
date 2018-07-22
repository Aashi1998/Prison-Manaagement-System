<?php 
$servername = "localhost";
$username = "root";
$password= "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"d");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
$pid=$_POST['pid'];
$name=$_POST['name'];
$rel=$_POST['rel'];
$date=$_POST['date'];
$pic=$_POST['pic'];
$sql="INSERT INTO visitor VALUES ($pid,'$name','$rel','$date','$pic')";
$res=mysqli_query($conn, $sql);
if($res)
{
	$sql1="DELETE FROM appointment WHERE PID=$pid AND V_Name='$name' AND Relation='$rel' AND Date='$date' AND prof='$pic' ";
	mysqli_query($conn, $sql1);
	header("Location: viewap.php"); 
}
else
{
	header("Location: viewap.php");
}
}

?>
