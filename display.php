<?php
include 'connect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> ORGANIC FARM </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
	<button class="btn btn-primary my-5"> <a href="insert.php" class="text-light">  add info </a>
     
 
   </button>
	
	 <table class="table">
  <thead>
    <tr>
      <th scope="col">pid </th>
      <th scope="col">name</th>
      <th scope="col">price</th>
	  <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
  
  
     <?php
	 
	 $sql="select * from `vegetables`";
	 $result=mysqli_query($con,$sql);
	 if($result)
	 {
		 while( $row=mysqli_fetch_assoc($result))
		 {
			 $pid=$row['pid'];
			 $name=$row['name'];
			 $price=$row['price'];
			
			 $image=$row['image'];
    echo '<tr>
      <th scope="row">'.$pid.'</th>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
     
	  <td>'.$image.'</td>
	  
          </tr>';
		 }
	 }
	 
	 
	 
	  ?>

  </tbody>
</table>
	</div>
	
	
	</body>
</html>	