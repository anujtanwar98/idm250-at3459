<?php get_header(); ?>

<h1><?php echo get_the_title(); ?></h1>
<?php 
$shoes =[
    'post_type' => 'shoes',
    'posts_per_page' => 30,
    'orderby' => 'date',
    'order' => 'DESC'
];
$all_shoes = new WP_Query($shoes);

?>

<div class="all-shoes">
    <div class="main-title">
        <h2>Shoes</h2>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
</div>

<?php get_footer(); ?>