<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?> | The Shoe Stitcher</title>
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
        <img class="navbar-brand" src="https://res.cloudinary.com/dr8jiwn4u/image/upload/v1677448062/wordpress-logo/logo_lfbnyt.png" alt="Logo" width="80" height="me-auto" class="d-inline-block align-text-center">
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>

        <?php
          foreach ($menu as $menu_item) {
            echo
            "<div class='collapse navbar-collapse' id='navbarNav'>
              <ul class='navbar-nav'>
                <li class='nav-item my-nav-links'>
                  <a class='nav-link active text-white my-nav-links-a' aria-current='page' href='{$menu_item->url}'>{$menu_item->title}</a>
                </li>
              </ul>
            </div>";
                  } ?>

      </div>
    </nav>
  <?php } ?>

  
</header>

  <div class="main-content">


  <!-- <nav class='navbar navbar-expand-lg' style='background-color:#EFC372'>
      <div class='container-fluid'>
        <img class='navbar-brand' src='https://res.cloudinary.com/dr8jiwn4u/image/upload/v1677448062/wordpress-logo/logo_lfbnyt.png' alt='Logo' width='80' height='me-auto' class='d-inline-block align-text-center'>
        <button class='navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='toggler-icon top-bar'></span>
          <span class='toggler-icon middle-bar'></span>
          <span class='toggler-icon bottom-bar'></span>
        </button>   -->