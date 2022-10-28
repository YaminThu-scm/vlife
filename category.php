<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife-theme
 */

get_header();
?>

<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>
<!-- =============== content ============== -->
<ul class="news-list">
  <?php
    if (have_posts()) : ?>
    <?php  $category = get_the_category($post->ID);
      $cat_id = $category[0]->cat_ID;
      $cat_name = $category[0]->name;
      $cat_slug = $category[0]->slug; ?>
      <?php
      query_posts('category_name='.$cat_slug.'&posts_per_page=1&order=DESC&paged='.$paged);
      ?>
    <?php while (have_posts()) : the_post(); ?>
		<li>
        <a href="<?php the_permalink() ?>">
					<p class="news-date"><?php echo get_the_date('Y.m.d'); ?></p>
					<p class="news-ttl"><?php the_title(); ?></p>
				</a>
        </li>
    <?php endwhile; ?>
				
   <?php endif; ?><?php the_posts_pagination(array(
                'prev_text' => false,
                'next_text' => false,
                )); ?>
   <?php wp_reset_query(); ?>
		</ul>
    
<!-- ./content -->

<?php
get_footer();
