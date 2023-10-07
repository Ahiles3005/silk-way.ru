<?php
/*
 * Plugin Name: SilkWayHeaderMenu
 * Plugin URI: https://hotimsite.ru
 * Description: Меню в хидере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayHeaderMenu */
class silk_way_header_menu_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_header_menu',
            'description' => 'Меню в хидере',
        );
        parent::__construct( 'silk_way_header_menu', 'Меню в хидере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
        wp_nav_menu(['menu' => get_field('id_header_menu', 'widget_' . $widget_id), 'container' => '']);
    }

    // Параметры виджета, отображаемые в области администрирования WordPress.
    public function form( $instance ) {

    }

    // Обновление настроек виджета в админ-панели.
    public function update( $new_instance, $old_instance ) {

    }

}
?>