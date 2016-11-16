<?php
/**
* Plugin Name: WPMU DEV Multisite Activation Email
* Plugin URI: http://premium.wpmudev.org/blog
* Description: Overroides the subject and content of the default activation email when a user creates a new blog.
* Version: 1.0
* Author: Rachel McCollin
* Author URI: http://rachelmccollin.co.uk
*/
 

function wpmu_activation_email_subject( $subject ) {
	
	$subject = __( 'Welcome! Please register your new site with %1$s' );

	return $subject;
	
}
add_filter( 'wpmu_signup_blog_notification_subject', 'wpmu_activation_email_subject' );


function wpmu_activation_email_content( $content ) {

	$content = __( "Thanks for signing up for a site with us. Before you can use your site, you need to activate it. \n\nTo activate your website, please click this link:\n\n%s\n\nAfter you activate, you will receive another email with your login details. Once you've done that, you can manage and edit your site using this link.\n\nEnjoy your new site!" );

	return $content;
}
add_filter( 'wpmu_signup_blog_notification_email', 'wpmu_activation_email_content');