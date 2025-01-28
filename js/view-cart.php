<?php
session_start();
include("dbConnection.php"); //for connect to DB
include 'userHeader.php';//for header navigation

if(!isset($_SESSION['cart'])) { // isEmpty shopping cart
    
    header("location:userSearchByCategory.php");
    exit();
}

?>
<!doctype html>
<html>
<head>
<title>View Cart</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
/* Style buttons */

div .row  {
margin-top:20px;
}
.btn {
      background-color: DodgerBlue; /* Blue background */
      border: none; /* Remove borders */
      color: white; /* White text */
      padding: 12px 16px; /* Some padding */
      font-size: 16px; /* Set a font size */
      cursor: pointer; /* Mouse pointer on hover */
      border-radius: 4px;
}
.row .order{
margin-right:10px;
margin-left:10px;
}
.table.align-middle.table-striped{
    border-color: #21d192;
}
.total{
font-weight:bold;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: white;/*RoyalBlue;*/
}
input[type="number"] {
   width:50px;
}
.cardicon{
    margin-right: 10px;
}

</style>

<script>
	function saveCart(obj) {
	var quantity = $(obj).val();
	var code = $(obj).attr("id");
	$.ajax({
		url: "update-pro-cart.php",
		type: "POST",
		data: 'code='+code+'&quantity='+quantity,
 		success:function (data) {}
 
        
        
	});
	 setInterval('location.reload()', 50);  
}
</script>
 

</head>
<body>
<div class="container mx-auto">
<div class="row">
<!-- <h1 align="center">View Shopping Cart</h1> -->

        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
        	<thead class="til" border="0" mt-6>
             <tr>
            	<th colspan="5" align="center"><h2 align="left"  class="p-0 mb-2 ">Summary</h2></th>
             </tr>
            </thead>
        <form action="view-cart.php" method="post">
            <table class="table align-left table-striped" mt-50 border="0">
            
            <thead>
            <tr>
                <th class="text-dark " style="background-color: #FFF;">Product Name</th>
                <th class="text-dark" style="background-color: #FFF;">Quantity</th>
                <th class=" text-dark " style="background-color: #FFF;">Unit Price</th>
                <th class="text-dark " style="background-color: #FFF;">Subtotal</th>
                <th class="text-dark" style="background-color: #FFF;">Delete</th>
            </tr>
             <thead>
        <?php
        $total = 0; //for total amount
        $p=0;
        // var_dump($_SESSION['cart']);
        
        foreach($_SESSION['cart'] as $id=>$qty):
         
            $result=("SELECT description, price FROM product WHERE id=$id");
        
            foreach($db1->query($result) as $row)
            {
                
               
                $p=$row['price'];
              
                
                
            }
            $total += $row['price'] * $qty;
        ?>
        <tr>
        <td><?php echo $row['description'] ?></td>
        <td>
        <input  onclick="saveCart(this);" size="2" type="number" name="qty" step="1" id="<?php echo $id ?>" value="<?php echo $qty ?>">
        
        
        
        </td>
        <td>$<?php echo $row['price'] ?></td>
        <td id="total">$<?php echo $row['price'] * $qty ?></td>
        <td> 
        	<a href="del-pro-cart.php?id=<?php echo $id ?>"  style="text-decoration:none;color:black; " >
        	<i class="fa fa-trash" aria-hidden="true"></i></a>
        
        </td>
        </tr>
        <?php endforeach; ?>
        <tr>
        <td colspan="4" align="right" style="font-weight:bold;font-size:20px;"><b>Total:</b></td>
        <td colspan="0"class="total" style="font-weight:bold;font-size:20px;">$<?php echo  $total; ?></td>
        </tr>
        <tr>
        
        <td colspan="3" align="right">
        	<button type="button" class="btn"><a href="userSearchByCategory.php">&laquo; Continue Shopping</a></button>
        </td>
        <td colspan="2" align="left">
        <button type="button" class="btn"><a href="clear-cart.php" id="del">&times; Clear Cart</a></button>
        </td>
        
        
        </tr>
        </table>
        
        </form>
        </div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">

<div class="row  border order">
<div class="box-2">
        <div class="box-inner-2">
            <div>
                <p class="fw-bold">Payment Details</p>
                <p class="dis mb-3">Complete your purchase by providing your payment details</p>
            </div>
           <form action="submit-order.php" method="post">
        <div class="col-md-6"></div>
        <input type="hidden" name="usid" value=<?php 
                    if(!isset($_SESSION['uid'])){
                        echo "";
                    }
                    else {
                        echo $_SESSION['uid'];
                    }
                    ?>>	

                <div class="col-md-12">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" disabled value=<?php if(!isset($_SESSION['username'])){
                                                            echo "";
                                                    }
                                                    else{
                                                        echo $_SESSION['username'];}?> >
        </div>   
        <div class="col-md-12">                                            
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" id="email" disabled value=<?php if(!isset($_SESSION['email'])){
                                                            echo "";
                                                    }
                                                    else{
                                                        echo $_SESSION['email'];}?> >
         </div>  
        <div class="col-md-12">                                                 
<label for="phone">Phone</label>
<input type="text" name="phone" id="phone" class="form-control" >
 </div>
 <div class="col-md-12"> 
	<label for="address">Address</label>
	<textarea name="address" id="address" class="form-control"></textarea>
</div> 
                <div>
                    <p class="dis fw-bold mb-2">Card details</p>
                    <div class="d-flex align-items-center justify-content-between card-atm border rounded ">
                        <div class="fab fa-cc-visa ps-3 cardicon"></div> <input type="text" class="form-control" placeholder="Card Details">
                        <div class="d-flex w-50"> <input type="text" class="form-control px-0" placeholder="MM/YY"> <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV"> </div>
                    </div>
                    <div class="my-3 cardname">
                        <p class="dis fw-bold mb-2">Cardholder name</p> <input class="form-control" type="text">
                    </div>
                    <div class="address">
                        <p class="dis fw-bold mb-3">Billing address</p> <select class="form-select" aria-label="Default select example">
                            <option selected hidden>United States</option>
                            <option value="1">India</option>
                            <option value="2">Australia</option>
                            <option value="3">Canada</option>
                        </select>
                        <div class="d-flex"> <input class="form-control zip" type="text" placeholder="ZIP"> <input class="form-control state" type="text" placeholder="State"> </div>
                        <div class=" my-3">
                            <p class="dis fw-bold mb-2">VAT Number</p>
                            <div class="inputWithcheck"> <input class="form-control" type="text" value="GB012345B9">  </div>
                        </div>
                        
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="fw-bold">Total</p>
                                <p class="fw-bold"><span class=""></span>$<?php echo  $total; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
 <div class="col-md-12"> 
                <?php if(!isset($_SESSION['uid'])){ ?>
                	<input type="submit" disabled value="Submit Order" class="form-control">
                <?php }?>
                <?php if(isset($_SESSION['uid'])) {?>
                <input type="submit" value="Submit Order">
                <?php }?>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>


</html>