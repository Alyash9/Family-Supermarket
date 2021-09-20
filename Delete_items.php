<html>
<head>
    <link rel = "stylesheet" type="text/css" href="Style.css"> 
    <title>Delete items</title>  
    <script>
      function redirect(){
        window.location.assign("listItem.php")
      }
    </script>
</head>

<body>
<div class = "header">
<h1 style ="position:relative; top: 90px; left: 100px;"> Family Supermarket <h1> </div> 
<div> <img src="logo.png" alt="family supermarket logo" style="height:100px;
width:100px;  border-top-left-radius:50px;  border-top-right-radius:50px; 
border-bottom-right-radius:50px; border-bottom-left-radius:50px;
 "></div> 
<div>
 <ul class="topnav" id="myTopnav">
    <li><a href="adminlogintest.html">Login</a></li>
    <li><a href="amdmin_navi.html">Home</a></li> 
    <li><a href="projAdd.php">Add Items  </a></li>
     <li><a href="Delete_items.php">Delete Items</a></li>
     <li><a href="updatea.php">Update Items</a></li>
     <li><a href="viewitems.php"> View Items</a></li>    
      <li><a href="logout.php"> log out</a></li>   
  </ul> 
    
  </ul>
</div>
<h1 align="center">Delete Items</h1>  
 <center> <table border=1 cellpadding=1 cellspacing=1>
    <tr>
      <th>Item Name</th>    
      <th>Description</th> 
      <th>Value</th>      
   <?php
   $con=mysqli_connect("localhost", "root", "");
        mysqli_select_db($con, "Supermarket");
   $sql="select * from item";
   $records= mysqli_query($con, $sql);
   while ($row= mysqli_fetch_array($records)){
     echo "<tr>";
     echo "<td>". $row['item_name']. "</td>";
     echo "<td>". $row['description']. "</td>";
     echo "<td>". $row['value']. "</td>";
     echo "<td><a href=deleteitem.php?item_id=".$row['item_id'].">Delete</a></td>";
   }
  ?>
  </table>
  </center>
<br> 
<br> 
<br>
<br> 
<br> 
<br>  
  </body>
<footer>
 <ul class="footer-style">
<br> 
<br> 
<br> 
  </ul>


<div class= "back2top" ><A HREF="#top">Back To Top</A></div> 
<h6> &copy 2020 Family Supermarket  </h6>
</footer> 
</html>
