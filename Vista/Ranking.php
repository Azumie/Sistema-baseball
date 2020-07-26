<?php require_once 'includes/headerCliente.php' ?>

      <div class="container mt-5">
         <div class="row ml-2">
            <div class="card col-3 logo-bg border-dark" style="width:16rem";>
               <img class="card-img-top mt-4 logo-bg"; src="../img/LogoNaranja.png" alt="">
            </div>
            
            <div class="jumbotron jumbotron-bg text-white col-9 border-dark">
               <h3 class="display-5 ">La Liga Especial Ilda de Tona</h3>
               <p>Está dedicada a la formación y dirección de los jóvenes deportistas para intruirlos en un camino de disciplina, valores y habilidades para que desempeñen una correcta vida deportiva </p>
            </div>
         </div>
      </div>

      <div class="container my-3">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="mt-2";><img src="assets/img/Trofeo.png">Ranking<img src="assets/img/Trofeo.png"></h4>
                  </div>
                  <div class="card-body">
                     <p class="text-center text-muted"><em>i</em> Filtre para buscar el Ranking de una Temporada en específico</p> 
                        <form class="form-inline row mb-2" method="POST" action="?c=Ranking">
                           <label for="temporada" class="col-2 aling-self-center">Temporada</label>
                           <select class="form-control col-3" id="temporada">
                              <?php    
                                 $sql_leer = "select idTemporada, AnioInicio from temporadas";
                                 $resul = $conexion->consultar($sql_leer, array(''));
                                 foreach ($resul as $campo) {
                                    echo '<option value="'.$campo->idTemporada.'">'.$campo->AnioInicio.'</option>';
                                    }
                              ?>
                           </select>
                           <label for="categoria" class="col-auto">Categoria</label>
                           <select name="categoria" id="categoria" class="form-control col-3 mr-4">
                              <?php 
                                 $sql = 'SELECT * FROM categorias';
                                 $categorias = $conexion ->consultar($sql, array(''));
                                 foreach ($categorias as $categoria) {
                                    echo "<option value='$categoria->idCategoria' selected >$categoria->Categoria</option>";
                                 }
                              ?>
                           </select>
                           <button class="btn b1 b1-primary col-md-1 ">Buscar</button>
                        </form>
                        <div class="row mt-3">
                           <div class="col-12">
                              <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                 <thead class="table-info">
                                    <th>Pos</th>
                                    <th>Equipo</th>
                                    <th>J</th>
                                    <!-- <th>G</th>
                                    <th>E</th> -->
                                    <th>CA</th>
                                    <!-- <th>CP</th> -->
                                    <th>AVG</th>
                                 </thead>
                                 <tbody>
<?php 
foreach ($AVG as $key => $Equipo) {
   echo "<tr>
         <td>$key</td>
         <td><a href='?c=infoEquipo&id=$Equipo->idEquipo&Categoria=$Equipo->idCategoria&Temporada=$Equipo->idTemporada'>$Equipo->Nombre</a></td>
         <td>".$J[$key]->J."</td>
         <td>$Equipo->AVG</td>
         <td>".($CA[$key]->CA)."</td>
         </tr>";
}
?>
<td></td>
                                   
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