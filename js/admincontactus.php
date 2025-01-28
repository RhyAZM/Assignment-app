<?php
session_start();
include 'dbConnection.php';
include 'adminheader.php';


?>
<!DOCTYPE HTML>
<html>
<head>
 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style>
/* Style buttons */


table, tr, th, td {
  border: 1px solid white;
}
.tdmargin{
    margin-top: -2px;
}
.margintext{
    margin-top: 20px;
    bg-color: red;
}
</style>
</head>
<body>

<div class="container mx-auto">
<div class="row">
<!-- <h1 align="center">View Shopping Cart</h1> -->

        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
        	<thead class="til" border="0" mt-6>
             <tr>
            	<td colspan="5" align="center"><h2 align="left"  class="p-0 mb-2 ">Contact Us</h2></td>
             </tr>
            </thead>
            <table class="table align-left ">
            
            <tr>
                <td ><i class="fab fa-facebook-f fa-2x tdmargin"></i></td>
                <td>Mega Co.Ltd</td>
                <td><i class="bi bi-globe fa-2x "></i></td>
                <td >www.mega.com</td>
            </tr>
            <tr>
                <td><i class="bi bi-envelope fa-2x "></i></td>
                <td>mega@gmail.com</td>
                <td><i class="bi bi-telephone fa-2x"></i></td>
                <td>09987652223</td>
            </tr>
        </table>
        </div>
</div>
</div>

	<?php include 'footer.php';?>
</body>

</html>