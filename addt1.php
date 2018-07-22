<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css4.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="nab">
<ul>

<li><a id="home" href="HOMEPAGE.php" style="margin-left: 10PX;"> Home </a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Prisoner</a>
    <div class="dropdown-content">
      <a href="viewp1.php" style="font-weight: bold;">VIEW PRISONERS</a>
      <a href="addp1.php" style="font-weight: bold;">ADD PRISONER</a>
    </div>
     </li>
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Transfer</a>
    <div class="dropdown-content">
      <a href="viewt1.php" style="font-weight: bold;">VIEW TRANSFERS</a>
      <a href="addt1.php" style="font-weight: bold;">ADD TRANSFER</a>
    </div>
  </li>
 
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Guard</a>
    <div class="dropdown-content">
      <a href="viewg1.php" style="font-weight: bold;">VIEW GUARDS</a>
      <a href="addg1.php" style="font-weight: bold;">ADD GUARD</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Staff</a>
    <div class="dropdown-content">
      <a href="views1.php" style="font-weight: bold;">VIEW STAFFS</a>
      <a href="adds1.php" style="font-weight: bold;">ADD STAFF</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Visitor</a>
    <div class="dropdown-content">
      <a href="viewv1.php" style="font-weight: bold;">VIEW VISITORS</a>
      <a href="viewap.php" style="font-weight: bold;">VIEW APPOINTMENT</a>
    </div>
  </li>
 
    <li style="float:right" style="margin-top:5px;">
      <form action="logout.php" method="post">
        <input id="log" type="submit" name="logout" value="LOGOUT" />
      </form>
    </li> 
 
  <li style="float:right" style= "margin-right=15px;" class="dropdown">
    <a href="#contact" class="dropbtn">Contact Us</a>
  
  </li>
  <li style="float:right"><a href="#"> About</a></li>
</ul>
</div>
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
?>
<div id="login">
  <div class="login">
  <form action="addt3.php" method="post">
    <div class="row">
<label>TID: <input type="text" name="tid" maxlength="3" required style="padding: 10px 58px;  margin-left: 20px;" /> </label> 
</div>
   <div class="row" >
    <label><b>PID:</b>
   <?php
   $sql="SELECT * FROM prisoner where P_No <>'Transferred'";
    $ret=mysqli_query($conn, $sql);?>
  <select name="pid" style="padding: 8px 10px; margin-left: 20px;" >
    <?php while( $row =mysqli_fetch_array($ret, MYSQLI_ASSOC)) : ?>
    <option value=" <?php echo $row['PID']; ?> "><?php echo $row['PID']; ?></option>
     <?php endwhile ?>
  </select></label> 
  </div>
<div class="row">
    <label for="lname">Transfer From:
    <input type="text" id="lname" name="tf"  maxlength="35" required style="padding:10px 26px;"  />
</label> 
</div>
  <div class="row">
<label>Transfer To: <input type="text" name="tt" maxlength="35" required  style="padding:10px 36px;" /></label>
</div>
  <div class="row">
<label>Reason: <input type="text" name="res" maxlength="30" required style="padding:10px 48px;" /> </label> 
</div>
<div class= "row">
<label >Date: <input  type="date" name="odate" required  style="padding: 10px 14px; margin-left: 20px;"/></label> 
</div>
    <div class="row">
<label>Vehicle No: <input type="text" name="vh" maxlength="10" required style="padding:10px 38px"; /></label>
</div>
    <input type="submit" name="addt" value="ADD"  />
  </form>
</div>
</div>

<!-- Add Google Maps -->
</body>
</html>