<?php
    get_header();
?>

<!-- this is the best practice -->
<h1 class="text-center">
    <?php echo get_the_title(); ?>
</h1>
<?php
    get_template_part('components/content');
?>
<?php
if (is_page('pop-sneakers')) {
    // Code to display content for pop-sneakers
    get_template_part('components/popular');
    // Code to display content for page1
} elseif (is_page('sneakers')) {
    get_template_part('components/all-shoes');
    // Code to display content for page2
} elseif (is_page('about-us')) {
    // Code to display content for page3
    get_template_part('components/about-us');
} else {
    // Code to display content for all other pages
}
?>
<?php
    get_footer();
?>