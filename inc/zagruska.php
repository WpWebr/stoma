<?php

$i = $args[0];
$params = $args[1];
$col_stories = $args[2];

if($col_stories > $i): 
 $d = $i + 4;
 $k = $d/4 - 1;  ?>                      
 <div class="zagruska"> 
   <input id="zagruska_<?php echo $k; ?>" class="zagrus" type="checkbox" />

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
    <?php get_template_part( 'zagruska', null, [$i,$params,$col_stories]); //подключаем себя :)  ?>
    <!-- end место вставки -->
   </div>
   <label class="zagruska-btn client__next link_ns" for="zagruska_<?php echo $k; ?>" style="z-index: 1;">
     <span class="unloaded">Показать ещё</span>
   </label>                    
 </div>

<?php endif; ?>           
