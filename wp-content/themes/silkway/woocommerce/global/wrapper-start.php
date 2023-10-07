<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_template_part( 'template-parts/absolute-widgets');

get_template_part( 'template-parts/before-article-widgets');
//is_product_category();
?>

<?php if ( !is_product() ) : ?>
<section class="woocommerce-category-header">
	<h1><?php woocommerce_page_title(); ?></h1>
	<?php do_action( 'woocommerce_before_shop_loop' ); ?>
</section>
<?php endif; ?>

<section class="aside-container">
	
	<?php get_template_part( 'template-parts/leftsidebar-widgets'); ?>

	<aside class="center">