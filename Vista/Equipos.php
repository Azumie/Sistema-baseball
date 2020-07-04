<?php require_once 'includes/headerAdmin.php';
?>

            <!-- CONTENIDO DE LA PAG -->
            <!-- con las columnas que sobraron hacemos una nueva columna que abarcara 10  que es
            donde se colocara el contenido de la pag-->
            <div class="col fondo">
               <!-- DENTRO DE ESTA COLUMNA crearemos una nueva fila para trabajar de manera mas comoda -->
               <div class="row" >
                  <div class="col-12 col-md-4 mt-4">
                     <a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu" data-toggle="collapse">Ocultar</a>
                  </div>
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
                                 <tr>
                                    <td>Cebmo</td>
                                    <td>A</td>
                                    <td>Junior</td>
                                    <td>Santa Teresita</td>
                                    <td>2</td>
                                    <td><a  href="#" data-toggle="modal" data-target="#Alerta" class="btn btn-block"><i class="far fa-edit fa-2x"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>Cardenales</td>
                                    <td>B</td>
                                    <td>Junior</td>
                                    <td>Santa Teresita</td>
                                    <td>2</td>
                                    <td><a href="#" data-toggle="modal" data-target="#Alerta"  class="btn btn-block"><i class="far fa-edit fa-2x"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>Guaros</td>
                                    <td>A</td>
                                    <td>Junior</td>
                                    <td>Salvador Garmendia</td>
                                    <td>2</td>
                                    <td><a  href="#" data-toggle="modal" data-target="#Alerta" class="btn btn-block"><i class="far fa-edit fa-2x"></i></a></td>
                                 </tr>
                                 <tr>
                                    <td>juvenial a</td>
                                    <td>A</td>
                                    <td>Junior</td>
                                    <td>La Milagrosa</td>
                                    <td>2</td>
                                    <td><a  href="#" data-toggle="modal" data-target="#Alerta" class="btn btn-block"><i class="far fa-edit fa-2x"></i></a></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <!-- Formulario para Agregar Equipos -->
                  <div class="col-12 mt-4">
                     <div class="card">
                        <div class="card-header" id="agregarEquipo">
                           <div class="mb-0 row justify-content-between">
                              <div class="col-auto mt-1">
                                 <h4><i class="icon-equipo"></i><i class="icon-mas mr-2"></i>Agregar Nuevo Equipo</h4>
                              </div>
                              <div class="col-md-auto d-inline">
                                 <a href="#Inicio" class="btn b1 b1-danger "><i class="far fa-times-circle fa-lg mr-1"></i>Cancelar</a>
                                 <Button class="btn b1 b1-info"><i class="icon-mas mr-2"></i>Agregar</Button>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <!-- AGREGAR EQUIPO -->
                           <form action="">
                              <div class="row text-center">
                                 <div class="col-12">
                                    <h6>Ingrese los siguientes datos:</h6>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-7 col-md-3 mb-2 ">
                                    <!-- los tamaños de los textfields puede cambiar, con form-control-lg se hace mas grande y con form-control-sm se hace mas pequ -->
                                    <!-- tambien lo podemos tener en varios estados como puede ser readonly y disabled -->
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" name="" id="" class="form-control" maxlength="30">
                                 </div>
                                 <div class="col-5 col-md-3 mb-2">
                                    <label for="letra">Letra:</label>
                                    <select name="letra" id="letra" class="form-control">
                                       <option value="a">A</option>
                                       <option value="b">B</option>
                                       <option value="c">C</option>
                                       <option value="d">D</option>
                                    </select>
                                 </div>
                                 <div class="col-6 col-md-3 mb-2">
                                    <!-- otro estilo que se puede colocar a un select es custom-select -->
                                    <label for="categoria">Categorias:</label>
                                    <!-- Oopciones por defecto -->
                                    <select name="categoria" id="categoria" class="form-control">
                                       <option value="hola">Junior</option>
                                       <option value="como">Juvenil</option>
                                    </select>
                                 </div>
                                 <div class="col-6 col-md-3 mb-2">
                                    <label for="escuela">Escuela:</label>
                                    <select name="escuela" id="escuela" class="form-control">
                                       <option value="Cebmo">Cebmo</option>
                                       <option value="ajs">AJS</option>
                                       <option value="al">Alsides Mujica</option>
                                       <option value="yankes">Yankes</option>
                                       <option value="cardenales">Cardenales</option>
                                       <option value="dfc">DFC</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-1">
                                    <a href="#AgregarJugador" class="btn b1 b1-success btn-block mb-3"><i class="icon-jugador-mas"></i></a>
                                 </div>
                                 <div class="col-md-11">
                                    <table class="table table-bordered table-sm table-hover table-responsive-sm">
                                       <thead class="table-primary">
                                          <th>Nombre</th>
                                          <th>Letra</th>
                                          <th>Categoría</th>
                                          <th>Escuela</th>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Cebmo</td>
                                             <td>A</td>
                                             <td>Junior</td>
                                             <td>Santa Teresita</td>
                                          </tr>
                                          <tr>
                                             <td>Cardenales</td>
                                             <td>B</td>
                                             <td>Junior</td>
                                             <td>Santa Teresita</td>
                                          </tr>
                                          <tr>
                                             <td>Guaros</td>
                                             <td>A</td>
                                             <td>Junior</td>
                                             <td>Salvador Garmendia</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 my-4">
                     <div class="card" id="AgregarJugador">
                        <div class="card-header">
                           <div class="row justify-content-between">
                              <div class="col-auto">
                                 <h4><svg class="bi bi-person-lines-fill" width="30px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/></svg>Agregar Jugador</h4>
                              </div>
                              <div class="col-auto form-inline mr-1">
                                    <label class="mr-2" for="activo">¿Jugando?</label>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" name="activo" id="activo" class="custom-control-input" checked>
                                       <label for="activo" class="custom-control-label">Si</label>
                                    </div>
                                 </div>
                           </div>
                           
                        </div>
                        <div class="card-body">
                           <!-- AGREGANDO JUGADOR -->
                           <form>
                              <div class="row">
                                 <div class="col-12 text-center mb-2">
                                    <h6>Ingrese los siguientes datos:</h6>
                                 </div>
                              </div>
                              <div class="form-group row justify-content-center">
                                 <div class="col-auto">
                                    <select name="Estado" id="Estado" class="form-control">
                                       <option value="V">V</option>
                                       <option value="E">E</option>
                                    </select>
                                 </div>
                                 <div class="col-auto col-md-2 mb-2 mb-md-0">
                                    <input type="text" class="form-control" maxlength="8" placeholder="Cédula" required>
                                 </div>
                                 <div class="col-6 col-md-4">
                                    <input type="text"class="form-control"  maxlength="30" placeholder="Nombre" required>
                                 </div>
                                 <div class="col-6 col-md-3">
                                    <input type="text" class="form-control" maxlength="30" placeholder="Apellido" required>
                                 </div>
                              </div>

                              <div class="form-group row justify-content-center">
                                 <div class="col-3 form-inline">
                                    <label for="Mujer" class="mr-2 mb-0">Sexo:</label>
                                    <div class="custom-control custom-radio mr-2">
                                       <input type="radio" name="sexo" id="mujer" class="custom-control-input" checked>
                                       <label for="mujer" class="custom-control-label">Mujer</label>
                                    </div>
                                    <div class="custom-control custom-radio ">
                                       <input type="radio" name="sexo" id="hombre" class="custom-control-input">
                                       <label for="hombre" class="custom-control-label">Hombre</label>
                                    </div>
                                 </div>
                                 <div class="col-3 col-md-3">
                                    <label for="Nacido">Día de Nacimiento</label>
                                    <input type="date" class="form-control" required placeholder="Fecha">
                                 </div>
                                 
                                 <div class="col-2">
                                    <label class="mt-4 mt-md-0" for="Altura">Altura</label>
                                    <input type="text" class="form-control" maxlength="2" id="Altura">
                                 </div>
                                 <div class="col-2">
                                    <label class="mt-4 mt-md-0" for="Peso">Peso</label>
                                    <input type="text" class="form-control" maxlength="3" id="Peso">
                                 </div>
                              </div>

                              <div class="form-group row justify-content-center">
                                 <div class="col-3 col-md-2">
                                    <label for="BAT">BAT</label>
                                    <input type="text" class="form-control" maxlength="3" id="BAT" required>
                                 </div>
                                 <div class="col-3 col-md-2">
                                    <label for="THR">THR</label>
                                    <input type="text" class="form-control" maxlength="3" id="THR" required>
                                 </div>
                                 <div class="col-4 col-md-2">
                                    <label for="Num_Camisa">N de Camisa</label>
                                    <input type="text" class="form-control" maxlength="2" id="Num_Camisa" required>
                                 </div>
                                 <div class="col-2 col-md-2">
                                    <label for="letra">Letra</label>
                                    <input type="text" class="form-control" maxlength="1" id="letra" value="A">
                                 </div>
                              </div>

                              <div class="row justify-content-center">
                                 <div class="col-12 col-2 align-self-md-center">
                                    <h6><em><i class="fas fa-map-signs fa-3x" style="position: relative; top: .2em;"></i>Dirección Actual:</em></h6>
                                 </div>
                                 <div class="col-4 col-md-3">
                                    <label for="Estado">Estado:</label>
                                    <select name="Estado" id="Estado" class="form-control">
                                       <option value="Lara">Lara</option>
                                       <option value="Aragua">Aragua</option>
                                    </select>
                                 </div>
                                 <div class="col-4 col-md-3">
                                    <label for="Municipio">Municipio:</label>
                                    <input type="text" name="Municipio" id="Municipio" placeholder="Municipio" class="form-control" required>
                                 </div>
                                 <div class="col-4 col-md-3">
                                    <label for="Parroquia">Parroquia:</label>
                                    <input type="text" name="Parroquia" id="Parroquia" placeholder="Parroquia" class="form-control" required>
                                 </div>
                              </div>

                              <div class="row justify-content-center mt-3">
                                 <div class="col-10 col-md-7 mb-2">
                                       <textarea class="form-control" name="Direccion" id="Direccion" placeholder="Ingrese la Dirección actual del jugador, por favor" maxlength="45" required cols="60" rows="3" style="width: 100%"></textarea>
                                 </div>
                                 <div class="col-10 col-md-4 align-self-md-center">
                                       <a href="#agregarEquipo" class="btn b1 b1-primary btn-block">Crear</a>
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
   <script src="../js/jquery-3.4.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>