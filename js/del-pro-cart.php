<?php

    session_start();
    $id = $_GET['id'];//accept product id
    unset ($_SESSION['cart'][$id]);
    header("location:view-cart.php");

?>