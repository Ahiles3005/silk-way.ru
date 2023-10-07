<?php
defined( 'ABSPATH' ) || exit;
global $product;
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}
if(isset($_GET["oneclkickbuy"])){
echo 'Сработала проверка купить в один клик';
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>		
			<div class="sku"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></div>		
		<?php endif; ?>
		
		<?php
		$primary_cat_id = get_post_meta($product->id,'_yoast_wpseo_primary_product_cat',true);
		if($primary_cat_id){
		$product_cat = get_term($primary_cat_id, 'product_cat');
		if(isset($product_cat->name))
		$category_link = get_category_link($primary_cat_id);
		echo 'Категория: <a href = "'.esc_url( $category_link ).'" class="catName"> '.$product_cat->name.'</a>';
		}
		?>
		
		<?php
		do_action( 'woocommerce_single_product_summary' );
		?>
		<div class="product-other-links">
			<div class="item">
				<i>&#xf559;</i>
				<a href="/garantii-i-vozvrat/" target="_blank">Гарантии и возврат</a>
			</div>
			<div class="item">
				<i>&#xf48b;</i>
				<a href="/oplata-i-dostavka/" target="_blank">Оплата и доставка</a>
			</div>
			<div class="item">
				<i>&#xf847;</i>
				<a href="/fitting/" target="_blank">Примерка на дому</a>
			</div>
			<!--<div class="item">
				<i>&#xf762;</i>
				<a href="/#tab-reviews" target="_blank">Отзывы</a>
			</div>-->
			<div class="item">
				<i>&#xf02c;</i>
				<a href="/tablica-razmerov/" target="_blank">Таблица размеров</a>
			</div>
		</div>
	</div>

	<?php
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
