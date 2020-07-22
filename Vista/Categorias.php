
<?php 
      
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
          <form method="POST" action="?c=Categoria&m=guardar">
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
                    <?php addItemAdmin($this->categoria->listar()); ?>
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
          <form method="POST" action="?c=Categoria&m=guardar">
            <div class="row">
              <div class="col-6">
                <table class="table table-bordered table-sm table-hover table-responsive-sm" >
                  <thead class="table-primary">
                    <th>Nombre</th>
                    <th>Cant. Equipos</th>
                  </thead>
                  <tbody>
                    <?php
                    addItemAdmin($this->escuela->listar());
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