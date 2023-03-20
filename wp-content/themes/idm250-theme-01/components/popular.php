<?php
$args = array(
    'posts_per_page' => 20,
    'category_name' => 'all shoes'
);

$the_query = new WP_Query( $args );
?>

<div class="my-card-box">
<?php
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        // Display post content here
        get_template_part('components/pop-card');
    }
} else {
    // No posts found
}
wp_reset_postdata();
?>
</div>

