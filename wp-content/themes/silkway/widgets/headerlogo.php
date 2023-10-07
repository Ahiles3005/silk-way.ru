<?php
/*
 * Plugin Name: SilkWayHeaderLogo
 * Plugin URI: https://hotimsite.ru
 * Description: Логотип в хидере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayHeaderLogo */
class silk_way_header_logo_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_header_logo',
            'description' => 'Логотип в хидере',
        );
        parent::__construct( 'silk_way_header_logo', 'Логотип в хидере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
			<section class="header-logo">
				<a href="/"><img alt="" src="<?php echo get_field('header_logo_img', 'widget_' . $widget_id); ?>"></a>
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