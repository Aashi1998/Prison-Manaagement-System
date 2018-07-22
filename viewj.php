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

<?php $ret=mysqli_query($conn, 'SELECT * FROM jailor');
?>
<?php while( $row =mysqli_fetch_array($ret, MYSQLI_ASSOC)) : ?>
<div class="gallery">
    <img src="<?php echo $row['pic']; ?>" width="150" height="150"/>
   <span class="desc">JID: <?php echo $row['JID']; ?> </span><br> 
  <span class="desc">Name: <?php echo $row['Name']; ?> </span><br>
  <span class="desc">Age: <?php echo $row['age']; ?> </span><br>
  <span class="desc">Address: <?php echo $row['addr']; ?> </span><br>
       <span class="desc">Joining Date: <?php echo $row['joning']; ?> </span><br>
      <span class="desc">Termination Date: <?php echo $row['ter']; ?> </span><br>
          <span class="desc">Contact No: <?php echo $row['cn']; ?> </span><br><br>
        
    <?php   $s="uj.php?gid=".$row['JID']; ?>
            <a href="<?php echo $s; ?>" onclick="return popitup('<?php echo $s; ?>')" style="text-decoration: none;  padding: 10px; background-color: #CD5C5C;   color: white;   float: right; font-weight: normal; text-align: center; margin-right: 20px; border-radius: 2px;">Update</a>

   <button onclick="document.getElementById('id02').style.display='block'" id ="up">Feedback</button>
  <div id="id02" class="modal">
  <form class="modal-content animate" action="fj.php" method="post">
  <div class="imgcontainer">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <img src="images.jpg" alt="Avatar" class="avatar" style="width: 100px; margin:10px auto;">
    </div>
    <div class="container">
    <label><b>JID </b></label>
    <input type="text"  name="pid" maxlength="3" placeholder="Enter JID" required>

    <label><b>Feedback</b></label><br>
    <textarea  name="feed1" required cols="20" rows="10"> Give Feedback</textarea>
    <input type="submit" name="feed" value="Feedback">
    </div>

  
  </form>
</div>
</div>
 <?php endwhile ?>



</div>
</br></br><br>

<br><br><br>

 <script language="javascript" type="text/javascript">
function popitup(url) {
    newwindow=window.open(url,'name','height=400,width=600');
    if (window.focus) {newwindow.focus()}
    return false;
}

// -->
</script>

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