<?php

/**
 *
 * Output the header of the page and the opening body tag.
 *
 * @param string $title The title of the selected page.
 *
 */
function outputHeader($title)
{
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<! Link to external stylesheet -->';
    if ($title == "Home") {
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
    } else if ($title == "Shop") {
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
    } else if ($title == "Product") {
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
    }
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Home.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Cart.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/W3.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Register.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Login.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Product.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Shop.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/User.css">';
    echo '<link rel="stylesheet" href="../CSS/all.css">';
    echo '<link rel="stylesheet" href="../CSS/fontawesome.min.css">';
    echo '</head>';
    echo '<body>';
}

/**
 *
 * Outputs the navigation bar.
 *
 */
function outputNavigationBar()
{
    echo '<div class="leftNavigationMenu">';
    echo '<p>Hi! <a href="Register.php">Register</a> or <a href="Login.php">Login</a>.</p>';
    echo '</div>';
    echo '<div class="rightNavigationMenu">';
    echo '<ul class="main-menu">';


    // Link array of pages to addresses.
    $linkNames = array("Home", "Shop", "About", "Get In Touch", '<i class="fas fa-shopping-cart"></i>');
    $linkAddresses = array("Home.php", "Shop.php", "Home.php#about", "Home.php#get-in-touch", "Cart.php");

    // Outputs navigation.
    for ($x = 0; $x < count($linkNames); $x++) {
        echo '<li><a ';
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
    }

    echo '</ul>';
    echo '</div>';
}

function outputFooter()
{
    // Opening tag of footer and div.
    echo '<footer>';
    echo '<div class="footer">';

    // Use icons for each user details.
    $user = array(" Watchshop", " watchshop@gmail.com", " Middlesex University Mauritius, Flic-en-Flacq", " +230 51234567");
    $userIcon = array("clock", "envelope", "map-marker-alt", "phone-alt");

    // Output icons.
    for ($i = 0; $i < count($userIcon); $i++) {
        echo '<p><i class="fas fa-' . $userIcon[$i] . '"></i>' . $user[$i] . '</p>';
    }

    echo '<p>Follow us on:</p>';
    // Array of social media icons.
    $socialMedia = array("facebook-f", "twitter", "instagram", "pinterest-p");

    // Outputs social media icons.
    echo '<div class="social-button">';
    for ($s = 0; $s < count($socialMedia); $s++) {
        echo '<i class="fab fa-' . $socialMedia[$s] . '"></i>';
    }

    echo '</div>';

    // Outputs a line between user details and social media.
    echo '<div class="line-seperator-bottom">';
    echo '<hr/>';
    echo '<p><i class="far fa-copyright"></i> 2020 Watchshop Ltd</p>';
    echo '</div>';

    echo '</div>';
    echo '</footer>';

    echo '<script type="text/javascript" src="../Javascript/Login.js"></script>';
}

function outputFooterEnd()
{
    echo '</body>';
    echo '</html>';
}
