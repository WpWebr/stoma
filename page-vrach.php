<?php
/*
Template name: Врачи
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


?>

<div class="page_in bg_licens doctor_bg">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
            <div class="desc"><?=the_content()?></div>
        </div>

        <?
        $stati_children = new WP_Query(array(
                'post_type' => 'page',
                'post_parent' => get_the_ID()
            )
        );?>
        <div class="list_all_vr smk clrfx">
            <? if($stati_children->have_posts()) :
                while($stati_children->have_posts()): $stati_children->the_post();

                    $start_opinion = 0;
                    $sr = 0;
                    while ( have_rows('opinion') ) : the_row();
                        $sr = $sr + get_sub_field('opinion_count_star');
                        $start_opinion++;
                    endwhile;
            ?>
                    <div class="item">
                        <div class="block_bot_line">
                            <div class="bot_line">
                                <a href="<?=get_the_permalink()?>" class="link">Подробнее о враче</a>
                            </div>
                            <div class="ins_bot_line">
                                <div class="inner">
                                    <div class="top clrfx">
                                        <div class="top_stag regal clrfx">
                                            <div class="circl"><?= get_field('stag_work')?></div>
                                            <div class="text">Стаж более</div>
                                        </div>
                                        <a href="<?=get_the_permalink()?>" class="photo">
                                            <div class="back_skl">
                                                <div class="top_skl" style="background-image: url(<?= get_field('photo')?>)"></div>
                                            </div>
                                        </a>
                                        <a href="<?=get_the_permalink()?>" class="name regal"><?=get_the_title()?></a>
                                        <div class="dolg"><?= get_field('speczialnost_out')?></div>
                                    </div>
                                    <div class="bot clrfx">
                                        <div class="count_opinion clrfx">
                                            <div class="count_star count<?= round($sr/$start_opinion)?> clrfx">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <a href="<?=get_the_permalink()?>" class="link"><?=$start_opinion.' '.days($start_opinion)?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?endwhile;
            endif;
            wp_reset_query();
            ?>

        </div>
        <div style="margin: 50px auto 0 auto; max-width: 700px" id="form_zvon2">
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
<div class="ttl regal"><?= get_field('form_title', get_the_ID())?></div>
<div class="m_desc"><?= get_field('form_desc', get_the_ID())?></div>
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
    </div>
</div>

<?php get_footer(); ?>
