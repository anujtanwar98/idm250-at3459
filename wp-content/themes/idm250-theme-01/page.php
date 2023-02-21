<?php
    get_header();
?>

<!-- this is the best practice -->
<h1>
    <?php echo get_the_title(); ?>
</h1>
<?php
    get_template_part('components/content');
?>

<?php
    get_footer();
?>