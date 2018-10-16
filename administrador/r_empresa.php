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
                                    <h3 class="text-center">Registrar Empresa</h3>
                                  </div>
                                  <hr>
                                  <form action="registrar.php" method="post" class="form-register" onsubmit="return">
                                      <div class="form-group text-center">
                                          
                                      </div>

                                      <div class="col-lg-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                      </div>


                                      <div class="col-lg-8">
                                        <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Razon social</label>
                                          <input type="text" id="text-input" name="razon_social" placeholder="Ingresa la razon social" class="form-control" title="Solo se aceptan letras" required >
                                          
                                      </div>
                                      <div class="form-group has-success">
                                          <label for="cc-name" class="control-label mb-1">Dirección </label>
                                          <input type="address" id="text-input" name="direccion" placeholder="Ingresa la direccion" class="form-control" required  >


                                        </div>

                                         <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Telefono</label>
                                      <input type="tel" id="tel-input" name="telefono"  placeholder="Ingresa el telefono" class="form-control" required pattern="[0-9]{10}">
                                                  
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Correo</label>
                                              <input type="email" id="email-input" name="correo" placeholder="Ingresa tu correo" class="form-control" required >
                                              
                                          </div>
                                      </div>
                                      

                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Id de facebook</label>
                                                  <input type="numeric" id="text-input" name="id_facebook" placeholder="Ingresa el id" class="form-control" required >


                                                  
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Clave secreta de facebook</label>
                                              <input type="text" id="text-input" name="clave_secreta" placeholder="Ingresa la clave" class="form-control" required>
                                              
                                          </div>
                                      </div>      


                                       <div class="form-group">
                                          <label for="cc-number" class="control-label mb-1">Tocken de acceso</label>
                                        <input type="text" id="text-input" name="tocken_acceso" placeholder="Ingresa el tocken" class="form-control" required>
                                          
                                      </div>

                                       <div class="form-group">
                                      <label for="cc-number" class="control-label mb-1">Horario</label>
                                      <input type="time" id="time-input" name="horario" placeholder="Ingresa el horario" class="form-control" required>
                                          
                                      </div>

                                      </div>
                                      
                            

                        <div class="card-title">
                        
                        <h3 class="text-center">Cliente</h3>
                        <hr> 
                        </div>
                         

                          <div class="row">
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Nombre</label>
                                                  <input type="text" id="text-input" name="nombre_cliente" placeholder="Ingresa el nombre" class="form-control" required>  
                                                  
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <label for="cc-exp" class="control-label mb-1">Puesto</label>
                                                  <input type="text" id="text-input" name="puesto_cliente" placeholder="Ingresa el puesto" class="form-control" required>
                                              
                                          </div>

                                          <div class="col-4">
                                      <label for="cc-number" class="control-label mb-1">Horario</label>
                                      <input type="time" id="time-input" name="horario_cliente" placeholder="Ingresa el horario" class="form-control" required> 
                                              
                                          </div>
                                      </div>      

                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                               <label for="x_card_code" class="control-label mb-1">Correo</label>
                                              <input type="email" id="email-input" name="correo_cliente" placeholder="Ingresa tu correo" class="form-control" required>   
                                                  
                                              </div>
                                          </div>
                                          <div class="col-6">
                                            <label for="cc-exp" class="control-label mb-1">Telefono</label>
                                            <input type="tel" id="tel-input" name="telefono_cliente" placeholder="Ingresa el telefono" class="form-control" required pattern="[0-9]{10}"> 
                                              
                                          </div>

                                      </div>    

                                     </div>
                                      
                                      </div><!-- cierra el cardbody-->
                                      
                                      
                                      <div>
                                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                              
                                              <span id="payment-button-amount">Guardar</span>
                                              <span id="payment-button-sending" style="display:none;">guardando…</span>
                                          </button>
                                      </div>



                                  </form>


                              </div>
                          </div>
                        </div>
                        </div>
                    </div> <!-- .card -->

               
        

            </div><!-- .animated -->
        </div><!-- .content -->



    <?php include 'footer.php'; ?>