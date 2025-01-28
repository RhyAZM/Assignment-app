<?php
include('dbConnection.php');

$uid=$_GET['id'];
echo $uid;

$sql="delete from product where id='$uid'";
$db1->exec($sql);
echo "category is deleted successfully.";

header( 'Location: product-list.php');

?>