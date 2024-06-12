<?php
/*
Plugin Name: CI Bmr calculator
Plugin URI: https://www.calculator.io/bmr-calculator/
Description: Free BMR calculator uses well-known algorithms to calculate the basal metabolic rate. Also, find out more about the factors that influence BMR.
Version: 1.0.0
Author: BMR Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_bmr_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for BMR Calculator by www.calculator.io";

function display_calcio_ci_bmr_calculator(){
    $page = 'index.html';
    return '<h2>BMR Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_bmr_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_bmr_calculator', 'display_calcio_ci_bmr_calculator' );