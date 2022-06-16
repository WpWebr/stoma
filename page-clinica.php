<?php
/*
Template name: О клинике
*/
get_header(); ?>

<div class="page_in bg_licens">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
            <?php while ( have_posts() ) :
                the_post();
            endwhile; ?>
            <div class="desc"><?=the_content()?></div>
        </div>

        <div class="list_sertificate">
            <div class="b_ttl regal">Лицензии и сертификаты</div>
            <div class="list_ines smk clrfx">
                <?  while ( have_rows('sertificate') ) : the_row(); ?>
                    <a href="<?= get_sub_field('img');?>" data-fancybox="images" class="item">
                        <div class="block_bot_line">
                            <div class="bot_line"></div>
                            <div class="ins_bot_line">
                                <div class="inner" style="background-image: url(<?= get_sub_field('img');?>);"></div>
                            </div>
                        </div>
                    </a>
                <? endwhile; ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
