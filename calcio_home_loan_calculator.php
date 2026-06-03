<?php
/*
Plugin Name: Home Loan Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/home-loan-calculator/
Description: Easily estimate your monthly mortgage payments with our free Home Loan Calculator. View amortization schedules for fixed and adjustable-rate loans instantly.
Version: 1.0.0
Author: www.calculator.io / Home Loan Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_home_loan_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Home Loan Calculator by www.calculator.io";

function calcio_home_loan_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Home Loan Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_home_loan_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_home_loan_calculator', 'calcio_home_loan_calculator_shortcode' );