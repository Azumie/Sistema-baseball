<?php require_once 'includes/headerCliente.php' ?>

      <div class="container mt-3">
         <div class="row mt-5">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group row justify-content-between">
                              <div class="col-auto">
                                 <h4><img src="../img/Partidos5.png">Fecha:</h4>
                              </div>
                              <div class="col-auto"><img src="../img/Partidos4.png"></div>
                              <div class="col-auto">
                                 <h4 id="Fecha">20-12-2000</h4>
                              </div>
                           </div>
                           <div class="form-group row justify-content-between">
                              <div class="col-auto">
                                 <h6>Temporada: <em id="Temporada">1</em></h6>
                              </div>
                              <div class="col-auto">
                                 <h6>Campo: <em id="Campo"> Daniel "Chino" Canonico</em></h6>
                              </div>
                              <div class="col-4">
                                 <h6>Dirección <em id="Direccion">Calle 35 entre carreras 14 y 15</em></h6>
                              </div>
                              <div class="col-auto">
                                 <h6>Anotador: <em>José Suárez</em></h6>
                              </div>
                           </div>
                           <div class="row mt-3 text-center justify-content-center">
                              <div class="col-1 col-md-auto mt-3" ><h4 id="RLocal">8</h4></div>
                              <div class="col-4 text-center">
                                 <h6><em>Equipo Local</em></h6>
                                 <h4><a href="InfoEquipos.php">JUANITO</a></h4>
                              </div>
                              <div class="col-1 mt-md-4">
                                 <h2 class="text-primary"><strong>VS</strong></h2>
                              </div>
                              <div class="col-4 text-center">
                                 <h6><em>Equipo Visitante</em></h6>
                                 <h4><a href="InfoEquipos.php">JUANITO 2</a></h4>
                              </div>
                              <div class="col-1 col-md-auto mt-3"><h4 id="RVisitante">8</h4></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card mt-4">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12">
                           <ul class="nav nav-tabs">
                              <li class="nav-item"><a href="#Visitante" class="nav-link active" data-toggle="tab">Visitante</a></li>
                              <li class="nav-item"><a href="#Local" class="nav-link" data-toggle="tab">Local</a></li>
                           </ul>
                           <div class="tab-content px-4">
                              <div class="tab-pane active" id="Visitante" role="tabpanel">
                                 <div class="row mt-4">
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
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group row">
                                             <div class="col-12">
                                                <h6><em>Equipo 1</em></h6>
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
                                                         <td><a href="jugador.php">27554995</a></td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><strong>1</strong></td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span></td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span></td>
                                                         <td><span id="">1</span></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="Defensa" role="tabpanel">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group row">
                                             <div class="col-12">
                                                <h6><em>Equipo 1</em></h6>
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
                                                         <td><a href="jugador.php">27554995</a></td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="Lanzador" role="tabpanel">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group row">
                                             <div class="col-12">
                                                <h6><em>Equipo 1</em></h6>
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
                                                         <td><a href="jugador.php">27554995</a></td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                      </tr>
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
                              <div class="tab-pane" id="Local" role="tabpanel">
                                 <div class="row mt-4">
                                    <div class="col-12">
                              <ul class="nav nav-tabs">
                                 <li class="nav-item">
                                    <a href="#BateadorEquipo2" class="nav-link active" data-toggle="tab">Bateador</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#DefensaEquipo2" class="nav-link" data-toggle="tab">Defensa</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#LanzadorEquipo2" class="nav-link" data-toggle="tab">Lanzador</a>
                                 </li>
                              </ul>
                              <div class="tab-content mt-3">
                                 <div class="tab-pane active" id="BateadorEquipo2" role="tabpanel">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group row">
                                             <div class="col-12">
                                                <h6><em>Equipo 1</em></h6>
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
                                                         <td><a href="jugador.php">27554995</a></td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><strong>1</strong></td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span></td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span>
                                                         </td>
                                                         <td><span id="">1</span></td>
                                                         <td><span id="">1</span></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="DefensaEquipo2" role="tabpanel">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group row">
                                             <div class="col-12">
                                                <h6><em>Equipo 1</em></h6>
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
                                                         <td><a href="jugador.php">27554995</a></td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="LanzadorEquipo2" role="tabpanel">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group row">
                                             <div class="col-12">
                                                <h6><em>Equipo 1</em></h6>
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
                                                         <td><a href="jugador.php">27554995</a></td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                         <td><span id="">10</span>
                                                         </td>
                                                      </tr>
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