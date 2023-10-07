<?php
/*
 * Plugin Name: SilkWayIndexProductAdvertising
 * Plugin URI: https://hotimsite.ru
 * Description: Новинки, популярные, распродажа на главной
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexProductAdvertising */
class silk_way_indexproductadvertising_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_indexproductadvertising',
            'description' => 'Новинки, популярные, распродажа на главной',
        );
        parent::__construct( 'silk_way_indexproductadvertising', 'Новинки, популярные, распродажа на главной', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-product-advertising">
			<div class="tabs-switches-container">				
				<div class="tab active" tabnum="1">ПОПУЛЯРНЫЕ</div>
				<div class="tab" tabnum="2">НОВИНКИ</div>
				<div class="tab" tabnum="3">АКЦИИ</div>
			</div>
			<div class="tabs-content-container">
				<div class="tab-content active" tabnum="1">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php echo do_shortcode('[products limit="' . get_field('product_advertising_new', 'widget_' . $widget_id) . '" category="popular"]'); ?>
						</div>
					</div>
					<div class="prev">&#xf053;</div>
					<div class="next">&#xf054;</div>
				</div>
				<div class="tab-content active" tabnum="2">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php echo do_shortcode('[products limit="' . get_field('product_advertising_popular', 'widget_' . $widget_id) . '" category="new" cat_operator="AND"]'); ?>
						</div>
					</div>
					<div class="prev">&#xf053;</div>
					<div class="next">&#xf054;</div>
				</div>
				<div class="tab-content active" tabnum="3">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php echo do_shortcode('[products limit="' . get_field('product_advertising_stock', 'widget_' . $widget_id) . '" category="sale" cat_operator="AND"]'); ?>
						</div>
					</div>
					<div class="prev">&#xf053;</div>
					<div class="next">&#xf054;</div>
				</div>
			</div>
		</section>
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