<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Supermarket</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>  
  
  <div class = "header">
<h1 style ="position:relative; top: 90px; left: 100px;"> Family Supermarket <h1> </div> 
    <div> <img src="logo.png" alt="family supermarket logo" style="height:100px;
        width:100px;  border-top-left-radius:50px;  border-top-right-radius:50px; 
        border-bottom-right-radius:50px; border-bottom-left-radius:50px;
         "></div> 
 
<div>
     
    <div>
     <ul class="topnav" id="myTopnav">
       <li><a href="Logintest.html">Login</a></li>
       <li><a href="HomePage.html">Home</a></li>
       <li><a href="menu.php">Menu</a></li>
        <li><a href="Aboutus.html">About us </a></li>
         <li><a href="https://goo.gl/maps/t95umCAaSfn">Come and visit us</a></li>
         <li><a href="logout.php"> log out</a></li>  
        
      </ul>
    </div>
    <!-- <h1 class="center"> Our Menu </h1>  -->

    <section> <form id="themenu">
  <div class="cards">
  
  <?php 

		$db=mysqli_connect("localhost","root","") or die ("couldn't connect!");
		mysqli_select_db($db,"supermarket") or die("couldn't find db") ;
		
		$sql="SELECT * FROM `item`";
		$query=mysqli_query($db,$sql);
		while($row=mysqli_fetch_array($query))
		{
		?>
		
    <div class="card">
      <div class="card__image-holder">
	  
		         <?php   echo"
			  <img  src='img/".$row['img']."'  class='card__image'  alt='wave' />";
			  ?>
			
       
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <input class="SMItems" type="checkbox" item_name="Water" value="1" item_id="1" > 
          <span class="left"></span>
          <span class="right"></span>
        </a>
		
        <h2>
          <?php echo$row['item_name']; ?>
          <h6><?php echo$row['description'];?></h6>
            <small><strong>Price:</strong> <?php echo$row['value'];?>SR</small>
        </h2>
      </div>
      <div class="card-flap flap1">
        <div class="card-flap flap2">
        </div>
      </div>
    </div>
		<?php } ?>
	<!--end --card-->
    
  
  
    
  </div>

  </form>
  <!-- <button id="getTotal">Add To Cart</button> -->
  <div class="Cart">
    <button id="getTotal">Add To Cart</button>
<br>
<br>
    <div id="subtotal">Sub-Total:</div>
    <div id="Delivery">Delivery:</div>
    <div id="total">Total:</div></section>  
  </div>

  <script>
  var button = document.getElementById("getTotal");
  
  button.onclick = function () {
      var subtotalField = document.getElementById("subtotal");
      var radios = document.forms["themenu"].getElementsByTagName("input");
      var subtotal = 0;
      var Delivery = 0;
      var total = 0;
  
      for (var i = 0, length = radios.length; i < length; i++) {
          if (radios[i].checked) {
              subtotal += parseInt(radios[i].value);
          }
      }
  
      total = (parseFloat(subtotal)).toFixed(2);
  
      document.getElementById("subtotal").innerHTML = "Sub-Total: SR " + subtotal;
      document.getElementById("Delivery").innerHTML = "Delivery: SR " + Delivery;
      document.getElementById("total").innerHTML = "Total: SR " + total;
  };
  
  </script> 
  
  
</body>
<footer>
  

  <ul class="footer-style">
    <li><a href="FAQ.html">FAQ </a></li>
     <li><a href="Policy.html">Our Policy </a></li>
     <li><a href="contactus.html">Contact</a></li>
   </ul>
 
 
 <div class= "back2top" ><A HREF="#top">Back To Top</A></div> 
 <h6> &copy 2020 Family Supermarket</h6>
 </footer> 
 
</html>


