<?php
    get_header(404);
?>
    <div class="container my-error-container">
        <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <?php 
            $image = get_field('404NotFound', 'option');
            if( !empty( $image ) ): ?>
            <img class="not-found" src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h1 class="error-title"><?php the_field('404_text_title', 'option'); ?></h1>
            <p class="error-sub"><?php the_field('404_text_subtitle', 'option'); ?></p>
            <a href="<?php echo home_url(); ?>" class="btn btn-primary my-404-home"><?php the_field('404_text_button', 'option'); ?></a>
        </div>
        </div>
    </div>
<?php
    get_footer();
?>