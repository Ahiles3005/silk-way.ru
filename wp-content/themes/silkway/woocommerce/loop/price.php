<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>
<div class="price">
	<?php if($product->get_sale_price()) {?>
	<div class="old-price"><span><?php echo $product->get_regular_price(); ?></span><i>&#xf158;</i></div>
	<div class="new-price"><span><?php echo $product->get_sale_price(); ?></span><i>&#xf158;</i></div>
	<?php } else {?>
	<div class="new-price"><span><?php echo $product->get_price(); ?></span><i>&#xf158;</i></div>
	<?php } ?>
</div>