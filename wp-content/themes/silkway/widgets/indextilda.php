<?php
/*
 * Plugin Name: SilkWayTilda
 * Plugin URI: https://hotimsite.ru
 * Description: Блоки из тильды
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayTilda */
class silk_way_tilda_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_tilda',
            'description' => 'Блоки из тильды',
        );
        parent::__construct( 'silk_way_tilda', 'Блоки из тильды', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		$bg1 = get_field('bg1', 'widget_' . $widget_id);
		$bg2 = get_field('bg2', 'widget_' . $widget_id);
		$bg3 = get_field('bg3', 'widget_' . $widget_id);
		$title1 = get_field('title1', 'widget_' . $widget_id);
		$title2 = get_field('title2', 'widget_' . $widget_id);
		$title3 = get_field('title3', 'widget_' . $widget_id);
		$text11 = get_field('text11', 'widget_' . $widget_id);
		$text12 = get_field('text12', 'widget_' . $widget_id);
		$text13 = get_field('text13', 'widget_' . $widget_id);
		$pic1 = get_field('pic1', 'widget_' . $widget_id);
		$pic2 = get_field('pic2', 'widget_' . $widget_id);
		$pic3 = get_field('pic3', 'widget_' . $widget_id);
		$pic4 = get_field('pic4', 'widget_' . $widget_id);
		$text21 = get_field('text21', 'widget_' . $widget_id);
		$text22 = get_field('text22', 'widget_' . $widget_id);
		$text23 = get_field('text23', 'widget_' . $widget_id);
		$text24 = get_field('text24', 'widget_' . $widget_id);
		$text25 = get_field('text25', 'widget_' . $widget_id);
		$pic5 = get_field('pic5', 'widget_' . $widget_id);
		$pic6 = get_field('pic6', 'widget_' . $widget_id);
		$pic7 = get_field('pic7', 'widget_' . $widget_id);
		$pic8 = get_field('pic8', 'widget_' . $widget_id);
		$pic9 = get_field('pic9', 'widget_' . $widget_id);
		$text31 = get_field('text31', 'widget_' . $widget_id);
		$text32 = get_field('text32', 'widget_' . $widget_id);
		$text33 = get_field('text33', 'widget_' . $widget_id);
		$text34 = get_field('text34', 'widget_' . $widget_id);
		?>
		<section class="index-tilda">
			<div class="tblock1" style="background: url('<?=$bg1;?>');background-size: cover;background-position: center;">
				<div class="tblock1-title">
					<img alt="" title="" src="<?=$title1;?>">
				</div>
				<div class="tblock1-items">
					<div class="tblock1-item ti1">
						<div class="tblock1-text tt11"><?=$text11;?></div>
						<div class="tblock1-img timg1"><img alt="" title="" src="<?=$pic1;?>"></div>
					</div>
					<div class="tblock1-item ti2">
						<div class="tblock1-text tt12"><?=$text12;?></div>
						<div class="tblock1-img timg2"><img alt="" title="" src="<?=$pic2;?>"></div>
					</div>
					<div class="tblock1-item ti3">
						<div class="tblock1-text tt13"><?=$text13;?></div>
						<div class="tblock1-img timg3"><img alt="" title="" src="<?=$pic3;?>"></div>
					</div>
				</div>
			</div>
			<div class="tblock-mid" style="background: url('<?=$bg2;?>');background-size: cover;background-position: center;">
				<div class="down-mid">
					<img alt="" title="" src="<?=get_stylesheet_directory_uri();?>/img/widget/down.svg">
				</div>
			</div>
			<div class="tblock2" style="background: url('<?=$bg3;?>');background-size: cover;background-position: center;">
				<div class="tblock2-title">
					<img alt="" title="" src="<?=$title2;?>">
				</div>
				<div class="tblock2-img timg4">
					<img alt="" title="" src="<?=$pic4;?>">
				</div>
				<div class="tblock2-text tt21"><?=$text21;?><span class="t_dot"></span></div>
				<div class="tblock2-text tt22"><?=$text22;?><span class="t_dot"></span></div>
				<div class="tblock2-text tt23"><?=$text23;?><span class="t_dot"></span></div>
				<div class="tblock2-text tt24"><?=$text24;?><span class="t_dot"></span></div>
				<div class="tblock2-text tt25"><?=$text25;?><span class="t_dot"></span></div>
				<div class="btn-tilda">
					<a href="#popup:marquiz_5e59066574aeef004402463f">
						<img alt="" title="" src="<?=get_stylesheet_directory_uri();?>/img/widget/btn_tilda.svg">
					</a>	
				</div>
				<div class="tblock3-title">
					<img alt="" title="" src="<?=$title3;?>">
				</div>
			</div>
			<div class="tblock3">
				<div class="tblock3-item ti31">
					<div class="tblock3-text tt31"><?=$text31;?></div>
					<div class="tblock3-img timg31"><img alt="" title="" src="<?=$pic5;?>"></div>
					<span class="t_line"></span>
					<span class="t_bdot"></span>
			    </div>
				<div class="tblock3-item ti32">
					<div class="tblock3-text tt32"><?=$text32;?></div>
					<div class="tblock3-img timg32"><img alt="" title="" src="<?=$pic6;?>"></div>
					<span class="t_line"></span>
					<span class="t_bdot"></span>
			    </div>
				<div class="tblock3-item ti33">
					<div class="tblock3-text tt33"><?=$text33;?></div>
					<div class="tblock3-img timg33"><img alt="" title="" src="<?=$pic7;?>"></div>
					<span class="t_line"></span>
					<span class="t_bdot"></span>
			    </div>
				<div class="tblock3-item ti34">
					<div class="tblock3-text tt34"><?=$text34;?></div>
					<div class="tblock3-img timg34"><img alt="" title="" src="<?=$pic8;?>"></div>
					<span class="t_line"></span>
					<span class="t_bdot"></span>
			    </div>
				<div class="tblock3-img timg9">
					<img alt="" title="" src="<?=$pic9;?>">
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