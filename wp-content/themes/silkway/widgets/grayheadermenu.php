<?php
/*
 * Plugin Name: SilkWayGrayHeaderMenu
 * Plugin URI: https://hotimsite.ru
 * Description: Серое меню в хидере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayGrayHeaderMenu */
class silk_way_gray_header_menu_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_gray_header_menu',
            'description' => 'Серое меню в хидере',
        );
        parent::__construct( 'silk_way_gray_header_menu', 'Серое меню в хидере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
        wp_nav_menu(['menu' => get_field('id_gray_menu', 'widget_' . $widget_id), 'container' => '']);
		?>
            <div class="select-city">
                <i>&#xf05b;</i>
                <select>
                    <?php while ( have_rows('city_select_gray_menu', 'widget_' . $widget_id) ) : the_row();?>
                        <option value="<?php echo get_sub_field('city_select_gray_menu_phone'); ?>"><?php echo get_sub_field('city_select_gray_menu_city'); ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
		<?php
			//echo $args['after_widget'];
    }

    // Параметры виджета, отображаемые в области администрирования WordPress.
    public function form( $instance ) {

    }

    // Обновление настроек виджета в админ-панели.
    public function update( $new_instance, $old_instance ) {

    }

}
?>