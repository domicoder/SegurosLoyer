<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ADMIN-AREA</title>

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/gritter/css/jquery.gritter.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/bootstrap-datetimepicker/datertimepicker.css" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/lib/chart-master/Chart.js"></script>


</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
         <a href="<?php echo base_url(); ?>home/admin/admin-home" class="logo"><b>ADMIN AREA<span> Seguros LOYER</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url(); ?>/Users/logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="<?php echo base_url(); ?>home/admin/admin-profile"><img src="<?php echo base_url(); ?>assets/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
         <h5 class="centered">ADMINISTRADOR</h5>
          <li class="mt">
            <a class="sub-menu" href="<?php echo base_url(); ?>home/admin/admin-home">
              <i class="fa fa-home"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
           <a href="<?php echo base_url(); ?>crud/create/admin-create">
            <i class="fa fa-plus"></i>
              <span>Crear Plan</span>
              </a>

          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url(); ?>crud/edit">
            <i class="fa fa-edit"></i>
              <span>Modificar Plan</span>
              </a>

          </li>
          <li class="sub-menu">
             <a href="<?php echo base_url(); ?>crud/borrar">
            <i class="fa fa-trash"></i>
              <span>Eliminar Plan</span>
              </a>

          </li>
          <li class="sub-menu">
           <a href="<?php echo base_url(); ?>home/admin/admin-registrar">
            <i class="fa fa-users"></i>
              <span>Registrar Nuevo Usuario</span>
              </a>

          </li>
          <li class="sub-menu">
          <a href="<?php echo base_url(); ?>crud/read/admin-buscar">
              <i class="fa fa-search"></i>
              <span>Buscar Plan</span>
              </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
