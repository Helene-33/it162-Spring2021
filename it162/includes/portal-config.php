<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Helene's IT162 Title Page";
        $logo = 'fa-camera-retro';
        $logo_color = ' style="color:#8EAEBD"';
        $PageID = 'Welcome';
    break;
        
    case 'contactme.php':
        $title = "Helene's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#8FBC8F"';
        $PageID = 'Contact me';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

$nav['index.php'] = "Home";
$nav['big/index.php'] = "Big";
$nav['fp/index.php'] = "Final Project";
$nav['contactme.php'] = "Contact me";

/* here we are creating a fonction to generate links and keep the highlight

            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contactme.php">Contact Me</a></li>
            
*/

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text){  
        
            if($url == THIS_PAGE){
                $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>" . PHP_EOL;
            }else{
                $myReturn .= "<li><a href=\"$url\">$text</a></li>" . PHP_EOL;
            }
        
        
    }
    
    return $myReturn;
}

?>