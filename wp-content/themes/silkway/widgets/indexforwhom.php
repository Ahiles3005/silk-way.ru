<?php
/*
 * Plugin Name: SilkWayIndexForWhom
 * Plugin URI: https://hotimsite.ru
 * Description: Кому подходит бельё
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexForWhom */
class silk_way_index_forwhom_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_forwhom',
            'description' => 'Кому подходит бельё',
        );
        parent::__construct( 'silk_way_index_forwhom', 'Кому подходит бельё', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-for-whom">
			<div class="section-header">
                <div class="h2"><?php echo get_field('index_forwhom_header', 'widget_' . $widget_id); ?></div>
            </div>
			<div class="items-container">
			<?php while ( have_rows('index_forwhom_html', 'widget_' . $widget_id) ) : the_row();?>
				<div class="item">
					<img alt="" src="<?php the_sub_field('index_forwhom_html_img'); ?>">
					<div class="text">
						<div class="h4"><?php the_sub_field('index_forwhom_html_header'); ?></div>
						<p><?php the_sub_field('index_forwhom_html_text'); ?></p>
					</div>
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