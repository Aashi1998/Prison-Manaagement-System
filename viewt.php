<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css3.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="nab">
<ul>

<li><a id="home" href="HOMEPAGE.php" style="margin-left: 10PX;"> Home </a></li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Admin</a>
    <div class="dropdown-content">
      <a href="SIGNUP1.php" style="font-weight: bold;">ADD ADMIN</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Jailor</a>
    <div class="dropdown-content">
      <a href="viewj.php" style="font-weight: bold;">VIEW JAILORS</a>
      <a href="addj.php" style="font-weight: bold;">ADD JAILOR</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Prisoner</a>
    <div class="dropdown-content">
      <a href="viewp.php" style="font-weight: bold;">VIEW PRISONERS</a>
      <a href="addp.php" style="font-weight: bold;">ADD PRISONER</a>
    </div>
     </li>
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Transfer</a>
    <div class="dropdown-content">
      <a href="viewt.php" style="font-weight: bold;">VIEW TRANSFERS</a>
      <a href="addt.php" style="font-weight: bold;">ADD TRANSFER</a>
    </div>
  </li>
 
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Guard</a>
    <div class="dropdown-content">
      <a href="viewg.php" style="font-weight: bold;">VIEW GUARDS</a>
      <a href="addg.php" style="font-weight: bold;">ADD GUARD</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Staff</a>
    <div class="dropdown-content">
      <a href="views.php" style="font-weight: bold;">VIEW STAFFS</a>
      <a href="adds.php" style="font-weight: bold;">ADD STAFF</a>
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

<div id="main">

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

<?php $ret=mysqli_query($conn, 'SELECT * FROM transfer');
?>
<?php while( $row =mysqli_fetch_array($ret, MYSQLI_ASSOC)) : ?>
<div class="gallery">

    <?php
      $a= $row['PID'];
      $stmt = $conn->prepare('SELECT * FROM prisoner WHERE PID= ?');
$stmt->bind_param('s', $a);

$stmt->execute();

$result = $stmt->get_result();
  $row1 =$result->fetch_assoc();
  ?>
    <img src="<?php echo $row1['pic']; ?>" width="150" height="150"/>
    <span class="desc">TID: <?php echo $row['TID']; ?> </span>
   <span class="desc">PID: <?php echo $row['PID']; ?> </span><br> 

  <span class="desc">Transfer From: <?php echo $row['tf']; ?> </span><br>
  <span class="desc">Transfer To: <?php echo $row['tt']; ?> </span><br>
    <span class="desc">Reason: <?php echo $row['res']; ?> </span><br>
      <span class="desc">Date: <?php echo $row['dat']; ?> </span><br>
          <span class="desc">Vehicle No: <?php echo $row['vn']; ?> </span><br><br>

</div>
 <?php endwhile ?>



</div>
</br></br><br>

<br><br><br>




</body>
</html>