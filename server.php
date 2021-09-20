<html>  
<head lang="en">  
    <meta charset="UTF-8">  
  <link rel = "stylesheet" type="text/css" href="Style.css"> 
    <title>User Login</title>  
</head>  

  
<body>  
  
  <div class = "header">
<h1 style ="position:relative; top: 90px; left: 100px;"> Family Supermarket <h1> </div> 
<div> <img src="logo.png" alt="Family supermarket logo" style="height:100px;
width:100px;  border-top-left-radius:50px;  border-top-right-radius:50px; 
border-bottom-right-radius:50px; border-bottom-left-radius:50px;
 "></div> 
 </div> 
 
<div>
 <ul class="topnav" id="myTopnav">
   <li><a href="Logintest.html">Login</a></li>
    <li><a href="Homepage.html">Home</a></li>
    <li><a href="menu.php">Menu</a></li>
    <li><a href="Aboutus.html">About us </a></li>
     <li><a href="https://goo.gl/maps/t95umCAaSfn">Come and visit us</a></li>
     <li><a href="logout.php">log out</a></li>   
    
  </ul>
</div>

<?php
session_start();


$name = "";
$address    = "";
$errors = array(); 


$db=mysqli_connect("localhost","root","") or die ("couldn't connect!");
mysqli_select_db($db,"supermarket") or die("couldn't find db") ;

if (isset($_POST['reg_user'])) {
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['pass2']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($address)) { array_push($errors, "Address is required"); }

  $user_check_query = "SELECT * FROM user WHERE username='$name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['id'] === $id) {
        array_push($errors, "Username already exists");
      } 
  }
  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO user(id, name, pass, address) 
  			  VALUES('$id', '$name',  '$password','$address')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: HomePage.html');
  }}
?>


</body>
</html>