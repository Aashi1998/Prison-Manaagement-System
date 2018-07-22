+<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header> ANGOLA PRISON </header>
<p></p>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
	position: relative;
	  left:1330px;
	  	top:500px;
	width:150px;
	top:30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;

}

button:hover {
    opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 10%;
    top: -10px;
    width: 80%; /* Full width */
    height: 80%; /* Full height */
  /* Enable scrooll if needed */

    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
input[type=submit] {
    width:90%;
    background-color: #4CAF50;
    color: white;
     padding: 14px 20px;
    margin: 8px 0;
    margin-left: 35px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
 
}
</style>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;  top:480px; left: 1330px;">Login As Admin</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
  
 <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
     
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <input type="submit" name="Login" value="Login">
    </div>

  
  </form>
</div>


<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;  top:540px; left: 1200px;">Login As Jailor</button>

<div id="id02" class="modal">
   <form class="modal-content animate" action="login1.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <input type="submit" name="login" value="Login">
    </div>

  
  </form>
</div>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;  top:600px; left: 1050px;">Book An Appointment</button>

<div id="id03" class="modal">
   <form class="modal-content animate" action="app.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

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
 <label><b>PID </b></label>
   <?php $ret=mysqli_query($conn, 'SELECT * FROM prisoner');?>

  <select name="pid" style="padding: 8px 10px; margin-left: 15px;">
    <?php while( $row =mysqli_fetch_array($ret, MYSQLI_ASSOC)) : ?>
    <option value=" <?php echo $row['PID']; ?> "><?php echo $row['PID']; ?></option>
     <?php endwhile ?>
  </select>
 <br>
<br>
  <label><b>Visitor Name</b></label>
     <input  type="text" name="name" maxlength="25" required /></br><br>
   <label><b>Relation</b></label> 
<input  type="text" name="rel" maxlength="25" required /></br>  <br>
<label><b>Visiting Date</b></label>
<input  type="date" name="vdate" min="<?php echo date("Y-m-d") ; ?>" required style=" margin-right: 15px; padding: 10px 12px;"/>
<label><b>Upload your Id</b></label>
<input id="pic" type="file" name="pic" accept="image/* " required style=" border-radius: 4px;   padding: 8px 10px;" /><br><br>

  <input type="submit" name="login" value="Book Your Appointment">
    </div>

  
  </form>
</div>
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

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>