<?php
/*
Plugin Name: Group Buying Payment Processor - Adaptive Payments Beta
Version: .1
Plugin URI: http://sproutventure.com/wordpress/group-buying
Description: Adaptive Payments
Author: Sprout Venture
Author URI: http://sproutventure.com/wordpress
Plugin Author: Dan Cameron
Contributors: Dan Cameron
Text Domain: group-buying
Domain Path: /lang
*/

if ( !version_compare( Group_Buying::GB_VERSION, '4.5', '<=' ) ) {
	echo '<div class="error"><p><strong>Group Buying Addon - Adaptive Payments Beta</strong> no longer supported.</p></div>';
}
else {
	add_action('gb_register_processors', 'gb_load_ap');
	function gb_load_ap() {
		require_once('groupBuyingPaypalAP.class.php');
	}
}
