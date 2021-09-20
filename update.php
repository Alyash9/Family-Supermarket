<?php
   $con=mysqli_connect("localhost", "root", "", "Supermarket");
    
   $sql="select * from item";
   $records= mysqli_query($con, $sql);
   if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

    $sql = "UPDATE item SET item_name='".$_POST['item_name']."', description='".$_POST['description']."', value='".$_POST['value']."' WHERE item_id=".$_POST['item_id']."";
    if (mysqli_query($con, $sql)) {
        header("refresh:1 ; url=updatea.php");
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

  
?>