<?php
/*
 * Plugin Name: SilkWayOurTeam
 * Plugin URI: https://hotimsite.ru
 * Description: Наша команда
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayOurTeam */
class silk_way_our_team_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_our_team',
            'description' => 'Наша команда',
        );
        parent::__construct( 'silk_way_our_team', 'Наша команда', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-our-team">
			<div class="section-header">
                <div class="h2"><?php echo get_field('our_team_header', 'widget_' . $widget_id); ?></div>
            </div>
			<div class="our-team-slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php while ( have_rows('our_team_item', 'widget_' . $widget_id) ) : the_row();?>
						<div class="swiper-slide">
							<div class="image"><img alt="" loading="lazy" src="<?php the_sub_field('our_team_item_photo'); ?>"></div>
							<div class="h4"><?php the_sub_field('our_team_item_name'); ?></div>
							<p><?php the_sub_field('our_team_item_speciality'); ?></p>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="prev">&#xf053;</div>
				<div class="next">&#xf054;</div>
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