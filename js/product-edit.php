<?php
session_start();
include 'dbConnection.php';
include_once "adminHeader.php";

if(isset($_POST['btninsert']))
{
    $description=$_POST['description'];
    $price=$_POST['price'];
    $category_id = $_POST['category_id'];
    $photo = $_FILES['cosmetic']['name'];
    $tmp = $_FILES['cosmetic']['tmp_name'];
    if($photo) {
        move_uploaded_file($tmp, "images/$photo");
    }
    $sql = "INSERT INTO product (description, price, category_id, photo) VALUES ('$description', '$price','$category_id', '$photo')";
    $db1->exec($sql);
    echo "<div> New product is inserted successfully</div>";
    // header("location: book-list.php");
}
?>


<?php
$id=$_GET['id'];
$discript=$price=$photo="";

$sql="select * from product where id='$id'";


foreach($db1->query($sql) as $row)
{
    
    $discript=$row['description'];
    $price=$row['price'];
    $photo=$row['photo'];
    
}
    
?>

<!DOCTYPE HTML>
<html lang="en">
<head>


	
</head>
<body>




<div class="container">


	



</div><!-- container //  -->


<form method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>Update Cetegory Information</h1>
    <p>Please fill in this form to update cateogry information.</p>
   	<table>
   	<tr>
		<td>
			<label for="uname"><b>Description</b></label>
		</td>	
		<td>
			<input type="text" placeholder="Enter description" name="description" value ="<?php echo $discript  ?>" id="description" required><br>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="uprice"><b>Price</b></label>
		</td>	
		<td>
			<input type="text" placeholder="Enter price" name="price" value ="<?php echo $price  ?>" id="price" required>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="category">Category</label>
		</td>
		<td>
			<select name="category_id" id="categories">
			<option value="0">-- Choose --</option>
			<?php

            $result =  "SELECT id, catName FROM categories";
            foreach ($db1->query($result) as $row) {
   
            ?>
			<option value="<?php echo $row['id'] ?>">
			<?php echo $row['catName'] ?>
			</option>
			<?php } ?>
		</select>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="cosmetic">Image</label>
		</td>
		
		<td>
			<input type="file" name="cosmetic" id="cosmetic">
		</td>
	</tr>
		</table>
<br>
   
    <button type="submit" name="btnupdate">Update</button>
    <a href="product-list.php" class="text-info">Back to Product Page&raquo;</a>
    
    
    
  </div>
  
  
</form>
</body>
</html>


<?php 
    if(isset($_POST['btnupdate']))
{
    
    $un = $_POST['description'];
    $ur=$_POST['price'];
    $us=$_POST['category_id'];
    $ue=$_FILES['cosmetic']['name'];
  
    $sql1="update product SET description='$un', price='$ur', category_id='$us', photo='$ue' where id='$id'";
    $db1->exec($sql1);
//   header("location:adminHeader.php");
  // exit();
}

?>