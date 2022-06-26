<?php if(!defined('ABSPATH')){exit;}
  //get_template_part( 'assets/inc/mod', 'video'); //подключаем всплывашку видео-обзора
  // $id = $post->ID;
  
  if(get_field('video')){
    $video = get_field('video');
    
  }
?>
<div  style="display: none;"  id="mod-video">
  <div class="close_form">
      <a href="" class="link_close_form"></a>
  </div>
  <?php echo $video; ?>
</div>
