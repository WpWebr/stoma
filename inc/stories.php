<?php
  if (! defined('ABSPATH') ) {
    exit;
  }
  
?>

<div class="client__cart">

<?php $id = $args; 
//rufrid($id); 
?>

  <div class="client__content">

    <div class="client__left">
      <div class="client__name">История <?php if( get_field( 'name', $id ) ): 
        the_field( 'name', $id ); endif; ?>
      </div>
      <div class="client__title"><?php if( get_field( 'usluga', $id ) ): 
        the_field( 'usluga', $id ); endif; ?>
      </div>
      <a class="client__link link_ns" href="<?php echo get_permalink( $id ); ?>">
        <div class="ico"></div>
        <span>Подробнее</span>
      </a>
    </div>

    <div class="client__right">
      <!-- <img class="client__img" src="/wp-content/uploads/2022/05/Ellipse-6.png" width="189" height="189"  alt="client"> -->
      <?php 
        $image = get_field('foto', $id );
        if( !empty( $image ) ): ?>
          <img class="client__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  width="189" height="189">
        <?php else : $image = get_field('foto', 1920 ); ?>
          <img class="client__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  width="189" height="189">  
      <?php endif; ?>
    </div>

  </div>

</div>

