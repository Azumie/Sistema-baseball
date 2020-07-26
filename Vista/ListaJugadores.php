
<div class="container my-3">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="row justify-content-between">
						<div class="col-auto mt-1"><h4><i class="fas fa-list-ol mr-1"></i>Listado de Jugadores</h4></div>
						<div class="col-auto"><i class="icon-play h3 text-info"></i> <i class="icon-emoji-fine h3 text-info"></i></div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-inline justify-content-center row mb-3">
						<label for="temporada" class="col-auto">Equipo:</label>
						<select class="form-control col-3" id="temporada">
							<?php 
                           $sqlEquipo = 'SELECT * FROM equipos';
                           $Equipos = $conexion ->consultar($sqlEquipo, array(''));
                           foreach ($Equipos as $Equipo) {
                                 echo "<option value='$Equipo->Nombre' selected >$Equipo->Nombre</option>";
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
						<button class="btn b1 b1-primary col-md-1 "><i class="fas fa-search fa-lg" style="text-shadow: 1px 1px 1px #000"></i></button>
					</div>
					<div class="row">
						<div class="col-2"><img src="assets/img/Equipo.png"><div class="row"><img src="assets/img/Equipo1.png" class="ml-2"></div></div>
						<div class="col-10"><br>							
							<table class="table table-bordered table-sm table-hover table-responsive-sm">
								<?php
									$table = new Table(array('CI','Nombre','Apellido','N° Camisa','Letra'));
									$table->createTable();?>
								<?php
							foreach ($jugador as $key => $value):?>
								<tr>
								<td><a href="?c=Jugador<?php echo "&id=$value->id&Categoria=1"?> "><?php echo "$value->CI"; ?></a></td>
								<td><?php echo "$value->Nombre"; ?></td>
								<td><?php echo "$value->Apellido"; ?></td>
								<td><?php echo "$value->Num_Camisa"; ?></td>
								<td><?php echo "$value->Letra"; ?></td>
								</tr>
							<?php endforeach; ?>
								
							</table>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
