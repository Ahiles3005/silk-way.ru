<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>
<?php if ( $product->is_on_sale() ) : ?>

	<?php echo apply_filters( 'woocommerce_sale_flash', '<div class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</div>', $post, $product ); ?>

	<?php
endif;
