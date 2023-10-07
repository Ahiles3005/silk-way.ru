<?php
/*
 * Plugin Name: SilkWayIndexAdvantages
 * Plugin URI: https://hotimsite.ru
 * Description: 6 причин купить бельё
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexAdvantages */
class silk_way_index_advantages_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_advantages',
            'description' => '6 причин купить бельё',
        );
        parent::__construct( 'silk_way_index_advantages', '6 причин купить бельё', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-advantages">
			<div class="section-header">
                <div class="h2"><?php echo get_field('advantages_header', 'widget_' . $widget_id); ?></div>
            </div>
			<div class="items-container">
			<?php while ( have_rows('index_advantages', 'widget_' . $widget_id) ) : the_row();?>
				<div class="item">
					<?php the_sub_field('sub_index_advantages'); ?>
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