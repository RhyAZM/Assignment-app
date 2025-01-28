<?php
session_start();
include 'dbConnection.php';
include 'userHeader.php';
$cats =  "SELECT * FROM categories";
$resultcat= $db1->query($cats);


?>

<head>
 <style>
      .cat{ 
         margin:10px; padding:10px;  
       } 

        img.alldevices{
            margin: 0 auto;
            height: 160px;
            max-width: 100%;
            border: none;
            display: block;
            padding: 5px 0;
            weight: 200px;
        }
        .bordersize{
            
            border-left: 1px solid black;
            border-right: 1px solid black;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-radius: 30px;
            margin-left: 50px;
            margin-bottom: 10px;
            
        }
        .bordercart
        {
            margin-bottom: 10px;
        }
        .button1{
            background-color: #0000FF; /* Green */
            padding: 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 30px;
            border-left: 0px solid black;
            border-right: 0px solid black;
            border-top: 0px solid black;
            border-bottom: 0px solid black;
        }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<div class="container mx-auto">
	<div class="row cat ">
	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
			<ul class="list-group list-group-flush">
                <li style="list-style: none;" class="list-group-item ">
                <b><a href="userSearchByCategory.php"  style="text-decoration:none;color:black;">All Categories</a></b>
                </li>
                <?php foreach($resultcat as $row) {?>
               
                	
               			 <li style="list-style: none;" class="list-group-item">
                            <a href="userSearchByCategory.php?cat=<?php echo $row['id'] ?>"  style="text-decoration:none;">
                            
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
  
      <div class="col-lg-9 col-md-9 col-sm-12 mx-auto ">
       
      	<div class="row   max-auto"> 
      		<?php foreach($resproductall as $row) {?>
      		<div class="col-5   bordersize">
      			
          			<img class="img-responsive bg-image alldevices"  src="images/<?php echo $row['photo'] ?>" alt="" >
                		<!-- img-thumbnail -->
                		
         			<p><?php echo $row['description'] ?> </p>
         			<p style="text-align:center"><?php echo "Price : $".$row['price'] ?> </p>
     			
     			<div class="row bordercart mx-auto ">
                <button type="button" class="button1">
                 	<a href="add-to-cart.php?id=<?php echo $row['id'] ?>" style="text-decoration:none;color:white ;">
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
	<?php include 'userfooter.php';?>
</div>
