<?php
/*
 * Plugin Name: SilkWayIndexAdvantages2
 * Plugin URI: https://hotimsite.ru
 * Description: 6 причин (вариант 2)
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexAdvantages */
class silk_way_index_advantages2_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_advantages2',
            'description' => '6 причин (вариант 2)',
        );
        parent::__construct( 'silk_way_index_advantages2', '6 причин (вариант 2)', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		$six_bg = get_field('six_bg', 'widget_' . $widget_id);
		$six_title = get_field('six_title', 'widget_' . $widget_id);
		$six_pic1 = get_field('six_pic1', 'widget_' . $widget_id);
		$six_pic2 = get_field('six_pic2', 'widget_' . $widget_id);
		$six_pic3 = get_field('six_pic3', 'widget_' . $widget_id);
		$six_pic4 = get_field('six_pic4', 'widget_' . $widget_id);
		$six_pic5 = get_field('six_pic5', 'widget_' . $widget_id);
		$six_pic6 = get_field('six_pic6', 'widget_' . $widget_id);
		$six_text1 = get_field('six_text1', 'widget_' . $widget_id);
		$six_text2 = get_field('six_text2', 'widget_' . $widget_id);
		$six_text3 = get_field('six_text3', 'widget_' . $widget_id);
		$six_text4 = get_field('six_text4', 'widget_' . $widget_id);
		$six_text5 = get_field('six_text5', 'widget_' . $widget_id);
		$six_text6 = get_field('six_text6', 'widget_' . $widget_id);
		?>
		<section class="index-advantages2">
			<div class="six_block-title"><img alt="" title="" src="<?=$six_title;?>"></div>
			<div class="six_block" style="background: url('<?=$six_bg;?>');background-size: cover;">
				<div class="six-item si1">
					<div class="six-img simg1"><img alt="" title="" src="<?=$six_pic1;?>"></div>
					<div class="six-text st1"><?=$six_text1;?></div>
				</div>
				<div class="six-item si2">
					<div class="six-img simg2"><img alt="" title="" src="<?=$six_pic2;?>"></div>
					<div class="six-text st2"><?=$six_text2;?></div>
				</div>
				<div class="six-item si3">
					<div class="six-img simg3"><img alt="" title="" src="<?=$six_pic3;?>"></div>
					<div class="six-text st3"><?=$six_text3;?></div>
				</div>
				<div class="six-item si4">
					<div class="six-img simg4"><img alt="" title="" src="<?=$six_pic4;?>"></div>
					<div class="six-text st4"><?=$six_text4;?></div>
				</div>
				<div class="six-item si5">
					<div class="six-img simg5"><img alt="" title="" src="<?=$six_pic5;?>"></div>
					<div class="six-text st5"><?=$six_text5;?></div>
				</div>
				<div class="six-item si6">
					<div class="six-img simg6"><img alt="" title="" src="<?=$six_pic6;?>"></div>
					<div class="six-text st6"><?=$six_text6;?></div>
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