<?php 
      $conexion = new Conexion();

?>
<div class="col fondo">
   <div class="row" >

      <div class="col-12 mt-3">
         <a href="#menu" class="btn btn-info icon-play" aria-expanded="false" aria-controls="menu" data-toggle="collapse">Ocultar</a>
      </div>

   <!-- AGREAR / ACTUALIZAR CAMPO -->

      <div class="col-12 mt-3">
         <div class="card" id="AgregarCampo">
            <div class="card-header">
               <h5><svg class="bi bi-folder-plus" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/><path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/></svg>
                  <?php echo isset($campox) ? 'Actualizar Campo': 'Agregar Campo' ?></h5>
            </div>
            <div class="card-body">
               <form method="POST" action="?c=campos&m=guardar<?php echo isset($campox) ? "&id=$campox->id": '' ?>">
                  <div class="form-group row">
                     <div class="col-12">
                        <?php if (!empty($this->ERROR)) {
                                 Error($this->ERROR);
                              } 
                        ?>
                     </div>
                     <div class="col-7 col-md-3 mb-1">
                        <label for="Nombre_Campo">Nombre del Campo</label>
                        <input type="text" class="form-control" name="Nombre_Campo" required minlength="4" maxlength="30"  pattern="[A-Za-z ]+" id="Nombre_Campo"
                        value="<?php echo isset($campox) != null ? $campox->Campo : '' ?>">
                     </div>
                     <div class="col-5 col-md-3 mb-1">
                        <label for="Estado">Estado</label>
                        <select class="form-control" id="Estado" name="Estado">
                           <?php    
                              $sql_leer = "select idEstado, Estado from estados";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 if ($campo->idEstado == $campox->idEstado){
                                    echo "<option value='$campo->idEstado' selected> $campo->Estado </option>";
                                 }else {
                                    echo "<option value='$campo->idEstado'> $campo->Estado </option>";
                                 }
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-6 col-md-3">
                        <label for="Municipio">Municipio</label>
                        <select class="form-control" id="Municipio" name="Municipio">
                           <?php    
                              $sql_leer = "select idMunicipio, Municipio from Municipios";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 if ($campo->idMunicipio == $campox->idMunicipio){
                                    echo "<option value='$campo->idMunicipio' selected> $campo->Municipio </option>";
                                 }else {
                                    echo "<option value='$campo->idMunicipio'> $campo->Municipio </option>";
                                 }
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-6 col-md-3">
                        <label for="Parroquia">Parroquia</label>
                        <select class="form-control" id="Parroquia" name="Parroquia">
                           <?php    
                              $sql_leer = "select idParroquia, Parroquia from Parroquia";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 if ($campo->idParroquia == $campox->idParroquia){
                                    echo "<option value='$campo->idParroquia' selected> $campo->Parroquia </option>";
                                 }else {
                                    echo "<option value='$campo->idParroquia'> $campo->Parroquia </option>";
                                 }
                              }
                            ?>
                        </select>
                     </div>
                  </div>
                  <div class="form-group row justify-content-end">
                     <div class="col-5 align-self-md-center">
                        <button type="submit" class="btn b1 b1-primary btn-block"> <i class="icon-mas fa-lg" style="text-shadow: 1px 1px 1px #000"></i><?php echo isset($campox) ? 'Actualizar': 'Aceptar' ?></button>
                     </div>
                     <div class="col-7">
                        <textarea class="form-control" name="Direccion" id="Direccion" placeholder="Ingrese la Dirección del Campo por favor" minlength="10" maxlength="40" required cols="60" rows="3" pattern="[A-Za-z0-9 ]+"><?php echo isset($campox) != null ? $campox->Direccion : ''; ?></textarea>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

   <!-- LISTADO CAMPOS  -->

      <?php if(!isset($_REQUEST['id'])): ?>
      <div class="col-12 mt-3">
         <div class="card mt-3">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h5><i class="fas fa-greater-than-equal" style="position: relative; top: .1em;"></i>Campos Agregados</h5>
                  </div>
                  <div class="col-4">
                     <a href="#AgregarCampo" class="btn b1 b1-info btn-block"><i class="fas fa-share fa-lg mr-2" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Agregar</a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="col-12">
                  <table class="table table-bordered table-sm table-hover table-responsive-sm">
                     <thead class="table-primary">
                        <th>Campo</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Parroquia</th>
                        <th>Dirección</th>
                        <th></th>
                     </thead>
                     <tbody>
                        <?php 
                              // LLAMAMOS A LA FUNCION QUE RELLENA LAS TABLAS
                              // Y LE PASSAMOS COMO PARAMETRO LO QUE DEVUELVE LE METODO LISTAR DEL OBJETO CAMPO
                              // EL CUAL ESTA DEFINIDO EN SU RESPECTIVA CLASE 
                              addItemAdminActu($listaCampos, '?c=Campos'); 
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <?php endif; ?>
   </div>

</div>
</div>
</div>
