<html>
<head> 
<title> List Items </title> 
  <link rel = "stylesheet" type="text/css" href="Style.css"> 
  <script>
      function redirect(){
          window.location.assign("viewitems.php")
      }
    </script>
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
   <li><a href="Login.php">Login</a></li>
    <li><a href="amdmin_navi.html">Home</a></li> 
     <li><a href="projAdd.html">Add Item  </a></li>
     <li><a href="Delete_items.php">Delete Items</a></li>
    <li><a href="updatea.html">Update Item</a></li>
     <li><a href="viweitems.php"> View Items</a></li>    
     <li><a href="logout.php"> log out</a></li>   
  </ul>
</div>

<?php
$conn= mysqli_connect("localhost","root", "");
$db= mysqli_select_db($conn,"supermarket");
$query2="Select * from item";
$result2= mysqli_query($conn, $query2);
mysqli_close($conn);
?>

<table>
    <caption>List Of Items</caption>
    <tr><th>Item Id</th><th>Item name</th><th>description</th><th>price</th><th></th><th></th></tr>

    <?php
    while($row= mysqli_fetch_row($result2)){
        print("</tr>");
    }
    ?>

</table>

<p><input type="button" onclick="redirect()" value="Add Item"></p>
</body>
</html>
