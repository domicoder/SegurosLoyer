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
              <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li><a href="<?php echo base_url(); ?>home/services">Servicios</a></li>
              <li><a href="<?php echo base_url(); ?>home/cotizacion">Cotizaciones</a></li>
              <li><a href="<?php echo base_url(); ?>home/nosotros">Nosotros</a></li>
              <li class="active"><a href="<?php echo base_url(); ?>home/contacto">Contacto</a></li>
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
          <h2><?php echo $title ?></h2>
        </div>
      </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container">
      <div class="container">

        <div class="row">
          <!-- Map start here -->
          <div id="map-wrapper" class="no-padding">
            <div class="container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d236.54363042559396!2d-69.66166352829583!3d18.45201225209617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.4520533!2d-69.6615777!4m5!1s0x8eaf7ff3c0268889%3A0x21e5b3265c8d658b!2sResidencia+Acad%C3%A9mica%2C+Campus+ITLA%2C+Calle+Cibernetico+Itla+Road%2C+Santo+Domingo!3m2!1d18.4518698!2d-69.66162489999999!5e0!3m2!1sen!2sdo!4v1564961246577!5m2!1sen!2sdo" width="1150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <!--/ Map end here -->

        </div><!-- Content row  end -->

        <div class="gap-40"></div>

        <div class="row">
          <div class="col-md-7">
            <form id="contact-form" action="contact-form.php" method="post" role="form">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" name="name" id="name" placeholder="" type="text" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" id="email" placeholder="" type="email" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Asunto</label>
                    <input class="form-control" name="subject" id="subject" placeholder="" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Mensaje</label>
                <textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit">Enviar Mensaje</button>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div class="contact-info">
              <h3>Detalles de contacto</h3>
              <p><strong>Seguros LOYER</strong> tu mejor elección para asegurarte; con nosotros ante cualquier situación siempre estarás en primer lugar, tú eres nuestro motivo.</p>
              <br>
              <p><i class="fa fa-home info"></i> Autopista Las Américas, Km. 27, PCSD, La Caleta, Boca Chica 11606 </p>
              <p><i class="fa fa-envelope-o info"></i> 20175379@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20175295@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20175586@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20175541@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20175072@itla.edu.do</p>
            </div>
          </div>
        </div>

      </div>
      <!--/ container end -->

    </section>
    <!--/ Main container end -->