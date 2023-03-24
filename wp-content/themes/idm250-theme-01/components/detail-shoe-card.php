<div class="main-container-box">
    <div class="box1-text">
        <?php the_field('blog_main_text'); ?>
    </div>
    <div class="box2-image">
    <?php 
        $image = get_field('blog_main_second_image');
        if( !empty( $image ) ): ?>
            <div class="rounded-2">
            <img class="main-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
    <?php endif; ?>
    </div>
    <div class="box3-text">
        <?php the_field('blog_main_second_text'); ?>
    </div>
</div>