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
$pid=$_GET['pid'];
$s="SELECT * FROM Prisoner where PID='$pid'";
$ret=mysqli_query($conn, $s);
while( $row = mysqli_fetch_array($ret, MYSQLI_ASSOC)) { 
?>
<html>
<head>
<head></head>
<body>
	<?php $s1="SELECT P_NO from prisoner where PID=$pid";
	$res1=mysqli_query($conn,$s1) ;
	$row1=mysqli_fetch_array($res1, MYSQLI_ASSOC);
		?>
<div id="login">
  <div class="login">
<form class="reg1" action="up1.php" method="post">
<div class= "row">
		<input type="hidden" name="sid" value="<?php echo $pid; ?>">
<label>Name: <input  type="text" name="name" maxlength="15" required style="padding: 10px 63px;" placeholder="<?php echo $row['Name']; ?>" /></label></br></br>
</div>
<?php
if($row1['P_NO'] !='Transferred') { ?>

<div class= "row">
<label>Prison No: <input  type="text" name="pri" maxlength="10" required style="padding: 10px 47px;" placeholder="<?php echo $row['P_NO']; ?>"></label></br></br>
</div>
<?php } ?>
<div class= "row">
<label>Age: <input  type="number" name="age" min="0" max="150" sixe="20" required style="padding: 10px 116px;" placeholder="<?php echo $row['age']; ?>" /></label></br></br>
</div>
<div class= "row">
<label>Crime: <input  type="text" name="cr" min="0" max="9999999999" required  style="padding: 10px 62px;" placeholder="<?php echo $row['crime']; ?>" /></label></br></br>
</div>
<div class= "row">
<label>Contact No: <input  type="number" name="cn" min="0" max="9999999999" required  style="padding: 10px 67px;" placeholder="<?php echo $row['cn']; ?>" /></label></br></br>
</div>
<div class= "row">
<label >Releasing Date: <input  type="date" name="odate" required  style="padding: 10px 38px;" placeholder="<?php echo $row['released']; ?>"/></label></br>
</div><BR><br>


<input id="login1" type="submit" name="up" value="UPDATE" style="position:relative; padding: 8px 10px; background-color: grey; color: white; left: 50px;" /></br> </br> 
</form>
</div>
</div>
</body>
</html>
<?php
}
?>