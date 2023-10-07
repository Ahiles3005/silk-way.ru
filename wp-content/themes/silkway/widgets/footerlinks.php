<?php
/*
 * Plugin Name: SilkWayFooterLinks
 * Plugin URI: https://hotimsite.ru
 * Description: Ссылки в футере
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayFooterLinks */
class silk_way_footer_links_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_footer_links',
            'description' => 'Ссылки в футере',
        );
        parent::__construct( 'silk_way_footer_links', 'Ссылки в футере', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>

		<section class="footer-links yastat">
			<div class="container">
				<a href="/" class="footer-logo"><img alt="" src="<?php echo get_field('footer_logo', 'widget_' . $widget_id); ?>"></a>
				<?php while ( have_rows('links_column', 'widget_' . $widget_id) ) : the_row();?>
				<div class="links-container">
                    <div class="h4"><?php the_sub_field('column_name'); ?></div>
					<?php while ( have_rows('links', 'widget_' . $widget_id) ) : the_row();?>
					<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
					<?php endwhile; ?>
				</div>
				<?php endwhile; ?>
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