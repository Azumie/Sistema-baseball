
<div class="col fondo">
   <div class="row" >
      <div class="col-12 my-3">
         <a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu"
         data-toggle="collapse">Ocultar</a>
      </div>
      <?php if(!isset($_REQUEST['id'])) :?>

       <!-- AGREGANDO TEMPORADA -->

      <div class="col-12 mt-3">
         <div class="card" id="AgregarTemporada">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h4><svg class="bi bi-folder-plus" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24.707.293z"/><path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/></svg>Agregar Temporada</h4>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <form method="POST" action="?c=Temporada&m=guardar">
                  <div class="form-group row justify-content-center">
                     <div class="col-12"> 
                        <?php if (!empty($this->ERROR)) {
                           Error($this->ERROR);
                        } ?>
                     </div>
                     <div class="col-12 col-md-3">
                        <h6>Temporada Número: <em>
                           <?php 
                           $id = $this->temporada->obtener('SELECT MAX(idTemporada) as idTemporada FROM temporadas', array(''));
                           echo $id->idTemporada+1; 
                           ?></em></h6>
                     </div>
                     <div class="col-4 col-md-3 ">
                        <input type="text" class="form-control" placeholder="Año" name="Anio" minlength="4" maxlength="4" required pattern="[0-9]+">
                     </div>
                     <div class="col-4">
                        <button class="btn b1 b1-primary btn-block" type="submit" name="btnAgregarTemp"><i class="far fa-plus-square fa-lg" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i></button>
                     </div>
                     <!-- <div class="col-auto text-center">
                        <h5><em><i class="fas fa-users fa-2x mr-1 text-info" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Añadir equipos <i class="fas fa-users fa-2x ml-1 text-info" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i></em></h5>
                     </div>
                     <div class="col-auto">
                        <select name="categoria">
                           <?php  ?>
                        </select>
                     </div> -->
                  </div>

                  <!-- <div class="form-group row justify-content-center">
                     <div class="col-12 col-md-8 ">
                        <table class="table mt-3 table-bordered table-sm table-hover table-responsive-sm">
                           <thead class="table-primary">
                              <th>Equipo</th>
                              <th>Letra</th>
                              <th>Escuela</th>
                              <th>Num Jugadores</th>
                              <th>Temporadas</th>
                              <th>Ganadas</th>
                              <th> </th>
                           </thead>
                           <tbody>
                              <?php 
                              $equipos = new Equipo();
                              addItemAdminInput( $equipos->listar(), 'equipos'); 
                              ?>
                           </tbody>
                        </table>
                     </div>
                  </div> -->
               </form>

            </div>
         </div>
      </div>
      <div class="col-12 mt-3">
         <div class="card">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h4><i class="fas fa-greater-than-equal"></i>Temporada</h4>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10">
                     <!-- BUSCAR POR FILTRO A UNA TEMPORADA -->
                     <form method="POST">
                        <div class="form-group row justify-content-center">
                           <div class="col-6 col-md-4">
                              <label for="Filtro">Filtro</label>
                              <select  class="form-control d-block" id="Filtro" name="ftemp">
                                 <option value="Anio">Año</option>
                                 <option value="Temporada">Num Temporada</option>
                              </select>
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
                                 <!-- <th>Num Partidas</th> -->
                              </thead>
                              <tbody>
                                 <?php addItemAdminActu($temporadas, '?c=temporada'); ?>

                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
              
   <?php else: ?>
      <!-- ACTUALIZAR Y AGREGAR EQUIPOS  -->
      
      <div class="col-12 mt-3">
         <div class="card-group">
            <div class="card">
               <div class="card-header" style="border-radius: 10px 0 0 0;">
                  <h5>Equipos Participantes en la temporada</h5>
               </div>
               <div class="card-body row">
                  <div class="col-12">
                     <!-- <h5 >Actualizar Temporada <?php echo $_REQUEST['id'] ?></h5> -->
                  </div>
                     
                  <form method="post" class="col-12 form-inline" action="?c=temporada&id=<?php echo $_REQUEST['id']; ?>">
                     <select name="fcategoria" class="form-control mr-2 mb-2">
                        <?php 
                           $sql = 'SELECT * FROM categorias';
                           $categorias = $this->temporada->consultar($sql, array(''));
                           foreach ($categorias as $categoria) {
                              if ($_REQUEST['fcategoria'] == $categoria->idCategoria) {
                                 echo "<option value='$categoria->idCategoria' selected >$categoria->Categoria</option>";
                              }else{
                                 echo "<option value='$categoria->idCategoria'>$categoria->Categoria</option>";
                              }
                           }
                        ?>
                     </select>
                  
                     <button type="submit" class="btn b1 b1-primary mb-2">Filtrar</button>   
                  </form>

                  <div class="col-12 mt-3">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-primary">
                           <th>Equipo</th>
                           <th>Letra</th>
                           <th>Escuela</th>
                           <th>id</th>
                        </thead>
                        <tbody>
                        <?php foreach ($equiposp as $key => $value):?>
                           <tr>
                              <td><?php echo $value->Nombre ?></td>
                              <td><?php echo $value->Letra_E ?></td>
                              <td><?php echo $value->Escuela ?></td>
                              <td>
                              <a href="?c=temporada&m=eliminar&id=<?php echo $_REQUEST['id']."&ide=".$value->id.'&fcategoria='.$_REQUEST['fcategoria']; ?>">
                              <i class="fas fa-trash-alt"></i></a></td>
                           </tr>
                        <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="card" style="border-radius: 0 10px 10px 0;">
               <div class="card-header" style="border-radius: 0 10px 0 0;">
                  <h5>Agregar Equipos a la temporada</h5>
               </div>
               <form class="card-body row justify-content-end" method="post" action="?c=temporada&m=agregarEquipo&id=<?php echo $_REQUEST['id']."&fcategoria=".$_REQUEST['fcategoria'] ?>">
                  <div class="col-7 mb-3">
                     <button type="submit" class="btn b1 b1-primary btn-block">Agregar Equipo</button>
                  </div>
                  <div class="col-12">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm align-self-end">
                        <thead class="table-primary">
                           <th>Equipo</th>
                           <th>Letra</th>
                           <th>Categoria</th>
                           <th>Escuela</th>
                           <th>Agregar</th>
                        </thead>
                        <tbody>
                           <?php 
                              foreach ($equiposp as $equipop) {
                                 foreach ($equipos as $key => $equipo) {
                                    if ($equipop->id == $equipo->id) {
                                       unset($equipos[$key]);
                                    }
                                 }
                              }

                              addItemAdminInput($equipos, 'equipos'); 

                           ?>
                        </tbody>
                     </table>
                  </div>
               </form>
            </div>
         </div>
   </div>
   <?php endif; ?>
   </div>


</div>
</div>
</div>

