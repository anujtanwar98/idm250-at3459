<?php 
$shoes =[
    'post_type' => 'shoes',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC'
];
$all_shoes = new WP_Query($shoes);

?>
<div>
    <div class="featured-shoes">
        <div class="text-center">
            <h2 class="featured-main-title"><?php the_field('home_featured_text'); ?></h2>
        </div>
        <div class=" my-card-box">
            <?php
                // The Loop
                if ($all_shoes->have_posts()) {
                    while ($all_shoes->have_posts()) {
                        // This is where the post's data is set up
                        $all_shoes->the_post();
                        get_template_part('components/featured-card');
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                } else {
                    echo '<p>Sorry, no posts matched your criteria.</p>';
                }?>
        </div>            
    </div>
</div>