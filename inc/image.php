<?php if (! defined('ABSPATH') ) { exit; } ?>

<?php 
$img = $args[0];
$id = $args[1];

if ($id) {
  $image = get_field($img,$id);
}else {
  $image = get_field($img);
}

$width = $args[2];
$height = $args[3];

if(!empty($image)):?>
  <img src="<?php echo esc_url($image['url']); ?>"
    <?php if(!empty( $image['alt'])): ?>
      alt="<?php echo esc_attr($image['alt']); ?>
    <?php endif; ?>"
    <?php if($width): ?>
      width = "<?php echo $width; ?>
    <?php endif; ?>"
    <?php if($height): ?>
      height = "<?php echo $height; ?>
    <?php endif; ?>">
<?php endif; ?> 


