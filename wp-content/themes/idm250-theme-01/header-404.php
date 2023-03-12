<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png">
    <title><?php echo get_the_title(); ?>404 | The Shoe Stitcher</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  ?>  
  <header>
    <?php
$menu = get_theme_menu('primary-menu');
  if ($menu) {?>


    <nav class="navbar navbar-expand-lg" style="background-color:#000">
      <div class="container-fluid">
        <a class="text-decoration-none my-main-title" href="<?php echo home_url(); ?>">
          <?php 
          $image = get_field('logo', 'option');
          if( !empty( $image ) ): ?>
            <img class="navbar-brand" alt="Logo" width="60" height="me-auto" class="d-inline-block align-text-center" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          The Shoe Stitcher
        </a>
    </nav>
  <?php } ?>

  
</header>
    
  

  <div class="main-content">
  <div class="container my-error-container">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <?php 
        $image = get_field('404NotFound', 'option');
        if( !empty( $image ) ): ?>
          <img class="not-found" src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <h1 class="error-title">404 Error Page</h1>
        <p class="error-sub">The page you are looking for might have been removed or doesn't exist.</p>
        <a href="<?php echo home_url(); ?>" class="btn btn-primary my-404-home">Go back to homepage</a>
      </div>
    </div>
  </div>
  