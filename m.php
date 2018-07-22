<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css5.css"/>

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

<?php $ret=mysqli_query($conn, 'SELECT * FROM Prisoner');
?>
<?php while( $row =mysqli_fetch_array($ret, MYSQLI_ASSOC)) : ?>
<div class="gallery">
    <img src="<?php echo $row['pic']; ?>" width="150" height="150"/>
   <span class="desc">PID: <?php echo $row['PID']; ?> </span><br> 
  <span class="desc">Name: <?php echo $row['Name']; ?> </span><br>
  <span class="desc">Cell No: <?php echo $row['P_NO']; ?> </span><br>
  <span class="desc" style="padding-right: 10px;">Sex: <?php echo $row['sex']; ?> </span>
  <span class="desc">Age: <?php echo $row['age']; ?> </span><br>
  <span class="desc">Crime: <?php echo $row['crime']; ?> </span><br>
    <span class="desc">Entry_Date: <?php echo $row['entry']; ?> </span><br>
      <span class="desc">Release_Date: <?php echo $row['released']; ?> </span><br>
          <span class="desc">Contact No: <?php echo $row['cn']; ?> </span><br><br>
    <a id="up" href="update.php "> Update </a>
  <button onclick="document.getElementById('id02').style.display='block'" id ="up">Feedback</button>
  <div id="id02" class="modal">
  <form class="modal-content animate" action="login1.php" method="post">
  <div class="imgcontainer">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <img src="images.jpg" alt="Avatar" class="avatar" style="width: 100px; margin:10px auto;">
    </div>
    <div class="container">
    <label><b>PID </b></label>
    <input type="text"  name="pid" maxlength="3" placeholder="Enter PID" required>

    <label><b>Feedback</b></label><br>
    <textarea  name="feed" required cols="20" rows="10"> Give Feedback</textarea>
    <input type="submit" name="feed" value="Feedback">
    </div>

  
  </form>
</div>

</div>
 <?php endwhile ?>



</div>
</br></br><br>

<br><br><br>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>