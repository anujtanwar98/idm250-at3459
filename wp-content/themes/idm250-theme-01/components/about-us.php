<?php 
$image = get_field('about_hero_image');
if( !empty( $image ) ): ?>
    <div class="rounded-2">
    <img class="main-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
<?php endif; ?>