<?php

include 'connect.php';
if(isset($_POST['Submit']))
{
	$pid=$_POST['id'];

		
   $sql="DELETE FROM `vegetables` WHERE `pid`='$pid'";
   $result=mysqli_query($con,$sql);

   if($result)
   {
	 echo "data inserted successfully";  
      header('location:ADMIN.php');
   }   
   else
   {
	  die(mysqli_error($con)); 
   }  
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>organicfarm</title>
  </head>
  <body>
    <div class="container my-5">
	<form method="post" enctype="multipart/form-data">


    <div class="form-group">
	<label >ENTER ID</label>
    <input type="text" class="form-control"  placeholder="Enter ID" name="id" autocomplete="off">
    </div>

 

  <button type="submit" class="btn btn-primary" name="Submit">DELETE</button>
</form>
	
	</div>

    
  </body>
</html>