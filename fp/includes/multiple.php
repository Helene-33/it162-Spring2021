<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div class="labelmulti">
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div class="labelmulti">	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<div class="labelmulti">
    <label>
        Subject:<br /><input type="text" name="Subject" required="required" placeholder="Subject (required)" title="What can I do for you?" tabindex="10" size="44" autofocus />
    </label>    
</div>
<div class="labelmulti">	
    <label>
        Message:<br /><textarea name="Message" cols="36" rows="4" placeholder="Don't hesitate to tell me more about what I can do for you." tabindex="60"></textarea>
    </label>
</div>	
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->
