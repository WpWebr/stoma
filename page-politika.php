<?php
/*
Template name: Политика
*/
get_header();


while ( have_posts() ) :
    the_post();
endwhile;
?>

<div class="page_in bg_price">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
        </div>

        <div class="blog_inner clrfx">
            <?=the_content()?>
        </div>

    </div>
</div>


<?php get_footer(); ?>
