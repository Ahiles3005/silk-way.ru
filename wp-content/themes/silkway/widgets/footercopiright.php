<?php
/*
 * Plugin Name: SilkWayFooterCopyright
 * Plugin URI: https://hotimsite.ru
 * Description: Форма связи в футере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayFooterCopyright */
class silk_way_footer_copyright_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_footer_copyright',
            'description' => 'Копирайт в футере',
        );
        parent::__construct( 'silk_way_footer_copyright', 'Копирайт в футере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="footer-copyright">
			<div class="container">
				<div class="text"><?php echo date('Y');?> <?php echo get_field('copyright_text', 'widget_' . $widget_id); ?></div>
				<div class="menu"><?php echo apply_filters( 'footercopyrightfilter', wp_nav_menu(['menu' => get_field('copyright_menu', 'widget_' . $widget_id), 'container' => '', 'echo' => false]) ); ?></div>
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
