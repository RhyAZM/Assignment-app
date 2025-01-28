<?php
session_start();
include 'dbConnection.php';
include 'adminHeader.php';

$result = "select * from product";
?>

<div class="container">
<ul>
<?php  
 //login_success.php  

 if(isset($_SESSION["username"]))  
 {  
      
      echo '<center><h3>Login Success, Welcome - '.$_SESSION["username"].'</h3></center>';  
      echo '<p align=center><br /><br /><a href="logout.php">Logout</a><p>';  

     
 }  
 ?>  
 </ul>
</div>
<head>
	
</head>
<body>

<div class="container">
	<div class="row justify-content-center">

<div class="col-auto">
  <table class="table table-responsive">
    <tr>	
    	<th colspan="5" class="text-center">Product List</th>
    <tr>
    <tr >
			<th>Category ID</th> 
			<th>Description</th> 
			<th class="text-center">Photo</th> 
			<th>Price</th>
			<th>Delete</th> 
			<th>Edit</th> 
			
	</tr>
	<?php foreach($db1->query($result) as $row)
	 {?>
		<tr >
			<td><?php echo $row['category_id']?></td> 
			<td><?php echo $row['description']?></td> 
			
			<td><img class="img-respnsive img-thumbnail bg-image" width="150" height="150" src="images/<?php echo $row['photo']?>" alt=""></td> 
			
			<td><?php echo $row['price']?></td>
			
			<td> [<a href="product-del.php?id=<?php echo $row['id']?>"> del</a> ]</td> 
			<td>[<a href="product-edit.php?id=<?php echo $row['id']?>">edit</a> ]</td> 
		</tr>
		
	<?php }?>
  </table>
  <div>
  </div>
   <p align="center"><a href="product-add.php" class="text-info" >Add New Product &raquo;</a><p>
</div>	

</div>
</div>
<div class = "">
	<?php include 'adminfooter.php';?>
</div>

</body>
</html>