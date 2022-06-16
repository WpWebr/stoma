<?php
/*
Template name: Врач - внутренняя страница
*/
get_header();


function  days($day)
{
    $a=substr($day,strlen($day)-1,1);
    if($a==1) $str="отзыв";
    if($a==2 || $a==3 || $a==4) $str="отзыва";
    if($a==5 || $a==6 || $a==7 || $a==8 || $a==9 || $a==0) $str="отзывов";
    return $str;
}

$start_opinion = 0;
$sr = 0;
while ( have_rows('opinion') ) : the_row();
    $sr = $sr + get_sub_field('opinion_count_star');
    $start_opinion++;
endwhile;


?>

<div class="page_in bg_licens">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
            <div class="desc"><?=the_content()?></div>
        </div>

        <div class="info_doctor smk">
            <div class="block_bot_line">
                <div class="bot_line"></div>
                <div class="ins_bot_line">
                    <div class="inner">
                        <div class="top clrfx">
                            <div class="left col2">
                                <div class="top_stag regal clrfx">
                                    <div class="circl"><?= get_field('stag_work')?></div>
                                    <div class="text">Стаж более</div>
                                </div>

                                <div class="photo">
                                    <div class="back_skl">
                                        <div class="top_skl" style="background-image: url(<?= get_field('photo')?>)"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="left col1">
                                <div class="ts_title regal">Образование </div>
                                <div class="d_cont"><?= get_field('obraz')?></div>

                                <? if ($start_opinion) {?>
                                    <div class="count_opinion clrfx">
                                        <div class="count_star count<?= round($sr/$start_opinion)?> clrfx">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <a href="#list_opinion" class="link_scroll"><?=$start_opinion.' '.days($start_opinion)?></a>
                                    </div>
                                <?}?>
                            </div>
                            <div class="right">
                                <div class="ts_title regal">Специальность</div>
                                <div class="d_cont"><?= get_field('spec')?></div>
                            </div>
                        </div>
                        <div class="bot clrfx">
                            <div class="left">
                                <div class="b_ttl regal">Хотите записаться к врачу?</div>
                                <div class="m_ttl">Оставьте заявку и мы свяжемся с вами в течении 20 минут, что бы подробрать для вас удобное время посещения</div>
                            </div>
                            <div class="right">
                                <form class="sender sender_sk">
                                    <div class="form_top clrfx">
                                        <input type="text" name="phone" class="phone" placeholder="Телефон">
                                        <button type="submit" class="link_ns big" ><span>Записаться к врачу</span></button>
                                    </div>
                                    <input type="hidden" name="hid" value="Страница доктора - ><?=get_the_title()?> - Запись к врачу">
                                    <div class="desc">Нажимая кнопку «Записаться к врачу» вы соглашаетесь с <a href="<?php echo get_permalink(3); ?>">условиями передачи данных</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? if (have_rows('licenst') ) {?>
            <div class="list_sertificate">
                <div class="b_ttl regal">Лицензии и сертификаты доктора</div>
                <div class="list_ines smk clrfx">
                    <?  while ( have_rows('licenst') ) : the_row(); ?>
                        <a href="<?= get_sub_field('photo_lic');?>" data-fancybox="images" class="item">
                            <div class="block_bot_line">
                                <div class="bot_line"></div>
                                <div class="ins_bot_line">
                                    <div class="inner" style="background-image: url(<?= get_sub_field('photo_lic');?>);"></div>
                                </div>
                            </div>
                        </a>
                    <? endwhile; ?>
                </div>
            </div>
        <?}?>
        <? if (have_rows('opinion') ) {?>
            <div class="list_opinion" id="list_opinion">
                <div class="b_ttl regal">Отзывы</div>
                <div class="list_opinion_in smk">
                    <?  while ( have_rows('opinion') ) : the_row(); ?>
                        <div class="item">
                            <div class="block_bot_line">
                                <div class="ins_bot_line">
                                    <div class="inner">
                                        <div class="name regal"><?= get_sub_field('opinion_name');?></div>
                                        <div class="count_star count<?= get_sub_field('opinion_count_star');?> clrfx">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="desc"><?= get_sub_field('opinion_desc');?></div>
                                        <div class="date"><?= get_sub_field('opinion_date');?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endwhile; ?>
                </div>
            </div>
        <?}?>
        <div class="cent_but_opinion">
            <a data-fancybox data-src="#form_zvon_otz" href="javascript:;" class="link_ns big"><span>Оставить отзыв</span></a>
        </div>
    </div>
</div>
<? echo get_field('test_primer', get_the_ID()); ?>
<?php get_footer(); ?>
