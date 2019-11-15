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
              <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>home/trailers">Trailers</a></li>
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

    <div id="banner-area">
      <img src="<?php echo base_url(); ?>assets/TrailerStream/images/banner/banner2.jpg" alt="" />
      <div class="parallax-overlay"></div>
      <!-- Subpage title start -->
      <div class="banner-title-content">
        <div class="text-center">
          <!-- <h2><?php echo $title ?></h2> -->
          <h2>Trailers Details</h2>
        </div>
      </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Portfolio item start -->
    <section id="portfolio-item">
      <div class="container">
        <!-- Portfolio item row start -->
        <div class="row">
          <?php
          foreach ($trailer as $value) {

            $link_video = $value->link;

            $link_video_split = explode('=', $link_video);

            $link_without_id = $link_video_split[1];

            $embed = 'https://www.youtube.com/embed/';

            $link = $embed.$link_without_id;
            ?>
            <!-- Portfolio item slider start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="portfolio-slider">
                <div class="flexportfolio flexslider">
                  <ul class="slides">
                    <li><img src="<?php echo $value->portada; ?>" alt=""></li>
                    <li>
                      <div class="text-center">
                      <iframe width="600" height="400" src="<?php echo $link; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Portfolio item slider end -->

            <!-- sidebar start -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="sidebar">
                <div class="portfolio-desc">

                  <br><br>
                  <h3 class="widget-title"><?php echo $value->titulo; ?></h3>
                  <p><?php echo $value->descripcion; ?></p>
                  <br />
                  <h3 class="widget-title">Más detalles</h3>
                  <p><strong>Genero:</strong> <?php echo $value->genero; ?></p>
                  <p><strong>Director:</strong> <?php echo $value->director; ?></p>
                  <p><strong>Estreno:</strong> <?php echo $value->estreno; ?></p>
                  <br />
                  <p><a target="_blank" href="<?php echo $value->link; ?>" class="project-btn btn btn-primary">Ver trailer</a></p>
                </div>
              </div>
            </div>
            <!-- sidebar end -->
          </div><!-- Portfolio item row end -->
        <?php
        }
        ?>
      </div><!-- Container end -->
    </section><!-- Portfolio item end -->