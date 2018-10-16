<?php include 'header.php'; ?>

       
       <div class="content mt-3 ">
        <div class="animated fadeIn">
            <div class="row">
                 
               <div class="col-lg-10">
                    <div class="card centrar">  
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                  <h3 class="text-center">Registrar Usuario</h3>
                                  </div>
                                  <hr>
                <!--Formulario usuarios-->
                      <form action="funcion-agregar-empleado.php" method="post">
               
                       
                    
                        <div class="form-group col-md-6">
                  <label for="nombre">Nombre de usuario</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
                        <div class="form-group col-md-6">
                  <label for="apellidos">Apellidos</label>
                  <input type="text" class="form-control" name="apellidos" placeholder="Apellido paterno Apellido materno">
                </div>

                        <div class="form-group col-md-6">
                  <label for="direccion">Direccion</label>
                  <input type="text" class="form-control" name="direccion" placeholder="Calle ##, Colonia, Municipio">
                </div>
                        
                        <div class="form-group col-md-6">
                  <label for="email">Correo electronico</label>
                  <input type="text" class="form-control" name="email" placeholder="ejemplo@correo.com">
                </div>
                   <div class="form-group col-md-6">
                  <label for="telefono1">Telefono 1</label>
                  <input type="text" class="form-control" name="telefono1" placeholder="Ej. 31-123-45">
                </div>
                        
                        <div class="form-group col-md-6">
                  <label for="telefono2">Telefono 2</label>
                  <input type="text" class="form-control" name="telefono2" placeholder="Ej. 31-123-45">
                </div>

                    <div class="form-group col-md-6">
                       <label>Cargo</label>
                    <div class="radio">
                    <label>
                      <input type="radio" name="roll" id="tipo1" value="2">
                      Comunnity Manager
                    </label>
                  </div>
                <div class="radio">
                    <label>
                      <input type="radio" name="roll" id="tipo2" value="3" checked>
                      Generador de Contenido
                    </label>
                  </div>
                <div class="radio">
                    <label>
                      <input type="radio" name="roll" id="tipo3" value="4">
                      Diseñador
                    </label>
                  </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="country" class=" form-control-label">Habilidades</label><br>
                            <textarea name="habilidades" rows="5" cols=70>  </textarea>
                        </div>

                    </div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                       
                        <span id="payment-button-amount">Guardar</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                          </div>
                          
                    
                        </div>
                        
                      </div>
                    </div>
                </form>
                  </div>
                 


                </div>

                <!--Fin formulario-->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <?php include 'footer.php'; ?>