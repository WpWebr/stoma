<?php

/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="section_start">
  <div class="wrap clrfx">
    <div class="left">
      <div class="ts">
        <div class="ch">
          <h1 class="regal">Стоматология <span>“White”</span></h1>
          <div class="desc">Территория комфорта, гарантия качества. </div>
          <a data-fancybox data-src="#form_zvon" href="javascript:;" class="link_ns liner big">Оставить заявку</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Акции -->
<div class="akciis wrap">
  <h2 class="titles akciis__titles">Акции</h2>
  <div class="akciis__flex">
    <?php
    $start = 0;
    while (have_rows('akcii', 16) && $start < 3) : the_row(); ?>
    <div class="akciis__item">
      <div class="akciis__inner">
        <div class="akciis__content">
          <div class="akciis__label">Акция</div>
          <div class="akciis__img">
            <img src="<?= get_sub_field('img'); ?>" alt="share" width="auto" height="160">
          </div>
          <div class="akciis__name"><?= get_sub_field('name'); ?></div>
        </div>
        <div class="akciis__footer">
          <div class="akciis__price"><?= get_sub_field('price'); ?></div>
          <a class="akciis__link link_ns" data-fancybox data-src="#form_vsl_<?= $start ?>" href="javascript:;">
            <div class="ico"></div>
            <span>Записаться</span>
          </a>
        </div>
      </div>
    </div>
    <?
      $start++;
    endwhile; ?>
  </div>
</div>

<div class="bot_start_bg">
  <div class="list_plitka">
    <div class="wrap">
      <div class="list1"></div>
      <div class="pc_view_str">
        <div class="top clrfx">
          <div class="left">
            <div class="item s1 h1 cls1">
              <div class="ins">
                <a href="<?= get_the_permalink(149) ?>" class="title regal">Хирургия</a>
                <div class="list_link">
                  <ul>
                    <? $array = '';
                    while (have_rows('link1')) : the_row();
                      $array = get_sub_field_object('ssylka');
                      $link_id = $array['value']->ID;
                      $link_name = $array['value']->post_title;

                      if (isset($link_id)) { ?>
                    <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                    <? }
                    endwhile; ?>
                  </ul>
                </div>
                <img class="bg img1" src="<? echo get_field('title_ofs_img', 149) ?>">
              </div>
            </div>
            <div class="item s2 h1 end cls2">
              <div class="ins">
                <a href="<?= get_the_permalink(152) ?>" class="title regal">Протезирование</a>
                <div class="list_link">
                  <ul>
                    <? $array = '';
                    while (have_rows('link2')) : the_row();
                      $array = get_sub_field_object('ssylka');
                      $link_id = $array['value']->ID;
                      $link_name = $array['value']->post_title;

                      if (isset($link_id)) { ?>
                    <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                    <? }
                    endwhile; ?>
                  </ul>
                </div>
                <img class="bg img2" src="<? echo get_field('title_ofs_img', 152) ?>">
              </div>
            </div>
            <div class="item s2 h1 bot_ns cls3">
              <div class="ins">
                <a href="<?= get_the_permalink(155) ?>" class="title regal">Анестезиология</a>
                <div class="list_link">
                  <ul>
                    <? $array = '';
                    while (have_rows('link3')) : the_row();
                      $array = get_sub_field_object('ssylka');
                      $link_id = $array['value']->ID;
                      $link_name = $array['value']->post_title;

                      if (isset($link_id)) { ?>
                    <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                    <? }
                    endwhile; ?>
                  </ul>
                </div>
                <img class="bg img3" src="<? echo get_field('title_ofs_img', 155) ?>">
              </div>
            </div>
            <div class="item s1 h1 bot_ns end cls4">
              <div class="ins">
                <a href="<?= get_the_permalink(151) ?>" class="title regal">Ортодонтия</a>
                <div class="list_link">
                  <ul>
                    <? $array = '';
                    while (have_rows('link4')) : the_row();
                      $array = get_sub_field_object('ssylka');
                      $link_id = $array['value']->ID;
                      $link_name = $array['value']->post_title;

                      if (isset($link_id)) { ?>
                    <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                    <? }
                    endwhile; ?>
                  </ul>
                </div>
                <img class="bg img4" src="<? echo get_field('title_ofs_img', 151) ?>">
              </div>
            </div>
          </div>
          <div class="right">
            <div class="item h2 bot_ns cls5">
              <div class="ins">
                <a href="<?= get_the_permalink(150) ?>" class="title regal">Имплантация</a>
                <div class="list_link">
                  <ul>
                    <? $array = '';
                    while (have_rows('link5')) : the_row();
                      $array = get_sub_field_object('ssylka');
                      $link_id = $array['value']->ID;
                      $link_name = $array['value']->post_title;

                      if (isset($link_id)) { ?>
                    <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                    <? }
                    endwhile; ?>
                  </ul>
                </div>
                <img class="bg img5" src="<? echo get_field('title_ofs_img', 150) ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="bot clrfx">
          <div class="item s3 h1 bot_ns cls6">
            <div class="ins">
              <a href="<?= get_the_permalink(154) ?>" class="title regal">Детская стоматология</a>
              <div class="list_link">
                <ul>
                  <? $array = '';
                  while (have_rows('link6')) : the_row();
                    $array = get_sub_field_object('ssylka');
                    $link_id = $array['value']->ID;
                    $link_name = $array['value']->post_title;

                    if (isset($link_id)) { ?>
                  <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                  <? }
                  endwhile; ?>
                </ul>
              </div>
              <img class="bg img6" src="<? echo get_field('title_ofs_img', 154) ?>">
            </div>
          </div>
          <div class="item s3 h1 bot_ns end cls7">
            <div class="ins">
              <a href="<?= get_the_permalink(153) ?>" class="title regal">Терапия</a>
              <div class="list_link">
                <ul>
                  <? $array = '';
                  while (have_rows('link7')) : the_row();
                    $array = get_sub_field_object('ssylka');
                    $link_id = $array['value']->ID;
                    $link_name = $array['value']->post_title;

                    if (isset($link_id)) { ?>
                  <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                  <? }
                  endwhile; ?>
                </ul>
              </div>
              <img class="bg img7" src="<? echo get_field('title_ofs_img', 153) ?>">
            </div>
          </div>
        </div>
      </div>

      <div class="mobile_view_str clrfx">

        <div class="item bot_ns cls5">
          <div class="ins">
            <a href="<?= get_the_permalink(150) ?>" class="title regal">Имплантация</a>
            <div class="list_link">
              <ul>
                <? $array = '';
                while (have_rows('link5')) : the_row();
                  $array = get_sub_field_object('ssylka');
                  $link_id = $array['value']->ID;
                  $link_name = $array['value']->post_title;

                  if (isset($link_id)) { ?>
                <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                <? }
                endwhile; ?>
              </ul>
            </div>
            <div class="bg img5"></div>
          </div>
        </div>
        <div class="item s2 h1 end cls2">
          <div class="ins">
            <a href="<?= get_the_permalink(152) ?>" class="title regal">Протезирование</a>
            <div class="list_link">
              <ul>
                <? $array = '';
                while (have_rows('link2')) : the_row();
                  $array = get_sub_field_object('ssylka');
                  $link_id = $array['value']->ID;
                  $link_name = $array['value']->post_title;

                  if (isset($link_id)) { ?>
                <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                <? }
                endwhile; ?>
              </ul>
            </div>
            <div class="bg img2"></div>
          </div>
        </div>
        <div class="item s2 h1 bot_ns cls3">
          <div class="ins">
            <a href="<?= get_the_permalink(155) ?>" class="title regal">Анестезиология</a>
            <div class="list_link">
              <ul>
                <? $array = '';
                while (have_rows('link3')) : the_row();
                  $array = get_sub_field_object('ssylka');
                  $link_id = $array['value']->ID;
                  $link_name = $array['value']->post_title;
                  if (isset($link_id)) { ?>
                <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                <? }
                endwhile; ?>
              </ul>
            </div>
            <div class="bg img3"></div>
          </div>
        </div>

        <div class="item s1 h1 bot_ns end cls4">
          <div class="ins">
            <a href="<?= get_the_permalink(151) ?>" class="title regal">Ортодонтия</a>
            <div class="list_link">
              <ul>
                <? $array = '';
                while (have_rows('link4')) : the_row();
                  $array = get_sub_field_object('ssylka');
                  $link_id = $array['value']->ID;
                  $link_name = $array['value']->post_title;

                  if (isset($link_id)) { ?>
                <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                <? }
                endwhile; ?>
              </ul>
            </div>
            <div class="bg img4"></div>
          </div>
        </div>
        <div class="item s3 h1 bot_ns end cls7">
          <div class="ins">
            <a href="<?= get_the_permalink(153) ?>" class="title regal">Терапия</a>
            <div class="list_link">
              <ul>
                <? $array = '';
                while (have_rows('link7')) : the_row();
                  $array = get_sub_field_object('ssylka');
                  $link_id = $array['value']->ID;
                  $link_name = $array['value']->post_title;

                  if (isset($link_id)) { ?>
                <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                <? }
                endwhile; ?>
              </ul>
            </div>
            <div class="bg img7"></div>
          </div>
        </div>
        <div class="item s3 h1 bot_ns cls6">
          <div class="ins">
            <a href="<?= get_the_permalink(154) ?>" class="title regal">Детская стоматология</a>
            <div class="list_link">
              <ul>
                <? $array = '';
                while (have_rows('link6')) : the_row();
                  $array = get_sub_field_object('ssylka');
                  $link_id = $array['value']->ID;
                  $link_name = $array['value']->post_title;

                  if (isset($link_id)) { ?>
                <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                <? }
                endwhile; ?>
              </ul>
            </div>
            <div class="bg img6"></div>
          </div>
        </div>
        <div class="item s1 h1 cls1">
          <div class="ins">
            <a href="<?= get_the_permalink(149) ?>" class="title regal">Хирургия</a>
            <div class="list_link">
              <ul>
                <? $array = '';
                while (have_rows('link1')) : the_row();
                  $array = get_sub_field_object('ssylka');
                  $link_id = $array['value']->ID;
                  $link_name = $array['value']->post_title;

                  if (isset($link_id)) { ?>
                <li><a href="<?= get_the_permalink($link_id) ?>"><?= $link_name ?></a></li>
                <? }
                endwhile; ?>
              </ul>
            </div>
            <div class="bg img1"></div>
          </div>
        </div>
      </div>
      <div class="list2"></div>
    </div>
  </div>

  <div class="list_opinion">
    <div class="wrap clrfx">
      <? while (have_rows('start_preim')) : the_row(); ?>
      <div class="item">
        <div class="img" style="background-image: url(<?= get_sub_field('start_preim_img'); ?>)"></div>
        <div class="desc"><?= get_sub_field('start_preim_text'); ?></div>
      </div>
      <? endwhile; ?>
    </div>
  </div>



  <div class="team_spec">
    <div class="wrap">

      <!-- Истории -->
      <?php get_template_part( 'inc/stories_all'); ?>



      <!-- Наша команда -->
      <div class="comand">

        <div class="title regal">Наша команда <span>специалистов</span></div>

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
              endwhile;
            ?>
          <div class="item">
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
          <? endwhile; ?>

          <? endif;
          wp_reset_query();
          ?>
        </div>

      </div>

      <!-- О нас пишут -->
      <div class="press">

        <h2 class="titles titles__press">О нас пишут:</h2>

        <div class="press__comp">

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/otzovik.png" alt="">
          </div>

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/prodoctorov.png" alt="">
          </div>

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/firmika.png" alt="">
          </div>

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/na_popravku.png" alt="">
          </div>

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/y_map.png" alt="">
          </div>

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/sber_zdorov.png" alt="">
          </div>

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/meds.png" alt="">
          </div>

          <div class="press__comp_item">
            <img src="/wp-content/uploads/2022/05/zoon.png" alt="">
          </div>

        </div>

      </div>

      <!-- Нам доверяют -->
      <div class="mapss">
        <h2 class="titles titles__map">Нам доверяют пациенты <br>более чем из 20 стран</h2>
        <img class="mapss__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/map.png" alt="map">
      </div>

      <div style="margin: 40px auto 20px; max-width: 700px" id="form_zvon2">
        <div class="vspl_form smk wid1">
          <div class="block_bot_line">
            <div class="close_form">
              <a href="" class="link_close_form" style="background: none"></a>
            </div>
            <div class="bot_line"></div>
            <div class="ins_bot_line">
              <div class="inner">
                <div class="top clrfx">
                  <div class="ico">
                    <div class="back_skl">
                      <div class="top_skl"></div>
                    </div>
                  </div>
                  <div class="info">
                    <div class="ttl regal"><?= get_field('form_title', get_the_ID()) ?></div>
                    <div class="m_desc"><?= get_field('form_desc', get_the_ID()) ?></div>
                  </div>
                </div>
                <form class="sender sender_sk">
                  <div class="f_sl clrfx">
                    <input type="text" class="name" name="name" placeholder="Имя">
                    <input type="text" class="phone" name="phone" placeholder="Телефон">
                    <button type="submit" class="link_ns big"><span>Записаться</span></button>
                  </div>
                  <input type="hidden" name="hid" value="Всплывающая форма - Записаться на прием к врачу">
                  <div class="desc">Нажимая кнопку «Записаться» вы соглашаетесь с <a
                      href="https://whiteimplant.ru/privacy-policy/">условиями передачи данных</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<div class="block_map start_pa_map">
  <div class="map">
    <script type="text/javascript" charset="utf-8" async
      src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3f0cd41dc50291797496f33047bd7a82dcfdbfb70d555b8d4eaa490efbe069cc&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true">
    </script>
  </div>
  <div class="top_make">
    <div class="wrap smk">
      <div class="block_bot_line">
        <div class="bot_line"></div>
        <div class="ins_bot_line">
          <div class="inner">
            <div class="cent_txt regal">Ждем вас <span>в нашей клинике</span></div>
            <a href="https://yandex.ru/maps/2/saint-petersburg/?ll=30.306705%2C59.954191&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D30.306713%252C59.954193%26spn%3D0.001000%252C0.001000%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%25A1%25D0%25B0%25D0%25BD%25D0%25BA%25D1%2582-%25D0%259F%25D0%25B5%25D1%2582%25D0%25B5%25D1%2580%25D0%25B1%25D1%2583%25D1%2580%25D0%25B3%252C%2520%25D0%259A%25D1%2580%25D0%25BE%25D0%25BD%25D0%25B2%25D0%25B5%25D1%2580%25D0%25BA%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25BF%25D1%2580%25D0%25BE%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BA%25D1%2582%252C%252063%252F31%2520&z=17"
              target="_blank" rel="nofollow" class="place its">
              <div class="big"><?= get_field('adres', 32) ?></div>
              <? while (have_rows('metro', 32)) : the_row(); ?>
              <div class="sm"><?= get_sub_field('in_metro'); ?></div>
              <? endwhile; ?>
            </a>
            <div class="phone its">
              <? while (have_rows('phone', 32)) : the_row(); ?>
              <a href="tel:<?= preg_replace('~[^0-9]+~', '', get_sub_field('phone_number')) ?>" class="phone_link">
                <? echo get_sub_field('phone_number') ?>
              </a>
              <? endwhile; ?>
              <div class="timework"><?= get_field('timework', 32) ?></div>
            </div>
            <a data-fancybox data-src="#form_zvon" href="javascript:;" class="link_ns">
              <div class="ico"></div>
              <span>Записаться на приём</span>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
$start = 0;
while (have_rows('akcii', 16)) : the_row(); ?>
<div style="display: none;" id="form_vsl_<?= $start ?>">
  <div class="vspl_form akcii smk wid1">
    <div class="block_bot_line">
      <div class="close_form">
        <a href="" class="link_close_form"></a>
      </div>
      <div class="bot_line"></div>
      <div class="ins_bot_line">
        <div class="inner">
          <div class="top_akc clrfx">
            <div class="info">
              <div class="ttl regal"><?= get_sub_field('name'); ?></div>
              <div class="price regal"><?= get_sub_field('price'); ?></div>
              <div class="desc"><?= get_sub_field('desc'); ?></div>
            </div>
          </div>
          <form class="sender sender_sk">
            <div class="f_sl clrfx">
              <input type="text" class="name" name="name" placeholder="Имя">
              <input type="text" class="phone" name="phone" placeholder="Телефон">
              <button type="submit" class="link_ns big"><span>Записаться</span></button>
            </div>
            <input type="hidden" name="hid" value="Акция - <?= get_sub_field('name'); ?>">
            <div class="desc">Нажимая кнопку «Записаться» вы соглашаетесь с <a
                href="https://whiteimplant.ru/privacy-policy/">условиями передачи данных</a></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $start++;
endwhile;

get_footer();