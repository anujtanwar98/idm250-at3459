<div>
    <div>
        <h1 class="text-center">
            <?php the_field('home_heading_logo_shoes'); ?>
        </h1>
    </div>
    <div class="my-custom-shoes-images">
        <?php 
        $images = get_field('home_custom_shoes_logo');
        if( $images ): ?>
            <ul class="my-custom-shoes-images-ul">
                <?php foreach( $images as $image ): ?>
                    <li class="my-custom-shoes-images-li">
                        <a href="<?php echo esc_url($image['url']); ?>">
                            <img class="my-custom-shoes-images-img" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <p><?php echo esc_html($image['caption']); ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>