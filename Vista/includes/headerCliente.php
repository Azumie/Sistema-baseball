
    <div class="d-flex p-1 bg-dark justify-content-between">
      <nav class="nav">
        <a href="?c=Ranking" class="navbar-brand ml-3">Baseball</a>
        <?php 

        // switch ($nombre) {
        //   case 'Inicio':
        //     echo '
        //       <a href="?c=Ranking" class="btn btn-primary mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
        //       <a href="?c=ListaPartidos" class="btn btn-dark  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
        //       <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-dark  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
        //       <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-dark  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
        //     break;
        //   case 'Partidos':
        //     echo '
        //       <a href="Ranking.php?nombre=Inicio" class="btn btn-dark mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
        //       <a href="listaPartidos.php?nombre=Partidos" class="btn btn-primary  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
        //       <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-dark  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
        //       <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-dark  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
        //     break;
        //   case 'Equipos':
        //     echo '
        //       <a href="Ranking.php?nombre=Inicio" class="btn btn-dark mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
        //       <a href="listaPartidos.php?nombre=Partidos" class="btn btn-dark  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
        //       <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-primary  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
        //       <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-dark  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
        //     # code...
        //     break;
        //   case 'Jugadores':
        //     echo '
        //       <a href="Ranking.php?nombre=Inicio" class="btn btn-dark mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
        //       <a href="listaPartidos.php?nombre=Partidos" class="btn btn-dark  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
        //       <a href="ListaEquipos.php?nombre=Equipos" class="btn btn-dark  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
        //       <a href="listaJugadores.php?nombre=Jugadores" class="btn btn-primary  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>';
        //     # code...
        //     break;
        // }
        ?>
        <a href="?c=Ranking" class="btn btn-<?php echo $Titulo == "Ranking" ? "primary" : "dark" ?> mr-1"><i class="icon-inicio"></i><span>Inicio</span></a>
        <a href="?c=ListaPartidos" class="btn btn-<?php echo $Titulo == "ListaPartidos" ? "primary" : "dark" ?>  mr-1"><i class="icon-baseball"></i><span>Partidos</span></a>
        <a href="?c=ListaEquipos" class="btn btn-<?php echo $Titulo == "ListaEquipos" ? "primary" : "dark" ?>  mr-1"><i class="icon-equipo"></i><span>Equipos</span></a>
        <a href="?c=ListaJugadores " class="btn btn-<?php echo $Titulo == "ListaJugadores" ? "primary" : "dark" ?>  mr-1"><i class="icon-play"></i><span>Jugadores</span></a>
      </nav>
        <a href="?c=Login" class="btn btn-outline-primary mr-3">Iniciar Sesión</a>
    </div>
