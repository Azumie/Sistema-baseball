<div class="col fondo">
   <!-- DENTRO DE ESTA COLUMNA crearemos una nueva fila para trabajar de manera mas comoda -->
   <div class="row" >
      <div class="col-12 col-md-4 mt-4">
         <a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu" data-toggle="collapse">Ocultar</a>
      </div>
      <?php if(!isset($_GET['id'])): ?>
      <!-- Tabla de equipos  -->
      <div class="col-12 mt-4">
         <div class="card" id="Inicio">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h4><i class="icon-equipo"></i>Equipos</h4>
                  </div>
                  <div class="col-4">
                     <a href="#agregarEquipo" class="btn b1 b1-info btn-block"><i class="fas fa-share fa-lg mr-1" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Agregar</a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <table class=" table table-bordered table-sm table-hover table-responsive-sm">
                  <thead class="table-primary">
                     <th>Nombre</th>
                     <th>Letra</th>
                     <th>Categoría</th>
                     <th>Escuela</th>
                     <th>Temporadas</th>
                  </thead>
                  <tbody>
                     <?php    
                        addItemAdminActu($equipos,'?c=Equipos');
                      ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- Formulario para Agregar Equipos -->
      <?php endif; ?>
      <form class="col-12 my-3" action="?c=Equipos&m=guardar<?php echo isset($equipox) ? "&id=$equipox->idEquipo":'' ?>" method="POST">
         <div class="card">
            <div class="card-header" id="agregarEquipo">
               <div class="mb-0 row justify-content-between">
                  <div class="col-auto mt-1">
                     <h4><i class="icon-equipo"></i><i class="icon-mas mr-2"></i><?php echo isset($equipox) ? 'Actualizar':'Agregar Nuevo' ?> Equipo</h4>
                  </div>
                  <div class="col-md-auto ">
                     <a href="?c=equipos" class="btn b1 b1-danger "><i class="far fa-times-circle fa-lg mr-1"></i>Cancelar</a>
                     <Button type="submit" class="btn b1 b1-info"><i class="icon-mas mr-2"></i><?php echo isset($equipox) ? 'Actualizar':'Agregar' ?></Button>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <!-- AGREGAR EQUIPO -->
                  <div class="row text-center">
                     <div class="col-12">
                        <h6>Ingrese los siguientes datos:</h6>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-6 col-md-3 mb-2 ">
                        <!-- los tamaños de los textfields puede cambiar, con form-control-lg se hace mas grande y con form-control-sm se hace mas pequ -->
                        <!-- tambien lo podemos tener en varios estados como puede ser readonly y disabled -->
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" class="form-control" required minlength="2" maxlength="30" pattern="[A-Za-z]+" value="<?php echo isset($equipox) ? $equipox->Nombre:'' ?>">
                     </div>
                     <div class="col-5 col-md-3 mb-2">
                        <label for="letra">Letra:</label>
                        <select name="letra" id="letra" class="form-control">
                           <option value="a" <?php echo isset($equipox) && ucwords($equipox->Letra_E) == 'A' ? 'selected':'' ?>>A</option>
                           <option value="b" <?php echo isset($equipox) && ucwords($equipox->Letra_E) == 'B' ? 'selected':'' ?>>B</option>
                           <option value="c" <?php echo isset($equipox) && ucwords($equipox->Letra_E) == 'C' ? 'selected':'' ?>>C</option>
                           <option value="d" <?php echo isset($equipox) && ucwords($equipox->Letra_E) == 'D' ? 'selected':'' ?>>D</option>
                        </select>
                     </div>
                     <div class="col-6 col-md-3 mb-2">
                        <!-- otro estilo que se puede colocar a un select es custom-select -->
                        <label for="categoria">Categorias: </label>
                        <!-- Oopciones por defecto -->
                        <select name="categoria" id="categoria" class="form-control">
                           <?php    
                              $conexion = new Conexion();
                              $sql_leer = "select idCategoria, Categoria from categorias";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 if ($campo->idCategoria == $equipox->idCategoria) {
                                    echo "<option value='$campo->idCategoria' selected> $campo->Categoria </option>";
                                 }
                                    echo "<option value='$campo->idCategoria'> $campo->Categoria </option>";
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-6 col-md-3 mb-2">
                        <label for="escuela">Escuela:</label>
                        <select name="escuela" id="escuela" class="form-control">
                           <?php    
                              $sql_leer = "select idEscuela, Escuela from escuelas";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 if ($campo->idEscuela == $equipox->idEscuela) {
                                    echo "<option value='$campo->idEscuela' selected> $campo->Escuela </option>";
                                 }
                                    echo "<option value='$campo->idEscuela'> $campo->Escuela </option>";
                              }
                            ?>
                        </select>
                     </div>
                     <?php if(isset($_REQUEST['id'])): ?>
                     <div class="col-12 mt-3">
                        <table id="tbJugadores" class="table table-bordered table-sm table-hover table-responsive-sm">
                           <thead class="table-info">
                              <th>CI</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>N° Camisa</th>
                              <th>Letra</th>
                              <th> id</th>
                           </thead>
                           <tbody>
                              <?php
                                 $jugadores = $this->jugador->listarPorEquipo($_REQUEST['id']);
                                 additemAdmin($jugadores); 
                              ?>
                           </tbody>
                        </table>
                     </div>
                     <?php endif; ?>
                  </div>  
            </div>
         </div>
      </form>

      <!-- Formulario para agregar Jugaedores -->
      <?php if (isset($_REQUEST['id'])):?>
      <div class="col-12 my-3">
         <div class="card" id="AgregarJugador">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h4><svg class="bi bi-person-lines-fill" width="30px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/></svg>Agregar Jugador</h4>
                  </div>
               </div>        
            </div>
            <div class="card-body">
               <!-- AGREGANDO JUGADOR -->
               <form method='POST' action="?c=equipos&m=agregarJugador&id=<?php echo $_REQUEST['id']; ?>">
                  <div class="row">
                     <div class="col-12 text-center mb-2">
                        <h6>Ingrese los siguientes datos:</h6>
                     </div>
                  </div>
                  <div class="form-group row justify-content-center">
                     <div class="col-auto">
                        <select name="Nacionalidad" id="Nacionalidad" class="form-control">
                           <option value="V">V</option>
                           <option value="E">E</option>
                        </select>
                     </div>
                     <div class="col-auto col-md-2 mb-2 mb-md-0">
                        <input type="text" class="form-control" minlength="8" maxlength="8" pattern="[0-9]+" placeholder="Cédula" required name="Cedula">
                     </div>
                     <div class="col-6 col-md-4">
                        <input type="text"class="form-control" minlength="2" maxlength="30" pattern="[A-Za-z]+" placeholder="Nombre" required name="Nombre">
                     </div>
                     <div class="col-6 col-md-4">
                        <input type="text" class="form-control" minlength="2" maxlength="30" pattern="[A-Za-z]+" placeholder="Apellido" required name="Apellido">
                     </div>
                  </div>
                  <div class="form-group row justify-content-center">
                     <div class="col-3 form-inline">
                        <label for="Mujer" class="mr-2 mb-0">Sexo:</label>
                        <div class="custom-control custom-radio mr-2">
                           <input type="radio" name="Sexo" id="mujer" class="custom-control-input" checked value="M">
                           <label for="mujer" class="custom-control-label">Mujer</label>
                        </div>
                        <div class="custom-control custom-radio ">
                           <input type="radio" name="Sexo" id="hombre" class="custom-control-input" value="H">
                           <label for="hombre" class="custom-control-label">Hombre</label>
                        </div>
                     </div>
                     <div class="col-3 col-md-3">
                        <label for="Nacido">Día de Nacimiento</label>
                        <input type="date" name="Fecha_n" class="form-control" required placeholder="Fecha">
                     </div>
                     
                     <div class="col-2">
                        <label class="mt-4 mt-md-0" for="Altura">Altura</label>
                        <input type="text" class="form-control" maxlength="4" name="Altura">
                     </div>
                     <div class="col-2">
                        <label class="mt-4 mt-md-0" for="Peso">Peso</label>
                        <input type="number" class="form-control" step="0,01" min="10" max="100" name="Peso">
                     </div>
                  </div>

                  <div class="form-group row justify-content-center">
                     <div class="col-3 col-md-2">
                        <label for="BAT">BAT</label>
                        <input type="text" class="form-control" maxlength="3" name="BAT" required>
                     </div>
                     <div class="col-3 col-md-2">
                        <label for="THR">THR</label>
                        <input type="text" class="form-control" maxlength="3" name="THR" required>
                     </div>
                     <div class="col-4 col-md-2">
                        <label for="Num_Camisa">N de Camisa</label>
                        <input type="text" class="form-control" maxlength="2" name="Num_Camisa" required>
                     </div>
                     <div class="col-2 col-md-2">
                        <label for="letra">Letra</label>
                        <select name="Letra" id="Letra" class="form-control">
                           <option value="A">A</option>
                           <option value="B">B</option>
                        </select>
                     </div>
                  </div>

                  <div class="row justify-content-center">
                     <div class="col-12 col-md-auto align-self-md-center">
                        <h6><em><i class="fas fa-map-signs fa-3x" style="position: relative; top: .2em;"></i>Dirección Actual:</em></h6>
                     </div>
                     <div class="col-5 col-md-3 mb-1">
                        <label for="Estado">Estado</label>
                        <select class="form-control" id="Estado" name="Estado">
                           <?php    
                              $sql_leer = "select idEstado, Estado from estados";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo "<option value=$campo->idEstado> $campo->Estado</option>";
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-6 col-md-3">
                        <label for="Municipio">Municipio</label>
                        <select class="form-control" id="Municipio" name="Municipio">
                           <?php    
                              $sql_leer = "select idMunicipio, Municipio from Municipios";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo "<option value=$campo->idMunicipio> $campo->Municipio</option>";
                              }
                            ?>
                        </select>
                     </div>
                     <div class="col-6 col-md-3">
                        <label for="Parroquia">Parroquia</label>
                        <select class="form-control" id="Parroquia" name="Parroquia">
                           <?php    
                              $sql_leer = "select idParroquia, Parroquia from Parroquia";
                              $resul = $conexion->consultar($sql_leer, array(''));
                              foreach ($resul as $campo) {
                                 echo "<option value=$campo->idParroquia> $campo->Parroquia</option>";
                              }
                            ?>
                        </select>
                     </div>
                  </div>

                  <div class="row justify-content-center mt-3">
                     <div class="col-10 col-md-7 mb-2">
                           <textarea class="form-control" name="Direccion" id="Direccion" placeholder="Ingrese la Dirección actual del jugador, por favor" maxlength="45" required cols="60" rows="3" style="width: 100%"></textarea>
                     </div>
                     <div class="col-10 col-md-4 align-self-md-center">
                        <button type="submit" class="btn b1 b1-primary btn-block" >Agregar Jugador</button>
                     </div>
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
