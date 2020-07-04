<?php require_once 'head.php' ?> 
  <body class="fondo">
    <div class="d-flex p-1 bg-dark justify-content-between">
      <nav class="nav">
        <a href="Ranking.php?nombre=Inicio" class="navbar-brand ml-3">Baseball</a>
        <?php 
        switch ($nombre) {
          case 'Inicio':
            echo '
              <a href="Ranking.php?nombre=Inicio" class="btn btn-primary mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
              <a href="listaPartidos.php?nombre=Partidos" class="btn btn-dark  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
              <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-dark  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
              <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-dark  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
            break;
          case 'Partidos':
            echo '
              <a href="Ranking.php?nombre=Inicio" class="btn btn-dark mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
              <a href="listaPartidos.php?nombre=Partidos" class="btn btn-primary  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
              <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-dark  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
              <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-dark  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
            break;
          case 'Equipos':
            echo '
              <a href="Ranking.php?nombre=Inicio" class="btn btn-dark mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
              <a href="listaPartidos.php?nombre=Partidos" class="btn btn-dark  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
              <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-primary  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
              <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-dark  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
            # code...
            break;
          case 'Jugadores':
            echo '
              <a href="Ranking.php?nombre=Inicio" class="btn btn-dark mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
              <a href="listaPartidos.php?nombre=Partidos" class="btn btn-dark  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
              <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-dark  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
              <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-primary  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
            # code...
            break;
        }
        ?>
        <!-- <a href="Ranking.php?nombre=Inicio" class="navbar-brand ml-3">Icon</a>
        <a href="Ranking.php?nombre=Inicio" class="btn btn-dark mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
        <a href="listaPartidos.php?nombre=Partidos" class="btn btn-dark  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
        <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-dark  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
        <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-dark  mr-1"><i class="icon-play"></i><span>Jugadores</span></a> -->

      </nav>
      <a href="Login.php?nombre=Login" class="btn btn-outline-primary mr-3">Iniciar Sesión</a>
    </div>
