<div class="container my-3">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8">
              <div class="row justify-content-center">
                <img src="assets/img/usuario.png">
              </div>
              <div class="row justify-content-center"><h4><i class="fas fa-baseball-ball fa-spin text-info"></i>-Datos Personales-<i class="fas fa-baseball-ball fa-spin text-primary"></i></h4></div>
              <div class="row justify-content-center"><h5><?php echo $jugador->Nacionalidad.'-'.$jugador->CI ?></h5></div>
              <div class="row justify-content-center"><h6><?php echo $jugador->Sexo == 'H' ? 'Hombre': 'Mujer'?></h6></div>
              <div class="row">
                <div class="col-6">
                  <input class="form-control mb-2" type="text" value="<?php echo $jugador->Nom?>" readonly>
                </div>
                <div class="col-6">
                  <input class="form-control mb-2" type="text" value="<?php echo $jugador->Apellido ?>" readonly>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-5 col-md-4"><br>
                  <div class="row"><h6>Estado: <em>Lara</em></h6></div>
                  <div class="row"><h6>Municipio: <em>Iribarren</em></h6></div>
                  <div class="row"><h6>Parroquia: <em><?php echo $jugador->Parroquia?></em></h6></div>
                  <!-- <div class="row"><h6>Fecha de Nacimiento</h6></div>
                  <div class="row"><input class="form-control" type="date" readonly></div> -->
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <h6>Dirección:</h6>
                  </div>
                  <div class="row"><textarea class="form-control" name="Direccion" id="Direccion" placeholder="Dirección actual del jugador"><?php echo $jugador->Direccion?></textarea></div>
                </div>
              </div>
              <div class="row justify-content-end"><h5><i class="fas fa-calendar-alt mr-1 text-info fa-lg"></i><?php echo $jugador->Nombre.' '.$jugador->Apellido ?></h5></div>
              <hr class="bg-info">
            </div>
          </div>
          <div class="row">
            <div class="col-12"><h4>Ficha Técnica:</h4></div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-md-9">
              <div class="row text-center justify-content-center">
                <div class="col-6 col-md-4"><h5>Equipo: <em>Cebmo</em></h5></div>
                <div class="col-6 col-md-5"><h5>Escuela: <em>Santa Teresita</em></h5></div>
                <div class="col-6 col-md-3"><h6>Número de camisa: <em>5 'A'</em></h6></div>
              </div>
              <div class="row text-center">
                <div class="col-6 col-md-3"><h6>Altura: <em>123</em></h6></div>
                <div class="col-6 col-md-3"><h6>Peso: <em>123</em></h6></div>
                <div class="col-6 col-md-3"><h6>BAT: <em>Derecho</em></h6></div>
                <div class="col-6 col-md-3"><h6>THR: <em>123</em></h6></div>
              </div>
            </div>
            <div class="col-2"><img src="assets/img/Bateador.png"></div>
          </div>
        </div>
      </div>
      <div class="card mt-4">
        <div class="card-header">
            <h4><i class="fas fa-chart-line" style="position: relative;top: .1em"></i>Destrezas</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 px-4">
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
              <div class="tab-content mt-3 px-3">
                 <div class="tab-pane active" id="Bateador" role="tabpanel">
                    <div class="row">
                      <div class="col-2">
                        <img src="assets/img/Bateador1.png">
                      </div>
                       <div class="col-10">
                          <table class="table table-bordered table-hover table-sm table-responsive-sm">
                             <thead class="table-info">
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

if (isset($_REQUEST['id'])) {
   foreach ($Jugador1 as  $value) {
      $SumasEstadisticas = array();
      $idEquipo, $idJugador,$idCategoria, $idTipo, $idItem
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $_REQUEST['Categoria'], 'b', 2));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $_REQUEST['Categoria'], 'b', 6));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $_REQUEST['Categoria'], 'b', 8));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $_REQUEST['Categoria'], 'b', 9));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $_REQUEST['Categoria'], 'b', 10));
      $SLG = (Jugadores($_REQUEST['id'], $_REQUEST['Categoria'], 'b', 7)->Suma);
      if ($SumasEstadisticas[0]->Suma == 0) {
         $SLG = 0;
         $AVG = 0;
      }else {
         $SLG = ($SLG / $SumasEstadisticas[0]->Suma)*1000;
         $AVG = ((Jugadores($_REQUEST['id'], $_REQUEST['Categoria'], 'b', 3)->Suma) / $SumasEstadisticas[0]->Suma)*1000;
      }
      
         echo "<tr>
               <td><a href='?c=jugador&id=$value->idJugador'>$value->CI</a></td>
               <td>$value->Nombre</td>
               <td>$value->Apellido</td>
               <td>".$SumasEstadisticas[0]->Suma."</td>
               <td>".$SumasEstadisticas[1]->Suma."</td>
               <td>".$SumasEstadisticas[2]->Suma."</td>
               <td>".$SumasEstadisticas[3]->Suma."</td>
               <td>".$SumasEstadisticas[4]->Suma."</td>
               <td>".$SLG."</td>
               <td>".$AVG."</td>
               </tr>";
      
   }
}


 ?>
                               <!--  <tr>
                                   <td><span id="">1</span></td>
                                   <td><strong>1</strong></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                   <td><span id="">1</span></td>
                                </tr> -->
                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
                 <div class="tab-pane" id="Defensa" role="tabpanel">
                    <div class="row">
                      <div class="col-2"><img src="assets/img/Defensa.png"></div>
                       <div class="col-10">
                          <table
                             class="table table-bordered table-sm table-hover table-responsive-sm">
                             <thead class="table-info">
                                <th>POS</th>
                                <th>O</th>
                                <th>A</th>
                                <th>E</th>
                             </thead>
                             <tbody>
                                <tr>
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
                 <div class="tab-pane" id="Lanzador" role="tabpanel">
                    <div class="row">
                      <div class="col-2"><img src="assets/img/Lanzador.png"></div>
                       <div class="col-10">
                        <br>
                          <table
                             class='table table-bordered table-sm table-hover table-responsive-sm'>
                             <thead class="table-info">
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
                 <div class="row justify-content-center mt-3"> 
                    <button class="col-4 btn b1 b1-primary" data-toggle="modal" data-target="#Alerta"><i class="fas fa-print fa-lg mr-1"></i>Imprimir Reporte<i class="fas fa-print fa-lg ml-1"></i></button> 
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
