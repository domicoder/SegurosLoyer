
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Eliminar Película</h3>

        <div class="row mt">
          <div class="col-lg-12">

            <?php echo form_open('crud/buscar/admin-eliminar'); ?>
                  <div class="cmxform form-horizontal style-form" id="commentForm">
                          <div class="form-group ">
                            <div class="col-lg-10">
                              <input class=" form-control" id="Mbusqueda" name="busqueda" minlength="2" type="text" placeholder="Buscar pelicula a Modificar" required />
                            </div>

                          <div class="col-lg-2">
                            <button class="btn btn-theme03" type="submit">BUSCAR</button>
                          </div>
                        </div>
              <?php echo form_close(); ?>

          </div><br>


          <div class="row">
           <div class="col-lg-12">
           <div class="form-panel">
               <div class=" form">
                 <?php echo form_open('crud/delete/'.$trailer['id']); ?>
                   <div class="cmxform form-horizontal style-form" id="commentForm">
                     <div class="form-group ">
                     <label for="Ctitulo" class="control-label col-lg-3">URL de la portada:</label>
                     <div class="col-lg-4">
                       <input class=" form-control" id="Curl" value="<?php echo $trailer['portada']; ?>" name="portada" minlength="2" type="text" disabled/>
                     </div>
                   </div>

                    <div class="form-group ">
                    <label for="Ctitulo" class="control-label col-lg-3">Titulo de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class=" form-control" id="Ctitulo" value="<?php echo $trailer['titulo']; ?>" name="titulo" minlength="2" type="text" disabled/>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="Cgenero" class="control-label col-lg-3">Genero de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="Cgenero" type="text" value="<?php echo $trailer['genero']; ?>" name="genero" disabled/>
                    </div>
                  </div>

                 <div class="form-group ">
                    <label for="Cdirector" class="control-label col-lg-3">Director de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="Cdirector" type="text" value="<?php echo $trailer['director']; ?>" name="director" disabled />
                    </div>
                  </div>

                   <div class="form-group">
                  <label for="Cdate" class="control-label col-lg-3">Seleccione fecha de estreno:</label>
                  <div class="col-md-3">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2019" class="input-append date dpYears">
                      <input type="text" readonly="" name="Cdate" size="16" class="form-control" value="<?php echo $trailer['estreno']; ?>" disabled>
                    </div>

                    </div>
                   </div>

                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-3">URL Del Trailer de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " value="<?php echo $trailer['link']; ?>" id="curl" type="url" name="url" disabled/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Ccomentario" class="control-label col-lg-3">Descripcion de la Pelicula:</label>
                    <div class="col-lg-4">
                      <textarea class="form-control " id="Ccomentario" name="comentario" disabled><?php echo $trailer['descripcion']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-3  col-lg-4">
                      <button class="btn btn-theme04" type="submit">Eliminar</button>
                    </div>
                  </div>
                    <?php echo form_close(); ?>
                </div>
           </div>

          </div>


        </div>

      </section>




   </section>
  <!--/main content-->

      <!--footer start-->
