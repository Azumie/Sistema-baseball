<?php require_once 'includes/headerCliente.php' ?>

      <div class="container my-3">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h4><img src="../img/Trofeo.png">Ranking<img src="../img/Trofeo.png"></h4>
                  </div>
                  <div class="card-body">
                     
                        <div class="form-inline row mb-2">
                        
                           <label for="temporada" class="col-2 aling-self-center">Temporada</label>
                           <select class="form-control col-3" id="temporada">
                              <option>2020</option>
                              <option>2019</option>

                           </select>
                           <label for="categoria" class="col-auto">Categoria</label>
                           <select name="categoria" id="categoria" class="form-control col-3 mr-4">
                              <option>Juvenil</option>
                              <option>Junior</option>
                           </select>
                           <button class="btn b1 b1-primary col-md-1 ">Buscar</button>
                        </div>
                        <div class="row mt-3">
                           <div class="col-12">
                              <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                 <thead class="table-info">
                                    <th>Pos</th>
                                    <th>Equipo</th>
                                    <th>J</th>
                                    <th>G</th>
                                    <th>E</th>
                                    <th>CA</th>
                                    <th>CP</th>
                                    <th>AVG</th>
                                    <th>PTS</th>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td><a href="InfoEquipos.php">PHILLIES</a></td>
                                       <td>33</td>
                                       <td>27</td>
                                       <td>5</td>
                                       <td>1</td>
                                       <td>220</td>
                                       <td>.818</td>
                                       <td>82</td>
                                    </tr>
                                    <tr>
                                       <td>1</td>
                                       <td><a href="InfoEquipos.php">Cebmo</a></td>
                                       <td>33</td>
                                       <td>27</td>
                                       <td>5</td>
                                       <td>1</td>
                                       <td>220</td>
                                       <td>.818</td>
                                       <td>82</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-6 mt-3">  
               <div class="card ">
                  <div class="card-header"><h5>Lideres de bateo</h5></div>
                  <div class="card-body">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-primary">
                           <th>Numero</th>
                           <th>Camisa</th>
                           <th>Nombre</th>
                           <th>Equipo</th>
                           <th>AVG</th>
                        </thead>
                        <tbody>  
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Nello Mujica</a></td>
                              <td><a href="InfoEquipos.php">Cebmo</a></td>
                              <td>.900</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Marcos Monroy</a></td>
                              <td><a href="InfoEquipos.php">AJS</a></td>
                              <td>.800</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-6 mt-3">  
               <div class="card ">
                  <div class="card-header"><h5>Lideres de Lanzamientos</h5></div>
                  <div class="card-body">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-danger">
                           <th>Numero</th>
                           <th>Camisa</th>
                           <th>Nombre</th>
                           <th>Equipo</th>
                           <th>AVG</th>
                        </thead>
                        <tbody>  
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Nello Mujica</a></td>
                              <td><a href="InfoEquipos.php">Cebmo</a></td>
                              <td>.900</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Marcos Monroy</a></td>
                              <td><a href="InfoEquipos.php">AJS</a></td>
                              <td>.800</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-6 mt-3">  
               <div class="card ">
                  <div class="card-header"><h5>Lideres de Defensa</h5></div>
                  <div class="card-body">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-primary">
                           <th>Numero</th>
                           <th>Camisa</th>
                           <th>Nombre</th>
                           <th>Equipo</th>
                           <th>AVG</th>
                        </thead>
                        <tbody>  
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Nello Mujica</a></td>
                              <td><a href="InfoEquipos.php">Cebmo</a></td>
                              <td>.900</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Marcos Monroy</a></td>
                              <td><a href="InfoEquipos.php">AJS</a></td>
                              <td>.800</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-6 mt-3">  
               <div class="card ">
                  <div class="card-header"><h5>Más Carreras Anotadas</h5></div>
                  <div class="card-body">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-danger">
                           <th>Numero</th>
                           <th>Camisa</th>
                           <th>Nombre</th>
                           <th>Equipo</th>
                           <th>AVG</th>
                        </thead>
                        <tbody>  
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Nello Mujica</a></td>
                              <td><a href="InfoEquipos.php">Cebmo</a></td>
                              <td>.900</td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>51</td>
                              <td><a href="jugador.php">Marcos Monroy</a></td>
                              <td><a href="InfoEquipos.php">AJS</a></td>
                              <td>.800</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            
         </div>
      </div>

   <script src="../js/jquery-3.4.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body> 

</html>