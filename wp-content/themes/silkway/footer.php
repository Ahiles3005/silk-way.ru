	<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
	<footer id="footer-widgets">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</footer>
	<?php endif; ?>

    <!--<style type="text/css" scoped>
        .pc {
            display: flex;
        }
        .mob {
            display: none;
        }

        .certificate-popup {
            align-items: center;
            background: linear-gradient(89.91deg, #922042 -8.26%, #BB214F 144.55%), #D9D9D9;
            border-radius: 10px;
            bottom: 20px;
            color: #fff !important;
            cursor: pointer;
            display: flex;
            font-family: 'Gilroy', sans-serif;
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 18px;
            flex-direction: column;
            right: 50px;
            height: 115px;
            justify-content: center;
            position: fixed;
            text-align: center;
            text-decoration: none;
            width: 115px;
            z-index: 10000;
        }

        /* Cтиль для сервиса jivo */
        .wrap_b937 {
            bottom: 60px !important;
        }
        .wrap_eab0 {
            bottom: 121px !important;
        }

        .choose-widget {
            position: fixed;
            z-index: 10000;
            bottom: 50px;
            left: 50px;
            display: block;
            width: 252px;
            height: 126px;
            background: url(<?php echo get_template_directory_uri(); ?>/img/widget/choose-img-min_260522.png) no-repeat center center;
            background-size: contain;
        }
        .choose-widget span,
        .choose-widget img {
            display: none;
        }

        /*jdiv .globalClass_ebf0,*/
        #pclk-root .pclk-layout-bottom-left {
            display:none;
        }
		
        @media only screen and (max-width: 1024px) {
            .mob {
                display: flex;
            }
            .pc {
                display: none;
            }

            .certificate-popup {
                align-items: center;
                background: linear-gradient(90.04deg, #C21F50 0.02%, #E2265E 0.03%, #BB095F 99.99%), linear-gradient(89.91deg, #922042 -8.26%, #BB214F 144.55%), #D9D9D9;
                border-radius: 10px;
                bottom: 0;
                font-size: 14px;
                line-height: 14px;
                flex-direction: row;
                left: inherit;
                height: auto;
                min-height: 50px;
                padding: 5px 20px;
                right: 0;
                width: 50%;
            }
            .certificate-popup img {
                height: 33px;
                margin-right: 10px;
                width: 30px;
            }
            .choose-widget {
                align-items: center;
                background-size: inherit;
                background: linear-gradient(90.12deg, #5023B0 3.16%, #38157D 103.71%), linear-gradient(89.91deg, #B100ED -8.26%, #75039C -8.25%, #AC05E4 144.55%), #D9D9D9;
                border-radius: 10px;
                bottom: 0;
                display: flex;
                font-family: 'Gilroy', sans-serif;
                font-style: normal;
                font-weight: 700;
                font-size: 12px;
                line-height: 13px;
                color: #FFFFFF;
                flex-direction: row;
                justify-content: center;
                height: auto;
                left: 0;
                min-height: 50px;
                padding: 5px 15px;
                text-decoration: none;
                text-indent: 0;
                width: 50%;
            }
            .choose-widget img {
                display: flex;
                height: 26px;
                margin-right: 7px;
                width: 26px;
            }
            .choose-widget span {
                display: flex;
            }
        }
    </style>-->

	<!-- Button scroll up -->
	<div class="btn-up btn-up_hide"></div>
	<script>
		const btnUp = {
		  el: document.querySelector('.btn-up'),
		  show() {
			this.el.classList.remove('btn-up_hide');
		  },
		  hide() {
			this.el.classList.add('btn-up_hide');
		  },
		  addEventListener() {
			window.addEventListener('scroll', () => {
			  const scrollY = window.scrollY || document.documentElement.scrollTop;
			  scrollY > 400 ? this.show() : this.hide();
			});
			document.querySelector('.btn-up').onclick = () => {
			  window.scrollTo({
				top: 0,
				left: 0,
				behavior: 'smooth'
			  });
			}
		  }
		}

		btnUp.addEventListener();
	</script>
	<!-- End button scroll up -->

    <a class="certificate-popup" data-fancybox href="#sertificate-popup">
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/widget/certificate_1.webp" alt="">
        <img class="mob" src="<?php echo get_template_directory_uri(); ?>/img/widget/gift.png" alt="">
        Получить<br> подарок
    </a>


    <?php wp_footer(); ?>

    <?php if(is_home() || is_front_page() || is_page('kontakty')) { ?>
        <div id="schemeOrg" style="display:none;" itemscope itemtype="http://schema.org/Organization">
            <span itemprop="name">Silk-way</span>
            Контакты:
            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                Адрес:
                <span itemprop="streetAddress">Шарикоподшипниковская 13 строение 1, 2 этаж, офис 13</span>,
                <span itemprop="postalCode">115088</span>,
                <span itemprop="addressLocality">Москва</span>
            </div>
            Официальное название компании: <span itemprop="legalName">Общество с ограниченной ответственностью «ПРОФЛАЙН»</span>,
            Реквизиты компании: <span itemprop="taxID">ИНН 7723458035</span>,
            Регистрационный номер компании: <span itemprop="vatID">ОГРН 1167746638487</span>,
            Телефон:<span itemprop="telephone">+7 (985) 114-15-69</span>,
            Электронная почта: <span itemprop="email">office@silk-way.ru</span>,
            Компания в ВК: <span itemprop="contactPoint">https://vk.com/silkwaystore</span>,
            Компания в телеграм: <span itemprop="contactPoint">https://t.me/silkwayru</span>
        </div>
    <?php } ?>

    <!--noindex-->
    <div id="sertificate-popup" class="popup-wrapper" style="display: none">
        <div class="popup-close" data-fancybox-close>
            <svg viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="1.35774" y1="0.650685" x2="16.9245" y2="16.593" stroke="#515151"/>
                <line x1="1.03674" y1="16.5541" x2="16.643" y2="0.650459" stroke="#515151"/>
            </svg>
        </div>
        <?
            // Дата мероприятия 3 июня, раз в 2 недели меняем дату
            $offerDate = DateTime::createFromFormat('d.m.Y H:i:s', '02.06.2022 17:00:00');
            $dateNow = new DateTime();
            if($dateNow > $offerDate):
                while ($dateNow > $offerDate):
                    $offerDate->modify('+15 days');
                endwhile;
            endif;
            $month = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября',  'декабря'];
        ?>
        <div class="popup-date">Акция действует до <?=$offerDate->format( 'j' ) . ' ' . $month[$offerDate->format( 'm' ) - 1];?></div>
        <div class="popup-text">Дарим персональный<br> скидочный<br> сертификат<br> <span>1&nbsp;000 рублей</span></div>
        <form class="popup-form">
            <div class="popupForm-row">
                <div class="popupFormRow-label">
                    Введите телефон<br> для закрепления скидки
                </div>
                <div class="popupFormRow-input">
                    <input class="phone-number" type="text" placeholder="+7 (000) 000-00-00" required>
                </div>
            </div>
            <div class="popupForm-row">
                <button type="submit">Получить скидочный купон</button>
            </div>
            <div class="popupForm-row popupForm-row_policy">
                <input id="sertificate-policy" type="checkbox" checked>
                <label for="sertificate-policy">
                    Я согласен с условиями <a href="/privacy-policy/" target="_blank">политики конфиденциальности</a>
                </label>
            </div>
        </form>
    </div>
    <div id="fitting-popup" class="popup-wrapper" style="display: none">
        <div class="popup-close" data-fancybox-close>
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="24.5" fill="white" stroke="#FF0000"/>
                <path d="M12.5 12.5L37.5 37.5M12.5 37.5L37.5 12.5" stroke="#FF0000"/>
            </svg>
        </div>
        <div class="popup-title">
            <span>Скачайте бесплатно инструкцию</span> по корректирующему корсету
        </div>
        <div class="popup-list">
            <div class="popupList-title">В инструкции мы расскажем о том как :</div>
            <ul>
                <li>подобрать корректирующее бельё для<br class="pc"> формирования идеальной фигуры;</li>
                <li>снизить вес с помощью корректирующего<br class="pc">белья и исправить осанку;</li>
                <li>подобрать корректирующее бельё под ваш<br class="pc"> тип фигуры и размер.</li>
            </ul>
        </div>
        <form class="popup-form">
            <div class="popupForm-row">
                <div class="popupFormRow-label">
                    Введите телефон для доступа к инструкции:
                </div>
                <div class="popupFormRow-input">
                    <input class="phone-number" type="text" placeholder="+7 (000) 000-00-00" required>
                </div>
            </div>
            <div class="popupForm-row popupForm-row_actions">
                <button type="submit">
                    Скачать инструкцию бесплатно
                    <img src="<?php echo get_template_directory_uri(); ?>/img/click-hand.gif" alt="">
                </button>
            </div>
            <div class="popupForm-row popupForm-row_policy">
                <input id="fitting-policy" type="checkbox" checked required>
                <label for="fitting-policy">
                    Я подтверждаю согласие на обработку <a href="/privacy-policy/" target="_blank">персональных данных</a>
                </label>
            </div>
        </form>
    </div>
    <div id="success-popup" class="popup-wrapper" style="display: none">
        <div class="popup-close" data-fancybox-close>
            <svg viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.64762 1.00045L29 27M1 26.9365L28.4218 1" stroke="#5A6065" stroke-width="2"/>
            </svg>
        </div>
        <div class="popup-title">
            СПАСИБО!<span>ВАША ЗАЯВКА ПРИНЯТА.</span>
        </div>
        <div class="popup-text">
            Мы обязательно свяжемся с Вами!
        </div>
    </div>
    <!--/noindex-->

<!--<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=475858a3122bc328192522812cc67c6f" charset="UTF-8" async></script>-->

<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(88475060, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88475060" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!-- /Yandex.Metrika counter -->

<script>
    (function($){
        var fired = false;
        //var foot_var = $('.foot_var').html();
        var abs_var = $('.abs_var').html();
        var metrics = $('.metrics').html();
        var test_var = $('.test_var').html();
        var chat_var = $('.chat_var').html();
        var yastat = $('.yastat').html();
        //var index_var = $('.index_var').html();
        //$('.foot_var').html('');
        $('.test_var').html('');
        $('.chat_var').html('');
        $('.metrics').html('');
        $('.abs_var').html('');
        $('.yastat').html('');
        //$('.index_var').html('');

        window.addEventListener('scroll', () => {
            if (fired === false) {
                fired = true;

                setTimeout(() => {
                    //$('.foot_var').html(foot_var);
                    //$('.index_var').html(index_var);
                    $('.test_var').html(test_var);
                    $('.chat_var').html(chat_var);
                    $('.metrics').html(metrics);
                    $('.abs_var').html(abs_var);
                    $('.yastat').html(yastat);
                }, 1000)
            }
        });
		$(".material ul li a").on("click", function(e){
            e.preventDefault();
            var anchor = $(this).attr('href');
            $('html, body').stop().animate({
                scrollTop: $(anchor).offset().top - 60
            }, 800);
        });
    })(jQuery);
</script>

<a id="marq_btn" href="#popup:marquiz_5e59066574aeef004402463f" class="visibility: hidden;"></a>

</body>
</html>