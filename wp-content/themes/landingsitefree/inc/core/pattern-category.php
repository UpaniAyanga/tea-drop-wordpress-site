<?php
/**
 * LandingSiteFree: Block Patterns
 *
 * @since LandingSiteFree 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since LandingSiteFree 1.0
 *
 * @return void
 */
function landingsitefree_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'landingsitefree' => array( 'label' => __( 'LandingSiteFree Theme', 'landingsitefree' ) )
	);

	$block_pattern_categories = apply_filters( 'landingsitefree_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'landingsitefree_register_pattern_category', 9 );
