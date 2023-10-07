<?php
/*
 * Plugin Name: SilkWayHeaderCart
 * Plugin URI: https://hotimsite.ru
 * Description: Корзина в хидере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayHeaderCart */
class silk_way_header_cart_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_header_cart',
            'description' => 'Корзина в хидере',
        );
        parent::__construct( 'silk_way_header_cart', 'Корзина в хидере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		global $woocommerce;
		$items = $woocommerce->cart->get_cart();
		?>
            <div class="header-cart">
                <a href="<?php echo wc_get_cart_url(); ?>" class="quick-icon">
                    <i>&#xf290;</i>
                    <div class="quantity"><?php echo $woocommerce->cart->get_cart_contents_count(); ?></div>
                </a>
                <?php if($items){ ?>
                    <div class="products-list">
                        <div class="close">&#xf00d;</div>
                        <h2>Сейчас в корзине</h2>
                        <?php
                        foreach($items as $item => $values) {
                            $getProduct =  wc_get_product( $values['data']->get_id());
                            $price = get_post_meta($values['product_id'] , '_price', true);
                            echo '<div class="item">';
                            echo '<a class="product-link" href="' . get_permalink($values['product_id']) .'">' . $getProduct->get_title().'</a>';
                            echo '<div class="quant-price">' . $values['quantity'] . ' X ' . $price . ' <i>&#xf158;</i></div>';
                            echo '</div>';
                        } ?>
                        <div class="total">Всего на сумму: <?php echo $woocommerce->cart->get_cart_subtotal(); ?></div>
                        <a href="<?php echo wc_get_cart_url(); ?>" class="link-to-cart">Перейти в корзину</a>
                    </div>
                <?php } ?>
            </div>
		<?php
    }

    // Параметры виджета, отображаемые в области администрирования WordPress.
    public function form( $instance ) {

    }

    // Обновление настроек виджета в админ-панели.
    public function update( $new_instance, $old_instance ) {

    }

}
?>