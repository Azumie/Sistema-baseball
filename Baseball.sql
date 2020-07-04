create database baseball;

use baseball;

create table temporadas (
    idTemporada             int primary key not null auto_increment,
    Suspendido_Temporada    TINYINT(1) NOT NULL DEFAULT 1,
    AnioInicio              year not null UNIQUE
);

create table estados (
    idEstado        int primary key auto_increment,
    Estado          varchar(12)
);

create table municipios (
    idMunicipio     int primary key auto_increment,
    idEstado        int,
    Municipio       varchar(30),
    constraint fk_municipios_estados foreign key (idEstado) 
        references estados (idEstado) on delete cascade on update cascade
);

create table parroquia (
    idParroquia     int primary key not null auto_increment,
    idMunicipio     int not null,
    Parroquia       varchar(30),
    constraint fk_parroquia_municipio foreign key (idMunicipio)
        references municipios (idMunicipio) on delete cascade on update cascade
);

create table direcciones (
    idDireccion     int primary key not null auto_increment,
    idParroquia     int not null,
    Direccion       varchar(45),
    constraint fk_direcciones_parroquia foreign key (idParroquia) 
        references parroquia (idParroquia) on delete cascade on update cascade
);

-- sin agregar tabla
create table campos (
    idCampo         int primary key not null auto_increment,
    idDireccion     int not null,
    Campo           varchar(30) not null,
    constraint fk_campos_direcciones foreign key (idDireccion)
        references direcciones (idDireccion) on delete cascade on update cascade
);

create table personas (
    CI              varchar (9) primary key not null,
    Nombre          varchar(30) not null,
    Apellido        varchar(30) not null,
    Nacido          date,
    Sexo            char not null,
    Nacionalidad    char not null,
    idDireccion     int,
    constraint fk_personas_direccion foreign key (idDireccion)
        references direcciones (idDireccion) on delete cascade on update cascade
);

create table anotadores (
    idAnotador      int primary key not null auto_increment,
    Estado_Anotador TINYINT(1) NOT NULL DEFAULT 1,
    CI              varchar(9) not null,
    constraint fk_anotadores_personas foreign key (CI)
        references personas (CI) on delete cascade on update cascade
);

create table juegos (
    idJuego         int primary key not null auto_increment,
    idTemporada     int not null,
    idAnotador      int not null,
    idCampo         int not null,
    juegoSuspendido TINYINT(1) NOT NULL DEFAULT 0,
    fechaHora datetime not null,
    constraint fk_juegos_temporadas foreign key (idTemporada)
        references temporadas (idTemporada) on delete cascade on update cascade,
    constraint fk_juegos_anotadores foreign key (idAnotador)
        references anotadores (idAnotador) on delete cascade on update cascade,
    constraint fk_juegos_campos foreign key (idCampo)
        references campos (idCampo)
);

create table escuelas (
    idEscuela       int primary key not null auto_increment,
    Escuela         varchar (30) not null UNIQUE
);

create table categorias (
    idCategoria     int primary key not null auto_increment,
    Categoria       varchar (15) not null UNIQUE
);

create table equipos (
    idEquipo        int primary key not null auto_increment,
    Nombre          varchar (30) not null,
    Letra_E         char not null default 'A',
    idCategoria     int not null,
    idEscuela       int not null,
    constraint fk_equipos_categorias foreign key (idCategoria)
        references categorias (idCategoria) on delete cascade on update cascade,
    constraint fk_equipos_escuelas foreign key (idEscuela)
        references escuelas (idEscuela) on delete cascade on update cascade
);

create table jugadores (
    idJugador       int primary key not null auto_increment,
    CI              varchar(9) not null,
    idEquipo        int not null,
    Altura          int,
    Peso            int,
    Activo          TINYINT(1) NOT NULL DEFAULT 0,
    BAT             char not null,
    THR             char not null,
    Num_Camisa      int not null,
    Letra           char not null default 'A',
    constraint fk_jugadores_personas foreign key (CI)
        references personas (CI) on delete cascade on update cascade,
    constraint fk_jugadores_equipos foreign key (idEquipo)
        references equipos (idEquipo)
);

create table items (
    idItem          int primary key not null auto_increment,
    nombre          varchar (20) not null
);

create table posiciones (
    idPosicion      int primary key not null auto_increment,
    nombre          varchar (20) not null 
);

create table posJugada (
    idJuego        int not null auto_increment,
    idJugador      int not null,
    idPosicion     int not null,
    primary key (idJuego, idJugador, idPosicion),
    constraint fk_posJugada_juego foreign key (idJuego)
        references juegos (idJuego) on delete cascade on update cascade,
    constraint fk_posJugada_jugador foreign key (idJugador)
        references jugadores (idJugador) on delete cascade on update cascade,
    constraint fk_posJugada_posiciones foreign key (idPosicion)
        references posiciones (idPosicion) on delete cascade on update cascade
);

create table estadistica (
    idItem         int not null,
    idJuego        int not null,
    idJugador      int not null,
    idPosicion     int not null,
    valor          int,
    primary key (idItem, idJuego, idJugador, idPosicion),
    constraint fk_estadistica_items foreign key (idItem)
        references items (idItem) on delete cascade on update cascade,
    constraint fk_estadistica_juegos foreign key (idJuego)
        references juegos (idJuego) on delete cascade on update cascade,
    constraint fk_estadistica_jugadores foreign key (idJugador)
        references jugadores (idJugador) on delete cascade on update cascade,
    constraint fk_estadistica_posiciones foreign key (idPosicion)
        references posiciones (idPosicion) on delete cascade on update cascade
);

create table posDominada (
    idJugador       int not null,
    idPosicion      int not null,
    primary key (idJugador, idPosicion),
    constraint fk_posDominada_jugadores foreign key (idJugador)
        references jugadores (idJugador) on delete cascade on update cascade,
    constraint fk_posDominada_posiciones foreign key (idPosicion)
        references posiciones (idPosicion) on delete cascade on update cascade
);

CREATE TABLE partidas (
    idEquipo        int NOT NULL,
    idJuego         int NOT NULL,
    primary key(idEquipo, idJuego),
    constraint fk_partidas_equipos foreign key (idEquipo)
        references equipos (idEquipo) on delete cascade on update cascade,
    constraint fk_partidas_juegos foreign key (idJuego)
        references juegos (idJuego) on delete cascade on update cascade
);
