<?php include 'header.php'; ?>
            <div class="content mt-3 ">
            <div class="animated fadeIn">
                <div class="row">
                   
                  <div class="col-lg-10">
                    <div class="card centrar">
                       
                        <div class="card-body ">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center">Registrar Campaña</h3>
                                  </div>
                                  <hr>
                                  <form action="" method="post" novalidate="novalidate">
                                     
                                      <!--Eleccion de empresa-->
                                      <div class="row">
                                          <div class="col-6">
                                          <div class="row form-group">
                                            <label for="selectm" class=" form-control-label">Seleccione la empresa</label>
                                            <div class="col-12 col-md-12">
                                            <select name="selectSm" id="SelectLm" class="form-control cc-name valid">
                                                <option value="1">Empresa 1</option>
                                                <option value="2">Empresa 2</option>
                                                <option value="3">Empresa 3</option>
                                                <option value="4">Empresa 4</option>
                                                <option value="5">Empresa 5</option>
                                            </select>
                                            </div>
                                          </div>

                                          </div>
                                          <div class="col-6">
                                          <div class="row form-group">
                                            <label for="selectm" class=" form-control-label">Seleccione community manager</label>
                                            <div class="col-12 col-md-12">
                                            <select name="selectSm" id="SelectLm" class="form-control cc-name valid">
                                                <option value="1">CM 1</option>
                                                <option value="2">CM 2</option>
                                                <option value="3">CM 3</option>
                                                <option value="4">CM 4</option>
                                                <option value="5">CM 5</option>
                                            </select>
                                            </div>
                                          </div>
                                          </div>
                                      </div>

                                    <div class="form-group has-success">
                                          <label for="cc-name" class="control-label mb-1">Nombre de Campaña</label>
                                          <input name="n-campaña" id="n-campaña" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                          <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Fecha de inicio</label>
                                                <input name="f-inicio" id="f-inicio" type="date" class="form-control cc-name valid" value="" >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                            
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Fecha de termino</label>
                                                <input name="f-termino" id="f-termino" type="date" class="form-control cc-name valid" value="" >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                     </div>

                                    <div class="form-group has-success">
                                          <label for="cc-name" class="control-label mb-1">Objetivo de campaña</label>
                                          <textarea name="o-campaña" id="o-campaña" type="text" class="form-control cc-name valid"></textarea>

                                    </div>
                                    <hr>
                                    <h3 class="text-center">Gerente</h3>
                                    <br>
                                    <div class="row form-group">   
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Nombre del gerente</label>
                                                <input name="g-nombre"  id="g-nombre" type="text" class="form-control cc-name valid" value="" >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                            
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Puesto/Cargo</label>
                                                <input  name="g-puesto" id="g-puesto" type="text" class="form-control cc-name valid" value="" >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Horario</label>
                                                <input name="g-horario" id="g-horario" type="text" class="form-control cc-name valid" value="" >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                     </div>

                                        <div class="row form-group">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correo electronico</label>
                                                <input name="g-correo" id="g-correo" type="text" class="form-control cc-name valid" value="" >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                            
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Telefono</label>
                                                <input name="g-telefono" id="g-telefono" type="text" class="form-control cc-name valid" value="" >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                     </div>

                                      <div class="col-12 centrado" >
                                          <button  id="c-guardar" type="submit" class="btn btn-lg btn-info btn-block">
                                            Guardar
                                          </button>
                                      </div>

                                  </form>
                              </div>
                          </div>

                        </div>
                       
                    </div> <!-- .card -->
                    
                  </div><!--/.col-->


              

               



                           

            </div><!-- .animated -->
        </div><!-- .content -->


    <?php include 'footer.php'; ?>