<?php
session_start();
include 'dbConnection.php';
include 'adminHeader.php';

$result = "select * from categories";
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
	<div class=" row justify-content-center">

<div class="col-auto">
  <table class="table table-responsive">
    <tr>	
    	<th colspan="5" class="text-center">Category List</th>
    <tr>
    <tr >
			<th>Category ID</th> 
			<th>Category Name</th> 
			<th>Remark</th> 
			<th>Delete</th> 
			<th>Edit</th> 
			
	</tr>
	<?php foreach($db1->query($result) as $row)
	 {?>
		<tr >
			<td><?php echo $row['id']?></td> 
			<td><?php echo $row['catName']?></td> 
			<td><?php echo $row['remark']?></td> 
			<td> [<a href="cat-del.php?id=<?php echo $row['id']?>"> del</a> ]</td> 
			<td>[<a href="cat-edit.php?id=<?php echo $row['id']?>">edit</a> ]</td> 
		</tr>
		
	<?php }?>
  </table>
  <div>
  </div>
   <p align="center"><a href="cat-add.php" class="text-info" >Add New Category &raquo;</a><p>
</div>	

</div>
</div>
<div class="">
	<?php include 'footer.php';?>
</div>

</body>
</html>