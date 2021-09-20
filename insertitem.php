<!DOCTYPE HTML>

<html>
<head>
    <title>Insert Item</title>
    <link rel = "stylesheet" type="text/css" href="Style.css"> 

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
</div>
<center>  <h2> Add Item Result</h2>
    <hr>

    <?php
    $con= mysqli_connect("localhost","root","");
    if (!$con)
    {
    echo 'not connected to server';
    }
    if (!mysqli_select_db($con,'supermarket'))
    {
    echo 'database not selected';
    }
    $Id=$_POST['item_id'];
    $name=$_POST['item_name'];
    $des=$_POST['description'];
    $val=$_POST['value'];
	

	
			
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $img=basename( $_FILES["img"]["name"]); // used to store the filename in a variable

    $sql="INSERT INTO item (item_id, item_name, description, value,img)VALUES ('$Id', '$name' , '$des','$val','$img')";
    if (!($result=mysqli_query($con, $sql))) 
    {
        print ("<p> couldn't execute query! </p> ");
        die (mysqli_error($sql)."</body> </html>");
    
    }
else{
   print("<p>Item added successfully!<p>");
   print("<table border=1 cellpadding=1 cellspacing=1>");
    print ("<tr><td>Item ID</td> <td>$_POST[item_id]</td></tr>");
    print ("<tr><td>Item Name</td> <td>$_POST[item_name]</td></tr>");
    print ("<tr><td>Description</td> <td>$_POST[description]</td></tr>");
    print ("<tr><td>Value</td> <td>$_POST[value]</td></tr>");
    print ("</table>");
}
?>
</center>
</body>
<footer>
  

 <ul class="footer-style">
 <br>
<br>
<br>
<br>
<br>
<br>


<div class= "back2top" ><A HREF="#top">Back To Top</A></div> 
<h6> &copy 2020 Family Supermarket  </h6>
</footer> 


</html>