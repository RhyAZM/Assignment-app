<?php
session_start();
include 'dbConnection.php';
include 'adminHeader.php';
$cats =  "SELECT * FROM categories";
$resultcat= $db1->query($cats);


?>

<head>
 <style>
      .cat{ 
         margin:10px; padding:10px;  
       } 

        
        
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<div class="container mx-auto">
	<div class="row cat">
	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 border">
			<ul class="list-group">
                <li style="list-style: none;" class="list-group-item active">
                <b><a href="SearchByCategory.php"  style="text-decoration:none;color:white;">All Categories</a></b>
                </li>
                <?php foreach($resultcat as $row) {?>
               
                	
               			 <li style="list-style: none;" class="list-group-item">
                            <a href="SearchByCategory.php?cat=<?php echo $row['id'] ?>"  style="text-decoration:none;">
                            
                            	<?php echo $row['catName'] ?>
               				 </a>
               			 </li>
               	
       		 
               			 
                <?php } ?>
              </ul>
       </div>       
  
  <?php 
  if(isset($_GET['cat'])) {
      $cat_id = $_GET['cat'];
      $result ="SELECT * FROM product WHERE category_id = $cat_id";
      $resproductall= $db1->query($result);
  } else {
      $result =  "SELECT * FROM product";
      $resproductall= $db1->query($result);
      
  }
  
  ?>
  
      <div class="col-lg-9 col-md-9 col-sm-12 mx-auto border">
       
      	<div class="row  border max-auto"> 
      		<?php foreach($resproductall as $row) {?>
      		<div class="col-4  border ">
      			
          			<img class="img-responsive img-thumbnail bg-image" width="200" height="160" src="images/<?php echo $row['photo'] ?>" alt="" >
                		
         			<p><?php echo $row['description'] ?> </p>
         			<p style="text-align:center"><?php echo "Price : $".$row['price'] ?> </p>
     			
     			<div class="row border mx-auto ">
                <button type="button" class="btn btn-primary">
                 	<a href="add-to-cart.php?id=<?php echo $row['id'] ?>" style="text-decoration:none;color:white;">
                  Add to Cart</a>
               	</button>
             	</div>
      		</div>
      	
      	 <?php } ?>
      	 	
      	</div>
      </div>
  </div>
</div>
<div class="">
	<?php include 'footer.php';?>
</div>
