<?php
/*
Template name: Отзывы
*/
get_header(); ?>

<div class="page_in bg_price">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>

        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
        </div>

        <div class="list_akcii smk clrfx">
            <?
            $start= 0;
            while ( have_rows('akcii') ) : the_row(); ?>
                <a data-fancybox data-src="#form_vsl_<?=$start?>" href="javascript:;" class="ins">
                    <div class="block_bot_line">
                        <div class="ins_bot_line">
                            <div class="inner">
                                <div class="ls">
                                    <div class="ch">
                                        <div class="ttl regal"><?= get_sub_field('name');?></div>
                                        <div class="price regal"><?= get_sub_field('price');?></div>
                                    </div>
                                </div>
                                <div class="rs" style="background-image: url(<?= get_sub_field('img');?>)"></div>
                            </div>
                        </div>
                    </div>
                </a>
            <?
                $start++;
            endwhile; ?>
        </div>
    </div>
</div>

<?
$start= 0;
while ( have_rows('akcii') ) : the_row(); ?>
    <div style="display: none;" id="form_vsl_<?=$start?>">
        <div class="vspl_form akcii smk wid1">
            <div class="block_bot_line">
                <div class="close_form">
                    <a href="" class="link_close_form"></a>
                </div>
                <div class="bot_line"></div>
                <div class="ins_bot_line">
                    <div class="inner">
                        <div class="top_akc clrfx">
                            <div class="info">
                                <div class="ttl regal"><?= get_sub_field('name');?></div>
                                <div class="price regal"><?= get_sub_field('price');?></div>
                                <div class="desc"><?= get_sub_field('desc');?></div>
                            </div>
                        </div>
                        <form class="sender sender_sk">
                            <div class="f_sl clrfx">
                                <input type="text" class="name" name="name" placeholder="Имя">
                                <input type="text" class="phone" name="phone" placeholder="Телефон">
                                <button type="submit" class="link_ns big"><span>Записаться</span></button>
                            </div>
                            <input type="hidden" name="hid" value="Акция - <?= get_sub_field('name');?>">
                            <div class="desc">Нажимая кнопку «Записаться» вы соглашаетесь с <a href="https://whiteimplant.ru/privacy-policy/">условиями передачи данных</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?
    $start++;
endwhile; ?>

<?php get_footer(); ?>
