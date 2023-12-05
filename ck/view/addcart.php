<?php

session_start();

    $idsp = $_GET['id']; $soluong = 0;
    if (isset($_SESSION['cart'][$idsp])) { $soluong = $_SESSION['cart'][$idsp] + 1;
    else $soluong = 1;
    $_SESSION['cart'][$idsp] = $soluong;
    print_r($_SESSION['cart']);
//header ("Location: /dssp.php");

?>