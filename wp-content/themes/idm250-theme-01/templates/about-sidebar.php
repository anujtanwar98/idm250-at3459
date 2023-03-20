<?php
/* Template Name: about Us Sidebar */
get_header(); ?>

<h1 class="text-center my-website-title"><?php echo get_the_title(); ?></h1>

<?php
if (is_page('about-us')) {
    // Code to display content for pop-sneakers
    get_template_part('components/about-us');
    // Code to display content for page1
} else {
    // Code to display content for all other pages
}
?>
<div class="sidebar-page-container">
  <div class="sidebar-content">
    <!-- Main content of the page goes here -->
    <?php get_template_part('components/content'); ?>
  </div>
  <div class="sidebar-sidebar">
    <h3 class="text-center featured-main-title"><?php the_field('about_sidebar'); ?></h3>
    <div class="sidebar-sidebar-content">
      <!-- Sidebar content goes here... -->
        <?php get_template_part('components/card'); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>