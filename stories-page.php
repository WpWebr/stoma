<?php
/**
* Template Name: История
* Template Post Type: stories
*/
get_header(); ?>
<?php $url_tem = esc_url( get_template_directory_uri() ); ?>

<div class="bot_start_bg">
    <!-- Крошки -->
  <div class="breadcrumbs">
    <div class="wrap">
      <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item">
          <a href="/" class="breadcrumbs__link">Главная</a>
        </li>
        <li class="breadcrumbs__item">
          История <?php if( get_field( 'name' ) ): 
            the_field( 'name' ); endif; ?> <?php if( get_field( 'patronymic' ) ): 
            the_field( 'patronymic' ); endif; ?>
        </li>
      </ul>
    </div>
  </div>
  <!-- История -->
  <div class="gistori">
    <div class="wrap">
      <!-- История -->
      <div class="gistori__div">
        <div class="gistori__left">
          <h1 class="gistori__title" >История <?php if( get_field( 'name' ) ): 
            the_field( 'name' ); endif; ?> <?php if( get_field( 'patronymic' ) ): 
            the_field( 'patronymic' ); endif; ?></h1>
          <div class="gistori__dat">
            <div class="gistori__dat-div">
              <p class="gistori__dat-titl">Стоимость:</p>
              <ul class="gistori__dat-pr">
                <?php
                $summ = get_field( 'price' );
                if( $summ ): 
                  $summ_n = round($summ/18) - 1; 
                endif;
                for ($i=0; $i < 5; $i++): 
                  if ($i > $summ_n && $i > 0): $opacity = 'style="opacity: 0.2;"'; else: '$opacity = "";'; endif; ?>
                  <li>
                    <img class="gistori_icon" <?php echo $opacity; ?> src=" <?php echo $url_tem; ?>/assets/img/cost.svg" alt="icon" >
                  </li>                
                <?php endfor; ?>
              </ul>
              <p class="gistori__dat-ed"><? echo $summ; ?>.000 руб.</p>
            </div>
            <div class="gistori__dat-div">
              <p class="gistori__dat-titl">Сроки:</p>
              <ul class="gistori__dat-pr">
              <?php
                $timess = get_field( 'timing' );
                if( $timess ): 
                  $timess_n = round($timess/10) - 1; 
                endif;  
                for ($i=0; $i < 5; $i++): 
                  if ($i > $timess_n && $i > 0): $opacity_2 = 'style="opacity: 0.2;"'; else: '$opacity = "";'; endif; ?>
                  <li><img class="gistori_icon" <?php echo $opacity_2; ?> src=" <?php echo $url_tem; ?>/assets/img/time.svg" alt="icon"></li>
                <?php endfor; ?>
              </ul>
              <p class="gistori__dat-ed"><? echo $timess; ?></p>
            </div>
            <div class="gistori__dat-div">
              <p class="gistori__dat-titl">Сложность:</p>
              <ul class="gistori__dat-pr">
              <?php
                $tr = get_field( 'сomplexity' );
                for ($i=0; $i < 5; $i++): 
                  if ($i > $tr - 1 && $i > 0): $opacity_3 = 'style="opacity: 0.2;"'; else: '$opacity = "";'; endif; ?>
                    <li><img class="gistori_icon" <?php echo $opacity_3; ?> src=" <?php echo $url_tem; ?>/assets/img/complexity.svg" alt="icon"></li>
                <?php endfor; ?>
              </ul>
              <p class="gistori__dat-ed"><? echo $tr; ?>/5</p>
            </div>      
          </div>
          <a data-fancybox="" data-src="#form_zvon" href="javascript:;" class="gistori__button link_ns">
              <div class="ico"></div>
              <span>Записаться на приём</span>
          </a>
        </div>
        <div class="gistori__right">
          <?php the_field('video'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Как было и как стало ? -->
  <div class="compare">
    <div class="wrap">
      <div class="compare__div">
        <div class="compare__left">
          <div class="sl-container sl1">
              <div class="view view-after vi1">
                  <?php 
                  $image_1 = get_field('old');
                  if( !empty( $image_1 ) ): ?>
                    <img class="before-after__item twentytwenty-before" src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>"  width="575" height="460"> 
                <?php endif; ?>     
              </div>
              <div class="view view-before">
                  <?php 
                  $image_2 = get_field('new');
                  if( !empty( $image_2 ) ): ?>
                    <img class="before-after__item twentytwenty-after" src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>"  width="575" height="460"> 
                <?php endif; ?>
              </div>
              <div class="dragme dr1">
                <div class="dr-circle">
                  <div class="dr-circle__r"></div>
                </div>
              </div>
          </div>
        </div>
        <div class="compare__right">
          <h2 class="compare__title">Как было и как стало ?</h2>
          <div class="compare__akkord">
            <div class="acor-container">
              <input type="radio" name="acor" id="acor1" checked="checked" />
              <label for="acor1">Жалобы</label>
              <div class="acor-body">
                <ul class="acord__list">
                  <li>Неровный зубной ряд.</li>
                  <li>Не устраивает форма зубов.</li>
                  <li>Общие жалобы на эстетику.</li>
                </ul>
              </div>
              <div class="acord__line"></div>
              <input type="radio" name="acor" id="acor2" />            
              <label for="acor2">Имплантация без разрезов</label>
              <div class="acor-body">
                <ul class="acord__list">
                  <li>Неровный зубной ряд.</li>
                  <li>Не устраивает форма зубов.</li>
                  <li>Общие жалобы на эстетику.</li>
                </ul>
              </div>
              <div class="acord__line"></div>
              <input type="radio" name="acor" id="acor3" />            
              <label for="acor3">Не нужна костная пластика</label>
              <div class="acor-body">
                <ul class="acord__list">
                  <li>Неровный зубной ряд.</li>
                  <li>Не устраивает форма зубов.</li>
                  <li>Общие жалобы на эстетику.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <!-- Отзыв -->
  <div class="my-review">
    <div class="wrap">
      <div class="my-review__div">
        <div class="my-review__left">
          <h2 class="my-review__title">Отзыв <?php if( get_field( 'name' ) ): 
          the_field( 'name' ); endif; ?> <?php if( get_field( 'patronymic' ) ): 
            the_field( 'patronymic' ); endif; ?></h2>
          <p class="my-review__text">
          <?php if( get_field( 'otzyv' ) ): the_field( 'otzyv' ); endif; ?>
          </p>
        </div>
        <div class="my-review__right">
          <?php 
            $image = get_field('foto');
            if( !empty( $image ) ): ?>
              <img class="my-review__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  width="260" height="260"> 
          <?php endif; ?>
        </div>      
      </div>
    </div>
  </div>
  <!-- Врачи -->
  <div class="doctors">
    <div class="wrap">
      <div class="comand-lib comand-lib_m">
        <h2 class="titles">Врачи проводившие<br>лечение</h2>
        <div class="comand-lib_slid">
          <?php 
            $lekars = get_field('vrachi');
            if ($lekars) {
              get_template_part( 'inc/comand_lib', null, $lekars );
            }
          ?>  
        </div>
      </div>
    </div>
  </div>
  <!-- Галерея фото и видео -->
  <div class="media">
    <div class="wrap">
      <div class="media__div">
        <div class="media__div-title">
          <h2 class="titles media__title">Галерея фото и видео</h2>
          <a class="media__button link_ns" data-fancybox="" data-src="#form_zvon" href="javascript:;">
            <div class="ico"></div>
            <span>Записаться на приём</span>
          </a>        
        </div>

        <div class="media__slider">

          <?php
            $gallery = get_field('gallery');
            if( $gallery ): 
              $videos = $gallery['videos'];
              if( $videos ):
                foreach( $videos as $vid ){
                  echo '<div class="slider__item media-item">
                          <div class="media-video">';                
                            echo $vid['vid'];
                    echo '</div>
                        </div>';
                }
              endif;

              $photos = $gallery['photos'];

              if( $photos ):
                foreach( $photos as $phot ): 
                  $image = $phot['phot']; ?>
                  <div class="slider__item media-item">
                    <div class="media__img">
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />                    
                    </div>

                  </div>
                  <?php 
                endforeach;
              endif;
            endif;
          ?>

        </div>




              
      </div>
    </div>
  </div>
  <!-- Записаться на прием -->
  <div class="enroll">
    <div class="wrap">
      <div class="enroll__div">
        <h2 class="titles enroll__title">Записаться на прием</h2>
        <form class="sender sender_sk enroll__form">
          <div class="f_sl clrfx">
            <input type="text" class="name" name="name" placeholder="Имя" >
            <input type="text" class="phone" name="phone" placeholder="Телефон">
            <button type="submit" class="link_ns big"><span>Записаться на прием</span></button>
          </div>
          <div class="desc enroll__desc">Нажимая на кнопку, я соглашаюсь с условиями <a href="<?php echo $url_tem; ?>/privacy-policy/">политики конфиденциальности</a></div>        
        </form>
      </div>
    </div>
  </div>

</div>
<?php get_footer();