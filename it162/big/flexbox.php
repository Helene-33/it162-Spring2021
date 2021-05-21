<?php include "includes/header.php"?>

    <p>Flexbox, which stands for flexible box, is a CSS layout module used to organize and arrange elements on a website. While there are other ways to place content on a page (such as float for instance), those ways aren’t “suitable for responsive design” or “were never intended for as a layout tool in the first place” (Schäferhoff). Therefore, Flexbox is a great solution to place and size your elements exactly where and how you want them on your page.</p>
    <p>Flexbox can be applied to a container and/or to elements in a container. By using Flexbox, you place your items along a main axis (that is horizontal) and a cross axis (which is vertical and perpendicular to the main axis). The main axis “is defined by flex-direction, which has four possible values” (MDN). The first two, row and row reverse, are running “along the row in the inline direction” (MDN), while the last two, column and column-reverse, make the main axis running from the top to the bottom of your page, in the block direction.</p>
    <p>As I mentioned earlier, Flexbox can also be used to control the size of an item, thanks to the properties flex-basis, flex-grow and flex-shrink. The flex-basis property defines the “size of an item in terms of the space it leaves as available space” (MDN). For instance, in a container of 50 pixels with 3 items of the same size of 10 pixels, the flex-basis is 10 pixels and the available space is 20 pixels (50 - (10 * 3) = 20). However, if we don’t give a specific size to an item, it will use the whole content’s size as a flex-basis. The second property, flex-grow, stretches the items in the available space; we can choose to stretch all the items equally to fill up the available space, or to give them different values. Finally, flex-shrink can be seen as the opposite of flex-grow; instead of adding values to the items and stretching them, flex-shrink removes values and makes the items smaller.</p>
    <p>According to both Mozilla Web Development and Chris Coyer from css-tricks.com, Flexbox is compatible with all browsers, at the exception of Internet Explorer and UC Browser.</p>
</section>

<aside>
    <h3>Works cited</h3>
    <ul>
        <li>“Basic Concepts of Flexbox - CSS: Cascading Style Sheets.” MDN, <a href="developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">developer.mozilla.org</a></li>
        <li>Coyer, Chris. “Using Flexbox: Mixing Old and New for the Best Browser Support: CSS-Tricks.” CSS-Tricks, 15 June 2013, <a href="css-tricks.com/using-flexbox/" target="blank">css-tricks.com</a></li>
        <li>Schäferhoff Nick. “A CSS Flexbox Tutorial for Beginners - What It Is and How to Use It.” Torque, 27 Feb. 2020, <a href="torquemag.io/2020/02/flexbox-tutorial/" target="_blank">torquemag.io</a></li>
    </ul>
</aside>

<?php include "includes/footer.php"?>