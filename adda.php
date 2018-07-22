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
<div id="login">
  <form action="adda1.php" method="post">
    <label for="fname">Name:</label><br>
    <input type="text" id="fname" name="name" placeholder="Enter your name"/><br>

    <label for="lname">Password:</label><br>
    <input type="password" id="lname" name="pass" placeholder="Enter your Password"/><br>

  
    <input type="submit" name="Login" value="Login"/>
  </form>
</div>


<!-- Add Google Maps -->
</body>
</html>