<?php
session_start();
include 'dbConnection.php';
include 'adminHeader.php';

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
    
    
    
    
    
    
<html>


<body>


<form action="product-add.php" method="post" enctype="multipart/form-data">
 <div class="container">
 <h1>Adding New Product</h1>
 <table>
 	<tr>
 		<td>
 		<label for="description">Description</label>
 		</td>
 		<td>
 		<input type="text" name="description" id="description">
 		</td>
 	</tr>
 	<tr>
 		<td>
 			<label for="price">Price</label>
 		</td>
 		<td>
 		<input type="text" name="price" id="price">
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

<br><br>
<input type="submit" name="btninsert" value="Add Product">
<a href="product-list.php" class="back">Back</a>
</div>
</form>
<div class="">
    <?php include 'footer.php';?>
 </div>
</body>

</html>