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
 
    <li style="float:right" style="margin-top:5px;   padding: 8px 18px;
    margin: 8px 2px;">
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
  <div class="login">
<form class="reg1" action="addg3.php" method="post">
<div class="row">
<label>GID: <input type="text" name="gid" maxlength="3" required style="padding: 10px 55px;" /> </label> </br></br>
</div>
<div class= "row">
<label>Name: <input  type="text" name="name" maxlength="25" required style="padding: 10px 47px;"/></label></br></br>
</div>
<div class= "row">
<label>Age: <input  type="number" name="age" min="0" max="150" sixe="20" required style="padding: 10px 100px;"/></label></br></br>
</div>
<div class= "row">
<label>Contact No: <input  type="number" name="cn" min="0" max="9999999999" required  style="padding: 10px 50px;" /></label></br></br>
</div>
<div class= "row">
<label>Salary: <input type="text" name="sal" maxlength="8" required  style="padding: 10px 45px;" /> </label> </br></br>
</div>
<div class= "row">
<label> Shift: <input  type="radio" name="shift" value="Morning" required  /> Morning<input  type="radio" name="shift" value="Evening" required "/> Evening</label></br></br>
</div>
<div class= "row">
<label >Joining Date: <input  type="date" name="indate" required  style="padding: 10px 30px;"/></label></br></br>
</div>
<div class= "row">
<label >Termination_Date: <input  type="date" name="odate" required  style="padding: 10px 10px;"/></label></br></br>
</div><BR>
<label for="pic">Picture:</label> <input id="pic" type="file" name="pic" accept="image/* " required/><br><br>


<input id="login1" type="submit" name="addg" value="ADD"/></br> </br> 
</form>
</div>
</div>


<!-- Add Google Maps -->
</body>
</html>