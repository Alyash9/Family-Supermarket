<title>update item</title>
<link rel="stylesheet" href="Style.css">
<br>
<br>
<br>
</head> 





  </table>
  </center>
<body>
<div class = "header">
<h1 style ="position:relative; top: 90px; left: 100px;"> Family supermarket <h1> </div> 
<div> <img src="logo.png" alt=" Family supermarket logo" style="height:100px;
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


<div class="container">  
         <div class="row">  
         <div class="col-md-4 col-md-offset-4">  
         <div  class="login-panel panel panel-success">  
         <div class="panel-heading">  
         <br>
         <br>

         <?php
            $con=mysqli_connect("localhost", "root", "");
        mysqli_select_db($con, "Supermarket");
   $sql="select * from item";
   $records= mysqli_query($con, $sql);
   ?>
    <h1 align="center">Update Items</h1>  
   <center> <table border=1 cellpadding=1 cellspacing=1>
    <tr>
      <th>Item Name</th>    
      <th>Description</th> 
      <th>Value</th>    
</tr>  
   <?php

   while ($row= mysqli_fetch_array($records)){
     echo "<tr> <form action='update.php' method='post'>";
     echo "<td><input type='text' name='item_name' value=' ". $row['item_name']. "'></td>";
     echo "<td><input type='text' name='description' value=' ". $row['description']. "'></td>";
     echo "<td><input type='text' name='value' value=' ". $row['value']. "'></td>";
     echo "<td><input type='hidden' name='item_id' value= '".$row['item_id']."'></td>";
     echo "<td><input type='submit' value='Update'></td>";
     echo "</form> </tr>";
   }
  ?>    </center> 

</table>
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