<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vlife-theme
 */

get_header();

?>
<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>

<div class="news-list">
  <h2><?php the_title(); ?></h2>
  <?php the_content()
  ?>
  </p>
</div>
<!-- ./ single-page -->


<?php
get_footer();
