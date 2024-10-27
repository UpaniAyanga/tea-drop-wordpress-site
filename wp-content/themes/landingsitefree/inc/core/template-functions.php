<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package LandingSiteFree
 */

/**
 * Add customizer default values.
 *
 * @param array $default_options
 * @return array
 */
function landingsitefree_customizer_add_defaults( $default_options) {
	$defaults = array(
		// Excerpt Options
		'landingsitefree_excerpt_length'    => 50,
	);


	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'landingsitefree_customizer_defaults', 'landingsitefree_customizer_add_defaults' );

/**
 * Returns theme mod value saved for option merging with default option if available.
 * @since 1.0
 */
function landingsitefree_gtm( $option ) {
	// Get our Customizer defaults
	$defaults = apply_filters( 'landingsitefree_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'landingsitefree_excerpt_length' ) ) :
	/**
	 * Sets the post excerpt length to n words.
	 *
	 * function tied to the excerpt_length filter hook.
	 * @uses filter excerpt_length
	 */
	function landingsitefree_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		// Getting data from Theme Options
		$length	= landingsitefree_gtm( 'landingsitefree_excerpt_length' );

		return absint( $length );
	} // landingsitefree_excerpt_length.
endif;
add_filter( 'excerpt_length', 'landingsitefree_excerpt_length', 999 );

/*
 * Remove parentheses from categories widget
 */
function landingsitefree_categories_postcount_filter ($variable) {
   $variable = str_replace('(', '<span class="post-count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','landingsitefree_categories_postcount_filter');

/*
 * Admin Notice
 */
function landingsitefree_notice() {

    $theme = wp_get_theme();

    echo '<div class="notice notice-success is-dismissible"><p>'. esc_html('Thank you for installing the LandingSiteFree theme!','landingsitefree') . '</p><p><a class="button-secondary" href="' . esc_url( $theme->get( 'ThemeURI' ) ) . '" target="_blank">' . esc_html( 'Theme Demo', 'landingsitefree' ) . '</a> '. '&nbsp;' . ' <a class="button-primary" href="' . esc_url( $theme->get( 'AuthorURI' ) . '/themes/landingsite' ) . '" target="_blank">' . esc_html( 'Upgrade to PRO theme', 'landingsitefree' ) . '</a></p></div>';

}

add_action('admin_notices', 'landingsitefree_notice');
