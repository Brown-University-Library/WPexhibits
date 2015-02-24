<?php 

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// This adds the home page "hero" text widget to the theme.

	register_sidebar( array(
						  'name'          => __( 'Hero Text', 'responsive' ),
						  'description'   => __( 'Displays over the hero area of the home page template', 'responsive' ),
						  'id'            => 'hero-text',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
						  'after_widget'  => '</div>'
					  ) );
?>