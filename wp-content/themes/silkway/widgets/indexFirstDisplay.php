<?php
/*
 * Plugin Name: First Display
 * Plugin URI: #
 * Description: First Display
 * Version: 1
 * Author: Gistolovskiy Aleksandr
 * Author URI: ale-wp345@yandex.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayGrayHeaderMenu */
class silk_way_index_first_display_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_first_display',
            'description' => 'First Display',
        );
        parent::__construct( 'silk_way_first_display', 'First Display', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];

        $fd_title = get_field('first-display-title', 'widget_' . $widget_id);
        $fd_list_item_icon_pc = get_field('first-display-list-item-icon-pc', 'widget_' . $widget_id);
        $fd_list_item_icon_mob = get_field('first-display-list-item-icon-mob', 'widget_' . $widget_id);
        $fd_list = get_field('first-display-list', 'widget_' . $widget_id);
        $fd_phone_label = get_field('first-display-phone-label', 'widget_' . $widget_id);
        $fd_phone_placeholder = get_field('first-display-phone-placeholder', 'widget_' . $widget_id);
        $fd_form_submit = get_field('first-display-form-submit', 'widget_' . $widget_id);
        $fd_icon_answer_timing_pc = get_field('first-display-icon-answer-timing-pc', 'widget_' . $widget_id);
        $fd_icon_answer_timing_mob = get_field('first-display-icon-answer-timing-mob', 'widget_' . $widget_id);
        $fd_form_answer_timing = get_field('first-display-form-answer-timing', 'widget_' . $widget_id);
        $fd_icon_checkbox_pc = get_field('first-display-icon-checkbox-pc', 'widget_' . $widget_id);
        $fd_icon_checkbox_mob = get_field('first-display-icon-checkbox-mob', 'widget_' . $widget_id);
        $fd_checkbox_text = get_field('first-display-checkbox-text', 'widget_' . $widget_id);
        $fd_checkbox_link = get_field('first-display-checkbox-link', 'widget_' . $widget_id);
        $fd_img_pc = get_field('first-display-img-pc', 'widget_' . $widget_id);
        $fd_img_mob = get_field('first-display-img-mob', 'widget_' . $widget_id);
		?>
        <style type="text/css">
            .index-first-display-wrapper {
                background-color: #F2F2F2;
                /*display: none;*/
                color: #414141;
                font-family: 'Gilroy', sans-serif;
                margin: 0 auto 50px;
                width: 100%;
            }
            .index-first-display {
                display: flex;
                flex-direction: row;
                margin: 0 auto;
                width: 1280px;
            }
            .index-first-display__item {
                display: flex;
                flex-direction: column;
                width: 50%;
            }
            div.index-first-display__item {
                padding: 42px 54px;
            }
            .index-first-display__item-title {
                font-style: normal;
                font-weight: 800;
                font-size: 30px;
                line-height: 37px;
            }
            .index-first-display__item-list {
                margin: 12px 0 20px;
                padding: 0;
            }
            .index-first-display__item-list li {
                align-items: center;
                color: #414141;
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 23px;
                list-style: none;
                margin: 11px 0;
            }
            .index-first-display__item-list li img {
                height: 18px;
                margin-right: 10px;
                width: 18px;
            }
            .index-first-display__item-form label {
                font-style: normal;
                font-weight: 400;
                font-size: 17px;
                line-height: 20px;
                color: #414141;
            }
            .index-first-display__item-form input {
                background: #FFFFFF;
                border: 1px solid #B3B3B3;
                border-radius: 99px;
                font-weight: 300;
                font-size: 18px;
                line-height: 25px;
                margin: 10px 0 21px;
                padding: 25px;
                width: 100%;
            }
            .index-first-display__item-form input::placeholder {
                color: #898989;
            }
            .index-first-display__item-form-submit-wrapper button {
                align-items: center;
                background: #EC1D24;
                border-radius: 50px;
                border: none;
                display: flex;
                flex-direction: row;
                font-family: 'Open Sans', sans-serif;
                font-style: normal;
                font-weight: 700;
                font-size: 18px;
                line-height: 25px;
                color: #FFFFFF;
                cursor: pointer;
                justify-content: center;
                padding: 14px 54px;
                text-align: center;
                width: 100%;
            }
            .index-first-display__item-form-submit-wrapper button:focus {
                border: none;
            }
            .index-first-display__item-form-submit-wrapper button img {
                height: 40px;
                margin-left: 12px;
                width: 40px;
            }
            .index-first-display__item-form-answer-timing {
                align-items: center;
                display: flex;
                flex-direction: row;
                justify-content: center;
                font-weight: 400;
                font-size: 16px;
                line-height: 19px;
                margin: 2px 0;
            }
            .index-first-display__item-form-answer-timing img {
                height: 22px;
                margin-right: 12px;
                width: 22px;
            }
            .index-first-display__item-form-checkbox-wrapper {
                align-items: center;
                cursor: pointer;
                display: flex;
                cursor: pointer;
                font-family: 'Gilroy', sans-serif;
                font-style: normal;
                font-weight: 400;
                font-size: 13px;
                line-height: 16px;
                flex-direction: row;
                justify-content: flex-start;
            }
            .index-first-display__item-form-checkbox-wrapper label {
                cursor: pointer;
                font-weight: 400;
                font-size: 13px;
                line-height: 16px;
                color: #585858;
            }
            input.index-first-display__item-form-checkbox {
                height: 20px;
                margin: 0 10px 0 0;
                position: relative;
                width: 20px;
            }

            input.index-first-display__item-form-checkbox:checked:after {
                background: url('<?php echo $fd_icon_checkbox_pc['url']?>') no-repeat center center;
                content: '';
                height: 20px;
                left: 0;
                position: absolute;
                top: 0;
                width: 20px;
                z-index: 1;
            }

            .index-first-display__item-form-checkbox-wrapper a {
                color: #FF545A;
                font-family: 'Gilroy', sans-serif;
                font-style: normal;
                font-weight: 400;
                font-size: 13px;
                line-height: 16px;
                margin-left: 5px;
            }

            .pc {
                display: flex;
            }
            .mob {
                display: none;
            }
            @media (max-width: 1024px) {
                .index-first-display {
                    flex-direction: column;
                    width: 100%;
                }
                .index-first-display__item {
                    width: 100%;
                }
                div.index-first-display__item {
                    padding: 25px 15px 0;
                }
                .index-first-display__item-title {
                    font-size: 18px;
                    line-height: 22px;
                }
                .index-first-display__item-list li {
                    font-size: 14px;
                    line-height: 16px;
                }
                .index-first-display__item-form label {
                    font-size: 12px;
                }
                .index-first-display__item-form input {
                    font-size: 14px;
                    line-height: 19px;
                    margin: 7px 0 14px;
                    padding: 12px 25px;
                    width: 100%;
                }
                .index-first-display__item-form-submit-wrapper button {
                    font-size: 13px;
                    line-height: 20px;
                    padding: 13px 14px;
                }
                .index-first-display__item-form-answer-timing {
                    font-size: 14px;
                    line-height: 16px;
                }
                .index-first-display__item-form-checkbox-wrapper {
                    font-size: 12px;
                    line-height: 14px;
                    flex-wrap: wrap;
                    margin-bottom: 25px;
                }
                input.index-first-display__item-form-checkbox {
                    height: 16px;
                    margin: 0 10px 0 0;
                    width: 16px !important;
                }
                input.index-first-display__item-form-checkbox:after {
                    height: 16px;
                    margin: 0;
                    width: 16px;
                }
                input.index-first-display__item-form-checkbox:checked:after {
                    background: url('<?php echo $fd_icon_checkbox_mob['url']?>') no-repeat center center;
                    content: '';
                    height: 16px;
                    margin: 0;
                    width: 16px;
                }

                .mob {
                    display: flex;
                }
                .pc {
                    display: none;
                }
                input.index-first-display__item-form-checkbox:after {
                    background: url('<?php echo $fd_icon_checkbox_mob['url']?>') no-repeat center center;
                    content: '';
                    height: 20px;
                    left: 0;
                    position: absolute;
                    top: 0;
                    width: 20px;
                }
            }
        </style>

        <!-- noindex -->
		<section class="index-first-display-wrapper">
            <div class="index-first-display">
                <div class="index-first-display__item">
                    <div class="index-first-display__item-title"><?php echo wp_kses( $fd_title, minimal_allowed_tags() ); ?></div>

                        <?php

                        if($fd_list) { ?>

                            <ul class="index-first-display__item-list">

                            <?php foreach ($fd_list as $fd_item) { ?>
                                <li>
                                    <img class="pc" src="<?php echo esc_url($fd_list_item_icon_pc['url']); ?>" alt="<?php esc_attr_e( $fd_list_item_icon_pc['alt'] ); ?>">
                                    <img class="mob" src="<?php echo esc_url($fd_list_item_icon_mob['url']); ?>" alt="<?php esc_attr_e( $fd_list_item_icon_mob['alt'] );?>">
                                    <span><?php esc_html_e($fd_item['first-display-list-item']);?></span>
                                </li>
                            <?php } ?>

                            </ul>

                        <?php } ?>


                    <form class="index-first-display__item-form" id="index-first-display__item-form" action="" method="post">
                        <input class="index-first-display__item-form-site-name" type="hidden" name="site" value="<?php echo site_url(); ?>">

                        <label for="index-first-display__item-form-phone"><?php esc_html_e( $fd_phone_label );?></label>
                        <input id="index-first-display__item-form-phone" type="tel" name="phone" placeholder="<?php esc_attr_e( $fd_phone_placeholder );?>" required>

                        <div class="index-first-display__item-form-submit-wrapper">
                            <button id="index-first-display__item-form-submit-wrapper-submit-btn" type="submit">
                                <span><?php echo wp_kses( $fd_form_submit, minimal_allowed_tags() );?></span>
                                <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/insets/get-consultation/pointer-icon.gif" alt="">
                            </button>

                            <div class="index-first-display__item-form-answer-timing">
                                <img class="pc" src="<?php echo esc_url($fd_icon_answer_timing_pc['url']); ?>" alt="<?php esc_attr_e( $fd_icon_answer_timing_pc['alt'] ); ?>">
                                <img class="mob" src="<?php echo esc_url($fd_icon_answer_timing_mob['url']); ?>" alt="<?php esc_attr_e( $fd_icon_answer_timing_mob['alt'] );?>">
                                <?php esc_html_e( $fd_form_answer_timing );?>
                            </div>
                            <div class="index-first-display__item-form-checkbox-wrapper">
                                <input class="index-first-display__item-form-checkbox" id="index-first-display__item-form-checkbox" type="checkbox" checked required>
                                <label for="index-first-display__item-form-checkbox"><?php esc_html_e( $fd_checkbox_text );?></label>
                                <a href="<?php echo esc_url( $fd_checkbox_link['url'] );?>" target="_blank"><?php esc_html_e( $fd_checkbox_link['title'] );?></a>
                            </div>
                        </div>
                    </form>
                </div>
                <img class="pc index-first-display__item" src="<?php echo esc_url($fd_img_pc['url']); ?>" alt="<?php esc_attr_e( $fd_img_pc['alt'] ); ?>">
                <img class="mob index-first-display__item" src="<?php echo esc_url($fd_img_mob['url']); ?>" alt="<?php esc_attr_e( $fd_img_mob['alt'] ); ?>">
            </div>
		</section>
        <!--/noindex-->
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
