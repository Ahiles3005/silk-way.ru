<?php
/*
 * Plugin Name: SilkWayMarquiztest
 * Plugin URI: https://hotimsite.ru
 * Description: Marquiztest
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayGrayHeaderMenu */
class silk_way_marquiztest_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_marquiztest',
            'description' => 'Marquiztest',
        );
        parent::__construct( 'silk_way_marquiztest', 'Marquiztest', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-marquiz-test test_var">
			<a name="to-test"></a>
			<div class="section-header"><p><?php echo get_field('marquiz_header', 'widget_' . $widget_id); ?></p></div>
			<?php echo get_field('marquiz_frame', 'widget_' . $widget_id); ?>
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