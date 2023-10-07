<?php
/*
 * Plugin Name: SilkWayIndexStockCounter
 * Plugin URI: https://hotimsite.ru
 * Description: Счётчик до конца акции на главной
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexStockCounter */
class silk_way_index_stock_counter_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_stock_counter',
            'description' => 'Счётчик до конца акции на главной',
        );
        parent::__construct( 'silk_way_index_stock_counter', 'Счётчик до конца акции на главной', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-stock-counter">
			<div class="section-header"><h2><?php echo get_field('index_stockcounter_header', 'widget_' . $widget_id); ?></h2></div>
			<h3>ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</h3>
			<div class="counter" date="<?php echo get_field('index_stockcounter_date', 'widget_' . $widget_id); ?>">
				<div class="unit"><span class="num">0</span><span class="type">дней</span></div>
				<div class="unit"><span class="num">0</span><span class="type">часов</span></div>
				<div class="unit"><span class="num">0</span><span class="type">минут</span></div>
			</div>
			<button class="send-stock-request">ОСТАВИТЬ ЗАЯВКУ</button>
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