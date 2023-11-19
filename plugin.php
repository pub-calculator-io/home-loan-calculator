<?php
/*
Plugin Name: CI Home loan calculator
Plugin URI: https://www.calculator.io/home-loan-calculator/
Description: This easy home loan calculator will help you calculate monthly mortgage payments. The mortgage calculator is perfect for both fixed-rate or adjustable-rate home loans.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_home_loan_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Home Loan Calculator by Calculator.iO";

function display_ci_home_loan_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Home Loan Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_home_loan_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_home_loan_calculator', 'display_ci_home_loan_calculator' );