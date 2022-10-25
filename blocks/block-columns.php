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
$part_section_ttl = get_field('part-section-ttl')?: 'テキストが入ります';
$block_column_img = get_field('block-column-img');
$block_column_txt = get_field('block-column-txt')?: 'テキストが入ります';

?>

<div class="block-columns-part">
  <div class="part-section-ttl">
    <?php echo $part_section_ttl; ?>
  </div>
  <div class="block-columns">
    <?php if($block_column_img) { ?>
      <div class="block-column-img">
          <img src="<?php echo $block_column_img; ?>" alt="block img" width="500" height="381" loading="lazy">
      </div>
    <?php } ?>
    <div class="block-column-txt">
      <?php echo $block_column_txt; ?>
    </div>
  </div>
</div>