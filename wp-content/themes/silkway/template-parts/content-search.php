<article id="post-<?php the_ID(); ?>" class="search-result-link">
	<?php if(has_post_thumbnail()){
		silkway_post_thumbnail();
	} else {
		echo '<a href="' . esc_url(get_permalink()) . '" class="post-thumbnail"><img src="' . get_template_directory_uri() . '/img/blog_empty_thumb.jpg"></a>';
	}?>
	<div class="search-text">
		<?php the_title( sprintf( '<a href="%s" class="entry-title">', esc_url( get_permalink() ) ), '</a>' ); ?>
		<?php if(get_post_type()==="product"){
			global $product;
			$_product = wc_get_product($product->get_id());
		?>
			<div class="product-description">
				<div class="sku">Артикул: <?php echo $_product->get_sku(); ?></div>
				<div class="price"><strong>Цена:</strong> <?php echo $_product->get_price_html(); ?></div>
				<a class="toproduct" href="<?php echo esc_url(get_permalink()); ?>">ПЕРЕЙТИ</a>
			</div>		
		<?php } else { ?>
			<div class="search-anons">
			<?php the_excerpt(); ?>
			</div>			
		<?php } ?>

	</div>
</article>
