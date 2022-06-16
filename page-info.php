<?php
/*
Template name: Общий шаблон страницы
*/
get_header();


while ( have_posts() ) :
    the_post();
endwhile;
?>

<div class="page_in bg_price">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?> </div>
        <div class="page_desc">
            <h1><?= get_field('h1')?></h1>
        </div>

        <?

        $stati_children = new WP_Query(array(
                'post_type' => 'page',
                'order'          => 'ASC',
                'post_parent' => get_the_ID()
            )
        );


        if($stati_children->have_posts()) :
            ?>

            <div class="list_inner_category smk">
                <div class="block_bot_line">
                    <div class="ins_bot_line">
                        <div class="inner">
                            <div class="list_ins_cat clrfx">
                                <? while($stati_children->have_posts()): $stati_children->the_post();?>
                                    <div class="its">
                                        <a href="<?=get_the_permalink()?>" class="link"><?=get_the_title()?></a>
                                    </div>
                                <?  endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <? endif; wp_reset_query(); ?>
        <div class="blog_inner clrfx">
            <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full_thumbnail-size', false);
            if ($thumb_url[0]) {?>
                <div class="prev smk">
                    <div class="block_bot_line">
                        <div class="bot_line"></div>
                        <div class="ins_bot_line">
                            <div class="inner" style="background-image: url(<?= $thumb_url[0];?>);"></div>
                        </div>
                    </div>
                </div>
            <?} ?>
            <?=the_content()?>
        </div>

        <? if (get_field('video_block_do_form')) {?>
            <div class="list_video">
                <? while (have_rows('video_block_do_form')) : the_row(); ?>
                    <div class="blog_inner clrfx ">
                        <div class="prev smk">
                            <div class="block_bot_line">
                                <div class="bot_line"></div>
                                <div class="ins_bot_line">
                                    <a data-fancybox href="https://www.youtube.com/watch?v=<?=get_sub_field('video');?>" class="inner" style="background-image: url(//img.youtube.com/vi/<?=get_sub_field('video');?>/hqdefault.jpg);">
                                        <div class="ico_play"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?= get_sub_field('text');?>
                    </div>
                <? endwhile;?>
            </div>
        <?}?>
		

        <? if (get_field('video_block_posle_form')) {?>
            <div class="list_video">
                <? while (have_rows('video_block_posle_form')) : the_row(); ?>
                    <div class="blog_inner clrfx ">
                        <div class="prev smk">
                            <div class="block_bot_line">
                                <div class="bot_line"></div>
                                <div class="ins_bot_line">
                                    <a data-fancybox href="https://www.youtube.com/watch?v=<?=get_sub_field('video');?>" class="inner" style="background-image: url(//img.youtube.com/vi/<?=get_sub_field('video');?>/hqdefault.jpg);">
                                        <div class="ico_play"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?= get_sub_field('text');?>
                    </div>
                <? endwhile;?>
            </div>
        <?}?>




        <? if (get_field('text_other_form')) {?>
            <div class="txt_other_form blog_inner">
                <?= get_field('text_other_form')?>
            </div>
        <?}?>


        <? if (get_field('title_preim')) {?>
            <div class="block_preim_ink">
                <div class="sm_ttl regal"><?= get_field('title_preim')?></div>
                <div class="blog_inner preim_list">
                    <ul class="non_dotted">
                        <? while ( have_rows('list_preim') ) : the_row(); ?>
                            <li><?= get_sub_field('item');?></li>
                        <? endwhile; ?>
                    </ul>
                </div>
            </div>
        <?}?>

        <div class="txt_dop_all_p block_preim_ink">
            <div class="sm_ttl regal"><?= get_field('title_ofs_preim')?></div>
            <div class="blog_inner clrfx">
                <?= get_field('title_ofs_text')?>
            </div>
        </div>


        <? if (have_rows('opinion') ) {?>
            <div class="list_opinion " id="list_opinion">
                <div class="b_ttl regal">Отзывы</div>
                <div class="list_opinion_in smk slider_list_opinion">
                    <?  while ( have_rows('opinion') ) : the_row(); ?>
                        <div class="item">
                            <div class="block_bot_line">
                                <div class="ins_bot_line">
                                    <div class="inner">
                                        <div class="name regal"><?= get_sub_field('name');?></div>
                                        <div class="count_star count<?= get_sub_field('stars');?> clrfx">
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="desc"><?= get_sub_field('text');?></div>
                                        <div class="date"><?= get_sub_field('date');?></div>
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
        
        <?
        if (get_the_ID() == 150) {
           $post = get_post(1475);
           echo $post->post_content;
        }
        ?>
        <div style="margin: 20px auto; max-width: 700px" id="form_zvon2">
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
    </div>
</div>


<?php get_footer(); ?>
