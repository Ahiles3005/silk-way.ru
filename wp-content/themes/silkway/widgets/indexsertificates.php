<?php
/*
 * Plugin Name: SilkWaySertificates
 * Plugin URI: https://hotimsite.ru
 * Description: Сертификаты на главной
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWaySertificates */
class silk_way_sertificates_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_sertificates',
            'description' => 'Сертификаты на главной',
        );
        parent::__construct( 'silk_way_sertificates', 'Сертификаты на главной', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		$sertificates_images = get_field('sertificates_images', 'widget_' . $widget_id);
		?>
		<section class="index-reviews">
			<div class="section-header">
                <div class="h2"><?php echo get_field('sertificates_header', 'widget_' . $widget_id); ?></div>
            </div>
			<div class="reviews-slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<?php foreach( $sertificates_images as $sertificates_image ): ?>
						<div class="swiper-slide">
							<a href="<?php echo $sertificates_image; ?>" data-fancybox="gallery">
								<img alt="" loading="lazy" src="<?php echo $sertificates_image; ?>">
							</a>
						</div>
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