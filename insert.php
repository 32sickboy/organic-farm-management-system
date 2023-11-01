<?php

include 'connect.php';
if(isset($_POST['Submit']))
{
  
   $name=$_POST['type'];
   $price=$_POST['price'];
		$filename = $_FILES['picname']['name'];
		$tempname = $_FILES['picname']['tmp_name'];
		$folder = "./images/" . $filename;
		
   $sql="INSERT INTO `vegetables`(`name`, `price`, `image`) VALUES ('$name','$price','$filename')";
   $result=mysqli_query($con,$sql);
   move_uploaded_file($tempname, $folder);
   if($result)
   {
	// echo "data inserted successfully";  
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

    <title>product</title>
  </head>
  <body>
    <div class="container my-5">
	<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
  
   <div class="form-group">
	<input class="form-control" type="file" name="picname" value="" />
	</div>   
    
	
   <div class="form-group">
    <label >Atype</label>
    <input type="text" class="form-control"  placeholder="Enter the name of the vegetable" name="type" autocomplete="off">
    </div>

    <div class="form-group">
    <label >Aprice</label>
    <input type="text" class="form-control"  placeholder="Enter price" name="price" autocomplete="off">
    </div>

  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
</form>
	
	</div>

    
  </body>
</html>