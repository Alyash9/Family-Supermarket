<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel = "stylesheet" type="text/css" href="Style.css"> 
    <title>Delete Items</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
<div class = "header">
<h1 style ="position:relative; top: 90px; left: 100px;"> Family Supermarket <h1> </div> 
<div> <img src="logo.png" alt="Family supermarket logo" style="height:100px;
width:100px;  border-top-left-radius:50px;  border-top-right-radius:50px; 
border-bottom-right-radius:50px; border-bottom-left-radius:50px;
 "></div> 
<div>
 <ul class="topnav" id="myTopnav">
    <li><a href="Logintest.html">Login</a></li>
    <li><a href="amdmin_navi.html">Home</a></li> 
    <li><a href="projAdd.php">Add Items  </a></li>
     <li><a href="Delete_items.php">Delete Items</a></li>
     <li><a href="updatea.php">Update Items</a></li>
     <li><a href="viewitems.php"> View Items</a></li>    
      <li><a href="logout.php"> log out</a></li>   
  </ul>   
    
  </ul>
</div>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
   $con=mysqli_connect("localhost", "root", "", "Supermarket");
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // sql to delete a record
    $sql = "DELETE FROM item WHERE item_id='$_GET[item_id]'";
        
        if (mysqli_query($con, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        
        mysqli_close($con);
        ?>
        </center>
<br>
<br>
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
<br>
<br>
<br>
  </ul>


<div class= "back2top" ><A HREF="#top">Back To Top</A></div> 
<h6> &copy 2020 Family Supermarket  </h6>
</footer> 
  
    </html>