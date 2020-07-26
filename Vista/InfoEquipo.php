<div class="container mt-3">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4><img src="assets/img/Partidos.png" style="position: relative;bottom: .2em">Partidos<img src="assets/img/Partidos3.png" class="ml-1"></h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm" >
                        <thead class="table-primary">
                           <th>J</th>
                           <th>Fecha</th>
                           <th>VS</th>
                           <th>AL</th>
                           <th>VB</th>
                           <th>HC</th>
                           <th>2B</th>
                           <th>3B</th>
                           <th>CA</th>
                           <th>BR</th>
                           <th>SF</th>
                           <th>K</th>
                           <th>SLG</th>
                           <th>AVG</th>
                        </thead>
                        <tbody>

<?php 
if (isset($_REQUEST['id'])) {
   foreach ($Partidos as $key => $Equipo) {
     if($_REQUEST['id'] != $Equipo->idEquipo){
         echo "<tr>
         <td>".($key+1)."</td>
         <td><a href='?c=infoPartido&id=$Equipo->idJuego'>$Equipo->Fecha</a></td>
         <td>";
      echo $Equipo->Con."</td>" ;
      $SumasEstadisticas = array();
      // AL
      array_push($SumasEstadisticas, Item(1, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // VB
      array_push($SumasEstadisticas, Item(2, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // HC
      array_push($SumasEstadisticas, Item(3, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // 2B
      array_push($SumasEstadisticas, Item(4, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // 3B
      array_push($SumasEstadisticas, Item(5, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // CA
      array_push($SumasEstadisticas, Item(8, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // BR
      array_push($SumasEstadisticas, Item(12, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // SF
      array_push($SumasEstadisticas, Item(13, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // K
      array_push($SumasEstadisticas, Item(10, $Equipo->idJuego, $Equipo->idEquipo, "b"));
      // BA/VB*1000
      $SLG = (Item(7, $Equipo->idJuego, $Equipo->idEquipo, "b")->Suma);
      if ($SumasEstadisticas[0]->Suma == 0) {
         $SLG = 0;
      }else $SLG = ($SLG / $SumasEstadisticas[2]->Suma)*1000;
      $AVG = ((Item(3, $Equipo->idJuego, $Equipo->idEquipo, "b")->Suma) / Item(2, $Equipo->idJuego, $Equipo->idEquipo, "b")->Suma)*1000;
      echo "
         <td>".$SumasEstadisticas[0]->Suma."</td>
         <td>".$SumasEstadisticas[1]->Suma."</td>
         <td>".$SumasEstadisticas[2]->Suma."</td>
         <td>".$SumasEstadisticas[3]->Suma."</td>
         <td>".$SumasEstadisticas[4]->Suma."</td>
         <td>".$SumasEstadisticas[5]->Suma."</td>
         <td>".$SumasEstadisticas[6]->Suma."</td>
         <td>".$SumasEstadisticas[7]->Suma."</td>
         <td>".$SumasEstadisticas[8]->Suma."</td>
         <td>".$SLG."</td>
         <td>".$AVG."</td>
         </tr>";
      }
   } 
}

?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row my-5">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4><img src="assets/img/Partidos2.png">Jugadores<img src="assets/img/Partido4.jpg"></h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm" >
                        <thead class="thead table-primary">
                           <th>CI</th>
                           <th>Nombre</th>
                           <th>Apellido</th>
                           <th>VB</th>
                           <th>HR</th>
                           <th>CA</th>
                           <th>CL</th>
                           <th>K</th>
                           <th>SLG</th>
                           <th>AVE</th>
                        </thead>
                        <tbody>
<?php 
if (isset($_REQUEST['Temporada']) && isset($_REQUEST['Categoria'])) {
   foreach ($Jugador as $key => $value) {
      $SumasEstadisticas = array();
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $value->idJugador, $_REQUEST['Categoria'],$_REQUEST['Temporada'], 'b', 2));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $value->idJugador, $_REQUEST['Categoria'],$_REQUEST['Temporada'], 'b', 6));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $value->idJugador, $_REQUEST['Categoria'],$_REQUEST['Temporada'], 'b', 8));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $value->idJugador, $_REQUEST['Categoria'],$_REQUEST['Temporada'], 'b', 9));
      array_push($SumasEstadisticas, Jugadores($_REQUEST['id'], $value->idJugador, $_REQUEST['Categoria'],$_REQUEST['Temporada'], 'b', 10));
      $SLG = (Jugadores($_REQUEST['id'], $value->idJugador, $_REQUEST['Categoria'],$_REQUEST['Temporada'], 'b', 7)->Suma);
      if ($SumasEstadisticas[0]->Suma == 0) {
         $SLG = 0;
         $AVG = 0;
      }else {
         $SLG = ($SLG / $SumasEstadisticas[0]->Suma)*1000;
         $AVG = ((Jugadores($_REQUEST['id'], $value->idJugador, $_REQUEST['Categoria'],$_REQUEST['Temporada'], 'b', 3)->Suma) / $SumasEstadisticas[0]->Suma)*1000;
      }
      $Categoria =$_REQUEST['Categoria'];
         echo "<tr>
               <td><a href='?c=jugador&id=$value->idJugador&Categoria=$Categoria'>$value->CI</a></td>
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
                          <!-- <tr>
                              <td><a href="?c=jugador">29587834</a></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                           </tr> -->
                        </tbody>
                     </table>
                  </div>
               </div>
               <form class="row justify-content-center mt-3" method="post" action="?c=pdf&ideq=<?php echo $_REQUEST['id'].'&Temporada='.$_REQUEST['Temporada'].'&Categoria='.$_REQUEST['Categoria']; ?>">
                  <button class="col-4 btn b1 b1-primary" data-toggle="modal" data-target="#Alerta"><i class="fas fa-print fa-lg mr-1"></i>Imprimir Reporte<i class="fas fa-print fa-lg ml-1"></i></button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
