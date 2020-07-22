<?php
require_once 'includes/head.php';
require_once 'includes/headerAdmin.php';
?>
<div class="col fondo">
	<div class="row my-3 justify-content-center h-25">
		<div class="col-11 mt-2 mb-2">
			<a href="#menu" class=" btn btn-info icon-play" aria-expanded="false" aria-controls="menu"
			data-toggle="collapse">Ocultar</a>
		</div>
		<div class="col-11 align-self-center">
			<div class="card">
				<div class="card-body">
					<h2 class="text-center"><em>Bienvenido, Administrador</em></h2 class="text-center">
					<h6 class="text-center"><em>Gestiona la información, privacidad y seguridad mas las cuentas de otros para mejorar la experiencia</em></h6>
					<div class="row">
						<div class="col">
							<ul class="nav nav-tabs nav-justified">
								<li class="nav-item  mt-md-4">
									<a href="#tab1" class="nav-link active" data-toggle="tab"><i class="fas fa-user"></i>Usuarios</a>
								</li>
								<li class="nav-item mt-md-4">
									<a href="#tab2" id="1" class="nav-link" data-toggle="tab"><i class="fas fa-user-shield"></i>Seguridad</a>
								</li>
								<li class="nav-item">
									<a href="#tab3" class="nav-link" data-toggle="tab"><i class="fas fa-user-cog"></i>Datos y Personalización</a>
								</li>
								<li class="nav-item  mt-md-4">
									<a href="#tab4" class="nav-link" data-toggle="tab"><i class="fas fa-user-plus"></i>Agregar Usuario</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab1" role="tabpanel">
									<h5 class="mt-3"><em>Usuarios Agregados hasta el momento...</em></h5>
									<table class=" table table-bordered table-sm table-hover table-responsive-sm">
										<thead class="table-primary">
											<th>Cédula</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Usuario</th>
											<th>Contraseña</th>
											<th>Pregunta</th>
											<th>Respuesta</th>
											<th>¿Activo?</th>
										</thead>
										<tbody>
											<tr>
												<td>27554995</td>
												<td>Antonella</td>
												<td>Mujica</td>
												<td>Lourdes Blue</td>
												<td>Sakura</td>
												<td>¿Sakura o Hinata?</td>
												<td>Sakura</td>
												<td>Si</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- ACTUALIZANDO CONTRASEÑAS Y ESTADO -->
								<div class="tab-pane" id="tab2" role="tabpanel">
									<h5 class="mt-3"><em><i class="fas fa-user-shield mr-1"></i>Actualizar estado y Contraseñas de las cuentas</em></h5>
									<form action="">
										<div class="row justify-content-center mt-3 mb-3">
											<label for="User_UsuarioA" class="text-right">Ingrese Usuario <br>a Modificar</label>
											<input required type="text" name="User_UsuarioA" id="User_UsuarioA" class="form-control col-5 col-md-3 mr-2 mb-2 mt-2 ml-2" placeholder="Usuario">
											<div class="col-12 col-md-2">
												<button title="Buscar Usuario" class="btn b1 b1-primary btn-block mt-md-2 mb-2"><i class="fas fa-search fa-lg" style="position: relative;top: .1em; text-shadow: 1px 1px 1px #000"></i></button>
											</div>
										</form>
									</div>
									<div class="row text-center justify-content-center">
										<div class="col-auto"><h6>Datos Del Usuario: Lourdes Blue</h6> </div>
										<div class="custom-control custom-checkbox ">
											<input value="Activo" type="checkbox" name="Activo" id="Activo" class="custom-control-input">
											<label for="Activo" class="custom-control-label">¿Activo?</label>
										</div>
									</div>
									
									<p class="text-center"><i class="far fa-calendar-alt mr-2"></i>Ingresado: 29-10-2020<i class="far fa-calendar-alt ml-2"></i></p>
									<div class="row justify-content-center mb-3">
										<input required type="text" name="Nacionalidad_UsuarioA" id="Nacionalidad_UsuarioA" class="form-control col-2 col-md-1 mr-1 mb-2" placeholder="V" readonly>
										<input required type="text" name="Cedula_UsuarioA" id="Cedula_UsuarioA" class="form-control col-4 col-md-2 mr-2 mb-2" placeholder="Cédula Usuario" readonly>
										<input required type="text" name="Nombre_UsuarioA" id="Nombre_UsuarioA" class="form-control col-5 col-md-3 mr-2" placeholder="Nombre Usuario" readonly>
										<input required type="text" name="Apellido_UsuarioA" id="Apellido_UsuarioA" class="form-control col-5 col-md-3" placeholder="Apellido Usuario" readonly>
										<input required type="text" name="SexoA" id="SexoA" class="form-control col-3 col-md-2 ml-2" placeholder="Sexo" readonly>
										<!-- <label for="Direccion">Dirección de Usuario:</label>
										<textarea class="form-control col-10" name="Direccion" id="Direccion" placeholder="Ingrese la Dirección actual del usuario, por favor" maxlength="45" required cols="60" rows="3" style="width: 100%"></textarea> -->
									</div>
									<form action="">
										<div class="row justify-content-center mb-2">
											<label class="text-right" for="Respuesta_Pregunta">Modificando Pregunta <br> de Seguridad</label>
											<div class="col-6 col-md-3 mt-2">
												<select class="form-control">
													<option value="1">Serie Favorita</option>
													<option value="1">Personaje Favorita</option>
													<option value="2">Comida Favorita</option>
													<option value="3">¿Sakura o Hinata?</option>
												</select>
											</div>
											<input required type="text" name="Respuesta_Pregunta" id="Respuesta_Pregunta" class="form-control col-9 col-md-4 mt-2 mb-2" placeholder="Respuesta a la Pregunta" maxlength="30">
										</div>
										<div class="row text-center justify-content-center mb-3">
											<div class="col-12 col-md-6">
												<div class="row justify-content-center">
													<div class="col-12"><label for="Nueva_Contrasenia">Ingrese Nueva o Antigua Contraseña</label></div>
													<div class="col-9">
														<input required type="text" name="Nueva_Contrasenia" id="Nueva_Contrasenia" class="form-control" placeholder="Nueva Contraseña" maxlength="10"  minlength="6">
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="row justify-content-center">
													<div class="col-12"><label for="Repetir">Repita Contraseña por Razones de Seguridad</label></div>
													<div class="col-9">
														<input required type="text" name="Repetir" id="Repetir" class="form-control" placeholder="Nueva Contraseña" maxlength="10" minlength="6">
													</div>
												</div>
											</div>
										</div>
										<div class="row justify-content-center text-right">
											<div class="col-10 col-md-4">
												<button class="btn b1 b1-primary btn-block">Actualizar<i class="fas fa-pencil-alt"></i></button>
											</div>
										</div>
									</form>
								</div>
								<!-- INFORMACIÓN DE LA CUENTA PROPIA -->
								<div class="tab-pane" id="tab3" role="tabpanel">
									<h5 class="mt-3"><em><i class="fas fa-info mr-1"></i>Actualizar Información básica de tu cuenta</em></h5>
									<form action="">
										<div class="row justify-content-center mt-2">
											<input required type="text" name="User_Usuario" id="User_Usuario" class="form-control col-5 col-md-3 mr-2 mb-2" placeholder="Usuario">
										</div>
										<div class="row justify-content-center mb-3">
											<input required type="text" name="Nacionalidad_Usuario" id="Nacionalidad_Usuario" class="form-control col-2 col-md-1 mr-1 mb-2" placeholder="V">
											<input required type="text" name="Cedula_Usuario" id="Cedula_Usuario" class="form-control col-4 col-md-2 mr-2 mb-2" placeholder="Cédula Usuario">
											<input required type="text" name="Nombre_Usuario" id="Nombre_Usuario" class="form-control col-5 col-md-3 mr-2" placeholder="Nombre Usuario">
											<input required type="text" name="Apellido_Usuario" id="Apellido_Usuario" class="form-control col-5 col-md-3" placeholder="Apellido Usuario">
										</div>
										<div class="row justify-content-center text-right">
											<label for="Confir">Para confirmar actualización <br>Ingrese Contraseña</label>
											<input required type="text" name="Confir" id="Confir" class="form-control col-5 ml-1 mt-2" placeholder="Confirme">
										</div>
										<div class="row justify-content-end">
											<div class="col-12 col-md-5">
												<button class="btn b1 b1-primary btn-block"><i class="fas fa-vote-yea mr-3"></i>Acepto<i class="fas fa-vote-yea ml-3"></i></button>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane" id="tab4" role="tabpanel">
									<form action="">
										<h5>Agregar nuevos Usuarios que te ayudarán en tu Trabajo, recuerda que luego puedes bloqueárlos <i class="far fa-smile-wink"></i></h5>
										<div class="row justify-content-center mb-3">
											<input required type="text" name="User" id="User" class="form-control col-5 col-md-3 mr-1 mb-2" placeholder="Nick Nuevo Usuario">
											<input required type="text" name="Nacionalidad_Usuario" id="Nacionalidad_Usuario" class="form-control col-2 col-md-1 mr-1 mb-2" placeholder="V">
											<input required type="text" name="Cedula_Usuario" id="Cedula_Usuario" class="form-control col-4 col-md-2 mr-2 mb-2" placeholder="Cédula Usuario">
											<input required type="text" name="Nombre_Usuario" id="Nombre_UsuarioA" class="form-control col-5 col-md-3 mr-2" placeholder="Nombre Usuario">
											<input required type="text" name="Apellido_Usuario" id="Apellido_Usuario" class="form-control col-5 col-md-3 mb-2" placeholder="Apellido Usuario">
											<input required type="text" name="Sexo" id="Sexo" class="form-control col-3 col-md-2 ml-2" placeholder="Sexo">
										</div>
										<div class="row justify-content-center mb-2">
											<label class="text-right" for="Respuesta">Agregar Pregunta <br> de Seguridad</label>
											<div class="col-6 col-md-3 mt-2">
												<select class="form-control">
													<option value="1">Serie Favorita</option>
													<option value="1">Personaje Favorita</option>
													<option value="2">Comida Favorita</option>
													<option value="3">¿Sakura o Hinata?</option>
												</select>
											</div>
											<input required type="text" name="Respuesta" id="Respuesta" class="form-control col-9 col-md-4 mt-2 mb-2" placeholder="Respuesta a la Pregunta" maxlength="30">
										</div>
										<div class="row text-center justify-content-center mb-3">
											<div class="col-12 col-md-6">
												<div class="row justify-content-center">
													<div class="col-12"><label for="Contrasenia">¿Cuál será su Contraseña?</label></div>
													<div class="col-9">
														<input required type="text" name="Contrasenia" id="Contrasenia" class="form-control" placeholder="Contraseña" maxlength="10"  minlength="6">
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="row justify-content-center">
													<div class="col-12"><label for="Repetiendo">Repita Contraseña</label></div>
													<div class="col-9">
														<input required type="text" name="Repetiendo" id="Repetiendo" class="form-control" placeholder="Repita Contraseña" maxlength="10" minlength="6">
													</div>
												</div>
											</div>
										</div>
										<div class="row justify-content-center text-right mb-3">
											<div class="col-auto"><label for="Admin">Ingrese Contraseña de  ADMINISTRADOR <br>por Razones de Seguridad</label></div>
											<input required type="text" name="Admin" id="Admin" class="form-control col-7 col-md-4 mt-2" placeholder="Contraseña de Administrador" maxlength="10" minlength="6">
										</div>
										<div class="row justify-content-center">
											<div class="col-6">
												<button title="Buscar Usuario" class="btn b1 b1-primary btn-block mt-md-2 mb-2"><i class="fas fa-user-check fa-lg mr-1" style="position: relative;top: .1em; text-shadow: 1px 1px 1px #000"></i>Agregar Nuevo Usuario<i class="fas fa-user-check fa-lg ml-1" style="position: relative;top: .1em; text-shadow: 1px 1px 1px #000"></i></button>
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
</div>
</div>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>