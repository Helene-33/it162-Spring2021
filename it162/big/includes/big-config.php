<?php

/* Used to store all of our IT162 configuration information */

$siteKey = "6Leh1rYaAAAAAHZFzGByyBSAttOWMH_lvgqsbmRV";
$secretKey = "6Leh1rYaAAAAAOq-4mKjbob_mab0OP7Aku0AHx9P";

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Helene's Web Development Examples";
        $logo = 'fa-desktop';
        $logo_color = 'style="color:#233237"';
        $PageID = 'Client Questionnaire';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-cube';
        $logo_color = 'style="color: #233237"';
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = "Galleries and Sliders";
        $logo = 'fa-camera-retro';
        $logo_color = 'style="color: #233237"';
        $PageID = 'Galleries and Sliders';
    break;
        
    case 'map.php':
        $title = "Google Map";
        $logo = 'fa-map-o'; 
        $logo_color = 'style="color:#233237"';
        $PageID = 'Google Map';
    break;
    
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-calendar'; 
        $logo_color = 'style="color:#233237"';
        $PageID = 'Google Calendar';
    break;    
    
    case 'youtube.php':
        $title = "Youtube Video";
        $logo = 'fa-youtube-square'; 
        $logo_color = 'style="color:#233237"';
        $PageID = 'Youtube Video';
    break;    
    
    case 'shoppingcarts.php':
        $title = "Shopping Carts";
        $logo = 'fa-shopping-basket'; 
        $logo_color = 'style="color:#233237"';
        $PageID = 'Shopping Carts';
    break;
    
    case 'siteapp.php':
        $title = "Responsive Site VS Native App";
        $logo = 'fa-mobile';
        $logo_color = 'style="color:#233237"';
        $PageID = 'Responsive Site VS Native App';
    break;
        
    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa-eye';
        $logo_color = 'style="color:#233237"';
        $PageID = 'Webcam';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

?>