<?php
/*
Template name: Блог - внутренняя страница
*/
get_header();


while ( have_posts() ) :
    the_post();
endwhile; ?>

<div class="page_in bg_licens">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="page_desc blog">
            <h1><?=get_the_title()?></h1>
        </div>


        <div class="blog_inner">
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
                            <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
       <script src="https://yastatic.net/share2/share.js"c></script>
       <div class="">
            <div class="ya-share2" data-curtain data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter"></div>
       </div>
  
   
    </div>
</div>
<?php get_footer(); ?>
