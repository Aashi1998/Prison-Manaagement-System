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
$s="SELECT * FROM staff where SID='$pid'";
$ret=mysqli_query($conn, $s);
while( $row = mysqli_fetch_array($ret, MYSQLI_ASSOC)) { 
?>
<html>
<head>
<head></head>
<body>
<div id="login">
  <div class="login">
<form class="reg1" action="us1.php" method="post">
<div class= "row">
<label>Name: <input  type="text" name="name" maxlength="25" required style="padding: 10px 47px;" placeholder="<?php echo $row['name']; ?>"/></label></br></br>
</div>
<div class= "row">
	<input type="hidden" name="sid" value="<?php echo $pid; ?>">
<label>Age: <input  type="number" name="age" min="0" max="150" sixe="20" required style="padding: 10px 100px;" placeholder="<?php echo $row['age']; ?>"/></label></br></br>
</div>
<div class= "row">
<label>Salary: <input type="text" name="sal" maxlength="8" required  style="padding: 10px 45px;" placeholder="<?php echo $row['sal']; ?>"/> </label> </br></br>
</div>
<div class= "row">
<label> Shift: <input  type="radio" name="shift" value="Morning" required  /> Morning<input  type="radio" name="shift" value="Evening" required placeholder="<?php echo $row['shift']; ?>"/> Evening</label></br></br>
</div>
<div class= "row">
<label >Joining Date: <input  type="date" name="indate" required  style="padding: 10px 30px;" placeholder="<?php echo $row['Jdate']; ?>"/></label></br></br>
</div>
<div class= "row">
<label >Termination_Date: <input  type="date" name="odate" required  style="padding: 10px 10px;" placeholder="<?php echo $row['tdate']; ?>"/></label></br></br>
</div>
<input id="login1" type="submit" name="us" value="UPDATE"  style="position:relative; padding: 8px 10px; background-color: grey; color: white; left: 150px;"/></br> </br> 
</form>
</div>
</div>
</body>
</html>
<?php
}
?>