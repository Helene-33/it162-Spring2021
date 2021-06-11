<?php include 'includes/header.php';?>

<h2>Feebacks</h2>

<section>

<?php
    include 'includes/contact_include.php'; #site keys & code here
    
    $toAddress = "helene.liobard33@gmail.com";
    $toName = "Mary";
    $website = "marystravellife.com";

    echo loadContact('simple.php');
?>

<?php include "includes/footer.php";?>
