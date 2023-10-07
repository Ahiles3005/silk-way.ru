<?php
defined( 'ABSPATH' ) || exit;

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$tag0 = get_the_terms( get_the_ID(), 'product_tag' )[0] -> name;

$post_ids = $product->get_id();
?>


<div class="swiper-slide product-item">
	<a class="image" href="<?php echo $product->get_permalink(); ?>">
	<!--<div class="image">-->
		<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
	</a>
	<a href="<?php echo $product->get_permalink(); ?>" class="name">
		<div class="product-item-header"><?php echo $product->get_title(); ?></div>
	</a>
	<div class="attr-sizes">
		<?php
			if (!$product->is_in_stock()) {
				echo "<p style='color: #ed1d23;'>Нет в наличии</p>";
			} else {
				echo "<p style='color: #38c700;'>Размеры в наличии</p>";
				$parazmer=explode(',',$product->get_attribute( 'pa_razmer' ));
			    foreach ($parazmer as $attribut) {
					echo '<span>'.trim($attribut).'</span>';
				}
			}
		?>
		<?/*php
			$parazmer=explode(',',$product->get_attribute( 'pa_razmer' ));
			foreach ($parazmer as $attribut) {
				echo '<span>'.trim($attribut).'</span>';
			}
		*/?>		
	</div>
	
	<!--<div class="price"><?//php echo $product->get_price(); ?><?php echo $product->get_price_html(); ?></div>-->
	<?php
	 $attributes = $product->attributes;
	 if ($attributes) {
	     $product_variations = $product->get_available_variations();
         $variation_product_id = $product_variations [0]['variation_id'];
         $variation_product = new WC_Product_Variation( $variation_product_id );
         $regular_price = $variation_product ->regular_price;
         $sale_price = $variation_product ->sale_price;
	     $disc = $regular_price - $sale_price;
	     $disc_proc = round(($disc/$regular_price)*100);
	 } else {
		 $regular_price = $product ->regular_price;
         $sale_price = $product ->sale_price;
	     $disc = $regular_price - $sale_price;
	     $disc_proc = round(($disc/$regular_price)*100);
	 }
	?>
	<div class="products__price price">
		<?php if ($sale_price != ""):?>
		<div class="products__price-new"><?=$sale_price;?> <span class="ruble">руб.</span></div>
		<div class="products__price-old">
			<div class="products__price-old-p"><?=$regular_price;?> <span class="ruble">руб.</span></div>
			<div class="stock-label">
				<div class="stock-label__percent"><?=$disc_proc;?>%</div>
				<div class="stock-label__price">-<?=$disc;?> <span class="ruble">руб.</span></div>
			</div>
		</div>
		<?else:?>
		<div class="products__price-new"><?=$regular_price;?> <span class="ruble">руб.</span></div>
		<?php endif;?>
	</div>

	<!--<div class="sku">Артикул: <?php echo $product->get_sku(); ?></div>-->
	<!--<div class="raiting">
	<?php
		if((int)$product->get_average_rating()>0){
			for($k=0;$k<5;$k++){
				if($k<(int)$product->get_average_rating()){
					echo '<span>&#x53;</span>';
				} else {
					echo '<span>&#x73;</span>';
				}
			}
		} else {
			echo '<span>&#x53;&#x53;&#x53;&#x53;&#x53;</span>';
		}
		if($product->get_review_count()>0){
			echo '<p>('.$product->get_review_count().')</p>';
		}
	?>
	</div>-->
	<!--<a href="<?php echo $product->get_permalink(); ?>" class="to-cart">КУПИТЬ </a>-->
	<?php echo do_shortcode('[yith_quick_view type="button" label="В Корзину" product_id="'.$product->id.'"]'); ?>
	
</div>

<!-- Swiper JS -->
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".feature-slider-<?php echo $post_ids; ?>", {
  pagination: {
    el: ".swiper-pagination",
	clickable: true,
  },
});
</script>
