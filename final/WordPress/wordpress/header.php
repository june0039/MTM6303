<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @author Julie Juneau
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MTM6303-Final
 * @since MTM6303-Final 1.0
 */
?>

<?php

function  MTM6303Final_setup()
{
}

add_action('after_setup_theme', 'MTM6303Final_setup');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclic <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
            <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#" class="w3-bar-item w3-button">Merchandise</a>
                    <a href="#" class="w3-bar-item w3-button">Extras</a>
                    <a href="#" class="w3-bar-item w3-button">Media</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></ </div>
        </div>

        <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
        </div>

        <!-- Page content -->
        <div class="w3-content" style="max-width:2000px;margin-top:46px">

            <!-- The Band Section -->

            <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
                <h2 class="w3-wide">THE BAND</h2>
                <p class="w3-opacity"><i>We love music</i></p>
                <p class="w3-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inciddidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    caecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
                    boris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="w3-row w3-padding-32">
                    <div class="w3-third">
                        <p>Name</p>
                        <img src="img/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                    </div>
                    <div class="w3-third">
                        <p>Name</p>
                        <img src="img/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                    </div>
                    <div class="w3-third">
                        <p>Name</p>
                        <img src="img/bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
                    </div>
                </div>
            </div>