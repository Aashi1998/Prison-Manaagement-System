<?php
if(isset($_POST['logout'])){
	
mysqli_close($conn);
	session_destroy();
	unset($_SESSION['Username']);
	header("location:h.php");
}
?>