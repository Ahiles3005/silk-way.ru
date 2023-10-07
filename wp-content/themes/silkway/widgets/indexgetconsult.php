<?php
/*
 * Plugin Name: SilkWayIndexGetConsultation
 * Plugin URI: https://hotimsite.ru
 * Description: Получить консультацию
 * Version: 1
 * Author: Caleb El`Tropicano
 * Author URI: https://hotimsite.ru
 * License: GPLv2 or later
 */

/* Виджет SilkWayIndexAdvantages */
class silk_way_index_get_consultation_widget extends WP_Widget {

    // Установка идентификатора, заголовка, имени класса и описания для виджета.
    public function __construct() {
        $widget_options = array(
            'classname' => 'silk_way_index_get_consultation',
            'description' => 'Получить консультацию',
        );
        parent::__construct( 'silk_way_index_get_consultation', 'Получить консультацию', $widget_options );
    }

    // Вывод виджета в области виджетов на сайте.
    public function widget( $args, $instance ) {
        $widget_id = $args['widget_id'];
        ?>
            <section class="index-getConsultation">
                <div class="getConsultation-wrapper">
                    <div class="getConsultation-content">
                        <div class="getConsultation-title">
                            Сложно определиться с выбором?
                        </div>
                        <div class="getConsultation-text">
                            Специалисты SILKWAY помогут подобрать корректирующее белье:
                        </div>
                        <ul class="getConsultation-list">
                            <li>Определим запрос, который должно решать белье</li>
                            <li>Поможем определить нужный размер</li>
                            <li>Подберем белье по типу фигуры</li>
                            <li>Проконсультируем по вопросам оплаты, доставки, возврата и т.д.</li>
                        </ul>
                        <form class="getConsultation-form">
                            <div class="getConsultationForm-col">
                                <div class="getConsultationForm-label">
                                    Ваш номер телефона:
                                </div>
                                <div class="getConsultationForm-input">
                                    <input class="phone-number" type="text" placeholder="+7 (000) 000-00-00" required>
                                </div>
                            </div>
                            <div class="getConsultationForm-col">
                                <button type="submit">
                                    Получить консультацию
                                    <img alt="" src="<?=get_stylesheet_directory_uri();?>/img/insets/get-consultation/pointer-icon.gif">
                                </button>
                                <div class="getConsultation-policy">
                                    <input id="getConsultation-policy" type="checkbox" checked>
                                    <label for="getConsultation-policy">
                                        Я подтверждаю согласие на обработку <a href="/privacy-policy/" target="_blank">персональных данных</a>
                                    </label>
                                </div>
                            </div>
                        </form>
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