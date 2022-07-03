<?php
/*
Template name: Отзывы
*/
get_header(); ?>

<div class="page_in bg_price">
  <div class="wrap">
    <div class="breadcrumb"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></div>
  </div>
  <!-- Отзывы о клинике -->
  <?php
    $otzyvy = get_field('opinion');
    if($otzyvy): ?>
      <div class="recall opinions">
        <div class="wrap">
          <div class="opinions__div">
            <h2 class="titles recall__title">Отзывы о&nbsp;клинике</h2>
            <div class="recall__slider">
              <?php
                foreach ($otzyvy as $otz):
                  $otzyv = $otz['text'];
                  $image = $otz['img'];
                  $otvet = $otz['otvet'];
                  ?>
                  <div class="slider__item opinions__item recall__item">

                    <div class="opinions__left">
                      <?php if( $image ): ?>
                        <a href="<?= $image;?>" data-fancybox="images" class="opinions__img" style="background-image: url(<?= $image;?>)"><img class="opinions__img-pllup" src="/wp-content/themes/twentyseventeen/assets/img/pllup.svg"></a>                             
                      <?php endif; ?>
                      <p class="opinions__text"><?php echo $otzyv; ?></p>
                    </div>

                    <?php if($otvet): ?>
                      <div class="opinions__right">
                        <p class="opinions__text opinions__text_otvet"><?php echo $otvet; ?></p>
                        <img class="opinions__img-logo" src="/wp-content/themes/twentyseventeen/assets/img/logo.png">                      
                      </div>
                    <?php endif; ?>
                    
                  </div>
                  <?php 
                endforeach;
              ?>

            </div>            
          </div>
        </div>
      </div>
    <?php endif;
  ?>
    
</div>

<?php get_footer(); ?>
