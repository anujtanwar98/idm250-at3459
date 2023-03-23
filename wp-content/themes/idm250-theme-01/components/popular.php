<?php
$args = array(
    'posts_per_page' => 15,
    'category_name' => 'all shoes'
);

$the_query = new WP_Query( $args );
?>
<?php
$category_id = get_cat_ID( 'all shoes' ); // Replace 'Category Name' with the name of your category
$subcategories = get_terms( array(
    'taxonomy' => 'category',
    'parent'   => $category_id,
) );
if ( ! empty( $subcategories ) ) {
    foreach ( $subcategories as $subcategory ) {
        echo '<h1 class="text-center featured-main-title">' . esc_html( $subcategory->name ) . '</h1>';
        // echo esc_html( $subcategory->name );
    }
}
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

