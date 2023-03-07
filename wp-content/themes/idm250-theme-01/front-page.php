<?php
    get_header();
?>
<?php
    // check if the post or page has a Featured Image assigned to it.
    if (has_post_thumbnail()) {
        the_post_thumbnail();
    }
?>
<?php 
$image = get_field('home_main_image');
if( !empty( $image ) ): ?>
    <div class="rounded-2">
    <img class="main-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
<?php endif; ?>

<?php
    echo get_the_title();
    get_template_part('components/content');
?>
<?php
    get_footer();
?>