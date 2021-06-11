<?php include "includes/header.php";?>

<h2>Work with me</h2>
<p class="textpages">If you are interested in working with me, please don't hesitate to fill up the form below.</p>

<?php
    include 'includes/contact_include.php'; #site keys & code here
    
    $toAddress = "helene.liobard33@gmail.com";
    $toName = "Mary";
    $website = "marystravellife.com";

    echo loadContact('multiple.php');?>

<?php include 'includes/footer.php';?>