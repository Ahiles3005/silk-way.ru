<?php
/*
 * Plugin Name: SilkWayFamousPeople
 * Plugin URI: https://hotimsite.ru
 * Description: Известные личности в корректирующем белье silkway
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayFamousPeople */
class silk_way_famous_people_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_famous_people',
            'description' => 'Известные личности в корректирующем белье silkway',
        );
        parent::__construct( 'silk_way_famous_people', 'Известные личности в корректирующем белье silkway', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		$famous_images = get_field('famous_people_images', 'widget_' . $widget_id);
		//var_dump($famous_images);
		?>
		<section class="index-famous-people">
			<div class="section-header">
                <div class="h2"><?php echo get_field('famous_people_header', 'widget_' . $widget_id); ?></div>
            </div>
			<!--h3>SILKWAY</h3-->
			<div class="famous-slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<?php for($k=0;$k<count($famous_images);$k++){ ?>
						<div class="swiper-slide">
							<img alt="" src="<?php echo $famous_images[$k]['url']; ?>">
							<p><?php echo $famous_images[$k]['description']; ?></p>
						</div>
					<?php } ?>
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