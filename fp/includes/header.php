<?php include "includes/fp_config.php"?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/0c7ce115ce.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet"> 
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
        <script src="https://use.fontawesome.com/0c7ce115ce.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/fp.css" />
        <link rel="stylesheet" href="css/form.css" />
    </head>
    <body>
        <main class="wrapper">
        <header>
            <h1 class="maintitle"><a href="template.php" >Mary's Travel Life</a></h1>
        <nav id="cssmenu">
             <ul>
                 <li><a href="template.php">Home</a></li>         
                 <li><a href="about.php">About</a></li> 
                 <li><a href="#">Blog</a>
                    <ul>
                       <li><a href="articles.php">Articles</a></li>
                       <li><a href="videos.php">Videos</a></li>
                    </ul></li>
                 <li><a href="#">Destinations</a>
                    <ul>
                       <li><a href="europe.php">Europe</a></li>
                       <li><a href="northamerica.php">North America</a></li>
                       <li><a href="southamerica.php">South America</a></li>
                    </ul></li>
                 <li><a href="#">Contact</a>
                    <ul>
                        <li><a href="comments.php">Feedback</a></li>
                        <li><a href="work.php">Work with me</a></li>
                 </ul></li>
        </ul>
        </nav>
        </header>

        <section>
            <h2 class="pageID"><?=$PageID?></h2>