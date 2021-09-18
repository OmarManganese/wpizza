<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <?php wp_head(); ?>

    <title>WPizza</title>
  </head>

  <body>
    <header>
      <div class="header-img-container">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/img/header-bckg-img-3840.jpg"
          srcset="
            <?php echo get_template_directory_uri(); ?>/img/header-bckg-img-640.jpg 640w,
            <?php echo get_template_directory_uri(); ?>/img/header-bckg-img-1280.jpg 1280w,
            <?php echo get_template_directory_uri(); ?>/img/header-bckg-img-1920.jpg 1920w,
            <?php echo get_template_directory_uri(); ?>/img/header-bckg-img-2560.jpg 2560w,
            <?php echo get_template_directory_uri(); ?>/img/header-bckg-img-3200.jpg 3200w,
            <?php echo get_template_directory_uri(); ?>/img/header-bckg-img-3840.jpg 3840w
          "
          sizes="100vw"
        />
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">WPizza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">             
                <li class="nav-item">
                  <a class="nav-link" href="#menu">Menù</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>               
                <li class="nav-item">
                  <a class="nav-link" href="#where-we-are">Where We Are</a>
                </li>               
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>