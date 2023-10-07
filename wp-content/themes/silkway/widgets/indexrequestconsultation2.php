<?php
/*
 * Plugin Name: SilkWayIndexConsultation2
 * Plugin URI: https://hotimsite.ru
 * Description: Консультация (вариант 2)
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexConsultation */
class silk_way_index_consultation2_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_consultation2',
            'description' => 'Консультация (вариант 2)',
        );
        parent::__construct( 'silk_way_index_consultation2', 'Консультация (вариант 2)', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		$cons_bg = get_field('cons_bg', 'widget_' . $widget_id);
		$cons_title = get_field('cons_title', 'widget_' . $widget_id);
		$cons_text = get_field('cons_text', 'widget_' . $widget_id);
		?>
			<section class="index-request-consultation2">
				<div class="cons_block" style="background: url('<?=$cons_bg;?>');-background-size: cover;background-position: center;">
				    <div class="cons_block_item">
						<div class="cblock-title"><img alt="" title="" src="<?=$cons_title;?>"></div>
						<div class="cblock-text"><?=$cons_text;?></div>
						<div class="cblock-btn">
							<a href="#popup:marquiz_5e59066574aeef004402463f">
								<img alt="" title="" src="<?=get_stylesheet_directory_uri();?>/img/widget/btn_tilda2.svg">
							</a>	
				        </div>
					</div>
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