<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$slide_eng_ttl = get_field('slide-eng-ttl');
$slide_jp_ttl = get_field('slide-jp-ttl');
$info_slide_ttl = get_field('info-slide-ttl')?: 'テキストが入ります';
$info_dtl = get_field('info-dtl');
?>

<div class="gradient-cmn-blk left-blk">
  <div class="bg-slide">
    <div class="slide-ttl">
      <?php if($slide_eng_ttl) { ?><span class="slide-eng-ttl"><?php echo $slide_eng_ttl; ?></span><?php } ?>
      <?php if($slide_jp_ttl) { ?>
        <span class="slide-jp-ttl"><?php echo $slide_jp_ttl; ?></span>
      <?php } ?>
    </div>
  </div>
  <div class="info-slide <?php if(!$info_dtl) { ?>slide-mrg <?php } ?>">
    <div class="info-slide-ttl">
      <span><?php echo $info_slide_ttl; ?></span>
    </div>
    <div class="info-dtl">
      <?php if($info_dtl) { ?>
        <p>
          <?php echo $info_dtl; ?>
        </p>
        <?php } ?>
    </div>
  </div>
</div>