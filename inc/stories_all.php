<?php if (! defined('ABSPATH') ) { exit; } ?>
<?php          
$args = ['post_type' => 'stories',];// массив для query
$my_posts = new WP_Query;// создаем экземпляр          
$stories = $my_posts->query($args);// масив историй
if($stories): //если есть истории          
  $col_stories = count($stories); // кол-во историй
  $i = 0;            
  foreach ($stories as $key => $stori):
    $id = $stori->ID;                
    $params[$key] = $id;            
  endforeach; 
if($col_stories > 4): $col_blok = floor( $col_stories / 4); ?>
<style><?php for ($z=0; $z < $col_blok; $z++): ?>#zagruska_<?php echo $z+2; ?>:checked ~ .client__list<?php if($z+1 != $col_blok): echo ","; endif; endfor; ?>{display: flex; margin: -18px 0 9px;}<?php for ($z=0; $z < $col_blok; $z++): ?>#zagruska_<?php echo $z+2; ?>:checked ~ .zagruska-btn<?php if($z+1 != $col_blok): echo ","; endif; endfor; ?>{display: none;}</style>
<?php endif; ?>
  <div class="client">
    <h2 class="titles client__titles">Истории наших<br>клиентов</h2>
    <div class="client__list">
      <?php 
        for($i; $i < 4; $i++):
          $id = $params[$i];
          if($id):
            get_template_part( 'inc/stories', null, $id); //подключаем историю
          endif;         
        endfor;
      ?>
    </div>
      <!-- 1 -->
      <?php if($col_stories > $i):
          $d = $i + 4;?>
        <div class="zagruska">                    
          <input id="zagruska_1" class="zagrus" type="checkbox" />
          <div class="client__list">                      
            <?php                        
              for($i; $i < $d; $i++):
                $id = $params[$i];
                if($id):
                  get_template_part( 'inc/stories', null, $id); //подключаем историю
                endif;                                
              endfor;
            ?>
            <!-- место вставки -->
            <?php get_template_part( 'inc/zagruska', null, [$i,$params,$col_stories]); //подключаем себя :)?>                    
            <!-- end место вставки -->
          <!-- 1 -->
          </div>
          <label class="zagruska-btn client__next link_ns" for="zagruska_1" style="z-index: 0;">
            <span class="unloaded">Показать ещё</span>
            <span class="loaded">Свернуть</span>
          </label>
        </div>
      <?php  endif; ?>
      <!-- end 1 -->   
  </div>
<?php endif; //конец если есть истории ?>
<?php wp_reset_postdata(); // сброс ?>