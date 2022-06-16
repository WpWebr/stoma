<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<div class="page_error">
    <div class="wrap">
        <div class="breadcrumb" style="display:none"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
        <div class="cent">
            <div class="img"></div>
            <div class="desc regal">Такой страницы не существует</div>
            <div class="m_desc">Но вы можете найти то что искали на нашем сайте</div>
            <a href="/" class="link_ns">Перейти на главную</a>
            <div class="page_in" style="padding-bottom:0">
                <div class="page_desc" style="margin-top:50px"><h1>Полезные статьи</h1></div>
            
                <?
                $myarray = array(150, 222, 223, 253, 254, 257, 240, 239, 242, 237, 278, 151, 265, 269, 29, 16, 34, 30, 35, 797);
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $stati_children = new WP_Query(array(
                        'posts_per_page' => 4,
                        'post_type' => 'page',
                        'orderby'        => 'date',
                        'order'          => 'ASC',
                        'post__in'      => $myarray,
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
        
    </div>
</div>

<?php
get_footer();
