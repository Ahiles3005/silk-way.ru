<?php
/*
 * Plugin Name: SilkWayIndexStock
 * Plugin URI: https://hotimsite.ru
 * Description: Акционное предложение
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexStock */
class silk_way_index_stock_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_stock',
            'description' => 'Акционное предложение',
        );
        parent::__construct( 'silk_way_index_stock', 'Акционное предложение', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-stock">
			<div class="section-header"><h2>АКЦИОННОЕ ПРЕДЛОЖЕНИЕ</h2></div>
			<div class="stock-slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php echo do_shortcode('[products limit="' . get_field('index_stock_header_num', 'widget_' . $widget_id) . '" category="aktsionnoye-predlozheniye" cat_operator="AND"]'); ?>
					</div>
				</div>
				<div class="prev">&#xf053;</div>
				<div class="next">&#xf054;</div>
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