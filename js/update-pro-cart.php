<?php

    session_start();
    $id = $_POST['code'];//accept product id

    $qty = $_POST['quantity'];
    $_SESSION['cart'][$id] = $qty;
    header("location:view-cart.php");
    
?>