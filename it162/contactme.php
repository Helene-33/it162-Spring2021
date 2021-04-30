<?php include "includes/header.php";?>

<section>

<?php
    include 'includes/contact_include.php'; #site keys & code here
    
    $toAddress = "helene.liobard33@gmail.com";
    $toName = "Helene";
    $website = "ellencodes.com";

    echo loadContact('simple.php');
?>

<?php include "includes/footer.php";?>