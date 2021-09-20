<html>
<head>
 <link rel = "stylesheet" type="text/css" href="Style.css"> 
<title>  Add Items  </title>
</head>

<body>
<div class = "header">
<h1 style ="position:relative; top: 90px; left: 100px;"> Family Supermarket <h1> </div> 
<div> <img src="logo.png" alt="Family Supermarket logo" style="height:100px;
width:100px;  border-top-left-radius:50px;  border-top-right-radius:50px; 
border-bottom-right-radius:50px; border-bottom-left-radius:50px;
 "></div> 
<div>
 <ul class="topnav" id="myTopnav">
   <li><a href="Login.php">Login</a></li>
    <li><a href="amdmin_navi.html">Home</a></li> 
    <li><a href="projAdd.php">Add Items  </a></li>
     <li><a href="Delete_items.php">Delete Items</a></li>
     <li><a href="updatea.php">Update Items</a></li>
     <li><a href="viewitems.php"> View Items</a></li>    
      <li><a href="logout.php"> log out</a></li>   
  </ul>
  </ul>
</div>


<center><h1> Add items </h1>
  <form  action="insertitem.php" method= "post" enctype="multipart/form-data">
<font color="red">   
<table>
<tr><td>Item ID: </td><td><input type= "text" name="item_id" size="4"></td></tr>
<tr><td>Item name: </td><td><input type= "text" name="item_name" size="50"></td></tr>
<tr><td>Item description: </td><td><textarea name="description" cols="36" rows="4" placeholder="Add description"></textarea></td></tr>
<tr><td>Item price: </td><td><input type="text" name="value" size="10"></td></tr>
<tr><td>Item img: </td><td><input type= "file" name="img" size="20"></td></tr>

</table></font> 
<p> <input type="submit" value="Add item"></p>
<p><input type="reset" value="Clear"></p>
</form></center>
<br>
<br>
<br>
</body>
</html>


<footer>
  

 <ul class="footer-style">
 <br>
<br>
<br>
<br>
<br>
<br>
  </ul>


<div class= "back2top" ><A HREF="#top">Back To Top</A></div> 
<h6> &copy 2020 Family Supermarket  </h6>
</footer> 
</html>
