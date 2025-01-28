<?php
session_start();
include 'dbConnection.php';
include 'userheader.php';


?>
<!DOCTYPE HTML>
<html>
<head>
 <style>
      .cat{ 
         margin:10px; padding:10px;  
       } 
    .headcenter{
        font-size:27px;
        margin-bottom: 25px;
    }
    .slidecustom{
        weight: 10px;
        height: 10px;
    }
      
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<div class="text-center headcenter">
		Welcome Form Mega Online Shopping
	</div>
<div class="container mx-auto  col-md-12">

    	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  				</ol>
  			
              <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/Asus1.jpg" width="600" height="550" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/Asus1.jpg"  width="600" height="550" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/Asus1.jpg"  width="600" height="550" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/Asus1.jpg"  width="600" height="550" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/Asus1.jpg"  width="600" height="550" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
    </div>
</div>



	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">New</span> Products</h3>
						<p>We introduce you the newest laptops that product this year. These laptop are the newest in our entire online shop</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/2020AppleMacBookPro16inch.jpg" alt=""></a>
						</div>
						<h3>2020 Apple MacBookPro 16 Inch</h3>
						<p class="product-price"><span></span>$2800 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/AsusZenbookUx534fac.jpg" alt=""></a>
						</div>
						<h3>Asus Zenbook Ux534fac</h3>
						<p class="product-price"><span></span>$2100</p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="images/DellNewInspiron155515.jpg" alt=""></a>
						</div>
						<h3>Dell Inspiron 15 5515</h3>
						<p class="product-price"><span></span>$2300</p>
						<a href="add-to-cart.php" class="cart-btn">
						<i class="fas fa-shopping-cart"></i> Add to Cart
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->
	<?php include 'footer.php';?>
</body>

</html>