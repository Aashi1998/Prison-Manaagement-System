<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css2.css"/>

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
   

<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="a.jpg" style="width:900px; height: 400px; ">
    
  </div>
  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="b.jpg" style="width:900px; height: 400px;">
 
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="c.jpg" style="width:900px;height: 400px;">
    
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="margin-left:350px">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 

</div>
<p style="color: #708090; font-size: 16x;">Angola Prison surrounded by fencing, walls, earthworks, geographical features, or other barriers to prevent escape. Multiple barriers, concertina wire, electrified fencing, secured and defensible main gates, armed guard towers, security lighting, motion sensors, dogs and roving patrols may all also be present depending on the level of security.</p><p  style="color: #708090; font-size: 16x;">Prison designs have increasingly sought to restrict and control the movement of prisoners throughout the facility and also to allow a smaller prison staff to monitor prisoners directly; often using a decentralized "podular" layout.[39][40] (In comparison, 19th-century prisons had large landings and cell blocks which permitted only intermittent observation of prisoners.) Smaller, separate and self-contained housing units known as "pods" or "modules" are designed to hold 16 to 50 prisoners and are arranged around exercise yards or support facilities in a decentralized "campus" pattern. A small number of prison officers, sometimes a single officer, supervise each pod.</p><br>
<p  style="color: #708090; font-size: 16x;">The Prison Information Section has been designed to make it easy for the administrator and the jailor to maintain thousonds of records. The basic objective of the website is to provide reliable information about the Prison.</p>
<ol >
  <li style="color: #F08080; font-size: 14px;">Visiting hours: 12pm to 3pm</li><br>
  <li style="color:#F08080; font-size: 14px;" >Book your appointment atleast 2 days ago.</li><br>
  <li style="color: #F08080; font-size: 14px;">Only 2 visits in a month</li><br>
</ol>

<br><br>
</div>

  <footer>
  <a id="foot" href="#home">To the top</a>
 
</footer>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>