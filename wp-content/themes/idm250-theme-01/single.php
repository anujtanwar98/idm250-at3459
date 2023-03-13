<?php
    get_header();
?>
<h1 class="single-page-title"><?php echo get_the_title(); ?></h1>
<div>
  <?php 
  // echo get_the_excerpt(); 
  ?>
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