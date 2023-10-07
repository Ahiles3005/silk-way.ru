<?php
/*
 * Plugin Name: SilkWayFAQ
 * Plugin URI: https://hotimsite.ru
 * Description: Часто задаваемые вопросы
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayFAQ */
class silk_way_FAQ_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_FAQ',
            'description' => 'Часто задаваемые вопросы',
        );
        parent::__construct( 'silk_way_FAQ', 'Часто задаваемые вопросы', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		?>
		<section class="index-faq">
			<a name="faq"></a>
			<div class="section-header">
                <div class="h2"><?php echo get_field('faq_header', 'widget_' . $widget_id); ?></div>
            </div>
			<div class="items-container">
			<?php while ( have_rows('faq_item', 'widget_' . $widget_id) ) : the_row();?>
				<div class="item">
					<div class="h4"><?php the_sub_field('faq_item_quest'); ?></div>
					<div class="text">
						<?php the_sub_field('faq_item_answer'); ?>
					</div>
					<div class="faq-spoiler"></div>
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