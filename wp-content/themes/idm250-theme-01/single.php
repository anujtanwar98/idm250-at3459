<?php
    get_header();
?>
<h1 class="single-page-title"><?php echo get_the_title(); ?></h1>
  <div class="my-single-page-shoes-images-div">
    <img class="my-single-page-shoes-images" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?> Featured Image">
  </div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part('components/content'); ?>
</article>
<br>
<!-- <h2>Categories for this post</h2> -->
<?php
// $currentPostId = get_the_id();
// $terms = get_the_terms($currentPostId, 'category');

// foreach ($terms as $term) {
//     echo "<p>{$term->name}</p>";
// }
?>

<?php
    get_footer();
?>