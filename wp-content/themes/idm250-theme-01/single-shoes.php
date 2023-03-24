<?php
    get_header();
?>
<!-- Custom Post Type = Shoes -->
<h1 class="single-page-title"><?php echo get_the_title(); ?></h1>
  <div class="my-single-shoes-images-div">
    <img class="my-single-shoes-images" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?> Featured Image">
  </div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part('components/detail-shoe-card'); ?>
  <?php get_template_part('components/content'); ?>
</article>

<?php
    get_footer();
?>