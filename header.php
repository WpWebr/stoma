<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?> class="no-js no-svg">
<head>
	

	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="e7a1e8e5a8fb9f8e" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">
	<script src="//code-ya.jivosite.com/widget/s6U0Ugk1xR" async></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <?php rel_canonical(); ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="nav_msken ">
    <div class="vgs"></div>
    <div class="ins">
        <a href="#" class="close">Закрыть <div class="ico"></div></a>
        <?php wp_nav_menu('menu=2'); ?>
    </div>
</div>

<div id="page" class="site">
    <div class="sh_heigh"></div>
    <div class="bg_sks"></div>
    <header>
        <div class="top ">
            <div class="wrap clrfx">
                <div class="nav left">
                    <?php wp_nav_menu('menu=2'); ?>
                </div>
				<div>
				</div>
                <div class="soc right">
                    <? if (get_field('link_fb',32)) {?><a href="<?= get_field('link_fb',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-facebook" aria-hidden="true"></i></a><?}?>
                    <? if (get_field('link_vk',32)) {?><a href="<?= get_field('link_vk',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-vk" aria-hidden="true"></i></a><?}?>
                    <!-- <? if (get_field('link_inst',32)) {?><a href="<?= get_field('link_inst',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-instagram" aria-hidden="true"></i></a><?}?> -->
                    <? if (get_field('youtube',32)) {?><a href="<?= get_field('youtube',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><?}?>
                </div>
            </div>
        </div>
		<div class="wrap clrfx">
			<?get_search_form(); ?>
		</div>
		
        <div class="cent">
            <div class="wrap clrfx">
                 <a href="tel:<?= preg_replace('~[^0-9]+~','',get_field('phone_on_mobile', 32))?>" class="mobile_view_ns phone_mobile"></a>
               
                <? if( is_front_page() ) {?>
                    <div class="logo clrfx">
                        <div class="img"></div>
                        <div class="desc">Cтоматологическая клиника White</div>
                    </div>
                <?} else {?>
                    <a href="/" class="logo clrfx">
                        <div class="img"></div>
                        <div class="desc">Cтоматологическая клиника White</div>
                    </a>
                <?}  ?>
                <a href="#" class="mobile_view_ns burger_mobile"></a>
                <div class="right">
                    <a href="https://yandex.ru/maps/2/saint-petersburg/?ll=30.306705%2C59.954191&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D30.306713%252C59.954193%26spn%3D0.001000%252C0.001000%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%25A1%25D0%25B0%25D0%25BD%25D0%25BA%25D1%2582-%25D0%259F%25D0%25B5%25D1%2582%25D0%25B5%25D1%2580%25D0%25B1%25D1%2583%25D1%2580%25D0%25B3%252C%2520%25D0%259A%25D1%2580%25D0%25BE%25D0%25BD%25D0%25B2%25D0%25B5%25D1%2580%25D0%25BA%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25BF%25D1%2580%25D0%25BE%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BA%25D1%2582%252C%252063%252F31%2520&z=17" target="_blank" rel="nofollow" class="place its">
                        <div class="big"><?= get_field('adres', 32)?></div>
                        <?  while ( have_rows('metro', 32) ) : the_row(); ?>
                            <div class="sm"><?= get_sub_field('in_metro');?></div>
                        <? endwhile; ?>
                    </a>
                    <a data-fancybox data-src="#form_zvon" href="javascript:;" class="link_ns">
                        <div class="ico"></div>
                        <span>Записаться на приём</span>
                    </a>
                    <div class="phone its">
                        <?  while ( have_rows('phone', 32) ) : the_row(); ?>
                            <a href="tel:<?= preg_replace('~[^0-9]+~','',get_sub_field('phone_number'))?>" class="phone_link"><? echo get_sub_field('phone_number')?></a>
                        <? endwhile; ?>
                        <div class="timework"><?= get_field('timework', 32)?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot ">
            <div class="wrap clrfx">
                <div class="mobile_view_ns">
                    <a href="#" class="link_burger">Услуги нашей клиники <div class="ico"></div></a>
                </div>
                <?php wp_nav_menu(array(
                    'menu' => 5,
                    'depth' => 2,
                    'link_after'      => '<div class="ico"></div>',
                )); ?>
            </div>
        </div>
    </header>

    <div class="site-content-contain">
        <div id="content" class="site-content">
