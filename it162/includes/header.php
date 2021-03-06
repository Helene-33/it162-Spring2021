<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/0c7ce115ce.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/portal.css" />
        <link rel="stylesheet" href="css/form.css" />
    </head>
    <body>
<!-- START WRAPPER -->
        <main class="wrapper">
        <header>
            <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Helene's IT 162 Portal - Seattle Central College Spring 2021</a></h1>
        <nav>
        <ul class="topnav" id="myTopnav">
            <?=makeLinks($nav)?>
            <!--
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contactme.php">Contact Me</a></li>
            -->
            <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
        </nav>
        </header>
    
        <!-- START LEFT COL -->
        <section>
            <h2 class="pageID"><?=$PageID?></h2>
        </section>