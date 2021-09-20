<html>  
<head lang="en">  
    <meta charset="UTF-8">  
  <link rel = "stylesheet" type="text/css" href="Style.css"> 
    <title>Admin Login</title>  
</head>  

  
<body>  
  
  <div class = "header">
<h1 style ="position:relative; top: 90px; left: 100px;"> Family Supermarket <h1> </div> 
<div> <img src="logo.png" alt="Family supermarket logo" style="height:100px;
width:100px;  border-top-left-radius:50px;  border-top-right-radius:50px; 
border-bottom-right-radius:50px; border-bottom-left-radius:50px;
 "></div> 
 
<div>
 <ul class="topnav" id="myTopnav">
   <li><a href="loginadmintest.html">Login</a></li>
    <li><a href="HomePage.html">Home</a></li>
    <li><a href="menu.php">Menu</a></li>
    <li><a href="Aboutus.html">About us </a></li>
     <li><a href="https://goo.gl/maps/t95umCAaSfn">Come and visit us</a></li>

    
  </ul>
</div>
  
  <br>
  <br>
  <br>
  <div>
<center>
<?php

session_start();
$name=$_POST['name'];
$pass=$_POST['pass'];


if($name&&$pass)
{

$connect=mysqli_connect("localhost","root","") or die ("couldn't connect!");
mysqli_select_db($connect,"supermarket") or die("couldn't find db") ;

$query=mysqli_query($connect,"SELECT name FROM admin where name='$name' and pass = '$pass'");
$numrows=mysqli_num_rows($query);
//echo $numrows;

// check if user exsists in the database 
if($numrows!=0)
{
	
	header("location: amdmin_navi.html");

	$_SESSION['name']=$name;
		   
}

else
die("Incorrect username or password!");
}
else 
die ("please enter a username and a password!");

?>


</center>
<br>
<br>

</body>  
  
  <footer>
  

 <ul class="footer-style">
   <li><a href="FAQ.html">FAQ </a></li>
    <li><a href="Policy.html">Our Policy </a></li>
    <li><a href="contactus.html">Contact</a></li>
  </ul>


<div class= "back2top" ><A HREF="#top">Back To Top</A></div> 
<h6> &copy 2020 Family SuperMarket  </h6>
</footer> 
</html>  
  
