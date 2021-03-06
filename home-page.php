<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Home Page
 *
 * @file           home-page.php
 * @package        exhibits-general
 * @author         Emil Uzelac and Kerri Hicks
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/exhibits-general/home-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<!-- creates a hero div for the home page, and using the page's featured image as a background -->

<div id="home_page_hero" style="background-image: url('<?php
$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' =>'image') );
foreach ( $attachments as $attachment_id => $attachment ) {
	echo wp_get_attachment_url( $attachment_id, 'medium' );
} ?>')">



<?php if ( is_active_sidebar( 'hero-text' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'hero-text' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

</div>


<?php if ( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
    wp_nav_menu( array(
        'container'      => '',
        'menu_class'     => 'sub-header-menu',
        'theme_location' => 'sub-header-menu'
    ) );
} ?>


<div id="content-full" class="home_page grid">

	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-header', get_post_type() ); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta', get_post_type() ); ?>

				<div class="post-entry">
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<!-- end of .post-entry -->

				<?php get_template_part( 'post-data', get_post_type() ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav', get_post_type() );

	else :

		get_template_part( 'loop-no-posts', get_post_type() );

	endif;
	?>

</div><!-- end of #content-full -->

<?php get_footer(); ?>
