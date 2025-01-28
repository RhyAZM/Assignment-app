<?php
session_start();
include 'dbConnection.php';
include_once "adminHeader.php";

?>

<?php
$id=$_GET['id'];
$cname=$remark="";

$sql="select * from categories where id='$id'";


foreach($db1->query($sql) as $row)
{
    
    $cname=$row['catName'];
    $remark=$row['remark'];
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
    <h1>Edit the Category</h1>
    <hr>

      <label for="uname"><b>Name</b></label>
   <input type="text" placeholder="Enter category name" name="cname" value ="<?php echo $cname  ?>" id="cname" required><br>

    <label for="upass"><b>Remark</b></label>
       <input type="text" placeholder="Enter remark" name="remark" value ="<?php echo $remark  ?>" id="remark" required>
<br>
   


    <hr>

    <button type="submit" name="btnupdate">Edit</button>
    <a href="cat-list.php" class="text-info">Back to Caegory Page&raquo;</a>
  </div>
  
  
</form>
</body>
</html>


<?php 
    if(isset($_POST['btnupdate']))
{
    
    $un = $_POST['cname'];
    $ur=$_POST['remark'];
  
    $sql1="update categories SET catName='$un', remark='$ur' where id='$id'";
    $db1->exec($sql1);
//   header("location:adminHeader.php");
  // exit();
}

?>