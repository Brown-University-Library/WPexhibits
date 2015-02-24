<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

<div id="footerw">

	<div id="footer_contents">

        <div class="social_media_links">
          <a href="http://mobul.boopsie.com/"><img src="http://library.brown.edu/img_2011/moBUL_icon.png" alt="moBUL - Mobile Brown University Library"></a>
          <a href="http://library.brown.edu/about/public_feeds.php"><img src="http://library.brown.edu/img_2011/RSS_footer_icon.png" alt="Brown University Library RSS Feeds"></a>
          <a href="http://library.brown.edu/enewsletters/"><img src="http://library.brown.edu/img_2011/enewsletter_footer_icon.png" alt="Brown University Library E-Newsletters"></a>
          <a href="http://library.brown.edu/socialwall/"><img src="http://library.brown.edu/img_2011/socialwall_footer_icon.png" alt="Brown University Library Social Media Wall"></a>          
          <a href="http://www.facebook.com/pages/Brown-University-Library/278826488901"><img src="http://library.brown.edu/img_2011/Facebook_icon.png" alt="Brown University Library Facebook"></a>
          <a href="http://twitter.com/brownlibrary"><img src="http://library.brown.edu/img_2011/twitter_icon.png" alt="Brown University Library Twitter"></a>
          <a href="http://library.brown.edu/gateway/lrg.php?id=67&task=home"><img src="http://library.brown.edu/images/fdlp_logo_32x29.gif" alt="Federal Depository Library Program"></a>
        </div>

        <p><a href="http://library.brown.edu/">Brown&nbsp;University&nbsp;Library</a> &nbsp;&#124;&nbsp; Providence,&nbsp;RI&nbsp;02912 &nbsp;&#124;&nbsp; (401)&nbsp;863-2165 &nbsp;&#124;&nbsp; <a href="http://library.brown.edu/about/stafflist.php">Contact</a> &nbsp;&#124;&nbsp; <a href="http://library.brown.edu/forms/comments.php">Comments</a> &nbsp;&#124;&nbsp; <a href="http://library.brown.edu/forms/feedback.php">Website&nbsp;Feedback</a> &nbsp;&#124;&nbsp; <a href="sitemap.php">Site&nbsp;Map</a></p>

<p><a href="http://library.brown.edu/intranet">Library&nbsp;Intranet</a></p>

    </div> <!-- end #footer_contents -->

</div> <!-- end #footer -->






		<?php //get_sidebar( 'footer' ); ?>

<!--
		<div class="grid col-940">

			<div class="grid col-540">
-->
				<?php // if ( has_nav_menu( 'footer-menu', 'responsive' ) ) {
// 					wp_nav_menu( array(
// 						'container'      => '',
// 						'fallback_cb'    => false,
// 						'menu_class'     => 'footer-menu',
// 						'theme_location' => 'footer-menu'
// 					) );
// 				} ?>
			<!--</div>--><!-- end of col-540 -->

			<!--<div class="grid col-380 fit">-->
				<?php // echo responsive_get_social_icons() ?>
			<!--</div>--><!-- end of col-380 fit -->

		<!--</div>--><!-- end of col-940 -->
		<?php // get_sidebar( 'colophon' ); ?>


	</div><!-- end #footer-wrapper -->

	<?php // responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php // responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>