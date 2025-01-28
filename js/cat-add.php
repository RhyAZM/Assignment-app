<?php
include 'dbConnection.php';//to connect dB
include 'adminHeader.php';//header
$cname=$cremark="";

//store user input into variables


//insert into database
if(isset($_POST['btninsert']))
{
    $cname=$_POST['cname'];
    $cremark=$_POST['cremark'];
    
    $sql="insert into categories(catName,remark)values('$cname','$cremark')";
    $db1->exec($sql);
    echo "<div> New category is inserted successfully</div>";
    
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Category </title>
	<style>
	form label {
    display: block;
    margin-top: 8px;
    }
    </style>
</head>
<body>
<form action="cat-add.php" method="post" enctype="multipart/form-data">

  <div class="container">
    <h1>Add New Category</h1>
    <hr>
	<table>
		<tr>
			<td> <label for="cname"><b>Category Name: </b></label></td>
			<td> <input type="text"class="form-control" placeholder="Enter category name" name="cname" id="cname" required><br> </td>
		</tr>
		<tr><!--  -->
		<td>
			<label for="remark"><b>Remark:</b></label>
		</td>
		<td>
			<input type="text" class="form-control" placeholder="Enter remark " name="cremark" id="cremark" required><br>
		</td>
		</tr>
		<tr><!--  -->
			<td>
				<button type="submit"  class="btn btn-info" name="btninsert">Add Category</button>
			</td>
			<td><!--  -->
				<a href="cat-list.php" class="text-info">Back to Category List Page&raquo;</a>
			</td>
		 </tr>
	
	</table> 
   
   
  </div>
  
  
</form>
</body>
</html>