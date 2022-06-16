<?php
/**
* Template Name: Косметология
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
          Косметология
        </li>
      </ul>
    </div>
  </div>
  <!-- Контурная пластика ... за 60 минут -->
  <div class="plastic">
    <div class="wrap">
      <div class="plastic__div">
        <div class="plastic__left">
          <h1 class="titles plastic__title"> Контурная пластика лица с&nbsp;гарантией <span class="akcent">естественного результата </span> за&nbsp;60&nbsp;минут </h1>
          <p class="plastic__sub">Для  коррекции вашей внешности, необходим осмотр у специалиста. Избежать разочарования просто - запишитесь на консультацию</p>
          <a class="plastic__button link_ns" data-fancybox="" data-src="#form_zvon" href="javascript:;">
            <div class="ico"></div>
            <span>Записаться на консультацию</span>
          </a> 

        </div>
        <div class="plastic__right">
        <div class="plastic__img">        
          <?php get_template_part( 'inc/image', null, ['foto_1','',562,475] );?>       
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Содержание страницы -->
  <?php 
    $menu = get_field('soderzhanie');
    if($menu[0]):
      ?>

      <div class="cosmetologia-menu cosmetologia-menu-m">
        <div class="wrap">
          <div class="cosmetologia-menu__cont">
            <div class="cosmetologia-menu__div">
              <h3 class="titles soderzhanie__title">Содержание страницы:</h3>

              <ul id="aside">

              </ul>

            </div>
          </div>

        </div>
      </div>

    <?php endif; 
  ?>

  <!-- Что такое контурная пластика?  -->
  <div class="what">
    <div class="wrap">
      <div class="what__div">

          <div class="what__img">
            <?php get_template_part( 'inc/image', null, ['foto_2','',560,317] );?> 
          </div>

          <h2 class="titles what__title">Что такое контурная&nbsp;пластика?</h2>
          <div class="what__text">
            <p>
              <span class="akcent">“Необходима костная пластика”</span> — это слышат многие пациенты, которые планируют имплантацию. Такое заключение может сделать стоматолог-имплантолог, ознакомившись с результатами компьютерной томографии.
            </p>
            <p>Корни зуба находятся в костной ткани, и так обеспечивается их фиксация. Это позволяет человеку смело жевать пищу и не бояться расшатывания зубов. Однако после удаления зуба может произойти убыль кости.</p>
            <p>
              <span class="akcent">Имплант</span> — искусственный корень. И для его надежной фиксации также необходимо достаточное количество костной ткани. Поэтому проблемы ее нехватки встает очень остро перед проведением имплантации.
            </p>
          </div>


      </div>
    </div>
  </div>
  <!-- Разновидности контурной пластики -->
  <div class="kind">
    <div class="wrap">
      <h2 class="titles kind__titl">Разновидности контурной&nbsp;пластики</h2>
      <div class="kind__div">
        <div class="circle">

          <div class="circle">
            <img class="kind__img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/zub.png" alt="зуб" width="536" height="536" >
          </div>

          <?php
            $sputniks =  get_field('sputniks');
            if($sputniks):
                $width = 690/2;
                $timp = 8;//длительность показа
                $pause = count($sputniks)*$timp;//длительность цикла
                $proz = round(100/count($sputniks),1);//процент показа от общей длительности округленный до 1 знака после,
                $top = 60;//шаг отступа с верху
                ?>

              <style>@keyframes opacity{0%{opacity:0;}<?php echo 3*$proz/10; ?>%{opacity:1;}<?php echo 7*$proz/10; ?>%{opacity:1;}<?php echo $proz; ?>%{opacity:0;}}</style>

              <?php
              foreach ($sputniks as $key => $sputnik):
                $side =  $sputnik['pol']['side'];
                $tops =  $sputnik['pol']['top'];
                $text =  $sputnik['text'];

                $tim = $key*$timp;//длительность задержки

                if($tops): 
                  $top = 60*$tops + 60;//отступ с верху 
                endif;

                $left = round(sqrt($width*$top*2 - $top**2)+$width,2);//отступ с лева 

                if($side == 'left'): 
                  $left=($width*2 - $left); 
                  $sputnik = 'sputnik_left'; 
                else: 
                  $sputnik = 'sputnik_right'; 
                endif;
                ?>

                <div class="sputnik <?php echo $sputnik; ?>" style="left:<?php echo $left; ?>px; top:<?php echo $top; ?>px;">
                  <p class="circle__remark" style="animation-delay: <?php echo $tim; ?>s; animation-duration: <?php echo $pause; ?>s;" >
                    <?php echo $text; ?>
                  </p>
                </div>


                <?php
              endforeach;
            endif;
          ?>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Как проходит имплантация? -->
  <div class="implantation">
    <div class="wrap">
      <h2 class="titles implantation__title">Как проходит имплантация?</h2>
      <div class="implantation__div">
        <div class="implantation__left">
          <div class="implantation__img">
            <?php get_template_part( 'inc/image', null, ['foto_3','',564,304] );?>            
          </div>
        </div>
        <div class="implantation__right">

          <?php $stadii = get_field('stadii');
            if($stadii[0]):
              foreach ($stadii as $num => $stadiya): ?>
                <div class="implantation__punct">
                    <div class="implantation__num">0<?php echo $num + 1; ?></div>
                    <p class="implantation__text"><?php echo $stadiya['stadiya']; ?></p>
                </div>
                <?php
              endforeach;
            endif;
          ?>
        </div>        
      </div>
    </div>
  </div>
  <!-- Рекомендации до и после пластики -->
  <div class="prescription prescription_m">
    <div class="wrap">
      <div class="prescription__div">
        <div class="prescription__left">
          <div class="prescription__img">
            <?php get_template_part( 'inc/image', null, ['foto_4','',615,508] );?>          
          </div>
          <div class="prescription__attention">
            <p>Более развернутые рекомендации, а также список необходимых лекарственных препаратов вам выдаст ваш врач после проведенной костной пластики.</p>
          </div>
        </div>
        <div class="prescription__right">
          <h2 class="prescription__title titles">Рекомендации до и&nbsp;после&nbsp;пластики</h2>
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
  <!-- Результаты контурной пластики -->
  <?php
    $rezultatys = get_field('rezultaty');
    if( $rezultatys):
      $data_afbf = count($rezultatys); 
      ?>
      <div class="results">
        <div class="wrap">
          <div class="results__div">
            <div class="results__div-title">
              <h2 class="titles results__title">Результаты контурной пластики</h2>     
            </div>

            <div class="results__slider" id="results" afbf="<?php echo $data_afbf; ?>">

              <?php
                if( $rezultatys ):
                  foreach( $rezultatys as $sl => $rezultaty ): 
                    $sl++;
                    $do = $rezultaty['do'];
                    $posle = $rezultaty['posle'];
                    $tekst = $rezultaty['tekst'];
                    if(!empty( $do ) || !empty( $posle )):
                      ?>
                      <div class="slider__item results__item">

                        <div class="sl-container results__container sl<?php echo $sl; ?>">

                          <div class="results__view view view-after vi<?php echo $sl; ?>">
                            <img class="before-after__item twentytwenty-before" src="<?php echo esc_url($do['url']); ?>" alt="<?php echo esc_attr($do['alt']); ?>"  width="360" height="538">
                            <p>ДО</p>     
                          </div>

                          <div class="results__view view view-before">
                            <img class="before-after__item twentytwenty-after" src="<?php echo esc_url($posle['url']); ?>" alt="<?php echo esc_attr($posle['alt']); ?>"  width="360" height="538">
                            <p>ПОСЛЕ</p> 
                          </div>

                          <div class="dragme dr<?php echo $sl; ?>">
                            <div class="dr-circle">
                              <div class="dr-circle__r"></div>
                            </div>
                          </div>
                          
                        </div>

                        <div class="results__text">
                          <p><?php echo $tekst; ?></p>
                        </div>

                      </div>
                      <?php
                    endif;   
                  endforeach;
                endif;
              ?>


            </div>            
          </div>
        </div>
      </div>
      <?php
    endif;
  ?>
  <!-- Выполненные работы фото и видео -->
  <?php
    $gallery = get_field('gallery');
    $videos = $gallery['videos'];
    $photos = $gallery['photos'];
    if( $videos || $photos ): ?>
      <div class="media">
        <div class="wrap">
          <div class="media__div">
            <div class="media__div-title">
              <h2 class="titles media__title">Выполненные работы</h2>
              <a class="media__button link_ns" data-fancybox="" data-src="#form_zvon" href="javascript:;">
                <div class="ico"></div>
                <span>Записаться на приём</span>
              </a>        
            </div>
            <div class="media__slider">
              <?php
                if( $videos ):
                  foreach( $videos as $video ){
                    echo '<div class="slider__item media-item">
                            <div class="media-video">';
                              echo $video['video'];
                      echo '</div>
                          </div>';
                  }
                endif;
                if( $photos ):
                  foreach( $photos as $photo ): 
                    $image = $photo['photo']; ?>
                    <div class="slider__item media-item">
                      <div class="media__img">
                        <img src="<?php echo esc_url($image['url']); ?>"
                        <?php if(!empty( $image['alt'])): ?>
                          alt="<?php echo esc_attr($image['alt']); ?>
                        <?php endif; ?>"/>
                      </div>
                    </div>
                    <?php 
                  endforeach;
                endif;
              ?>
            </div>            
          </div>
        </div>
      </div>
      <?php
    endif;
  ?>
  <!-- Врачи -->
  <?php 
  
    $lekars = get_field('vrachi');
    //rufrid($lekars[0]);
    if ($lekars): ?>  
    <div class="doctors">
      <div class="wrap">
        <div class="comand-lib comand-lib_m">
          <h2 class="titles">Врачи проводившие <br>лечение</h2>
          <div class="comand-lib_slid">
            <?php get_template_part( 'inc/comand_lib', null, $lekars );?>
          </div>
        </div>
      </div>
    </div> 
    <?php
    endif;
  ?>  
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
                  <span>Записаться на приём</span>
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
                    foreach ($vkladkas as $vkl => $vkladka):
                      if($vkl==0){$checked='checked';}else {$checked= '';}?>

                      <style>#tab<?php echo $per; ?>_<?php echo $vkl; ?>:checked~.pricelist__tab-titles label[for="tab<?php echo $per; ?>_<?php echo $vkl; ?>"]{background: #F63D71;color: #fff;cursor: default;}</style>


                      <input type="radio" id="tab<?php echo $per; ?>_<?php echo $vkl; ?>" name="tab-group<?php echo $per; ?>" <?php echo $checked; ?>>

                      <section class="pricelist__tab-content">
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
  <!-- Срочно нажимать здесь -->
  <div class="screw">
    <div class="wrap">
      <div class="screw__form">
        <div class="inf_forms smk vspl_form">
          <div class="ins_bot_line">
            <div class="scre__inner inner clrfx">
              <div class="left">
                <div class="scre__ico">
                  <div class="scre__colo">
                    <div class="scre__img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="right">
              <div class="top">
                <div class="info">
                  <div class="screw__title titles">
                    Костная пластика
                  </div>
                  <p class="screw__text">
                    <?php the_field('forma'); ?>
                  </p>
                </div>
              </div>
              <form class="sender sender_sk">
                <div class="f_sl clrfx">
                  <input type="text" class="name" name="name" placeholder="Имя">
                  <input type="text" class="phone" name="phone" placeholder="Телефон">
                  <button type="submit" class="link_ns big">
                    <span>Срочно нажимать здесь</span>
                  </button>
                </div>
                <input type="hidden" name="hid" value="Всплывающая форма - Записаться на прием к врачу">                              
              </form>
            </div>
          </div>
          <div class="screw__art"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Отзывы о клинике -->
  <?php
    $otzyvy = get_field('otzyvy');
    if($otzyvy): ?>

      <div class="recall">
        <div class="wrap">
          <div class="recall__div">
            <h2 class="titles recall__title">Отзывы о клинике</h2>

            <div class="recall__slider">
              <?php
                foreach ($otzyvy as $otz):
                  $otzyv = $otz['otzyv'];
                  $image = $otz['foto'];
                  $link = $otz['ssylka'];
                  ?>

                  <div class="slider__item recall__item">

                      <div class="recall__left">
                        <p class="recall__text"><?php echo $otzyv; ?></p>
                      </div>

                      <div class="recall__right">
                        <div class="recall__img">
                          <?php if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          <?php endif; ?>
                        </div>
                        <a class="recall__button link_ns" href="<?php echo $link; ?>">
                          <div class="ico"></div>
                          <span>Подробнее</span>
                        </a>                
                      </div>                  

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
  <!-- Дополнительные разделы -->
  <?php
    $gallery2 = get_field('gallery_2');
    if( $gallery2[0] ): ?>
      <div class="more">
        <div class="wrap">
          <div class="more__div">
            <div class="more__content">
              <h2 class="titles more__title">Дополнительные разделы</h2>            
              <div class="more__slider">
                <?php
                  foreach ($gallery2 as $gall):
                    $image = $gall['foto'];
                    $tekst = $gall['tekst'];
                    $link = $gall['link'];
                    ?>

                    <div class="slider__item more__item">
                      <div class="more__slid">
                        <div class="more__img">
                          <?php if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          <?php endif; ?>
                        </div>
                        <p class="more__text"><?php echo $tekst; ?></p>
                        <a class="more__button link_ns" href="<?php echo $link; ?>">
                          <div class="ico"></div>
                          <span>Подробнее</span>
                        </a>                      
                      </div>

                    </div>

                    <?php 
                  endforeach;
                ?>
              </div>               
            </div>           
          </div>
        </div>
      </div>
      <?php
    endif;
  ?>
  <!-- Контактные данные -->
  <div class="contactes">
    <div class="wrap">
      <div class="contactes__div">

        <div class="contactes__left">

          <h2 class="titles">Контактные данные</h2>
          <?php 
            $kontakty = get_field('kontakty');
            $emails = $kontakty['emails']; //p
            $grafik = $kontakty['grafik'];//t
            $telefons = $kontakty['telefons'];//p
            $adres = $kontakty['adres'];//t
            $podpis = $kontakty['podpis'];//p
          ?>
          <div class="contactes__content">

            <div class="contactes__dan">
              <div class="contactes__email">
                <h3 class="contactes__title">Е-mail:</h3>
                <?php
                  if($emails): 
                    foreach( $emails as $row ):
                      $email = $row['email'];
                      ?>
                      <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                      <?php
                    endforeach;
                  endif;
                if($grafik): ?>
                  <p><?php echo $grafik; ?></p>
                <?php endif; ?>
              </div>

              <div class="contactes__tel">
                <h3 class="contactes__title">Телефон</h3>
                <?php
                  if($telefons): 
                    foreach( $telefons as $row ):
                      $telefon = $row['telefon'];
                      $tel = preg_replace('/[^0-9]/', '', $telefon);
                      ?> 
                      <a href = "tel:<?php echo $tel; ?>"><?php echo $telefon; ?></a><br>
                      <?php
                    endforeach;
                  endif;
                ?>
              </div>

            </div>

            <div class="contactes__dan">

              <?php
                if($adres): ?>
                <div class="contactes__address">
                  <h3 class="contactes__title">Адрес клиники</h3>
                  <p><?php echo $adres; ?></p>
                </div>
              <?php endif; ?>

              <div class="contactes__social">
                <h3 class="contactes__title">Подписывайтесь:</h3>
                <div class="contactes__icon"> 
                  <?php
                  if( $podpis ):
                    foreach( $podpis as $pod ):
                      $nazvanie = $pod['nazvanie'];
                      $ssylka = $pod['ssylka'];
                      $ikonka = $pod['ikonka'];
                      ?>  
                                                    
                        <a href="<?php echo $ssylka; ?>">
                          <img src="<?php echo esc_url( $ikonka['url'] ); ?>" 
                          <?php if($nazvanie): ?> alt="<?php echo $nazvanie; ?>"><?php endif; ?>
                        </a>

                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>

          </div>

          <a class="contactes__button link_ns" data-fancybox="" data-src="#form_zvon" href="javascript:;">
            <div class="ico"></div>
            <span>Записаться на приём</span>
          </a>

        </div>

        <div class="contactes__right">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A865381f0eb2c7d4cdea77bf6042185fb6e49e023ae6b511e7da2220876fbdde0&amp;width=100%25&amp;height=388&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

      </div>
    </div>
  </div>
</div>
<script>
    const tpl = '{{contents}}';
    let contents = '';
    const elHeaders = document.querySelectorAll('.wrap h2');
    elHeaders.forEach((el, index) => {
      if (!el.id) {
        el.id = `id-${index}`;
      }
      const url = `${location.href.split('#')[0]}#${el.id}`;
      contents += `<li class="plastic-menu__link"><a href="${url}">${el.textContent}</a></li>`;
    });
    document.querySelector('#aside').insertAdjacentHTML('afterbegin', tpl.replace('{{contents}}', contents));
  </script>
<?php get_footer();