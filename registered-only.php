<?php
/*
Plugin Name: TR Register Only
Plugin URI: http://www.techieresource.com/
Description: Tr Registered only is a plugin to make all of your WordPress blog/site protected. Once this plugin is enabled, the WordPress powered site or blog (including Pages,post,custom posts) will be accessible only to logged users, registered users only can access the site . This plugin is useful while developing site, or a private blog. 
Version:1.0
Author: TechieResource
Author URI: http://www.techieresource.com/
*/
function tr_logonly() {
	global $user_ID;
	if (!$user_ID) { 
    if (substr($_SERVER['SCRIPT_NAME'], -12) != "wp-login.php") {
        auth_redirect();
    } }
}

add_action('init', 'tr_logonly');
?>
