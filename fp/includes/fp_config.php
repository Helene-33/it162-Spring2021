<?php

$siteKey = "6Leh1rYaAAAAAHZFzGByyBSAttOWMH_lvgqsbmRV";
$secretKey = "6Leh1rYaAAAAAOq-4mKjbob_mab0OP7Aku0AHx9P";

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case 'template.php':
        $title = "Mary's Travel Life";
        $PageID = '';
    break;
        
    case 'about.php':
        $title = "About";
        $PageID = ' ';
    break;

    case 'articles.php':
        $title = "Articles";
        $PageID = ' ';
    break;
        
    case 'videos.php':
        $title = "Videos";
        $PageID = ' ';
    break;
        
    case 'europe.php':
        $title = "Europe";
        $PageID = ' ';
    break;
        
    case 'northamerica.php':
        $title = "North America";
        $PageID = ' ';
    break;
        
    case 'southamerica.php':
        $title = "South America";
        $PageID = ' ';
    break;
        
    case 'comments.php':
        $title = "Comments";
        $PageID = ' ';
    break;
        
    case 'work.php':
        $title = "Work with me";
        $PageID = ' ';
    break;

        
    default:
        $title = THIS_PAGE;
        $PageID = 'Welcome';
}

?>