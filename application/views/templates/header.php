<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>TrailersStream</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
	================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicons
	================================================== -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico">

  <!-- CSS
	================================================== -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/bootstrap.min.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/style.css">
  <!-- Responsive styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/responsive.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/font-awesome.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/animate.css">
  <!-- Prettyphoto -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/prettyPhoto.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/owl.theme.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/flexslider.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/cd-hero.css">
  <!-- Style Swicther -->
  <link id="style-switch" href="<?php echo base_url(); ?>assets/TrailerStream/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="body-inner">

    <!-- Header start -->
    <header id="header" class="navbar-fixed-top header" role="banner">
      <div class="container">
        <div class="row">
          <!-- Logo start -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">TrailerStream</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-bg">
              <a href="<?php echo base_url(); ?>">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/TrailerStream/images/logo.png" alt="logo">
              </a>
            </div>
          </div>
          <!--/ Logo end -->
          <nav class="collapse navbar-collapse clearfix" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li><a href="<?php echo base_url(); ?>home/trailers">Trailers</a></li>
              <li><a href="<?php echo base_url(); ?>home/nosotros">Nosotros</a></li>
              <li><a href="<?php echo base_url(); ?>home/contacto">Contacto</a></li>
            </ul>
          </nav>
          <!--/ Navigation end -->
        </div>
        <!--/ Row end -->
      </div>
      <!--/ Container end -->
    </header>
    <!--/ Header end -->

    <!-- Slider start -->
    <section id="home" class="no-padding">
      <div id="main-slide" class="cd-hero">
        <ul class="cd-hero-slider">
          <li class="selected">
            <div class="overlay2">
              <img class="" src="<?php echo base_url(); ?>assets/TrailerStream/images/slider/bg1.jpg" alt="slider">
            </div>
            <div class="cd-full-width">
              <h2>Los muertos no mueren</h2>
              <h3>En la pequeña localidad de Centerville, los muertos vuelven a la vida y un variopinto grupo de personajes tendrá que hacerles frente.</h3>
              <a href="#0" class="btn btn-primary solid cd-btn">Leer más...</a>
            </div> <!-- .cd-full-width -->
          </li>
          <li>
            <div class="overlay2">
              <img class="" src="<?php echo base_url(); ?>assets/TrailerStream/images/slider/bg2.jpg" alt="slider">
            </div>
            <div class="cd-half-width">
              <h2>Alta vida</h2>
              <p>En el espacio profundo. Más allá de nuestro sistema solar. Monte y su hija Willow viven juntos en una nave espacial, completamente aislados.</p>
              <a href="#0" class="cd-btn btn btn-primary solid">Leer más...</a>
            </div> <!-- .cd-half-width -->

            <div class="cd-half-width cd-img-container">
              <img src="<?php echo base_url(); ?>assets/TrailerStream/images/slider/bg-thumb1.png" alt="">
            </div> <!-- .cd-half-width.cd-img-container -->
          </li>
          <li>
            <div class="overlay2">
              <img class="" src="<?php echo base_url(); ?>assets/TrailerStream/images/slider/bg3.jpg" alt="slider">
            </div>
            <div class="cd-half-width cd-img-container img-right">
              <img src="<?php echo base_url(); ?>assets/TrailerStream/images/slider/bg-thumb2.png" alt="">
            </div> <!-- .cd-half-width.cd-img-container -->
            <div class="cd-half-width">
              <h2>Juego de niños</h2>
              <p>Karen (Aubrey Plaza), es una madre soltera que le regala a su hijo Andy (Gabriel Bateman) un muñeco por su cumpleaños sin ser consciente de la naturaleza maligna que esconde en su interior.</p>
              <a href="#0" class="cd-btn btn secondary btn-primary solid">Leer más...</a>
            </div> <!-- .cd-half-width -->
          </li>
        </ul>
        <!--/ cd-hero-slider -->

        <div class="cd-slider-nav">
          <nav>
            <span class="cd-marker item-1"></span>
            <ul>
              <li class="selected"><a href="#0"><i class="fa fa-star"></i></a></li>
              <li><a href="#0"><i class="fa fa-star"></i></a></li>
              <li><a href="#0"><i class="fa fa-star"></i></a></li>
            </ul>
          </nav>
        </div> <!-- .cd-slider-nav -->

      </div>
      <!--/ Main slider end -->
    </section>
    <!--/ Slider end -->


    <!-- Service box start -->
    <section id="service" class="service angle">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading">
            <span class="title-icon pull-left"><i class="fa fa-lightbulb-o"></i></span>
            <h2 class="title">¿Por qué TrailerStream?<span class="title-desc">Quizás te preguntes...</span></h2>
          </div>
        </div><!-- Title row end -->

        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-delay="1.4s">
              <div class="service-content text-center">
                <span class="service-icon icon-pentagon"><i class="fa fa-film"></i></span>
                <h3>Trailers</h3>
                <p>Aquí encontrarás todos los trailers de tus peliculas favoritas...</p>
                <br />

                <span class=""><img class="img-responsive" src="<?php echo base_url(); ?>assets/TrailerStream/images/logo.png" alt="logo"></span>

                <p><strong>TrailerStream</strong> tu mejor elección para ver Trailers.</p>
              </div>
            </div>
            <!--/ End 4th service -->
          </div>
        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section>
    <!--/ Service box end -->
