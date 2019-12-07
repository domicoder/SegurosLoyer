<!-- Portfolio start -->
<section id="main-container" class="portfolio-static">
  <div class="container">
    <div class="row">
      <div class="col-md-12 heading">
        <span class="title-icon classic pull-left"><i class="fa fa-newspaper-o"></i></span>
        <h2 class="title classic">Nuestros servicios</h2>
      </div>
    </div> <!-- Title row end -->
  </div>

  <div class="container">
    <div class="row">

      <?php
      $value = 0;

      foreach ($trailers as $trailer) {
        if ($value < 7) {


          ?>

          <div class="col-sm-3 portfolio-static-item" style="height: 300px">
            <div class="grid">
              <figure class="effect-oscar">
                <img src="<?php echo $trailer->portada; ?>" alt="portada">
                <figcaption>
                  <a class="view icon-pentagon" href="<?php echo base_url('home/service-details/' . $trailer->id); ?>"><i class="fa fa-search"></i></a>
                </figcaption>
              </figure>
              <div class="portfolio-static-desc">
                <h3>Artículo</h3>
                <h3><?php echo $trailer->titulo; ?></h3>
                <span><?php echo $trailer->director; ?></span>
              </div>
            </div>
            <!--/ grid end -->

          </div>
          <?php
          $value++;
        }
      }
      ?>

      <div class="col-sm-3 " style="height: 300px; background-color: white; text-align: center;">
        <div class="grid" style="height: 175px; background-color: white; text-align: center;">
          <figure class="effect-oscar">
            <img height="175" src="http://www.glee.com.ar/assets/img/ver_mas_milo_sm.png" alt="portada">
            <figcaption>
              <a class="link icon-pentagon" href="<?php echo base_url(); ?>home/services"><i class="fa fa-link"></i></a>
            </figcaption>
          </figure>
          <div class="portfolio-static-desc">
            <a href="<?php echo base_url(); ?>home/services">
              <h3>Ver mas </h3>
              <h3>Leer más servicios/planes.</h3>
            </a>
          </div>
        </div>

      </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Portfolio end -->