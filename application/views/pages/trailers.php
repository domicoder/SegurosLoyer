<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>Seguros LOYER</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
	================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicons
	================================================== -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/SegurosLoyer/images/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/SegurosLoyer/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/SegurosLoyer/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/SegurosLoyer/images/favicon.ico">

  <!-- CSS
	================================================== -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/bootstrap.min.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/style.css">
  <!-- Responsive styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/responsive.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/font-awesome.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/animate.css">
  <!-- Prettyphoto -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/prettyPhoto.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/owl.theme.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/flexslider.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/cd-hero.css">
  <!-- Style Swicther -->
  <link id="style-switch" href="<?php echo base_url(); ?>assets/SegurosLoyer/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

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
              <span class="sr-only">Seguros LOYER</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-bg">
              <a href="<?php echo base_url(); ?>">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/SegurosLoyer/images/logo.png" alt="logo">
              </a>
            </div>
          </div>
          <!--/ Logo end -->
          <nav class="collapse navbar-collapse clearfix" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>home/trailers">Servicios</a></li>
              <li><a href="#">Cotizaciones</a></li>
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
      <img src="<?php echo base_url(); ?>assets/SegurosLoyer/images/banner/banner2.jpg" alt="" />
      <div class="parallax-overlay"></div>
      <!-- Subpage title start -->
      <div class="banner-title-content">
        <div class="text-center">
          <h2><?php echo ('Servicios'); ?></h2>
        </div>
      </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Portfolio start -->
    <section id="main-container" class="portfolio-static">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading">
            <span class="title-icon classic pull-left"><i class="fa fa-newspaper-o"></i></span>
            <h2 class="title classic">Trailers Disponibles</h2>
          </div>
        </div> <!-- Title row end -->
      </div>

      <div class="container">
        <?php

        foreach ($trailers as $trailer) {
          ?>

          <div class="col-sm-3 portfolio-static-item" style="height: 300px;">
            <div class="grid">
              <figure class="effect-oscar">
                <img src="<?php echo $trailer->portada; ?>" alt="portada">
                <figcaption>
                <a class="view icon-pentagon" href="<?php echo base_url('home/trailer-details/' . $trailer->id); ?>"><i class="fa fa-search"></i></a>
                </figcaption>
              </figure>
              <div class="portfolio-static-desc">
                <h3>Trailer</h3>
                <h3><?php echo $trailer->titulo; ?></h3>
                <span><?php echo $trailer->director; ?> </span>
              </div>
            </div>
            <!--/ grid end -->

          </div>
        <?php
        }
        ?>

      </div><!-- Content row end -->

      <div class="col-md-12 text-center">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
  </div><!-- Container end -->
  </section><!-- Portfolio end -->

  <!-- Footer start -->
  <section id="footer" class="footer footer-map">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="footer-logo">
            <img src="<?php echo base_url(); ?>assets/SegurosLoyer/images/logo.png" width="170px" alt="logo">
          </div>
          <div class="gap-20"></div>
          <ul class="dark unstyled">
            <li>
              <a title="Twitter" href="#">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-github"></i></span>
              </a>
              <a title="linkedin" href="#">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--/ Row end -->
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="copyright-info">
            &copy; Inspired <span>in <a href="https://themefisher.com">THEMEFISHER</a></span>
          </div>
        </div>
      </div>
      <!--/ Row end -->
      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
        <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
      </div>
    </div>
    <!--/ Container end -->
  </section>
  <!--/ Footer end -->

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/jquery.js"></script>
  <!-- Bootstrap jQuery -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/bootstrap.min.js"></script>
  <!-- Style Switcher -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/style-switcher.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/owl.carousel.js"></script>
  <!-- PrettyPhoto -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/jquery.prettyPhoto.js"></script>
  <!-- Bxslider -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/jquery.flexslider.js"></script>
  <!-- CD Hero slider -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/cd-hero.js"></script>
  <!-- Isotope -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/isotope.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/ini.isotope.js"></script>
  <!-- Wow Animation -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/wow.min.js"></script>
  <!-- SmoothScroll -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/smoothscroll.js"></script>
  <!-- Eeasing -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/jquery.easing.1.3.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/jquery.counterup.min.js"></script>
  <!-- Waypoints -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/waypoints.min.js"></script>
  <!-- Template custom -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/SegurosLoyer/js/custom.js"></script>
  </div><!-- Body inner end -->
</body>

</html>