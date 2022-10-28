<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife-theme
 */

get_header();
?>
<!-- =============== content ============== -->
<div class="content pg-content">
  <?php  
    $pg_eng_ttl = get_field('pg_eng_ttl');
    $pg_jp_ttl = get_field('pg_jp_ttl');
  ?>
  <div class="pg-ttl">
    <span class="pg-eng-ttl"> 
      <?php echo $pg_eng_ttl; ?>
    </span>
    <span class="pg-jp-ttl">
      <?php echo $pg_jp_ttl; ?>
    </span>
  </div>
  <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
    <?php if (has_post_thumbnail()) {
      echo '<div class="pg-mv" style="background: url('.esc_url($featured_img_url).')"></div>';
    } ?>
  <!-- ===============  Breadcrumb ============== -->
  <div class="breadcrumb clearfix">
    <?php the_breadcrumb(); ?>
  </div>
  <?php while( have_posts() ): the_post() ;?>
    <?php the_content(); ?>
  <?php endwhile;?>
</div>
<!-- ./ content-area -->

<?php
get_footer();
