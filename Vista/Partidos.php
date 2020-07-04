<?php require_once 'includes/headerAdmin.php' ?>
         <!-- CONTENIDO DE LA PAG -->
         <!-- con las columnas que sobraron hacemos una nueva columna que abarcara 10  que es
            donde se colocara el contenido de la pag-->
         <div class="col fondo">

            <!-- DENTRO DE ESTA COLUMNA crearemos una nueva fila para trabajar de manera mas comoda -->
            <div class="row">
               <div class="col-12 mt-3">
                  <a href="#menu" class=" btn btn-info  icon-play" aria-expanded="false" aria-controls="menu"
                     data-toggle="collapse">Ocultar</a>
               </div>
               <div class="col-12 mt-3">
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
                                    <tr>
                                       <td class="text-center">12-11-1960</td>
                                       <td>Cardenales</td>
                                       <td>10</td>
                                       <td>Cebmo</td>
                                       <td>5</td>
                                       <td>Caracas</td>
                                       <td><button class="btn btn-block"><i class="far fa-edit"></i></button></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-4">
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
                        <div class="row mt-3 text-center justify-content-center">
                           <div class="col-5 col-md-4 text-center">
                              <h6><em>Equipo Local</em></h6>
                              <select class="form-control">
                                 <option value="1">Equipo 1</option>
                                 <option value="2">Equipo 2</option>
                                 <option value="3">Equipo 3</option>
                              </select>
                           </div>
                           <div class="col-2 col-md-1 mt-4">
                              <h4 style="text-shadow: 1px 2px 1px #000">VS</h4>
                           </div>
                           <div class="col-5 col-md-4 text-center">
                              <h6><em>Equipo Visitante</em></h6>
                              <select class="form-control">
                                 <option value="1">Cebmo</option>
                                 <option value="2">Cardenales</option>
                                 <option value="3">Guaros</option>
                              </select>
                           </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                           <div class="col-6 col-md-3">
                              <label for="Fecha_Partido">Fecha del Partido</label>
                              <input type="date" id="Fecha_Partido" class="form-control" min="2000-01-01" max="2020-12-31" value="2020-06-22">
                           </div>
                           <div class="col-6 col-md-2">
                              <label for="Hora_Partido">Hora del Partido</label>
                              <input type="time" id="Hora_Partido" class="form-control" value="07:08">
                           </div>
                           <div class="col-6 col-md-3">
                              <label for="Campo_Partido">Campo</label>
                              <select class="form-control" id="Campo_Partido">
                                 <option value="1">Caracas</option>
                                 <option value="2">Lara</option>
                                 <option value="3">Antonio Herrera</option>
                              </select>
                           </div>
                           <div class="col-6 col-md-3">
                              <label for="Anotador_Partido">Anotador</label>
                              <select class="form-control" id="Anotador_Partido">
                                 <option value="1">Pablo Escalona</option>
                                 <option value="2">Juan Alvarado</option>
                                 <option value="3">Antonio Barreras</option>
                              </select>
                           </div>
                        </div>
                        <div class="row mt-4 justify-content-center">
                           <div class="col-10 col-md-6">
                              <a href="#AgregarJugadores" class="btn b1 b1-primary btn-block"><i class="far fa-folder-open fa-lg mr-2" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Continuar</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
                        <form action="">
                           <div class="form-group row">
                              <div class="col-12 col-md-6">
                                 <div class="row text-center">
                                    <div class="col-12">
                                       <h5><em>Equipo 1</em></h5>
                                    </div>
                                 </div>
                                 <div class="row justify-content-center">
                                    <div class="col-9 col-md-6">
                                       <select name="Jugadores" id="Jugadores" class="form-control">
                                          <option value="Jugador1">José Suárez</option>
                                          <option value="Jugador2">Marcos Monroy</option>
                                       </select>
                                    </div>
                                    <div class="col-3">
                                       <button class="btn b1 b1-primary btn-block"><i class="icon-mas" style="text-shadow: 1px 1px 1px #000"></i></button>
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col-12 ">
                                       <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                          <thead class="table-primary">
                                             <th>Cédula</th>
                                             <th>Nombre</th>
                                             <th>Apellido</th>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>27554998</td>
                                                <td>Thomás</td>
                                                <td>Terán</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="row text-center">
                                    <div class="col-12">
                                       <h5><em>Equipo 2</em></h5>
                                    </div>
                                 </div>
                                 <div class="row justify-content-center">
                                    <div class="col-9 col-md-6">
                                       <select name="Jugadores" id="Jugadores" class="form-control">
                                          <option value="Jugador1">Antonella Mujica</option>
                                          <option value="Jugador2">Edith Navarro</option>
                                       </select>
                                    </div>
                                    <div class="col-3">
                                       <button class="btn b1 b1-danger btn-block"><i class="icon-mas" style="text-shadow: 1px 1px 1px #000"></i></button>
                                    </div>
                                 </div>
                                 <div class="row mt-3">
                                    <div class="col-12">
                                       <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                          <thead class="table-danger">
                                             <th>Cédula</th>
                                             <th>Nombre</th>
                                             <th>Apellido</th>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>27554996</td>
                                                <td>Dominga</td>
                                                <td>Navarro</td>
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
                  <div class="card">
                     <div class="card-header">
                        <h4><i class="fas fa-chart-bar fa-lg" style="position: relative; top: .1em;"></i>Estadísticas</h4>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-12">
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
                                 <div class="tab-pane active" id="Bateador" role="tabpanel">
                                    <form action="">
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
                                                         <tr>
                                                            <td>27554995</td>
                                                            <td><input required type="text" name="AL" id="AL" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="HC" id="HC" class="form-control" readonly></td>
                                                            <td><input required type="text" name="HC" id="HC" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="2B" id="2B" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="3B" id="3B" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="HR" id="HR" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="BA" id="BA" class="form-control"
                                                                  readonly></td>
                                                            <td><input required type="text" name="CA" id="CA" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="CI" id="CI" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="K" id="K" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="B" id="B" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="BR" id="BR" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="SF" id="SF" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="GP" id="GP" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="SH" id="SH" class="form-control">
                                                            </td>
                                                            <td><input required type="text" name="SLG" id="SLG" class="form-control" readonly></td>
                                                            <td><input required type="text" name="AVE" id="AVE" class="form-control" readonly></td>
                                                         </tr>
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
                                                         <tr>
                                                            <td>27554995</td>
                                                            <td><input type="text" name="AL" id="AL" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="HC" id="HC" class="form-control" readonly></td>
                                                            <td><input type="text" name="HC" id="HC" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="2B" id="2B" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="3B" id="3B" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="HR" id="HR" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="BA" id="BA" class="form-control"
                                                                  readonly></td>
                                                            <td><input type="text" name="CA" id="CA" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="CI" id="CI" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="K" id="K" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="B" id="B" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="BR" id="BR" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="SF" id="SF" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="GP" id="GP" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="SH" id="SH" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="SLG" id="SLG" class="form-control"
                                                                  readonly></td>
                                                            <td><input type="text" name="AVE" id="AVE" class="form-control"
                                                                  readonly></td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row justify-content-end">
                                          <div class="col-6">
                                             <button class="btn b1 b1-primary btn-block"><i class="fas fa-folder-plus fa-2x mr-1" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Continuar</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane" id="Defensa" role="tabpanel">
                                    <form action="">
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
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>27554995</td>
                                                         <td><input  required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><button class="btn "><i class="icon-mas"></i></button></td>
                                                      </tr>
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
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td>27554995</td>
                                                         <td><input type="text" name="VB" id="VB" class="form-control" required>
                                                         </td>
                                                         <td><input type="text" name="VB" id="VB" class="form-control" required>
                                                         </td>
                                                         <td><input type="text" name="VB" id="VB" class="form-control" required>
                                                         </td>
                                                         <td><input type="text" name="VB" id="VB" class="form-control" required>
                                                         </td>
                                                         <td><button class="btn "><i class="icon-mas"></i></button></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                          <div class="row justify-content-end">
                                             <div class="col-6">
                                                <button class="btn b1 b1-primary btn-block"><i class="fas fa-folder-plus fa-2x mr-1" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Continuar</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane" id="Lanzador" role="tabpanel">
                                    <form action="">
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
                                                      <tr>
                                                         <td>27554995</td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                      </tr>
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
                                                      <tr>
                                                         <td>27554995</td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                         <td><input required type="text" name="VB" id="VB" class="form-control">
                                                         </td>
                                                      </tr>
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
         </div>
      </div>
   </div>

   <script src="../js/jquery-3.4.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>

</html>