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
$pid=$_POST['pid'];
echo $pid;
$s="delete from appointment where PID='$pid'";
if($ret=mysqli_query($conn, $s))
{
echo "successful";
header('location: viewap.php');
}
else 
echo "succesfully;"
?>
