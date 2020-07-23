<div class="col fondo">
   <div class="row">
      <div class="col-12 mt-3">
         <a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu"
         data-toggle="collapse">Ocultar</a>
      </div>
   <!-- MOSTRANDO ANOTADORES EXISTENTES -->
   <?php if (!isset($_REQUEST['id'])): ?>
      <div class="col-12">
         <div class="card mt-3">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h5><i class="fas fa-greater-than-equal" style="position: relative; top: .1em;"></i>Anotadores Agregados</h5>
                  </div>
                  <div class="col-4">
                     <a href="#AgregarAnotador" class="btn b1 b1-info btn-block"><i class="fas fa-share fa-lg mr-2 pos"></i>Agregar</a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <table id="tbAnotador" class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-info">
                           <th>CI</th>
                           <th>Nombre</th>
                           <th>Apellido</th>
                           <th>Anotando</th>
                           <th>Sexo</th>
                        </thead>
                        <tbody>
                              <?php 
                                   addItemAdminActu($anotadores, '?c=anotador'); 
                              ?>        
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
   </div>
   <!-- AGREGANDO ANOTADOOOOR -->
   <div class="row ">
      <div class="col">
         <div class="card mt-3"  id="AgregarAnotador">
            <div class="card-header">
               <h5><svg class="bi bi-folder-plus" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/><path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/></svg>
                  <?php echo isset($actu) ? 'Actualizar Anotador': 'Agregar Anotador' ?></h5>
            </div>
            <div class="card-body">
               <!-- EMPIEZA FORMULARIO DE AGREGAR -->
               <form method="POST" id="Agregando_Anotador" action="?c=Anotador&m=guardar<?php echo isset($actu) ? "&id=$actu->CI": '' ?>">
                  <div class="form-group row <?php echo isset($actu) ? 'd-none': '' ?>">
                     <div class="col">
                        <h6><em><i class="far fa-clipboard fa-2x mr-2" style="position: relative; top: .1em;"></i>Ingrese los siguientes datos:</em></h6>
                     </div>
                  </div>
                  <!-- DATOS PERSONALES -->
                  <div class="form-group row justify-content-center">
                     <div class="col-auto">
                        <select name="Nacionalidad" id="Estado" class="form-control">
                           <option value="V" 
                           <?php echo isset($actu) && $actu->Nacionalidad = 'V' ? 'selected': '' ?>>V</option>
                           <option value="E" <?php echo isset($actu) && $actu->Nacionalidad = 'E' ? 'selected': '' ?>>E</option>
                        </select>
                     </div>
                     <div class="col-6 col-md-3 mb-2">
                        <input  id="Cedula_Anotador" type="text" placeholder="Cédula" class="form-control" name="Cedula_Anotador" minlength="8" maxlength="8" pattern="[0-9]+" required value="<?php echo isset($actu) ? $actu->CI: '' ?>">
                     </div>
                     <div class="col-6 col-md-3">
                        <input type="text" name="Nombre_Anotador" id="Nombre_Anotador" placeholder="Nombre" minlength="2" maxlength="30" pattern="[A-Za-z ]+" class="form-control" required value="<?php echo isset($actu) ? $actu->Nombre: '' ?>">
                     </div>
                     <div class=" col-9 col-md-3">
                        <input type="text" name="Apellido_Anotador" id="Apellido_Anotador" placeholder="Apellido" minlength="4" maxlength="30" pattern="[A-Za-z ]+" class="form-control" required value="<?php echo isset($actu) ? $actu->Apellido: '' ?>">
                     </div>
                  </div>
                  <div class="row justify-content-center mb-2">
                     <div class="col-6 col-md-3">
                        <label for="Inicio_Anotador">Inicio en el campo</label>
                        <input id=""  type="date" name="Inicio_Anotador" id="Inicio_Anotador" class="form-control" required min="1960-01-01" max="2020-06-30" value="<?php echo isset($actu) ? $actu->Nacido: '' ?>">
                     </div>
                     <div class="col-4 col-md-2 mt-4">
                        <div  class="custom-control custom-radio mr-2">
                           <input type="radio" name="Sexo" id="mujer" class="custom-control-input"  value="M" checked>
                           <label for="mujer" class="custom-control-label">Mujer</label>
                        </div>
                        <div class="custom-control custom-radio ">
                           <input value="H" type="radio" name="Sexo" id="hombre" class="custom-control-input"
                           <?php echo isset($actu) && ucwords($actu->Sexo) == 'H' ? 'checked': '' ?>>
                           <label for="hombre" class="custom-control-label">Hombre</label>
                        </div>
                     </div>
                  </div>
                  <!-- Direccion del anotador -->
                  <div class="row justify-content-center">
                        <div class="col-auto">
                        <h6><em><i class="fas fa-map-signs fa-3x" style="position: relative; top: .2em;"></i>Dirección Actual:</em></h6>
                     </div>
                     <div class="col-4 col-md-3">
                        <label for="Estado">Estado:</label>
                        <select name="Estado" id="Estado" class="form-control">
                           <option value="Lara">Lara</option>
                           <option value="Aragua">Aragua</option>
                        </select>
                     </div>
                     <div class="col-4 col-md-3">
                        <label for="Municipio">Municipio:</label>
                        <select name="Municipio" id="Municipio" class="form-control">
                           <option value="Iribarren">Iribarren</option>
                           <option value="Palavecino">Palavecino</option>
                        </select>
                     </div>
                     <div class="col-4 col-md-3">
                        <label for="Parroquia">Parroquia</label>
                        <select class="form-control" id="Parroquia" name="Parroquia">
                           <?php    
                              $sql_leer = "select idParroquia, Parroquia from Parroquia";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 if ($campo->idParroquia == $actu->idParroquia){
                                    echo "<option value='$campo->idParroquia' selected> $campo->Parroquia </option>";
                                 }else {
                                    echo "<option value='$campo->idParroquia'> $campo->Parroquia </option>";
                                 }
                              }
                            ?>
                        </select>
                     </div>
                  </div>
                  <div class="row justify-content-center mt-3">
                     <div class="col-10 col-md-7 mb-2">
                           <textarea class="form-control" name="Direccion" id="Direccion" placeholder="Ingrese la Dirección actual del jugador, por favor" minlength="10" maxlength="45" pattern="[A-Za-z0-9 ]+" required cols="60" rows="3" style="width: 100%"><?php echo isset($actu) ? $actu->Direccion: '' ?></textarea>
                     </div>
                     <div class="col-12 col-md-4 mt-4 align-self-md-center">
                        <button id="btnRegistrar" type="submit" class="btn b1 b1-primary btn-block"><i class="icon-mas fa-lg" style="text-shadow: 1px 1px 1px #000"></i> <?php echo isset($actu) ? 'Actualizar': 'Agregar' ?></button>
                     </div>
                  </div> 
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>