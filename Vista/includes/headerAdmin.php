<?php require_once 'head.php';?>
<body>
	<div class="container-fluid">
		<div class="row">
			<!-- SIDE BAR  -->
			<!-- dividimos el row en dos partes una de 2 columnas -->
			<div class="col-sm-auto bg-dark p-2 barra-lateral collapse show" id="menu">
				
				<div class="menu">
					<button class="btn btn-dark btn-block mt-0 text-left" data-toggle="modal" data-target="#modal"><i class="icon-inicio mr-2"></i>Inicio</button>
					<a href="Temporada.php?nombre=Temporada" class="btn btn-dark btn-block mt-0 "><i class="icon-calendario "></i><span>Temporada</span></a>
					<a href="Equipos.php?nombre=Equipos" class="btn btn-dark btn-block mt-0 "><i class="icon-equipo  "></i><span>Equipos</span></a>
					<a href="Campos.php?nombre=Campos" class="btn btn-dark btn-block mt-0 "><i class="icon-estadio "></i><span>Campos</span></a>
					<a href="Anotador.php?nombre=Anotador" class="btn btn-dark btn-block mt-0 "><i class="far fa-clipboard ml-1 mr-1"></i><span> Anotador</span></a>
					<a href="Partidos.php?nombre=Partidos" class="btn btn-dark btn-block mt-0 "><i class="icon-baseball   "></i><span>Partidos</span></a>
					<a href="Categorias.php?nombre=Categoria" class="btn btn-dark btn-block mt-0 "><i class="icon-categoria  "></i><span>Categoria</span></a>
					<a href="#" data-toggle="modal" data-target="#Alerta" class="btn btn-dark btn-block mt-0 "><i class="fas fa-tools mr-1"></i><span> Opciones</span></a>
				</div>
			
				<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="fm-modal-grid" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="">¿Seguro que desea salir?<i class="fas fa-question fa-2x"></i></h5>
							</div>
							<div class="modal-footer">
								<a href="Ranking.php?nombre=Inicio" class="btn b1 b1-primary">Aceptar</a>
								<button class="btn b1 b1-danger" data-dismiss="modal">Cancelar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="Alerta" tabindex="-1" role="dialog" aria-labelledby="fm-modal-grid" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id=""><svg class="bi bi-exclamation-triangle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg>Función no diponible, intente más tarde</h5>
								<button class="btn b1 b1-danger" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>