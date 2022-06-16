<?php
/*
Template name: Блог
*/
get_header();


?>
<div class="page_in bg_licens">
    <div class="wrap">
        <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="page_desc">
            <h1><?=get_the_title()?></h1>
        </div>

        <div class="filtr">
            <form class="filtr_in clrfx">
                <div class="sl">Выбрать год:</div>
                <label class="radio">
                    <input type="radio" checked  name="year" value="Все"/>
                    <div class="radio__text">Все</div>
                </label>

                <label class="radio">
                    <input type="radio"  name="year" value="2019"/>
                    <div class="radio__text">2019</div>
                </label>

                <label class="radio">
                    <input type="radio"  name="year" value="2018"/>
                    <div class="radio__text">2018</div>
                </label>

            </form>
        </div>
        <?

        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $stati_children = new WP_Query(array(
                'posts_per_page' => 8,
                'post_type' => 'page',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post_parent' => get_the_ID(),
                'paged'          => $paged
            )
        );?>
        <div class="list_blog_all smk clrfx">
            <? if($stati_children->have_posts()) :
                while($stati_children->have_posts()): $stati_children->the_post();
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full_thumbnail-size', false);
                    ?>
                    <div class="item">
                        <div class="block_bot_line">
                            <div class="bot_line">
                                <a href="<?=get_the_permalink()?>" class="link" >Читать дальше</a>
                            </div>
                            <div class="ins_bot_line">
                                <div class="inner">
                                    <a href="<?=get_the_permalink()?>" class="top" style="background-image: url(<?=$thumb_url[0]?>)"></a>
                                    <div class="bot">
                                        <a href="<?=get_the_permalink()?>" class="name"><?=get_the_title()?></a>
                                        <div class="mini_desc"><?= the_truncated_post( 200 );?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endwhile;
            endif;
            wp_reset_query();
            ?>

        </div>

        <?php kama_pagenavi($before = '', $after = '', $echo = true, $args = array(), $wp_query = $stati_children);  ?>
    </div>
</div>
<?php get_footer(); ?>
