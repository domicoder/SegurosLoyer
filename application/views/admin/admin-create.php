    <section id="main-content">
        <section class="wrapper">
           <div class="row">
           <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Crear Película</h4>
            <div class="form-panel">
              <div class=" form">
                <?php echo validation_errors(); ?>
                <?php if ($this->session->flashdata('creation_success')): ?>
                  <?php echo '<p class ="alert alert-success">'.$this->session->flashdata('creation_success').'</p>'; ?>
                <?php endif; ?>

                <?php echo form_open('crud/create'); ?>
                <div class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="Ctitulo" class="control-label col-lg-3">URL de la portada:</label>
                    <div class="col-lg-4">
                      <input class="form-control" id="Curl" name="portada" minlength="2" type="text" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Ctitulo" class="control-label col-lg-3">Titulo de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class=" form-control" id="Ctitulo" name="titulo" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="Cgenero" class="control-label col-lg-3">Genero de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="Cgenero" type="text" name="genero" required />
                    </div>
                  </div>

                 <div class="form-group ">
                    <label for="Cdirector" class="control-label col-lg-3">Director de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="Cdirector" type="text" name="director" required />
                    </div>
                  </div>

                   <div class="form-group">
                  <label for="Cdate" class="control-label col-lg-3">Seleccione fecha de estreno:</label>
                  <div class="col-md-3">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2019" class="input-append date dpYears">
                      <input type="date" name="cdate" size="16" class="form-control" required>
                    </div>

                    </div>
                   </div>

                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-3">URL Del Trailer de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="curl" type="url" name="url" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Ccomentario" class="control-label col-lg-3">Descripcion de la Pelicula:</label>
                    <div class="col-lg-4">
                      <textarea class="form-control " id="Ccomentario" name="descripcion" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-3  col-lg-4">
                      <button class="btn btn-theme03" type="submit">Guardar</button>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
        </section>





  </section>
  <!--/main content-->

      <!--footer start-->
