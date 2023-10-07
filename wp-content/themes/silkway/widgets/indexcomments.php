<?php
/*
 * Plugin Name: SilkWayIndexComments
 * Plugin URI: https://hotimsite.ru
 * Description: Отзывы на главной
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayFamousPeople */
class silk_way_index_comments_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_comments',
            'description' => 'Отзывы на главной',
        );
        parent::__construct( 'silk_way_index_comments', 'Отзывы на главной', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		$comment_images = get_field('index_comments_images', 'widget_' . $widget_id);
		?>
		<section class="index-reviews">
			<a name="reviews"></a>
			<div class="section-header">
                <div class="h2"><?php echo get_field('index_comments_header', 'widget_' . $widget_id); ?></div>
            </div>
			<div class="all_one_rev">
				<script src="https://res.smartwidgets.ru/app.js" defer></script>
                <div class="sw-app" data-app="2329aff05aa0f1320bb6c919cb4e3f39"></div>
			</div>
			<div class="reviews-slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<?php foreach( $comment_images as $comment_image ): ?>
						<div class="swiper-slide"><img alt="" src="<?php echo $comment_image; ?>"></div>
					<?php endforeach; ?>
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