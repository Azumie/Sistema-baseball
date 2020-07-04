<?php require_once 'includes/headerCliente.php' ?>
<div class="container mt-3">
   <div class="form-group row justify-content-center">
      <div class="col-5 col-md-3">
         <select autofocus class="form-control" id="Filtro">
            <option value="Fecha">Fecha</option>
            <option value="Mes">Contrincante</option>
         </select>
      </div>
      <div class="col-5 col-md-3 mb-3">
         <input type="text" class="form-control" name="Datos" id="Datos">
      </div>
      <div class="col-5 col-md-2">
         <button type="submit" class="btn b1 b1-info mr-3 btn-block"><i class="fas fa-search fa-lg" style="text-shadow: 1px 1px 1px #000"></i></button>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4><img src="../img/Partidos.png" style="position: relative;bottom: .2em">Partidos<img src="../img/Partidos3.png" class="ml-1"></h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <table class="table table-bordered table-sm table-hover table-responsive-sm" >
                        <thead class="table-primary">
                           <th>J</th>
                           <th>Fecha</th>
                           <th>VS</th>
                           <th></th>
                           <th>VB</th>
                           <th>HC</th>
                           <th>H2</th>
                           <th>H3</th>
                           <th>HR</th>
                           <th>CA</th>
                           <th>BB</th>
                           <th>SF</th>
                           <th>K</th>
                           <th>AL</th>
                           <th>PDE</th>
                           <th>SLG</th>
                           <th>AVG</th>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td><a href="InfoPartido.php">2020-05-19</a></td>
                              <td><a href="InfoEquipos.php">Cardenales</a></td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                           </tr>
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
               <h4><img src="../img/Partidos2.png">Jugadores<img src="../img/Partido4.jpg"></h4>
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
                           <th>HC</th>
                           <th>HR</th>
                           <th>CA</th>
                           <th>CI</th>
                           <th>K</th>
                           <th>SLG</th>
                           <th>AVE</th>
                        </thead>
                        <tbody>
                           <tr>
                              <td><a href="jugador.php">29587834</a></td>
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
                           </tr>
                        </tbody>
                     </table>
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
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>