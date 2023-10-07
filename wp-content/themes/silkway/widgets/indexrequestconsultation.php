<?php
/*
 * Plugin Name: SilkWayIndexConsultation
 * Plugin URI: https://hotimsite.ru
 * Description: Получи личную консультацию
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexConsultation */
class silk_way_index_consultation_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_consultation',
            'description' => 'Получи личную консультацию',
        );
        parent::__construct( 'silk_way_index_consultation', 'Получи личную консультацию', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
			<section class="index-request-consultation">
				<a name="cons"></a>
				<div class="h3">SILKWAY</div>
				<h2>СПЕЦИАЛИСТЫ SILKWAY ПОМОГУТ<br>ПОДОБРАТЬ КОРРЕКТИРУЮЩЕЕ БЕЛЬЕ</h2>
				<button class="send-consultation-request">КОНСУЛЬТАЦИЯ</button>
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