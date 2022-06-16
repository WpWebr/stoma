<?php if (! defined('ABSPATH') ) { exit; } ?>

<?php 
$lekars = $args; 
?>

<div class="list_all_vr smk clrfx slider_vr">
  <?

  function  days($day)
  {
    $a = substr($day, strlen($day) - 1, 1);
    if ($a == 1) $str = "отзыв";
    if ($a == 2 || $a == 3 || $a == 4) $str = "отзыва";
    if ($a == 5 || $a == 6 || $a == 7 || $a == 8 || $a == 9 || $a == 0) $str = "отзывов";
    return $str;
  }

  $stati_children = new WP_Query(
    array(
      'post_type' => 'page',
      'post_parent' => 34
    )
  );


  if ($stati_children->have_posts()) : ?>
  <? while ($stati_children->have_posts()) : $stati_children->the_post();

      $start_opinion = 0;
      $sr = 0;
      while (have_rows('opinion')) : the_row();
        $sr = $sr + get_sub_field('opinion_count_star');
        $start_opinion++;        
      endwhile; ?>
      

          <?php

            $name = get_the_title();

            foreach ($lekars as $lekar):

              if($lekar['vrach'] == $name):
              
                
                ?>
                <div class="item" >
                  <div class="block_bot_line">
                    <div class="bot_line">
                      <a href="<?= get_the_permalink() ?>" class="link">Подробнее о враче</a>
                    </div>
                    <div class="ins_bot_line">
                      <div class="inner">
                        <div class="top clrfx">
                          <div class="top_stag regal clrfx">
                            <div class="circl"><?= get_field('stag_work') ?></div>
                            <div class="text">Стаж более</div>
                          </div>
                          <a href="<?= get_the_permalink() ?>" class="photo">
                            <div class="back_skl">
                              <div class="top_skl" style="background-image: url(<?= get_field('photo') ?>)"></div>
                            </div>
                          </a>
                          <a href="<?= get_the_permalink() ?>" class="name regal"><?= get_the_title() ?></a>
                          <div class="dolg"><?= get_field('speczialnost_out') ?></div>
                        </div>
                        <div class="bot clrfx">
                          <div class="count_opinion clrfx">
                            <div class="count_star count<?= round($sr / $start_opinion) ?> clrfx">
                              <div class="star"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                            </div>
                            <a href="<?= get_the_permalink() ?>"
                              class="link"><?= $start_opinion . ' ' . days($start_opinion) ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <?php
              endif;

            endforeach;
          ?>

  <? endwhile; ?>

  <? endif;
  wp_reset_query();
  ?>
</div>