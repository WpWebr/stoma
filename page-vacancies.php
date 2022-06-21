<?php
/**
* Template Name: Вакансии
*/
get_header(); 
?>
<?php $url_tem = esc_url( get_template_directory_uri() ); ?>
<div id="cosmetologia" class="bot_start_bg">
  <!-- Крошки -->
  <div class="breadcrumbs">
    <div class="wrap">
      <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item">
          <a href="/" class="breadcrumbs__link">Главная</a>
        </li>
        <li class="breadcrumbs__item">
          Вакансии
        </li>
      </ul>
    </div>
  </div>
  <!-- Станьте частью команды ... -->
  <div class="plastic">
    <div class="wrap">
      <div class="plastic__div">
        <div class="plastic__left">
          <h1 class="titles plastic__title">Станьте частью команды&nbsp;<span class="akcent">White</span></h1>
          <p class="plastic__sub">Отправьте резюме и мы свяжемся с Вами для назначения собеседования</p>
          <a class="plastic__button link_ns" data-fancybox="" data-src="#form_zvon" href="javascript:;">
            <div class="ico"></div>
            <span>Отправить резюме</span>
          </a> 

        </div>
        <div class="plastic__right">
        <div class="plastic__img">        
          <?php get_template_part( 'inc/image', null, ['foto_1','',548,508] );?>       
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Быть в команде White - это -->
  <div class="prescription prescription_m">
    <div class="wrap">      
      <div class="prescription__div">
        <div class="prescription__left">
          <div class="prescription__img">
            <?php get_template_part( 'inc/image', null, ['foto_4','',615,508] );?>          
          </div>
          <div class="prescription__attention">
            <p>
              <a href="#">Посмотрите 2-х минутное видеообращение, котором мы рассказываем про работу в White</a>
            </p>
          </div>
        </div>
        <div class="prescription__right">
          <div class="prescription__akkord">


            <div class="acor">

              

              <div class="acor__punct">
                <input class="acor__input" id="acor1" type="radio" name="acor" checked="checked" />
                <label class="acor__label" for="acor1">Рекомендации по проведению</label>
                <div class="acor__body">
                  <ul class="acor__list">
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                  </ul>
                </div>                 
              </div>




              

              <div class="acor__punct">
                <input class="acor__input" id="acor2" type="radio" name="acor" />
                <label class="acor__label" for="acor2">Противопоказания к проведению</label>
                <div class="acor__body">
                  <ul class="acor__list">
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                    <li class = "acor__item" >Jnkbxbtv jn ghtlsleob[ rjycnherwbq? zdkztncz rjycnherwbb yt cdzpfyyst lheu c lheujv/</li>
                  </ul>
                </div>                
              </div>


            </div>


          </div>
        
        </div>
      </div>
    </div>
    <div class="prescription__fon">
     <?php get_template_part( 'inc/image', null, ['foto_4_fon'] );?> 
    </div>    
  </div> 
  <!-- Перечень услуг и стоимость -->
  <?php $perechens = get_field('perechen');
    if($perechens ):
      foreach ($perechens as $per => $perechen):

        $zagolovok = $perechen['zagolovok'];
        $foto = $perechen['foto'];
        $vkladkas = $perechen['vkladka'];
        ?>
      
        <div class="pricelist pricelist_<?php echo $per; ?>">
          <div class="wrap">
            <div class="pricelist__div">

              <div class="pricelist__div-title">
                <h2 class="titles pricelist__title"><?php echo $zagolovok; ?></h2>
                <a class="pricelist__button link_ns" data-fancybox="" data-src="#form_zvon" href="javascript:;">
                  <div class="ico"></div>
                  <span>Записаться на&nbsp;приём</span>
                </a>        
              </div>

              <div class="pricelist__img">
                <?php 
                  if( !empty( $foto ) ): ?>
                    <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt']); ?>" />
                    <?php 
                  endif;
                ?>
              </div>

              <div class="pricelist__tabs">
                <?php
                  if($vkladkas):
                    $vkladkas_col=count($vkladkas); 
                      ?>
                      <style>@media (max-width: 730px){.pricelist__tab-content<?php echo $per; ?>{padding-top: <?php echo $vkladkas_col*41+12 ?>px}}</style>
                      <?php
                    foreach ($vkladkas as $vkl => $vkladka):
                      if($vkl==0){$checked='checked';}else {$checked= '';}?>
                      <style>#tab<?php echo $per; ?>_<?php echo $vkl; ?>:checked~.pricelist__tab-titles label[for="tab<?php echo $per; ?>_<?php echo $vkl; ?>"]{background: #F63D71;color: #fff;cursor: default;}</style>
                      <input type="radio" id="tab<?php echo $per; ?>_<?php echo $vkl; ?>" name="tab-group<?php echo $per; ?>" <?php echo $checked; ?>>

                      <section class="pricelist__tab-content  pricelist__tab-content<?php echo $per; ?>">
                        <?php  
                          $stolbecz_1s = $vkladka['stolbecz_1'];
                          if($stolbecz_1s):                      
                            ?>
                            <div class="pricelist__column pricelist__left">
                              <?php
                                foreach ($stolbecz_1s as $usl => $stolbecz_1):
                                  $usluga = $stolbecz_1['usluga'];
                                  $czena = $stolbecz_1['czena'];
                                  ?>
                                  <div class="pricelist__line">
                                    <div class="pricelist__line-left">
                                      <?php echo $usluga; ?>
                                    </div>
                                    <div class="pricelist__line-right">
                                      <?php echo $czena; ?>
                                    </div>
                                  </div>
                                  <?php
                                endforeach;
                              ?>
                            </div>
                            <?php
                          endif;
                          $stolbecz_2s = $vkladka['stolbecz_2'];
                          if($stolbecz_2s):
                            ?>
                            <div class="pricelist__column pricelist__right">
                              <?php
                                foreach ($stolbecz_2s as $st1 => $stolbecz_2):
                                  $usluga = $stolbecz_2['usluga'];
                                  $czena = $stolbecz_2['czena'];
                                  ?>
                                  <div class="pricelist__line">
                                    <div class="pricelist__line-left">
                                      <?php echo $usluga; ?>
                                    </div>
                                    <div class="pricelist__line-right">
                                      <?php echo $czena; ?>
                                    </div>
                                  </div>
                                  <?php
                                endforeach;
                              ?>                                
                            </div>
                            <?php
                          endif;
                        ?> 
                      </section>
                      <?php
                    endforeach;
                  endif;
                ?>

                <div class="pricelist__tab-titles">
                  <?php
                    if($vkladkas):
                      foreach ($vkladkas as $vkl => $vkladka):
                        ?>

                          <label for="tab<?php echo $per; ?>_<?php echo $vkl; ?>" class="pricelist__tab-title"><?php echo $vkladka['nazvanie']; ?></label>

                        <?php
                      endforeach;
                    endif;
                  ?>
                </div>

              </div>





            </div>
          </div>
        </div>



        <?php
      endforeach;
    endif;
  ?>

</div>

<?php get_footer();