
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

<?php $ret=mysqli_query($conn, 'SELECT * FROM appointment');
?>
<div id="tab" style=" margin-top: 50px; ">
 <table style="  margin-top: 50px;width:70%;  align-self: center;">
    <thead>
        <tr>

            <th style="padding : 10px 10px 10px 10px; background-color:   #708090;  " >PID</th>
            <th style="padding : 10px 10px 10px 10px; background-color:   #708090; " >Visitor Name</th>
            <th style="padding : 10px 10px 10px 10px;  background-color:  #708090; ">Relation</th>
            <th style="padding : 10px 10px 10px 10px; background-color:  #708090; ">Appointment Date</th>
            <th style="padding : 10px 10px 10px 10px; background-color:   #708090; ">Id Proof</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row =mysqli_fetch_array($ret, MYSQLI_ASSOC)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td style="text-align: center; padding : 10px 10px 10px 10px; color: #cc6699;  font-weight: bold; "><?php echo $row['PID']; ?></td>
            <td style="text-align: center; padding : 10px 10px 10px 10px; color: #cc6699;  font-weight: bold; "><?php echo $row['V_Name']; ?></td>
            <td style="text-align: center; padding : 10px 10px 10px 10px; color: #cc6699;  font-weight: bold; "><?php echo $row['Relation']; ?></td>
            <td style="text-align: center; padding : 10px 10px 10px 10px; color: #cc6699;  font-weight: bold; "><?php echo $row['Date']; ?></td>
            <td style="text-align: center; padding : 10px 10px 10px 10px; color: #cc6699;  font-weight: bold; "><?php echo $row['prof']; ?></td>
            <td style="text-align: center; padding : 10px 10px 10px 10px; color: #cc6699;  font-weight: bold; ">
              <form method="post" action="ca.php">
              <input type="hidden" name="pid" value="<?php echo $row['PID'] ?>">
              <input type="submit" value="" style="background-image: url(ca.jpg); width: 12px; height: 33px;">
            </form></td>
              <td style= "text-align: center; padding : 10px 10px 10px 10px; color: #cc6699;  font-weight: bold; ">
              <form method="post" action="cb.php">
              <input type="hidden" name="pid" value="<?php echo $row['PID'] ?>">
              <input type="hidden" name="name" value="<?php echo $row['V_Name'] ?>">
              <input type="hidden" name="rel" value="<?php echo $row['Relation'] ?>">
              <input type="hidden" name="date" value="<?php echo $row['Date'] ?>">
              <input type="hidden" name="pic" value="<?php echo $row['prof'] ?>">
              <input type="submit" name="g" value="" style="background-image: url(cb.jpg); width: 15px; height: 33px;">
            </form></td>
          
          
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
</div>


</div>
</br></br><br>

<br><br><br>




</body>
</html>