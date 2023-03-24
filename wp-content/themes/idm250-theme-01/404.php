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
            <?php 
                $link = get_field('404_text_button', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button btn btn-primary my-404-home" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
        </div>
        </div>
    </div>
<?php
    get_footer();
?>