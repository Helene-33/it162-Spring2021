<?php include 'includes/header.php';?>

<h2>Feebacks</h2>

<p class="textpages">Please don't hesitate to leave me a feedback!</p>

<?php
    include 'includes/contact_include.php'; #site keys & code here
    
    $toAddress = "helene.liobard33@gmail.com";
    $toName = "Mary";
    $website = "marystravellife.com";

    echo loadContact('simple.php');
?>

<?php include "includes/footer.php";?>
