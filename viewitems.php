<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel = "stylesheet" type="text/css" href="Style.css"> 
    <title>View Items</title>  
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
  
<div class="table-scrol">  
    <h1 align="center">All Items</h1>  
  
<div class="table-responsive"  align="center">


  
    
        <?php  
       $conn= mysqli_connect("localhost", "root","");
       $db=mysqli_select_db($conn , "supermarket");
       $query= "select item_id, item_name, description, value from item";

       if (!($display= mysqli_query($conn , $query) ) ){
           print("<p> couldn't excute query</p>");
           die(mysqli_error()."</body></html");
       }

    mysqli_close($conn);
  
        ?> 
         <table border="1" class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead> 
        <tr>  
  
            <th>Item ID</th>  
            <th>Name</th>   
            <th>Description</th>  
            <th>Value</th>  
        </tr>  
        </thead>  
        <?php
        while ($record= mysqli_fetch_row($display)){
            print("<tr>");
            foreach($record as $value)
            print ("<td>$value</td>");
        
        print("</tr>");
    }
    ?>
  
   </table> 
  
 
          
            <td><a href="delete.php?del= <?php echo $item_id ?>">
		
  
            
  
     
        </div>  
</div> 
 <br>
<br> 

  
<center>  <p>To update items click <b> <a href="updatea.php">HERE</a> </b></p></center>
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