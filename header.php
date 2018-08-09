<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>L'Humain d'Abord ! Au coeur de la République</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="/CAP/wp-content/themes/blogCathy/ezSlide.css">
  <link rel="stylesheet" href="/CAP/wp-content/themes/blogCathy/style.css">
  <link rel="shortcut icon" href="<?php echo THEME_IMG_PATH; ?>/favicon.ico">
  <script src="/CAP/wp-content/themes/blogCathy/ezSlide.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <div id="page" class="">
    <div id="header">
      <?php get_sidebar(); ?>
      <div class="slider-container-absolute">
        <div id="carousel-slider" class="ez-slide">
          <div class="slide slide-one" slider="carousel-slider" style="--n: 0"></div>
          <div class="slide slide-two" slider="carousel-slider" style="--n: 0"></div>
          <div class="slide slide-three" slider="carousel-slider" style="--n: 0"></div>
        </div>
      </div>
      <div class="container info-bannière">
        <div class="row justify-content-around logo-bannière">
          <div class="col-2 link-category-bannière text-center">
            <a class="lieu" id="senat" href="/CAP/senat/">Sénat</a>
          </div>
          <div class="col-5 text-center">
            <a href="<?php bloginfo('url'); ?>"><img class="img-fluid" src="<?php echo THEME_IMG_PATH; ?>/logo.svg" alt=""></a>
          </div>
          <div class="col-2 link-category-bannière text-center">
            <a class="lieu" id="circo" href="/CAP/circo/">Circonscription</a>
          </div>
        </div>
        <div class="row justify-content-around titre-bannière">
          <div class="col-10">
            <h1 class="">Cathy Apourceau-Poly</h1>
          </div>
        </div>
      </div>
    </div>
