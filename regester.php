<?php include('server.php') ?>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
  <link rel = "stylesheet" type="text/css" href="Style.css"> 
    <title>User Login</title>  
</head>  

  
<body>  

<center>
<div class="header">
	  <h2>Register</h2>
	

  <table>
  <form method="post" action="server.php">
  <?php include('errors.php'); ?>
  	<div>
    <tr>
    <td><label>Username (4 characters only)</label> </td>
    <td><input type="text" name="id" > </td>
    </tr>		
    </div>

	<div>
	<tr>
	<td><label>First Name</label></td>
	<td><input type="text" name="name"></td>
	</tr>	
	</div>

	<div>  
	<tr> 
	<td><label>Password</label></td>
	<td><input type="password" name="pass"></td>
	</div>
	  
  	<div>
	  <tr> 
	  <td><label>Confirm password</label></td>
	  <td><input type="password" name="pass2"></td>
      </tr> 
	</div>
	  
	<div>
	  <tr>
      <td><label>Address</label></td>
	  <td><input type="text" name="address" ></td>
      </tr>
	</div>
</table>
  	<div >
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</center>
</body>


<footer>
  

 <ul class="footer-style">
   <li><a href="FAQ.html">FAQ </a></li>
    <li><a href="Policy.html">Our Policy </a></li>
    <li><a href="contactus.html">Contact</a></li>
  </ul>


<div class= "back2top" ><A HREF="#top">Back To Top</A></div> 
<h6> &copy 2020 FamilySupermarket  </h6>
</footer> 

</html>
</html>