<?php $conexion = new Conexion();
?>
 <div class="col fondo">
   <div class="row">
      <div class="col-12 mt-3">
         <a href="#menu" class=" btn btn-info  icon-play" aria-expanded="false" aria-controls="menu"
            data-toggle="collapse">Ocultar</a>
      </div>
   </div>
      <?php  if (!isset($_REQUEST['id'])):   ?>
   <div class="row mt-4">

      <!-- LISTADO DE LOS PARTIDOS DE LA TEMPORADA -->

      <div class="col-12 my-3">
         <div class="card">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h4><i class="fas fa-greater-than-equal" style="position: relative; top: .1em;"></i>Partidos</h4>
                  </div>
                  <div class="col-4">
                     <a href="#AgregarPartido" class="btn b1 b1-info btn-block"> <i class="fas fa-share fa-lg" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i> Agregar</a>
                  </div>
               </div>
               
            </div>
            <div class="card-body">
               <div class="form-group row justify-content-center text-center">
                  <!-- BUSCANDO TEMPORADA POR FILTRO -->
                  <div class="col-auto">
                     <label for="Num_Temp">Seleccione número <br>de la Temporada</label>
                  </div>
                  <div class="col-5 col-md-3">
                     <select name="Num_Temp" class="form-control">
                        <option>Temporada 1</option>
                        <option>Temporada 2</option>
                        <option>Temporada 3</option>
                     </select>
                  </div>
                  <div class="col-5 col-md-2 mb-3">
                     <button class="btn b1 b1-primary btn-block"><i class="fas fa-search fa-lg" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i></button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <h5><em><i class="fab fa-gitter"></i>Temporada Num 1</em></h5>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-primary">
                           <th>Hora y Fecha</th>
                           <th>Local</th>
                           <th>Carrera</th>
                           <th>Carrera</th>
                           <th>Visitante</th>
                           <th>Estadio</th>
                        </thead>
                        <tbody>
                           <?php 
                              addItemAdminActu($this->juego->listar(), 'Partidos.php?nombre=Partidos');
                            ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- AGREGAR PARTIDOS  -->
   
      <div class="col-12">
         <div class="card" id="AgregarPartido">
            <div class="card-header">
               <h4><svg class="bi bi-folder-plus" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/><path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/></svg>Agregar Partido</h4>
            </div>
            <div class="card-body">
               <div class="row text-center">
                  <div class="col-12">
                     <h5><em>Ingrese los siguientes datos:</em></h5>
                  </div>
               </div>
               <form method="POST" action="?c=partido&m=guardarPartido">
                  <div class="row mt-3 text-center justify-content-center">
                     <div class="col-5 col-md-4 text-center">
                        <h6><em>Equipo Local</em></h6>
                        <select class="form-control" name="Agregar_Equipo1">
                           <?php    
                              $sql_leer = "select idEquipo, Nombre from equipos";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo '<option value="'.$campo->idEquipo.'">'.$campo->Nombre.'</option>';
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-2 col-md-1 mt-4">
                        <h4 style="text-shadow: 1px 2px 1px #000">VS</h4>
                     </div>
                     <div class="col-5 col-md-4 text-center">
                        <h6><em>Equipo Visitante</em></h6>
                        <select class="form-control" name="Agregar_Equipo2">
                           <?php    
                              $sql_leer = "select idEquipo, Nombre from equipos";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo '<option value="'.$campo->idEquipo.'">'.$campo->Nombre.'</option>';
                              }
                            ?>
                        </select>
                     </div>
                  </div>
                  <div class="row justify-content-center mt-4">
                     <div class="col-6 col-md-2">
                        <label for="Temporada">Temporada</label>
                        <select class="form-control" id="Temporada" name="Temporada">
                           <?php    
                              $sql_leer = "select idTemporada, AnioInicio from temporadas";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo '<option value="'.$campo->idTemporada.'">'.$campo->AnioInicio.'</option>';
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-6 col-md-2">
                        <label for="Fecha_Partido">Fecha del Partido</label>
                        <input type="date" name="Fecha_Partido" class="form-control" min="2000-01-01" max="2020-12-31" value="2020-06-22">
                     </div>
                     <div class="col-6 col-md-2">
                        <label for="Hora_Partido">Hora del Partido</label>
                        <input type="time" id="Hora_Partido" name="Hora_Partido" class="form-control" value="07:08">
                     </div>
                     <div class="col-6 col-md-3">
                        <label for="Campo">Campo</label>
                        <select class="form-control" id="Campo" name="Campo">
                           <?php    
                              $sql_leer = "select idCampo, Campo from Campos";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo '<option value="'.$campo->idCampo.'">'.$campo->Campo.'</option>';
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-6 col-md-3">
                        <label for="Anotador">Anotador</label>
                        <select class="form-control" id="Anotador" name="Anotador">
                           <?php    
                              $sql_leer = "select a.idAnotador, p.Nombre 
                                             from anotadores a inner join personas p on a.CI = p.CI";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo '<option value="'.$campo->idAnotador.'">'.$campo->Nombre.'</option>';
                              }
                           ?>
                        </select>
                     </div>
                  </div>
                  <div class="row mt-4 justify-content-center">
                     <div class="col-10 col-md-6">
                        <button type="submit" name="AgregarPartido" href="#AgregarJugadores" class="btn b1 b1-primary btn-block"><i class="far fa-folder-open fa-lg mr-2" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Continuar</button>
                     </div>
                  </div>
               </form>
                  
            </div>
         </div>
      </div>
   </div>
      <?php 
         else: 
            $datos = $this->juego->obtenerEquipos(($_REQUEST['id']));
            
      ?>
      
      <!-- JUGADORES QUE ESTARAN EN EL PARTIDO -->

   <div class="row mt-4">
      <div class="col-12">
         <div class="card" id="AgregarJugadores">
            <div class="card-header">
               <div class="row justify-content-between">
               <div class="col-auto">
                  <h4><i class="fas fa-user-plus fa-lg mr-1"></i>Jugadores</h4>
               </div>
               <div class="col-4">
                  <button class="btn b1 b1-info btn-block" type="submit" ><i class="fas fa-save fa-lg mr-1" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Guardar</button>
               </div>
               </div>
            </div>
            <div class="card-body">
               <form action="?c=partido&m=agregarJugadores&id=<?php echo $_REQUEST['id'];?>" method="POST" class="form-group row justify-content-center">
                  
                     <div class="col-12 ">
                        <div class="row text-center">
                           <div class="col-12">
                              <h5><em>Equipo 1</em></h5>
                           </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col-12 ">
                              <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                 <thead class="table-primary">
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>N° Camisa</th>
                                    <th>Letra</th>
                                    <th>Agregar</th>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $jugadores = new Jugador();
                                       addItemAdminInput($jugadores->listarPorEquipo($datos[0]->equipo1), 'equipo1');
                                    ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="row text-center">
                           <div class="col-12">
                              <h5><em>Equipo 2</em></h5>
                           </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col-12">
                              <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                 <thead class="table-danger">
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>N° Camisa</th>
                                    <th>Letra</th>
                                    <th>Agregar</th>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       addItemAdminInput($jugadores->listarPorEquipo($datos[0]->equipo2), 'equipo2');
                                    ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>

                     <div class="col-4 mt-3">
                        <button type="submit" class="btn b1 b1-primary" name="AgregarJugadores">Agregar jugadres al Partido</button>
                     </div>
                  
               </form>
            </div>
         </div>
      </div>
   </div>
     
      <!-- ESTADISTICAS DEL PARTIDO -->
     
   <div class="row my-4" id="estadistica">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4><i class="fas fa-chart-bar fa-lg" style="position: relative; top: .1em;"></i>Estadísticas</h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">

                     <!-- NAV DEL TABPANE -->

                     <ul class="nav nav-tabs">
                        <li class="nav-item">
                           <a href="#Bateador" class="nav-link active" data-toggle="tab">Bateador</a>
                        </li>
                        <li class="nav-item">
                           <a href="#Defensa" class="nav-link" data-toggle="tab">Defensa</a>
                        </li>
                        <li class="nav-item">
                           <a href="#Lanzador" class="nav-link" data-toggle="tab">Lanzador</a>
                        </li>
                     </ul>
                     <div class="tab-content mt-3">

                        <!-- BATEADORES -->

                        <div class="tab-pane active" id="Bateador" role="tabpanel">
                           <form action="?c=partido&m=agregarEst&p=10&id=<?php echo $_REQUEST['id'];?>" method="post">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group row">
                                       <div class="col-12">
                                          <h6><em><i class="fas fa-check fa-lg text-success" style="text-shadow: 1px 1px 1px #000"></i>Equipo 1</em></h6>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-12">
                                          <table
                                             class="table table-bordered table-hover table-sm table-responsive-sm">
                                             <thead class="table-info">
                                                <th>CI</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>AL</th>
                                                <th>VB</th>
                                                <th>HC</th>
                                                <th>2B</th>
                                                <th>3B</th>
                                                <th>HR</th>
                                                <th>BA</th>
                                                <th>CA</th>
                                                <th>CI</th>
                                                <th>K</th>
                                                <th>B</th>
                                                <th>BR</th>
                                                <th>SF</th>
                                                <th>GP</th>
                                                <th>SH</th>
                                                <th>SLG</th>
                                                <th>AVE</th>
                                             </thead>
                                             <tbody>
                                                <?php 
                                                $jugadores = $this->juego->listarJugadoresPorEquipo($datos[0]->equipo1, $_REQUEST['id'], 10);
                                                $items = $this->items->listarPorTipo('b');
                                                foreach($jugadores as $jugador){
                                                   echo '<tr>';
                                                   echo '<td>'.$jugador->CI.'</td>';
                                                   echo '<td>'.$jugador->Nombre.'</td>';
                                                   echo '<td>'.$jugador->Apellido.'</td>';
                                                   
                                                   foreach ($items as $item) {
                                                      echo '<td><input type="text" name="est['.$jugador->id.']['.$item->idItem.']" class="form-control"></td>';
                                                     
                                                   }
                                                   echo '<td><input type="text" class="form-control" disabled></td>';
                                                   echo '<td><input type="text" class="form-control" disabled></td>';
                                                   echo '</tr>';
                                                } 
                                                ?>

                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group row">
                                       <div class="col-12">
                                          <h6><em><i class="fas fa-check fa-lg text-success" style="text-shadow: 1px 1px 1px #000"></i>Equipo 2</em></h6>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <div class="col-12">
                                          <table
                                             class="table table-bordered table-sm table-hover table-responsive-sm">
                                             <thead class="table-danger">
                                                <th>CI</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>AL</th>
                                                <th>VB</th>
                                                <th>HC</th>
                                                <th>2B</th>
                                                <th>3B</th>
                                                <th>HR</th>
                                                <th>BA</th>
                                                <th>CA</th>
                                                <th>CI</th>
                                                <th>K</th>
                                                <th>B</th>
                                                <th>BR</th>
                                                <th>SF</th>
                                                <th>GP</th>
                                                <th>SH</th>
                                                <th>SLG</th>
                                                <th>AVE</th>
                                             </thead>
                                             <tbody>
                                                <?php 
                                                $jugadores = $this->juego->listarJugadoresPorEquipo($datos[0]->equipo2, $_REQUEST['id'], 10);
                                                $items = $this->items->listarPorTipo('b');
                                                foreach($jugadores as $jugador){
                                                   echo '<tr>';
                                                   echo '<td>'.$jugador->CI.'</td>';
                                                   echo '<td>'.$jugador->Nombre.'</td>';
                                                   echo '<td>'.$jugador->Apellido.'</td>';
                                                   
                                                   foreach ($items as $item) {
                                                      echo '<td><input type="text" name="est['.$jugador->id.']['.$item->idItem.']" class="form-control"></td>';
                                                     
                                                   }
                                                   echo '<td><input type="text" class="form-control" disabled></td>';
                                                   echo '<td><input type="text" class="form-control" disabled></td>';
                                                   echo '</tr>';
                                                } 
                                                ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row justify-content-end">
                                 <div class="col-6">
                                    <button class="btn b1 b1-primary btn-block" type="submit"><i class="fas fa-folder-plus fa-2x mr-1" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Continuar</button>
                                 </div>
                              </div>
                           </form>
                        </div>

                        <!-- DEFENSA -->

                        <div class="tab-pane" id="Defensa" role="tabpanel">
                           <form action="?c=partido&m=estDef&id=<?php echo $_REQUEST['id']; ?>" method="post">
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group row">
                                    <div class="col-12">
                                       <h6><em><i class="fas fa-check fa-lg text-success" style="text-shadow: 1px 1px 1px #000"></i>Equipo 1</em></h6>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <table
                                          class="table table-bordered table-sm table-hover table-responsive-sm">
                                          <thead class="table-info">
                                             <th>CI</th>
                                             <th>POS</th>
                                             <th>O</th>
                                             <th>A</th>
                                             <th>E</th>
                                             <th>POS</th>
                                             <th>O</th>
                                             <th>A</th>
                                             <th>E</th>
                                             <th>POS</th>
                                             <th>O</th>
                                             <th>A</th>
                                             <th>E</th>
                                          </thead>
                                          <tbody>
                                             <?php 
                                             $jugadores = $this->juego->listarJugadoresPorEquipo($datos[0]->equipo1, $_REQUEST['id'], 10);
                                             $items = $this->items->listarPorTipo('d');
                                             $pos = $this->items->obtenerPos();
                                             foreach($jugadores as $jugador){
                                                echo '<tr>';
                                                echo '<td>'.$jugador->CI.'</td>';
                                                for ($i=0; $i < 3; $i++) { 
                                                   echo '<td><select class="form-control w-100" name="'.$jugador->id.'[]"><option value = 0> ...Elegir </option>';
                                                   foreach ($pos as $value) {
                                                      echo ' <option value="'.$value->idPosicion.'">'.$value->nombre.'</option>';
                                                   }
                                                   echo '</select></td>';
                                                   foreach ($items as $item) {
                                                      echo '<td><input type="text" name="'.$jugador->id.'[]" class="form-control"></td>';
                                                   }
                                                }
                                                
                                                echo '</tr>';
                                             } 
                                             ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group row">
                                    <div class="col-12">
                                       <h6><em><i class="fas fa-check fa-lg text-success" style="text-shadow: 1px 1px 1px #000"></i>Equipo 2</em></h6>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <table
                                          class="table table-bordered table-sm table-hover table-responsive-sm">
                                          <thead class="table-danger">
                                             <th>CI</th>
                                             <th>POS</th>
                                             <th>O</th>
                                             <th>A</th>
                                             <th>E</th>
                                             <th>POS</th>
                                             <th>O</th>
                                             <th>A</th>
                                             <th>E</th>
                                             <th>POS</th>
                                             <th>O</th>
                                             <th>A</th>
                                             <th>E</th>
                                          </thead>
                                          <tbody>
                                             <?php 
                                             $jugadores = $this->juego->listarJugadoresPorEquipo($datos[0]->equipo2, $_REQUEST['id'], 10);
                                             $items = $this->items->listarPorTipo('d');
                                             $pos = $this->items->obtenerPos();
                                             foreach($jugadores as $jugador){
                                                echo '<tr>';
                                                echo '<td>'.$jugador->CI.'</td>';
                                                for ($i=0; $i < 3; $i++) { 
                                                   echo '<td><select class="form-control w-100" name="'.$jugador->id.'[]"><option value = 0> ...Elegir </option>';
                                                   foreach ($pos as $value) {
                                                      echo ' <option value="'.$value->idPosicion.'">'.$value->nombre.'</option>';
                                                   }
                                                   echo '</select></td>';
                                                   foreach ($items as $item) {
                                                      echo '<td><input type="text" name="'.$jugador->id.'[]" class="form-control"></td>';
                                                   }
                                                }
                                                
                                                echo '</tr>';
                                             }?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="row justify-content-end">
                                    <div class="col-6">
                                       <button class="btn b1 b1-primary btn-block" type="submit"><i class="fas fa-folder-plus fa-2x mr-1" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Continuar</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </form>
                        </div>

                        <!-- LANZADORES -->
                        
                        <div class="tab-pane" id="Lanzador" role="tabpanel">
                           <form action="?c=partido&m=agregarEst&p=1&id=<?php echo $_REQUEST['id'];?>" method="post">
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group row">
                                    <div class="col-12">
                                       <h6><em><i class="fas fa-check fa-lg text-success" style="text-shadow: 1px 1px 1px #000"></i>Equipo 1</em></h6>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <table
                                          class="table table-bordered table-sm table-hover table-responsive-sm">
                                          <thead class="table-info">
                                             <th>CI</th>
                                             <th>VB</th>
                                             <th>IP</th>
                                             <th>JG</th>
                                             <th>JE</th>
                                             <th>JS</th>
                                             <th>CP</th>
                                             <th>CL</th>
                                             <th>HC</th>
                                             <th>2B</th>
                                             <th>3B</th>
                                             <th>HR</th>
                                             <th>K</th>
                                             <th>B</th>
                                             <th>SH</th>
                                             <th>SF</th>
                                             <th>GP</th>
                                             <th>WP</th>
                                             <th>BK</th>
                                          </thead>
                                          <tbody>
                                             <?php 
                                                $jugadores = $this->juego->listarJugadoresPorEquipo($datos[0]->equipo1, $_REQUEST['id'], 1);
                                                $items = $this->items->listarPorTipo('l');
                                                foreach($jugadores as $jugador){
                                                   echo '<tr>';
                                                   echo '<td>'.$jugador->CI.'</td>';
                                                   
                                                   foreach ($items as $item) {
                                                      echo '<td><input type="text" name="est['.$jugador->id.']['.$item->idItem.']" class="form-control"></td>';
                                                     
                                                   }
                                                   echo '</tr>';
                                                } 
                                                ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group row">
                                    <div class="col-12">
                                       <h6><em><i class="fas fa-check fa-lg text-success" style="text-shadow: 1px 1px 1px #000"></i>Equipo 2</em></h6>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                          <thead class="table-danger">
                                             <th>CI</th>
                                             <th>VB</th>
                                             <th>IP</th>
                                             <th>JG</th>
                                             <th>JE</th>
                                             <th>JS</th>
                                             <th>CP</th>
                                             <th>CI</th>
                                             <th>HC</th>
                                             <th>2B</th>
                                             <th>3B</th>
                                             <th>HR</th>
                                             <th>K</th>
                                             <th>B</th>
                                             <th>SH</th>
                                             <th>SF</th>
                                             <th>GP</th>
                                             <th>WP</th>
                                             <th>BK</th>
                                          </thead>
                                          <tbody>
                                             <?php 
                                                $jugadores = $this->juego->listarJugadoresPorEquipo($datos[0]->equipo2, $_REQUEST['id'], 1);
                                                $items = $this->items->listarPorTipo('l');
                                                foreach($jugadores as $jugador){
                                                   echo '<tr>';
                                                   echo '<td>'.$jugador->CI.'</td>';
                                                   
                                                   foreach ($items as $item) {
                                                      echo '<td><input type="text" name="est['.$jugador->id.']['.$item->idItem.']" class="form-control"></td>';
                                                     
                                                   }
                                                   echo '</tr>';
                                                } 
                                                ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row justify-content-end">
                              <div class="col-6">
                                 <button class="btn b1 b1-primary btn-block"><svg class="bi bi-folder-check" width="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/><path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/></svg> Guardar</button>
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
   </div>
   <script>
         $('#Defensa').tab('show');
      </script>
   <?php endif; ?>

</div>
</div>
</div>
