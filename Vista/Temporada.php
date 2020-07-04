<?php $nombre = "Hola"; 
      require_once 'includes/headerAdmin.php';
      include_once '../Controlador/conexion.php';
      require '../Controlador/Table.php';
      $sql_leer = 'SELECT equipo, escuela, numJ, temporada, ganadas FROM temporada';
      //variable que guarda toda la conexion, llamando la conexion creada y pasandole la instruccion a seguir (mostrar)
      $gsent = $pdo->prepare($sql_leer);
      // Para que la ejecute
      $gsent->execute();
      $resultado = $gsent->fetchAll();

      // AGREGAR A BD
      if(isset($_POST['btnAgregarTemp'])){
         $ano = $_POST['Anio_Aniadir'];
         $equipo = 'Carlos';
         $numJ = '3';
         $escuela = 'Linarez';
         $sql_incluir = 'INSERT INTO temporada (equipo, escuela, numJ, temporada, ganadas) VALUES (?, ? , ?, ?, ?)';
         $gsent = $pdo->prepare($sql_incluir);
         $gsent->execute(array($equipo, $escuela, $numJ, $ano, $numJ));
         unset($_POST, $gsent);
      } //Buscar en Base de datos
      else if (isset($_POST['btnBuscarTemp'])) {
         $filtro = $_POST['FiltroBuscar'];
         $sql_filtro = 'SELECT equipo, escuela, numJ, temporada, ganadas FROM temporada WHERE id = ?';
         $gsent = $pdo->prepare($sql_filtro);
         $gsent->execute(array($filtro));
         $resultado1 = $gsent->fetchAll();
         var_dump($resultado1);
      } //Actualizar en BD
      else if (isset($_POST['btnActualizarTemp'])) {
         $ano = $_POST['Anio_Actualizar'];
         $equipo = 'pdu';
         $sql_editar = 'UPDATE temporada SET equipo = ? WHERE id = ?';
         $gsent = $pdo->prepare($sql_editar);
         $gsent->execute(array($equipo, $ano));
         unset($_POST);
      }
?>
<div class="col fondo">
   <div class="row" >
      <div class="col-12 my-3">
         <a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu"
         data-toggle="collapse">Ocultar</a>
      </div>
      <div class="col-12 mt-3">
         <div class="card">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h4><i class="fas fa-greater-than-equal"></i>Temporada</h4>
                  </div>
                  <div class="col-5 col-md-4">
                     <a href="#AgregarTemporada" class="btn b1 b1-success btn-block"><i class="fas fa-share fa-lg mr-1" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Agregar</a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row justify-content-center">
                  <div class="col-12 col-md-7">
                     <!-- BUSCAR POR FILTRO A UNA TEMPORADA -->
                     <form method="POST">
                        <div class="form-group row justify-content-center">
                           <div class="col-6 col-md-4">
                              <label for="Filtro">Filtro</label>
                              <select  class="form-control d-block" id="Filtro">
                                 <option value="Anio">Año</option>
                                 <option value="Temporada">Num Temporada</option>
                              </select>
                           </div>
                           <div class="col-6 col-md-4 mt-4 align-self-md-end">
                              <input autofocus type="text" class="form-control mt-2 mt-md-0" placeholder="Respuesta" name="FiltroBuscar" required>
                           </div>
                           <div class="col-12 col-md-4 mt-4">
                              <button class="btn b1 b1-info btn-block mt-md-2" type="submit" name="btnBuscarTemp"><i class="fas fa-search fa-lg" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i></button>
                           </div>
                        </div>
                     </form>
                     <!-- MOSTRANDO LAS TEMPORADAS YA EXISTENTES -->
                     <div class="form-group row mt-4 justify-content-center">
                        <div class="col-11 col-md-9">
                           <table class="table table-bordered table-sm table-hover table-responsive-sm" style="box-shadow: 2px 1px 2px #000">
                              <thead class="table-primary">
                                 <th>Temporada</th>
                                 <th>Año</th>
                                 <th>Num Equipos</th>
                                 <th>Num Partidas</th>
                              </thead>
                              <tbody>
                                 <?php addItemAdmin($resultado1); ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ACTUALIZANDO CAMPOS DE TEMPORADA -->
               <form method="POST">
                  <div class="row text-center">
                     <div class="col-12 ">
                        <h4>Temporada Número: <em>1</em></h4>
                     </div>
                  </div>
                  <div class="row justify-content-center mb-3">
                     <div class="col text-center">
                        <h5><em>¿Qué datos desea actualizar?</em></h5>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12 col-md-5">
                        <div class="form-group row justify-content-center">
                           <div class="col-7 form-inline">
                              <label for="Anio_temporada">Año de la temporada</label>
                              <input type="text" class="form-control" name="Anio_Actualizar" id="Anio_Actualizar"  required  value="1960">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 text-center mb-4">
                              <em>¿Qué equipos formaron parte de ella?</em>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-9 col-md-6 mb-2">
                              <select class="form-control">
                                 <option value="">Cebmo</option>
                                 <option value="">Cardenales</option>
                                 <option value="3">Guaros</option>
                              </select>
                           </div>
                           <div class="col-3 col-md-2">
                              <button class="btn b1 b1-primary" type="submit" name="btnActualizarTemp"><i class="icon-mas" style="text-shadow: 1px 1px 1px #000"></i></button>
                           </div>
                           <div class="col-12 col-md-4">
                              <a href="Partidos.php" class="btn btn-block b1 b1-info"><i class="fas fa-baseball-ball fa-spin"></i>Partidas</a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col">
                              <button data-toggle="modal" data-target="#Alerta" class="btn b1 b1-primary btn-block"> <i class="fas fa-redo-alt fa-lg mr-2 fa-spin" style="text-shadow: 1px 1px 1px #000"></i>Actualizar</button>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-7">
                        <div class="row">
                           <div class="col-12">
                              <table class="table mt-3 table-bordered table-sm table-hover table-responsive-sm" style="box-shadow: 4px 1px 2px #000">
                                 <thead class="table-primary">
                                    <th>Equipo</th>
                                    <th>Escuela</th>
                                    <th>Num Jugadores</th>
                                    <th>Temporadas</th>
                                    <th>Ganadas</th>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Cebmo</td>
                                       <td>Santa Teresita</td>
                                       <td>10</td>
                                       <td>5</td>
                                       <td>2</td>
                                    </tr>
                                    <tr>
                                       <td>Cardenales</td>
                                       <td>IUJO</td>
                                       <td>10</td>
                                       <td>5</td>
                                       <td>2</td>
                                    </tr>
                                    <tr>
                                       <td>Guaros</td>
                                       <td>Salvador Garmendia</td>
                                       <td>10</td>
                                       <td>5</td>
                                       <td>2</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="row my-4">
      <div class="col-12">
         <div class="card" id="AgregarTemporada">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h4><svg class="bi bi-folder-plus" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24.707.293z"/><path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/></svg>Agregar Temporada</h4>
                  </div>
                  <div class="col-5 col-md-4">
                     <button class="btn b1 b1-primary btn-block" type="submit"> <i class="fas fa-plus fa-lg mr-1" style="text-shadow: 1px 1px 1px #000"></i>Agregar</button>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <!-- AGREGANDO TEMPORADA -->
               <form method="POST">
                  <div class="form-group row">
                     <div class="col-12 col-md-3">
                        <h6>Temporada Número: <em>1</em></h6>
                     </div>
                     <div class="col-4 col-md-3 ">
                        <input type="text" class="form-control" placeholder="Año" name="Anio_Aniadir" minlength="4" maxlength="4" required pattern="[0-9]+">
                     </div>
                     <div class="col-6 col-md-4">
                        <select id="Equipos_Agregar" name="Equipos_Agregar" class="form-control">
                           <option value="Equipo1">Equipo1</option>
                        </select>
                     </div>
                     <div class="col-2">
                        <button class="btn b1 b1-info btn-block" type="submit" name="btnAgregarTemp"><i class="far fa-plus-square fa-lg" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i></button>
                     </div>
                  </div>
               </form>
               <div class="row">
                  <div class="col text-center">
                     <h5><em><i class="fas fa-users fa-2x mr-1 text-info" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Equipos Añadidos <i class="fas fa-users fa-2x ml-1 text-info" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i></em></h5>
                  </div>
               </div>
               <div class="form-group row justify-content-center">
                  <div class="col-12 col-md-8 ">
                     <table class="table mt-3 table-bordered table-sm table-hover table-responsive-sm" style="box-shadow: 2px 1px 2px #000">
                        <thead class="table-primary">
                           <th>Equipo</th>
                           <th>Escuela</th>
                           <th>Num Jugadores</th>
                           <th>Temporadas</th>
                           <th>Ganadas</th>
                        </thead>
                        <tbody>
                           <?php addItemAdmin($resultado); ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>