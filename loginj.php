<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css1.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="nab">
<ul>

<li><a href="h.php" style="margin-left: 10PX;"> Home </a></li>  
 
  <li style="float:right" style= "margin-right=15px;" class="dropdown">
    <a href="#contact" class="dropbtn">Contact Us</a>
  
  </li>
  <li style="float:right"><a href="#"> About</a></li>
</ul>
</div>
<div id="login">
  <img src="logo.jpg"/>
  <form action="login1.php" method="post">
    <label for="fname">Name:</label><br>
    <input type="text" id="fname" name="name" placeholder="Enter your name"/><br>

    <label for="lname">Password:</label><br>
    <input type="password" id="lname" name="pass" placeholder="Enter your Password"/><br>

  
    <input type="submit" name="Login" value="Login"/>
  </form>
</div>

<div  id="contact">
  <h3 >CONTACT US</h3>

      <div class="info">
        Chicago, US<br>
        Phone: +00 151515<br>
        Email: mail@mail.com<br>
      </div>
     
 
</div>

  <footer>
  <a id="foot" href="#home">To the top</a>
  </div>
</footer>
<!-- Add Google Maps -->
</body>
</html>