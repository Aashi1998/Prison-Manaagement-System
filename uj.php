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
$pid=$_GET['gid'];
$s="SELECT * FROM jailor where JID='$pid'";
$ret=mysqli_query($conn, $s);
while( $row = mysqli_fetch_array($ret, MYSQLI_ASSOC)) { 
?>
<html>
<head>
<head></head>
<body>
<div id="login">
  <div class="login">
<form class="reg1" action="uj1.php" method="post">
<div class= "row">
		<input type="hidden" name="sid" value="<?php echo $pid; ?>">
<label>Name: <input  type="text" name="name" maxlength="25" required style="padding: 10px 47px;" placeholder="<?php echo $row['Name']; ?>"/></label></br></br>
</div>
<div class= "row">
<label>Age: <input  type="number" name="age" min="0" max="150" sixe="20" required style="padding: 10px 100px;" placeholder="<?php echo $row['age']; ?>"/></label></br></br>
</div>
<div class= "row">
<label>Contact No: <input  type="number" name="cn" min="0" max="9999999999" required  style="padding: 10px 50px;" placeholder="<?php echo $row['cn']; ?>"/></label></br></br>
</div>
<div class= "row">
<label>Address: <input type="text" name="sal" maxlength="50" required  style="padding: 10px 45px;" placeholder="<?php echo $row['addr']; ?>"/> </label> </br></br>
</div>
<div class= "row">
<label >Joining Date: <input  type="date" name="indate" required  style="padding: 10px 30px;" placeholder="<?php echo $row['joning']; ?>"/></label></br></br>
</div>
<div class= "row">
<label >Termination_Date: <input  type="date" name="odate" required  style="padding: 10px 10px;" placeholder="<?php echo $row['ter']; ?>"/></label></br></br>
</div>
<input id="login1" type="submit" name="uj" value="UPDATE"  style="position:relative; padding: 8px 10px; background-color: grey; color: white; left: 150px;"/></br> </br> 
</form>
</div>
</div>
</body>
</html>
<?php
}
?>