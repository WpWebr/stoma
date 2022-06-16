<?php
/*
Template name: Контакты
*/
get_header(); ?>

<div class="page_in bg_contact">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
        </div>
        <div class="page_cont smk">
            <div class="block_bot_line">
                <div class="bot_line"></div>
                <div class="ins_bot_line">
                    <div class="inner">
                        <div class="contact_inner">
                            <div class="tripl_col clrfx">
                                <div class="col">
                                    <div class="b_titl regal">Адрес</div>
                                    <div class="desc"><?= get_field('adr_city')?> <?= get_field('adres')?></div>
                                    <?  while ( have_rows('metro') ) : the_row(); ?>
                                        <div class="desc"><?= get_sub_field('in_metro');?></div>
                                    <? endwhile; ?>
                                </div>
                                <div class="col">
                                    <div class="b_titl regal">Телефон</div>
                                    <div style="margin-bottom: 5px">
                                        <?  while ( have_rows('phone', 32) ) : the_row(); ?>
                                            <a href="tel:<?= preg_replace('~[^0-9]+~','',get_sub_field('phone_number'))?>" class="phone_link" style="text-align: left"><? echo get_sub_field('phone_number')?></a>
                                        <? endwhile; ?>
                                    </div>
                                    <div class="timework"><?= get_field('timework')?></div>
                                </div>
                                <div class="col">
                                    <div class="b_titl regal">Почта</div>
                                    <a href="mailto:<?= preg_replace('~[^0-9]+~','',get_field('E-mail'))?>" class="mail"><?= get_field('E-mail')?></a>
                                </div>
                            </div>
                            <div class="social clrfx">
                                <div class="b_titl regal">Подписывайтесь: </div>
                                <div class="soc_ins">
                                    <? if (get_field('link_fb')) {?><a href="<?= get_field('link_fb')?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-facebook" aria-hidden="true"></i></a><?}?>
                                    <? if (get_field('link_vk')) {?><a href="<?= get_field('link_vk')?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-vk" aria-hidden="true"></i></a><?}?>
                                    <? if (get_field('link_inst')) {?><a href="<?= get_field('link_inst')?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-instagram" aria-hidden="true"></i></a><?}?>
                                    <? if (get_field('youtube')) {?><a href="<?= get_field('youtube')?>" target="_blank" rel="nofollow" class="link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><?}?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block_map">
    <div class="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3f0cd41dc50291797496f33047bd7a82dcfdbfb70d555b8d4eaa490efbe069cc&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</div>

<?php get_footer(); ?>
