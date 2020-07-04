<?php require_once 'includes/headerAdmin.php';
      require_once '../Controlador/conexionA.php';
      require '../Controlador/Table.php';
      //MOSTRANDO EN LAS TABLAS
      // $sql_leer = 'SELECT Categoria FROM categorias';
      // $gsent = $pdo->prepare($sql_leer);
      // $gsent->execute();
      // $resultado = $gsent->fetchAll();
      $sql_leer = 'SELECT Escuela FROM escuelas';
      $respuesta = consultar($sql_leer);
      // $gsent = $pdo->prepare($sql_leer);
      // $gsent->execute();
      // $resultado1 = $gsent->fetchAll();
      // AGREGAR A BD
      // if(isset($_POST['btnAgregarCategoria'])){
      //    try {
      //       $categoria = $_POST['Nombre_Categoria'];
      //       $sql_incluir = 'INSERT INTO categorias (Categoria) VALUES (?)';
      //       $gsent = $pdo->prepare($sql_incluir);
      //       $gsent->execute(array($categoria));
      //       $sql_incluir = null; $pdo = null; $gsent = null;
      //       unset($_POST, $gsent);
      //    } catch (PDOException $e) {
      //       print "Error : " . $e->getMessage() ."<br>";
      //       die();
      //       echo "error";
      //    }
       if(isset($_POST['btnAgregarEscuela'])){
         $escuelas = $_POST['Nombre_Escuela'];
         $sql_incluir = 'INSERT INTO escuelas (Escuela) VALUES (?)';
         agregar($sql_incluir, $escuelas);
            
       }

?>
<div class="col fondo">
   <div class="row">
      <div class="col-12 mt-3">
         <a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu"
         data-toggle="collapse">Ocultar</a>
      </div>
      <div class="col-12 mt-3">
         <div class="card">
            <div class="card-header">
               <h4><i class="fas fa-indent mr-1" style="position: relative; top: .1em;"></i>Categorías<i class="fas fa-outdent ml-1" style="position: relative; top: .1em;"></i></h4>
            </div>
            <div class="card-body">
               <form method="POST">
                  <div class="row">
                     <div class="col-6">
                        <div class="row">
                           <div class="col-12">
                              <h5><em>¿Qué categoría desea Agregar?<i class="fas fa-outdent ml-1" style="position: relative; top: .1em;"></i></em></h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <input type="text" name="Nombre_Categoria"  placeholder="Ingrese Nombre" class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-3 mb-3">
                           <div class="col-12 col-md-6">
                              <button type="submit" name="btnAgregarCategoria" class="btn b1 b1-primary btn-block"><i class="icon-mas fa-lg" style="text-shadow: 1px 1px 1px #000;"></i>Agregar</button>
                           </div>
                        </div>
                     </div>
                     <div class="col-6">
                        <table class="table table-bordered table-sm table-hover table-responsive-sm" >
                           <thead class="table-primary">
                              <th>Nombre</th>
                              <th>Cant. Equipos</th>
                           </thead>
                           <tbody>
                              
                           </tbody>
                        </table>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="card mt-5">
            <div class="card-header">
               <h4><i class="fas fa-school mr-1"></i>Escuelas<i class="fas fa-school ml-1"></i></h4>
            </div>
            <div class="card-body">
               <form method="POST">
                  <div class="row">
                     <div class="col-6">
                        <table class="table table-bordered table-sm table-hover table-responsive-sm" >
                           <thead class="table-primary">
                              <th>Nombre</th>
                              <th>Cant. Equipos</th>
                           </thead>
                           <tbody>
                              <?php 
                                 addItemAdmin($respuesta);
                               ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-6">
                        <div class="row">
                           <div class="col-12">
                              <h5><em>¿Qué escuela desea Agregar? <i class="fas fa-school ml-1 fa-2x"></i></em></h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col">
                              <input type="text" name="Nombre_Escuela"  placeholder="Ingrese Nombre" class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-3 justify-content-end">
                           <div class="col-12 col-md-6">
                              <button class="btn b1 b1-primary btn-block" name="btnAgregarEscuela" type="submit"> <i class="icon-mas fa-lg" style="text-shadow: 1px 1px 1px #000;"></i> Agregar</button>
                           </div>
                        </div>
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
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>