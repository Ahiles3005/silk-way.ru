<?php
/*
 * Plugin Name: SilkWayMetrics
 * Plugin URI: https://hotimsite.ru
 * Description: Логотип в хидере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayMetrics */
class silk_way_metrics_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_metrics',
            'description' => 'Метрики',
        );
        parent::__construct( 'silk_way_metrics', 'Метрики', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
			<section class="metrics">
				<?php echo get_field('metrics_script', 'widget_' . $widget_id); ?>
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