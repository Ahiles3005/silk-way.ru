<!doctype html>
<html <?php language_attributes(); ?>>

<?php /*
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '619616732724381');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=619616732724381&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
 */
?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:image" content="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/silk-way.png' )  ?>" />
    <?php wp_head(); ?>

    <!--	<meta name="facebook-domain-verification" content="lp4ha65dgcqo4nen1vapmyy0frb5s5" />-->
	<link rel='stylesheet' id='silkway-css'  href='https://silk-way.ru/wp-content/themes/silkway/css/silkway.css?v=290722-2&#038;ver=5.7.2' media='all' />
</head>


<!-- Google Tag Manager -->
<!--<script>
(function($){
	var fired = false;
	window.addEventListener('scroll', () => {
        if (fired === false) {
            fired = true;

            setTimeout(() => {

	(function(w,d,s,l,i,cid){w[l]=w[l]||[];w.pclick_client_id=cid;w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:''; j.async=true; j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P23G9N', '88313');

	}, 2000)
        }
    });

})(jQuery);
</script>-->
<!-- End Google Tag Manager -->

<?php
$class = '';
if(isset($_GET['debug'])):
    $class .= 'debug';
endif;
?>

<body <?php body_class($class); ?>>
<?php wp_body_open(); ?>
<?php if ( is_active_sidebar( 'header-widgets' ) ) : ?>
    <header id="header-widgets">
        <div class="header-top">
            <div class="container">
                <?php dynamic_sidebar( 'header-widgets-top' ); ?>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <? if( is_home() ): ?>
                    <div class="header-logo">
                        <img alt="" src="<?=get_stylesheet_directory_uri();?>/img/new-logo.png" width="113px" height="39px">
                    </div>
                <? else: ?>
                    <a class="header-logo" href="/">
                        <img alt="" src="<?=get_stylesheet_directory_uri();?>/img/new-logo.png" width="113px" height="39px">
                    </a>
                <? endif; ?>
                <div class="header-slogan">Профессиональное корректирующее белье</div>
                <?php dynamic_sidebar( 'header-widgets-middle' ); ?>
                <div class="header-socials">
                    <a class="header-social header-social_wa" href="https://wa.me/79851141569" target="_blank">
                        <svg viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.3684 6.78766V19.2123C27.3663 21.0117 26.613 22.7369 25.2736 24.0094C23.9343 25.2818 22.1183 25.9977 20.2241 26H7.14437C5.25001 25.998 3.43386 25.2822 2.09446 24.0097C0.755049 22.7371 0.00179956 21.0118 0 19.2123V6.78766C0.00179956 4.98817 0.755049 3.26286 2.09446 1.99033C3.43386 0.717796 5.25001 0.00199482 7.14437 0H20.2241C22.1183 0.00227915 23.9343 0.718172 25.2736 1.99064C26.613 3.26311 27.3663 4.98826 27.3684 6.78766Z" fill="url(#paint0_linear_6_233)"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8478 19.7903C12.3931 19.7938 10.9696 19.3902 9.75492 18.63L6.89718 19.4911L7.82521 16.8863C6.90397 15.6944 6.4077 14.2542 6.4088 12.7756C6.40874 12.548 6.42122 12.3205 6.44619 12.0942C6.80993 8.54215 9.99175 5.76401 13.8478 5.76401C17.7537 5.76401 20.9627 8.61642 21.2618 12.2288C21.2777 12.4096 21.2868 12.5904 21.2868 12.7756C21.2868 16.643 17.9474 19.786 13.8478 19.786V19.7903ZM22.6862 12.5667C22.5661 8.05777 18.6556 4.43898 13.8478 4.43898C9.08865 4.43898 5.21562 7.97597 5.00939 12.4139C5.00939 12.5355 5.00146 12.6572 5.00146 12.7799C4.99967 14.2984 5.43838 15.7881 6.26943 17.0854L4.67285 21.561L9.57249 20.082C10.8826 20.765 12.3533 21.1223 13.8478 21.1207C18.735 21.1207 22.6941 17.3868 22.6941 12.7799C22.6941 12.7088 22.6941 12.6378 22.6941 12.5646L22.6862 12.5667Z" fill="#FEFEFE"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9034 14.4633C17.6847 14.3557 16.6196 13.866 16.4213 13.7981C16.223 13.7303 16.0814 13.6905 15.9318 13.9004C15.7822 14.1103 15.3652 14.5656 15.244 14.6991C15.1227 14.8325 14.9924 14.853 14.7726 14.7507C14.1339 14.5121 13.5444 14.1685 13.031 13.7357C12.5573 13.3247 12.1509 12.8487 11.8253 12.3235C11.7018 12.119 11.8129 12.0081 11.9205 11.9059C12.1185 11.685 12.2998 11.4512 12.4633 11.2062C12.4928 11.1501 12.5069 11.0877 12.5041 11.0251C12.5013 10.9624 12.4818 10.9014 12.4474 10.8478C12.393 10.7401 11.9579 9.73803 11.7755 9.32901C11.5931 8.91998 11.4152 8.99102 11.2871 8.99102C11.1591 8.99102 11.0174 8.97057 10.8735 8.97057C10.7635 8.97319 10.6552 8.99728 10.5554 9.04135C10.4556 9.08542 10.3664 9.14853 10.2934 9.22675C10.0486 9.44534 9.85477 9.71014 9.72421 10.0041C9.59366 10.2982 9.52931 10.6149 9.53529 10.9339C9.5392 11.1699 9.57733 11.4042 9.64861 11.6303C9.81829 12.1415 10.0802 12.6208 10.4225 13.0468C10.5358 13.1814 11.9217 15.3137 14.1256 16.136C16.3295 16.9584 16.3329 16.6742 16.7318 16.643C17.1306 16.6118 18.0156 16.1511 18.1935 15.6743C18.3714 15.1974 18.376 14.7895 18.3227 14.7055C18.2694 14.6216 18.1233 14.5721 17.908 14.4698L17.9034 14.4633Z" fill="#FEFEFE"/>
                            <defs>
                                <linearGradient id="paint0_linear_6_233" x1="14.1448" y1="26.1432" x2="13.3861" y2="2.18138" gradientUnits="userSpaceOnUse">
                                    <stop offset="1" stop-color="#0A9328"/>
                                    <stop offset="1" stop-color="#6DB54D"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <a class="header-social header-social_tg" href="https://t.me/+79851141569" target="_blank">
                        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36 9.39827V26.6017C35.9972 29.0931 35.0063 31.4818 33.2445 33.2437C31.4828 35.0056 29.0941 35.9968 26.6024 36H9.39759C6.90578 35.9972 4.51685 35.0061 2.75501 33.2441C0.99318 31.4822 0.00236711 29.0933 0 26.6017V9.39827C0.00236711 6.90667 0.99318 4.51778 2.75501 2.75581C4.51685 0.993841 6.90578 0.00273154 9.39759 -3.05176e-05H26.6024C29.0941 0.00312522 31.4828 0.994361 33.2445 2.75624C35.0063 4.51813 35.9972 6.90679 36 9.39827Z" fill="url(#paint0_linear_0_1)"/>
                            <path d="M28.7904 7.7499L6.60882 16.3181C6.44858 16.3796 6.31131 16.4893 6.21586 16.6319C6.12041 16.7746 6.07145 16.9433 6.07569 17.1149C6.07994 17.2865 6.13718 17.4526 6.23957 17.5904C6.34196 17.7282 6.48448 17.8309 6.64757 17.8844L12.2504 19.728L14.6992 27.2842C14.6992 27.2842 14.6992 27.2842 14.6992 27.2932C14.6992 27.3021 14.6992 27.2932 14.6992 27.2932C14.7026 27.3004 14.7066 27.3074 14.7112 27.314C14.7297 27.3483 14.7558 27.3779 14.7875 27.4005C14.8192 27.4231 14.8556 27.4382 14.894 27.4445C14.9325 27.4509 14.9718 27.4483 15.0091 27.437C15.0464 27.4258 15.0806 27.4062 15.1091 27.3796L18.9293 23.7804L24.8659 28.1427C24.979 28.2256 25.1112 28.2786 25.2503 28.2968C25.3894 28.3151 25.5308 28.2979 25.6614 28.2469C25.7921 28.1959 25.9077 28.1128 25.9977 28.0052C26.0877 27.8976 26.149 27.7691 26.1761 27.6315L29.9023 8.68883C29.9312 8.54313 29.9206 8.39236 29.8715 8.25217C29.8224 8.11198 29.7366 7.9875 29.6231 7.89166C29.5096 7.79583 29.3725 7.73213 29.2261 7.7072C29.0797 7.68227 28.9292 7.69701 28.7904 7.7499ZM15.2537 21.0291L14.8513 25.8117L12.9569 19.971L24.0879 12.9126L15.2537 21.0291Z" fill="white"/>
                            <defs>
                                <linearGradient id="paint0_linear_0_1" x1="18" y1="-3.05176e-05" x2="18" y2="36" gradientUnits="userSpaceOnUse">
                                    <stop offset="1" stop-color="#00AFE5"/>
                                    <stop offset="1" stop-color="#0094D4"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <div class="header-social header-social_online">
                        Пишите нам,<br>мы online
                    </div>
                </div>
                <div class="header-phones">
                    <?
                    date_default_timezone_set("Europe/Moscow");
                    $start_time = strtotime('10:00');
                    $end_time = strtotime('19:00');
                    $current_time = strtotime( date('H:i') );
                    if ($current_time >= $start_time && $current_time <= $end_time):
                        echo '<div class="header-working">Звоните, мы работаем</div>';
                    endif;
                    ?>
                    <a class="header-phone" href="#">
                        <svg viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.7125 11.1238C9.613 11.6975 10.5436 12.2225 11.5004 12.6965C11.6035 12.7375 11.6969 12.7996 11.7747 12.8787C11.8526 12.9578 11.9131 13.0522 11.9525 13.1559C11.9918 13.2597 12.0093 13.3705 12.0035 13.4813C11.9978 13.5921 11.9691 13.7005 11.9192 13.7996L11.7605 14.3559C11.7205 14.5621 11.6302 14.7553 11.4975 14.9181C11.3649 15.081 11.194 15.2087 11.0002 15.2896C10.3777 15.6471 9.69503 15.8877 8.98594 15.9993C7.05442 16.0393 5.347 14.4266 4.15181 13.078C3.38897 12.2218 2.71126 11.2935 2.12825 10.3061C1.55224 9.31883 1.07463 8.27737 0.702285 7.19671C0.112691 5.50263 -0.452888 3.24029 0.547554 1.61291C1.00321 1.06307 1.55622 0.601844 2.17893 0.252311C2.34956 0.127444 2.54793 0.0458284 2.75703 0.0144638C2.96612 -0.0169009 3.17974 0.00291888 3.37949 0.0722286L3.94908 0.214956C4.05926 0.226655 4.16595 0.260268 4.26294 0.313816C4.35994 0.367363 4.44526 0.439766 4.51387 0.526765C4.58247 0.613764 4.633 0.713605 4.66245 0.820413C4.69191 0.927221 4.69968 1.03884 4.68537 1.1487C4.67603 2.38525 4.65738 3.27231 4.70007 4.28876C4.71607 4.71028 4.55067 4.77031 4.1665 4.91837L3.54355 5.15848C3.44236 5.17374 3.34546 5.20988 3.259 5.26462C3.17253 5.31936 3.09837 5.39148 3.04129 5.47642C2.98421 5.56135 2.94546 5.65724 2.92743 5.75797C2.90941 5.8587 2.91254 5.96209 2.93663 6.06155C3.40037 8.26809 4.57119 10.2632 6.27144 11.7441C6.34657 11.8147 6.43535 11.8693 6.53234 11.9043C6.62932 11.9394 6.73246 11.9543 6.83541 11.9481C6.93836 11.9418 7.03892 11.9146 7.13095 11.868C7.22298 11.8215 7.30452 11.7566 7.37056 11.6774L7.89215 11.2678C7.93638 11.2039 7.99289 11.1494 8.0584 11.1075C8.12392 11.0656 8.19713 11.0372 8.27375 11.0239C8.35036 11.0106 8.42885 11.0127 8.50465 11.0301C8.58044 11.0475 8.65201 11.0798 8.71519 11.1251L8.7125 11.1238Z" fill="#ED1D23"/>
                        </svg>
                        <span></span>
                    </a>
                </div>
                <div class="header-callback">
                    <div class="callback-trigger pum-trigger">Заказать звонок</div>
                    <?php /*
                    <a class="email-trigger" href="mailto:office@silk-way.ru">
                        <svg viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.6387 0.543599C15.4152 0.2163 15.0393 0 14.6151 0H1.23874C0.823488 0 0.456298 0.208619 0.231079 0.524521L7.95147 6.96198L15.6387 0.543599Z" fill="#EC1D24"/>
                            <path d="M0 1.62131V10.7611C0 11.4425 0.557474 12 1.23883 12H14.6152C15.2966 12 15.8541 11.4425 15.8541 10.7611V1.65426L7.95156 8.25202L0 1.62131Z" fill="#EC1D24"/>
                        </svg>
                        office@silk-way.ru
                    </a>
                    */ ?>
                </div>
                <div class="menu-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <?php dynamic_sidebar( 'header-widgets-bottom' ); ?>
            </div>
        </div>
        <? if(!isset($_COOKIE['hideTopBar']) || $_COOKIE['hideTopBar'] !== 'true'): ?>
            <div class="header-topbar">
                <div class="container">
                    <div class="headerTopbar-content">
                        <div class="headerTopbar-title pc">
                            Скачать <span>инструкцию по корректирующему корсету для похудения</span> бесплатно
                        </div>
                        <div class="headerTopbar-title mob">
                            Скачать <span>инструкцию по корсету для похудения</span>
                        </div>
<!--                        <div class="headerTopbar-text">-->
<!--                            И получите инструкцию по корректирующему корсету для похудения в подарок-->
<!--                        </div>-->
                    </div>
                    <div class="headerTopbar-image">
                        <img alt="" class="pc" src="<?php echo get_stylesheet_directory_uri();?>/img/topbar-img-1.webp">
                        <img alt="" class="mob" src="<?php echo get_stylesheet_directory_uri();?>/img/topbar-img-mob-1_@2x.webp">
                    </div>
                    <div class="headerTopbar-actions pc">
                        Скачать
                    </div>
                    <div class="headerTopbar-actions mob">
                        Скачать бесплатно
                    </div>
                    <div class="headerTopbar-close">
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5002 0L9.99912 7.49934L2.49978 0L0 2.49978L7.49934 9.99912L0 17.4985L2.49978 19.9982L9.99912 12.4989L17.5002 19.9982L20 17.4985L12.5007 9.99912L20 2.49978L17.5002 0Z" fill="#FF0000"/>
                        </svg>
                    </div>
                </div>
            </div>
        <? endif; ?>
    </header>
<?php endif; ?>
	
	<div class="m-cat-menu-wrap m-cat-menu-toggler" style="display: none;">
        <a href="/shop/" style="text-decoration: none;">
		<div class="m-cat-menu">
			<div class="m-cat-menu-bars">
				<i class="fa fa-th-large" aria-hidden="true"></i>
			</div>
			<div class="m-cat-menu-title">Каталог товаров</div>
			<div class="m-cat-menu-arrow">
				<i class="fa fa-chevron-right" aria-hidden="true"></i>
			</div>
		</div>
        </a>
	</div>