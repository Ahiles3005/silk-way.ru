<?php
/*
 * Plugin Name: SilkWayMobileHeaderMenu
 * Plugin URI: https://hotimsite.ru
 * Description: Мобильное меню
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayMobileHeaderMenu */
class silk_way_mobile_menu_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_mobile_menu',
            'description' => 'Мобильное меню',
        );
        parent::__construct( 'silk_way_mobile_menu', 'Мобильное меню', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
            <div class="menus-block">
                <i class="close-menu">&#xf00d;</i>
                <div class="search-block">
                    <?php get_search_form(); ?>
                </div>
                <div class="header-menu-white">
                    <?php wp_nav_menu(['menu' => get_field('id_mobile_catalog_menu', 'widget_' . $widget_id), 'container' => '']); ?>
                </div>
                <div style="display: flex;    justify-content: space-around; align-items: center;">
                    <a href="<?php echo home_url(); ?>" class="mobile-menu-logo">
                        <img alt="" src="<?php echo get_field('mobile_logo_img', 'widget_' . $widget_id); ?>">
                    </a>
                    <a href="/shop/" class="mobile-menu-logo" style="border: 2px solid; border-radius: 10px;    padding: 10px;">
                        Весь ассортимент
                    </a>
                </div>
                <div class="mobile-menu-adress">
                    <p>
                        <i>&#xf041;</i>
                        <select>
                            <?php while ( have_rows('city_select_mobile_menu', 'widget_' . $widget_id) ) : the_row();?>
                                <option value="<?php echo get_sub_field('city_select_mobile_menu_phone'); ?>"><?php echo get_sub_field('city_select_mobile_menu_city'); ?></option>
                            <?php endwhile; ?>
                        </select>
                    </p>
                    <p><i>&#xf095;</i><a id="mobile-header-tel" href=""></a></p>
                </div>
                <div class="header-menu-gray">
                    <?php wp_nav_menu(['menu' => get_field('id_mobile_gray_menu', 'widget_' . $widget_id), 'container' => '']); ?>
                </div>
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