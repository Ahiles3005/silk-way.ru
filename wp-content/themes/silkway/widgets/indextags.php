<?php
/*
 * Plugin Name: SilkWayIndexTags
 * Plugin URI: https://hotimsite.ru
 * Description: Теги на главной
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexTags */
class silk_way_index_tags_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_tags',
            'description' => 'Теги на главной',
        );
        parent::__construct( 'silk_way_index_tags', 'Теги на главной', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>

		<section class="index-tags">
			<?php while ( have_rows('tags_category', 'widget_' . $widget_id) ) : the_row();?>
			<div class="tags-category">
                <div class="h1"><?php the_sub_field('category_name'); ?></div>
				<div class="tags-container">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php while ( have_rows('tags_links', 'widget_' . $widget_id) ) : the_row();?>
							<div class="swiper-slide">
								<a href="<?php the_sub_field('tag_link'); ?>" class="tag"><?php the_sub_field('tag_name'); ?></a>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
					<div class="all-tags"></div>
					<div class="prev">&#xf053;</div>
					<div class="next">&#xf054;</div>
					<div class="view-all">Показать все</div>
				</div>				
			</div>
			<?php endwhile; ?>
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