<?php
    
    session_start();
    include("dbConnection.php");
//     include("adminHeader.php");
    if(isset($_SESSION['uid'])){//check authorized users
       $phone = $_POST['phone'];
        $address = $_POST['address'];
        $u = $_SESSION['uid'];
      //  echo  "User ID".$u;
        $db1->query("INSERT INTO forms.tblorder
        (tblorder.uid, tblorder.order_date, tblorder.phone,tblorder.address)
        VALUES('$u', now(), '$phone','$address')");
        $order_id=$db1->lastInsertId();//get voucher number , order number
//         var_dump($_SESSION['cart']);
        foreach($_SESSION['cart'] as $id => $qty){
            $db1->query ("INSERT INTO order_items
        (order_id, product_id, qty) VALUES ($order_id,$id,$qty)
        ");
        }
        unset($_SESSION['cart']);
        unset($_SESSION['uid']);

        unset($_SESSION["uname"]);
       // session_destroy();
        //echo "Your order has been submitted";
//         header("location:login.php"); 
    }
?>
       

<html>
<head>
<title>Products Order Submitted</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
$.ajax({
  url: 'submit-order.php',
  success: function(data) {
   
//      location.reload();
    	e.preventDefault();
  }
});
});
</script>
</head>
<body class="container">
	<h1>Products Order Submitted</h1>
    <div>
        Your order has been submitted. We'll deliver the items soon.
        <a href="userSearchByCategory.php" >Products Store Home</a>
    </div>
    <div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
    </div>
</body>
</html>