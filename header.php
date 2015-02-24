<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        exhibits-general
 * @author         Emil Uzelac and Kerri Hicks
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/exhibits-general/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>


        <?php 
        // this grabs the top menu links, maintained as an HTML file on worf
           $top_menu = file_get_contents('http://library.brown.edu/includes/wordpress_exhibits_header_links.html') ; 
           echo $top_menu ; 
        ?>		

		<?php responsive_in_header(); // header hook ?>

        <div id="logo"> 

        <a href="http://www.brown.edu"><img src="http://library.brown.edu/images/header_shield.png" style="height : 67px ; margin-left : 10px ; margin-right : 10px ; float : left ; " alt="Brown University Homepage" title="Brown University Homepage" /></a> 		
<!-- 
        <a href="http://library.brown.edu/" style="text-decoration : none ; color : #fff ; font-size : 20pt ; text-transform : uppercase ; vertical-align : 70% ; font-family : 'MinionPro' ; ">Brown University <strong>Library</strong></a>
 -->
		<a href="http://library.brown.edu/"><img style="height : 27px ; margin-top : 22px ; " class="wide" src="http://library.brown.edu/images/Brown_University_Library_header_text.png" alt="Brown University Library" /><img style="height : 27px ; margin-top : 22px ; " class="narrow" src="http://library.brown.edu/images/Brown_Library_header_text.png" alt="Brown  Library" /></a> 

        </div><!-- end of #logo -->

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>

		<?php //if ( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
			//wp_nav_menu( array(
			//	'container'      => '',
			//	'menu_class'     => 'sub-header-menu',
			//	'theme_location' => 'sub-header-menu'
			//) ); 
		//} ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>