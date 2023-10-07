<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
	//add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );
	add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
	function new_loop_shop_per_page( $cols ) {
	  $cols = 36;
	  return $cols;
	}
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
}

add_action( 'pre_get_posts', function( $query ) {
	if ( $query->is_main_query() && is_woocommerce() && ( is_shop() || is_product_category() || is_product_tag() ) ) {
		if( $query->get( 'orderby' ) == 'menu_order title' ) {  // only change default sorting
			$query->set( 'orderby', 'meta_value' );
			$query->set( 'order', 'ASC' );
			$query->set( 'meta_key', '_stock_status' );
		}
	}
});
?>