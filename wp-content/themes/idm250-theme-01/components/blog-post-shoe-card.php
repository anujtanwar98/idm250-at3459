<div class="main-container-box">
    <div class="box1-text">
        <?php the_field('main_blog_post_text'); ?>
    </div>
    <div class="box2-image">
    <?php 
        $image = get_field('main_blog_post_image');
        if( !empty( $image ) ): ?>
            <div class="rounded-2">
            <a href="<?php echo esc_url($image['url']); ?>">
                <img class="main-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
            </div>
    <?php endif; ?>
    </div>
    <div class="box3-text">
        <?php the_field('main_blog_post_second_text'); ?>
    </div>
</div>