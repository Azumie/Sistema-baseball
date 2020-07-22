
	<div class="container-fluid 	fondoLogin d-felx justify-content-center">
		<div class="row Login bg-white ">
			<div class="col-12 col-md-8">
				<div class="carousel slide" id="principal-carousel" data-ride="carousel" >
					<ol class="carousel-indicators">
						<li data-target="#principal-carousel" data-slid-to="0" class="active"></li>
						<li data-target="#principal-carousel" data-slid-to="1"></li>
						<li data-target="#principal-carousel" data-slid-to="2"></li>
						<li data-target="#principal-carousel" data-slid-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/img/Baseball.jpg" alt="">
						</div>
						<div class="carousel-item">
							<img src="assets/img/campo6.jpg" alt="">
						</div>
						<div class="carousel-item">
							<img src="assets/img/carobaro.jpg" alt="">
						</div>
						<div class="carousel-item">
							<img src="assets/img/Partido2.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 bg-white">
				<div class="card m-0 mt-2">
					<div class="card-body justify-content-center text-center">
						<form method="POST" action="?c=Login&m=ingresar">
							<!-- VALIDANDO AL USUARIO -->
	
							<!-- INICIANDO SESIÓN -->
							<!-- USUARIO -->
							<h5 class="mb-4 mt-4">Inicio de Sesión</h5>
							<div class="row justify-content-center">
								<h6><em>Usuario</em></h6>
							</div>
							<div class="row justify-content-center mb-3">
								<div class="col-12">
									<input type="text" name="Usuario" class="form-control" maxlength="9"title="¡Ingresa Usuario!" required minlength="5" autofocus pattern="[A-Za-z0-9]+">
								</div>
							</div>
							<!-- CONTRASEÑA -->
							<div class="row justify-content-center">
								<h6><em>Contraseña</em></h6>
							</div>
							<div class="row justify-content-center mb-3">
								<div class="col-12">
									<input type="password" name="Contraseña" class="form-control" title="¡Ingresa Contraseña!" required maxlength="10" minlength="6">
								</div>
							</div>
							<div class="row justify-content-center mb-3">
								<div class="col-6"><a href="?c=Ranking" class="btn b1 b1-primary btn-block">Volver</a></div>
								<div class="col-6"><button class="btn b1 b1-primary btn-block" type="submit" name="Ingresar">Ingresar</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
