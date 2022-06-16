<?php
/*
Template name: Цены
*/
get_header(); ?>

<div class="page_in bg_price">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>

        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
        </div>

        <div class="list_price smk">
            <?  while ( have_rows('price') ) : the_row(); ?>
                <div class="ins">
                    <div class="ttl"><?= get_sub_field('price_ins');?></div>
                    <div class="block_bot_line">
                        <div class="bot_line"></div>
                        <div class="ins_bot_line">
                            <div class="inner">
                                <div class="in_price_list">
                                    <?  while ( have_rows('list_price') ) : the_row(); ?>
                                        <div class="item clrfx">
                                            <div class="left"><?= get_sub_field('price_usl');?></div>
                                            <div class="right"><?= get_sub_field('price_ls');?></div>
                                        </div>
                                    <? endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
