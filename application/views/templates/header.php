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
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/SegurosLoyer/images/logo_only_trademark.png" alt="logo">
              </a>
            </div>
          </div>
          <!--/ Logo end -->
          <nav class="collapse navbar-collapse clearfix" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li><a href="<?php echo base_url(); ?>home/services">Servicios</a></li>
              <li><a href="<?php echo base_url(); ?>home/cotizacion">Cotizaciones</a></li>
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
              <img class="" src="<?php echo base_url(); ?>assets/SegurosLoyer/images/slider/bg1.jpg" alt="slider">
            </div>
            <div class="cd-full-width">
              <h2>Seguros de Vida</h2>
              <h3>Resguarda la educación de tus hijos con buen seguro de vida.</h3>
              <a href="<?php echo base_url(); ?>home/trailers" class="btn btn-primary solid cd-btn">Leer más...</a>
            </div> <!-- .cd-full-width -->
          </li>
          <li>
            <div class="overlay2">
              <img class="" src="<?php echo base_url(); ?>assets/SegurosLoyer/images/slider/bg2.jpg" alt="slider">
            </div>
            <div class="cd-half-width">
              <h2>Contáctanos</h2>
              <p>Para recibir información adicional, no dude en informarnos por esta via. Respondemos en 24 horas.</p>
              <a href="<?php echo base_url(); ?>home/contacto" class="cd-btn btn btn-primary solid">Leer más...</a>
            </div> <!-- .cd-half-width -->

            <div class="cd-half-width cd-img-container">
              <img src="<?php echo base_url(); ?>assets/SegurosLoyer/images/slider/bg-thumb1.png" alt="">
            </div> <!-- .cd-half-width.cd-img-container -->
          </li>
          <li>
            <div class="overlay2">
              <img class="" src="<?php echo base_url(); ?>assets/SegurosLoyer/images/slider/bg3.jpg" alt="slider">
            </div>
            <div class="cd-half-width cd-img-container img-right">
              <img src="<?php echo base_url(); ?>assets/SegurosLoyer/images/slider/bg-thumb2.png" alt="">
            </div> <!-- .cd-half-width.cd-img-container -->
            <div class="cd-half-width">
              <h2>Seguro de Vehículo</h2>
              <p>Adquiere el mejor seguro para tu vehículo. Viaja sin preocupación ante cualquier accidente que le ocurra a su vehículo.</p>
              <a href="<?php echo base_url(); ?>home/trailers" class="cd-btn btn secondary btn-primary solid">Leer más...</a>
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
            <h2 class="title">¿Por qué Seguros LOYER?<span class="title-desc">Quizás te preguntes...</span></h2>
          </div>
        </div><!-- Title row end -->

        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-delay="1.4s">
              <div class="service-content text-center">
                <span class="service-icon icon-pentagon"><i class="fa fa-flag"></i></span>
                <h3>Nuestra marca</h3>
                <p>Si nos elegiste, lo has hecho excelente.</p>
                <br />

                <span class=""><img class="img-responsive" src="<?php echo base_url(); ?>assets/SegurosLoyer/images/logo.png" alt="logo"></span>

                <p><strong>Seguros LOYER</strong> tu mejor elección para asegurarte; con nosotros ante cualquier situación siempre estarás en primer lugar, tú eres nuestro motivo.</p>
              </div>
            </div>
            <!--/ End 4th service -->
          </div>
        </div><!-- Content row end -->
        <br />
        <br/>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-delay="1.4s">
              <div class="service-content text-center">
                <span class="service-icon icon-pentagon"><i class="fa fa-tags"></i></span>
                <h3>Planes Disponibles</h3>
                <p>Estos son nuestros mejores planes, los cuales están adaptados acorde al estado de la sociedad Dominicana.</p>
              </div>
            </div>
            <!--/ End 4th service -->
          </div>
        </div><!-- Content row end -->

        <div class="row ts_counter elements no-padding">
          <!-- plan start -->
          <div class="col-md-4 col-sm-6 wow fadeInUp facts" data-wow-delay="1.4s">
              <div class="plan text-center featured">
                  <span class="plan-name">Seguro <small>de vida</small></span>
                  <p class="plan-price"><sup class="currency">RD$</sup><strong>485</strong><sub>.99</sub><sup class="currency">Mensual</sup></p>
                  <ul class="list-unstyled">
                      <li>Covertura parcial</li>
                      <li>Plan dental</li>
                      <li>Medicare</li>
                  </ul>
                  <a class="btn btn-primary" href="<?php echo base_url();?>home/cotizacion">Hacer cotización</a>
              </div>
          </div><!-- plan end -->

          <!-- plan start -->
          <div class="col-md-4 col-sm-6 wow fadeInUp facts" data-wow-delay="1.4s">
              <div class="plan text-center featured">
                  <span class="plan-name">Seguro <small>de hogar</small></span>
                  <p class="plan-price"><sup class="currency">RD$</sup><strong>669</strong><sub>.99</sub><sup class="currency">Mensual</sup></p>
                  <ul class="list-unstyled">
                      <li>Convertura completa</li>
                      <li>Seguro de vida</li>
                      <li>Seguro de hogar</li>
                  </ul>
                  <a class="btn btn-primary" href="<?php echo base_url();?>home/cotizacion">Hacer cotización</a>
              </div>
          </div><!-- plan end -->

          <!-- plan start -->
          <div class="col-md-4 col-sm-6 wow fadeInUp facts" data-wow-delay="1.4s">
              <div class="plan text-center featured">
                  <span class="plan-name">Seguro <small>de vehículo</small></span>
                  <p class="plan-price"><sup class="currency">RD$</sup><strong>889</strong><sub>.99</sub><sup class="currency">Mensual</sup></p>
                  <ul class="list-unstyled">
                      <li>Covertura complete</li>
                      <li>Seguro dental</li>
                      <li>Seguro de salud</li>
                  </ul>
                  <a class="btn btn-primary" href="<?php echo base_url();?>home/cotizacion">Hacer cotización</a>
              </div>
          </div><!-- plan end -->
        </div>
      </div>
      <!--/ Container end -->
    </section>
    <!--/ Service box end -->
