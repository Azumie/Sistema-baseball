<?php require_once 'includes/headerAdmin.php' ;
      require '../Controlador/Table.php';
      require_once  '../Controlador/conexionA.php';

      $sql_leer =   'SELECT personas.CI, personas.Nombre, personas.Apellido, personas.Nacido, personas.Sexo 
                     FROM personas INNER JOIN anotadores on (anotadores.CI = personas.CI)';
      $gsent = $pdo->prepare($sql_leer);
      $gsent->execute();
      $resultado = $gsent->fetchAll();
      // AGREGAR A BD
      if(isset($_POST['btnAgregarCategoria'])){
         try {
            $categoria = $_POST['Nombre_Categoria'];
            $sql_incluir = 'INSERT INTO categorias (Categoria) VALUES (?)';
            $gsent = $pdo->prepare($sql_incluir);
            $gsent->execute(array($categoria));
            $sql_incluir = null; $pdo = null; $gsent = null;
            unset($_POST, $gsent);
         } catch (PDOException $e) {
            print "Error : " . $e->getMessage() ."<br>";
            die();
            echo "error";
         }
      }

?>
<!-- CONTENIDO DE LA PAG -->
<!-- con las columnas que sobraron hacemos una nueva columna que abarcara 10  que es donde se colocara el contenido de la pag-->
<div class="col fondo">
   <!-- DENTRO DE ESTA COLUMNA crearemos una nueva fila para trabajar de manera mas comoda -->
   
   <div class="row">
      <div class="col-12 mt-3">
         <a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu"
         data-toggle="collapse">Ocultar</a>
      </div>
      <div class="col-12">
         <div class="card mt-3">
            <div class="card-header">
               <div class="row justify-content-between">
                  <div class="col-auto">
                     <h5><i class="fas fa-greater-than-equal" style="position: relative; top: .1em;"></i>Anotadores Agregados</h5>
                  </div>
                  <div class="col-4">
                     <a href="#AgregarAnotador" class="btn b1 b1-info btn-block"><i class="fas fa-share fa-lg mr-2" style="position: relative; top: .1em; text-shadow: 1px 1px 1px #000"></i>Agregar</a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-12">
                     <table id="tbAnotador" class="table table-bordered table-sm table-hover table-responsive-sm">
                        <thead class="table-info">
                           <th>CI</th>
                           <th>Nombre</th>
                           <th>Apellido</th>
                           <th>Anotando</th>
                           <th>Sexo</th>
                        </thead>
                        <tbody>
                              <?php 
                                    
                              ?>        
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- ACTUALIZANDO ANOTADOOOOOR -->
               <form method="POST">
                  <div class="form-group row justify-content-center">
                     <div class="col-6 col-md-3 mb-2">
                        <input type="text" placeholder="Cédula" class="form-control" id="Cedula_Anotador" maxlength="9" readonly value="29587834" name="ActualizarCedula_Anotador">
                     </div>
                     <div class="col-6 col-md-4">
                        <input type="text" name="Nombre_Anotador" id="Nombre_Anotador" placeholder="Nombre" maxlength="30" class="form-control" required>
                     </div>
                     <div class=" col-9 col-md-4">
                        <input type="text" name="Apellido_Anotador" id="Apellido_Anotador" placeholder="Apellido" maxlength="30" class="form-control" required>
                     </div>
                  </div>
                  <div class="row justify-content-center mb-2">
                     <div class="col-6 col-md-3">
                        <label for="Inicio_Anotador">Inicio en el campo</label>
                        <input type="date" name="Inicio_Anotador" id="Inicio_Anotador" class="form-control" required max="2020-06-30">
                     </div>
                     <div class="col-4 col-md-2 mt-4">
                        <div class="form-check">
                           <label class="form-check-label mr-5">
                              <input type="radio" name="sexo" id="Mujer" class="form-check-input" value="Mujer">Mujer
                           </label>
                        </div>
                        <div class="form-check">
                           <label class="form-check-label">
                              <input type="radio" name="sexo" id="Hombre" class="form-check-input mr-2" value="Hombre">Hombre
                           </label>
                        </div>
                     </div>

                     <div class="col-12 col-md-4 mt-4 align-self-md-center">
                        <button name="Actualizar" type="submit" class="btn b1 b1-primary btn-block"  data-toggle="modal" data-target="#Alerta" ><i class="fas fa-redo-alt fa-lg mr-2" style="text-shadow: 1px 1px 1px #000"></i>Actualizar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="row ">
      <div class="col">
         <div class="card mt-3"  id="AgregarAnotador">
            <div class="card-header">
               <h5><svg class="bi bi-folder-plus" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/><path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/></svg>Agregar Anotador</h5>
            </div>
            <div class="card-body">
               <!-- AGREGANDO ANOTADOOOOR -->
               <form method="POST" id="Agregando_Anotador">
                  <div class="form-group row">
                     <div class="col">
                        <h6><em><i class="far fa-clipboard fa-2x mr-2" style="position: relative; top: .1em;"></i>Ingrese los siguientes datos:</em></h6>
                     </div>
                  </div>
                  <div class="form-group row justify-content-center">
                     <div class="col-1">
                        <select name="Estado" id="Estado" class="form-control">
                           <option value="V">V</option>
                           <option value="E">E</option>
                        </select>
                     </div>
                     <div class="col-6 col-md-3 mb-2">
                        <input  id="Agregar_Cedula_Anotador" type="text" placeholder="Cédula" class="form-control" name="Agregar_Cedula_Anotador" maxlength="9" required>
                     </div>
                     <div class="col-6 col-md-3">
                        <input type="text" name="Agregar_Nombre_Anotador" id="Agregar_Nombre_Anotador" placeholder="Nombre" maxlength="30" class="form-control" required>
                     </div>
                     <div class=" col-9 col-md-3">
                        <input id=""  type="text" name="Agregar_Apellido_Anotador" id="Agregar_Apellido_Anotador" placeholder="Apellido" maxlength="30" class="form-control" required>
                     </div>
                  </div>
                  <div class="row justify-content-center mb-2">
                     <div class="col-6 col-md-3">
                        <label for="Agregar_Inicio_Anotador">Inicio en el campo</label>
                        <input id=""  type="date" name="Agregar_Inicio_Anotador" id="Agregar_Inicio_Anotador" class="form-control" required max="2020-06-30">
                     </div>
                     <div class="col-4 col-md-2 mt-4">
                        <div  class="custom-control custom-radio mr-2">
                           <input type="radio" name="Agregar_sexo_Anotador" id="mujer" class="custom-control-input" checked value="Mujer">
                           <label for="mujer" class="custom-control-label">Mujer</label>
                        </div>
                        <div class="custom-control custom-radio ">
                           <input value="Hombre" type="radio" name="Agregar_sexo_Anotador" id="hombre" class="custom-control-input">
                           <label for="hombre" class="custom-control-label">Hombre</label>
                        </div>
                     </div>
                  </div>

                  <div class="row justify-content-center">
                        <div class="col-auto">
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
                     <div class="col-12 col-md-4 mt-4 align-self-md-center">
                        <button id="btnRegistrar" type="submit" class="btn b1 b1-primary btn-block"><i class="icon-mas fa-lg" style="text-shadow: 1px 1px 1px #000"></i> Agregar</button>
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
<script src="../Controlador/app.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>