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
<<div id="login">
  <div class="login">
<form class="reg1" action="adds2.php" method="post">
<div class="row">
<label>SID: <input type="text" name="sid" maxlength="3" required style="padding: 10px 55px;" /> </label> </br></br>
</div>
<div class= "row">
<label>Name: <input  type="text" name="name" maxlength="25" required style="padding: 10px 47px;"/></label></br></br>
</div>
<div class= "row">
<label>Age: <input  type="number" name="age" min="0" max="150" sixe="20" required style="padding: 10px 100px;"/></label></br></br>
</div>
<div class= "row">
<label>Designation:<select name="dest" style="padding: 10px 10px;" >
  <option value="COOK">Cook</option>
  <option value="Washerman">Washerman</option>
  <option value="Doctor">Doctor</option>
  <option value="Medical Staff">Medical Staff</option>
  <option value="Electrician">Eletrician</option>
  <option value="Plumber">Plumber</option>
  <option value="Others">Others</option>
</select> </label> </br></br>
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
<label >Termination Date: <input  type="date" name="odate" required  style="padding: 10px 14px;"/></label></br></br>
</div>
<BR>
<label for="pic">Picture:</label> <input id="pic" type="file" name="pic" accept="image/* " required/><br><br>


<input id="login1" type="submit" name="adds" value="ADD"/></br> </br> 
</form>
</div>
</div>
<!-- Add Google Maps -->
</body>
</html>