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

        <div class="pc_view">
            <div class="list_opinion slider_opinion_in smk clrfx">

                <div class="line">
                    <?  while ( have_rows('opinion') ) : the_row(); ?>
                        <div class="ins">
                            <div class="ttl"><?= get_sub_field('price_ins');?></div>
                            <div class="block_bot_line">
                                <div class="ins_bot_line">
                                    <div class="inner">
                                        <div class="top_ls clrfx">
                                            <div class="left regal"><?= get_sub_field('fio');?></div>
                                            <div class="right"><?= get_sub_field('date');?></div>
                                        </div>
                                        <div class="bot_ls clrfx">
                                            <a href="<?= get_sub_field('img');?>" data-fancybox="images" class="left" style="background-image: url(<?= get_sub_field('img');?>)"></a>
                                            <div class="right"><?= get_sub_field('text');?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?
                        ++$count;
                        echo (($count % 2 == 0)? '</div> <div class="line">': '');

                    endwhile; ?>
                </div>
            </div>
        </div>
        <div class="mobile_view">
            <div class="list_opinion slider_opinion_in smk clrfx">
                <?  while ( have_rows('opinion') ) : the_row(); ?>
                    <div class="ins">
                        <div class="ttl"><?= get_sub_field('price_ins');?></div>
                        <div class="block_bot_line">
                            <div class="ins_bot_line">
                                <div class="inner">
                                    <div class="top_ls clrfx">
                                        <div class="left regal"><?= get_sub_field('fio');?></div>
                                        <div class="right"><?= get_sub_field('date');?></div>
                                    </div>
                                    <div class="bot_ls clrfx">
                                        <a href="<?= get_sub_field('img');?>" data-fancybox="images" class="left" style="background-image: url(<?= get_sub_field('img');?>)"></a>
                                        <div class="right"><?= get_sub_field('text');?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?
                    ++$count;
                endwhile; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
