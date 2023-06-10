<?php
/*
Plugin Name: BMR Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/bmr-calculator/
Description: Free BMR calculator uses well-known algorithms to calculate the basal metabolic rate. Also, find out more about the factors that influence BMR.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_bmr_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_bmr_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/bmr-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> BMR Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_bmr_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_bmr_calculator', 'display_ci_bmr_calculator' );