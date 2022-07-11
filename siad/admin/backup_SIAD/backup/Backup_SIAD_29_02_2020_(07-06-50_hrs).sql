SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS control_escolar;

USE control_escolar;

DROP TABLE IF EXISTS alumnos;

CREATE TABLE `alumnos` (
  `matricula` varchar(10) NOT NULL,
  `nombre_alumno` char(20) NOT NULL,
  `apellido_p` char(20) NOT NULL,
  `apellido_m` char(20) NOT NULL,
  `nacionalidad_alumno` varchar(30) DEFAULT NULL,
  `id_entidad` int(11) DEFAULT NULL,
  `id_municipio` int(11) DEFAULT NULL,
  `id_colonia` int(11) NOT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numero_exterior` varchar(10) DEFAULT NULL,
  `numero_interior` varchar(10) DEFAULT NULL,
  `telefono_movil` varchar(15) DEFAULT NULL,
  `telefono_casa` varchar(15) DEFAULT NULL,
  `curp` varchar(18) NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `prom_bachillerato` float DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `id_turno` int(11) DEFAULT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `fecha_b` date DEFAULT NULL,
  `fecha_r` date DEFAULT NULL,
  `id_situacion` int(11) DEFAULT NULL,
  `id_especialidad` int(11) DEFAULT NULL,
  `ano_e` int(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`matricula`),
  KEY `id_entidad` (`id_entidad`),
  KEY `id_colonia` (`id_colonia`),
  KEY `id_municipio` (`id_municipio`),
  KEY `id_carrera` (`id_carrera`),
  KEY `id_periodo` (`id_periodo`),
  KEY `id_turno` (`id_turno`),
  KEY `id_plan` (`id_plan`),
  KEY `id_especialidad` (`id_especialidad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS aspirante;

CREATE TABLE `aspirante` (
  `nombre` varchar(30) DEFAULT NULL,
  `id_aspirante` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `apellido_p` varchar(20) DEFAULT NULL,
  `apellido_m` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `telefono_casa` varchar(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `carrera` int(11) DEFAULT NULL,
  `especialidad` int(11) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `colonia` varchar(40) DEFAULT NULL,
  `escuela_proc` varchar(20) DEFAULT NULL,
  `carrera_cursada` varchar(50) DEFAULT NULL,
  `trabaja` varchar(5) DEFAULT NULL,
  `trabajo_actual` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_aspirante`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS calificaciones;

CREATE TABLE `calificaciones` (
  `matricula` varchar(10) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_tipoe` int(11) DEFAULT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `id_tipoi` int(11) DEFAULT NULL,
  `calificacion` int(3) DEFAULT NULL,
  `fecha_calificacion` date DEFAULT NULL,
  `observacion_calificacion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`matricula`,`id_materia`,`id_periodo`),
  KEY `id_materia` (`id_materia`),
  KEY `id_profesor` (`id_profesor`),
  KEY `id_periodo` (`id_periodo`),
  KEY `id_tipoe` (`id_tipoe`),
  KEY `id_tipoi` (`id_tipoi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS carreras;

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(40) DEFAULT NULL,
  `clave_carrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS citas;

CREATE TABLE `citas` (
  `id_cita` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_fecha` int(11) DEFAULT NULL,
  `id_aspirante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `id_fecha` (`id_fecha`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS colonia;

CREATE TABLE `colonia` (
  `id_colonia` int(11) NOT NULL AUTO_INCREMENT,
  `cp_colonia` int(11) DEFAULT NULL,
  `id_municipio` int(11) DEFAULT NULL,
  `nombre_colonia` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_colonia`),
  KEY `id_municipio` (`id_municipio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS entidad;

CREATE TABLE `entidad` (
  `id_entidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_entidad` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_entidad`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS especialidad;

CREATE TABLE `especialidad` (
  `id_especialidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_carrera` int(11) DEFAULT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `nombre_especialidad` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id_especialidad`),
  KEY `id_carrera` (`id_carrera`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS fecha_cita;

CREATE TABLE `fecha_cita` (
  `id_fecha` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `observaciones` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_fecha`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS folios;

CREATE TABLE `folios` (
  `id_folio` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `folio_aspirante` int(11) DEFAULT NULL,
  `estatus_aspirante` tinyint(4) DEFAULT NULL,
  `matricula` varchar(10) DEFAULT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `id_turno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_folio`),
  KEY `folio_aspirante` (`folio_aspirante`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS grupos;

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `clave_grupo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS horarios;

CREATE TABLE `horarios` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreHorario` varchar(50) NOT NULL,
  PRIMARY KEY (`idHorario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS imparte;

CREATE TABLE `imparte` (
  `id_imparte` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesor` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `id_tipoi` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_imparte`),
  KEY `id_profesor` (`id_profesor`),
  KEY `id_materia` (`id_materia`),
  KEY `id_tipoi` (`id_tipoi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS inscripciones;

CREATE TABLE `inscripciones` (
  `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(10) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `id_tipoi` int(11) DEFAULT NULL,
  `fecha_inscripcion` date DEFAULT NULL,
  `id_semestre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `matricula` (`matricula`),
  KEY `id_materia` (`id_materia`),
  KEY `id_periodo` (`id_periodo`),
  KEY `id_tipoi` (`id_tipoi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS licencia;

CREATE TABLE `licencia` (
  `clave_licencia` int(11) NOT NULL,
  `licencia_valida` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`clave_licencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS materias;

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `clave_materia` int(11) NOT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `clave_materia_reticula` varchar(20) DEFAULT NULL,
  `nombre_materia` varchar(70) DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `creditos_teoricos` int(11) DEFAULT NULL,
  `creditos_practicos` int(11) DEFAULT NULL,
  `id_tipom` int(11) DEFAULT NULL,
  `id_espacialidad` int(11) DEFAULT '0',
  PRIMARY KEY (`id_materia`),
  KEY `id_carrera` (`id_carrera`),
  KEY `id_tipom` (`id_tipom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS municipio;

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL AUTO_INCREMENT,
  `id_entidad` int(11) DEFAULT NULL,
  `id_municipio_en_entidad` int(11) DEFAULT NULL,
  `nombre_municipio` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_municipio`),
  KEY `id_entidad` (`id_entidad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS niveles;

CREATE TABLE `niveles` (
  `idNivel` int(11) NOT NULL AUTO_INCREMENT,
  `NombreNivel` varchar(50) NOT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS periodos;

CREATE TABLE `periodos` (
  `id_periodo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_periodo` varchar(15) DEFAULT NULL,
  `parcial_actual` int(11) NOT NULL,
  `estado_perido` int(11) DEFAULT '0',
  PRIMARY KEY (`id_periodo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS planes;

CREATE TABLE `planes` (
  `id_plan` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_plan` varchar(40) DEFAULT NULL,
  `creditos_totales` int(11) DEFAULT NULL,
  `ano_plan` int(11) DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_plan`),
  KEY `id_carrera` (`id_carrera`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS profesores;

CREATE TABLE `profesores` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `clave_profesor` varchar(10) NOT NULL,
  `nombre_maestro` varchar(20) DEFAULT NULL,
  `apellido_p` varchar(20) DEFAULT NULL,
  `apellido_m` varchar(20) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `correo_profesor` varchar(50) DEFAULT NULL,
  `grado_academico` varchar(30) DEFAULT NULL,
  `carrera_profesor` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_profesor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS semestre;

CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_semestre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS situacion_alumno;

CREATE TABLE `situacion_alumno` (
  `id_situacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_situacion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_situacion`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tipo_inscripcion;

CREATE TABLE `tipo_inscripcion` (
  `id_tipoi` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_tipoi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tipo_materia;

CREATE TABLE `tipo_materia` (
  `id_tipom` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_tipom`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tipos_evaluaciones;

CREATE TABLE `tipos_evaluaciones` (
  `id_tipoe` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_evaluacion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_tipoe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS turnos;

CREATE TABLE `turnos` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_turno` varchar(20) NOT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `clave_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `contrasena_usuario` varchar(255) DEFAULT NULL,
  `tipo_usuario` tinyint(4) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`clave_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `idUsuario` smallint(6) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(50) NOT NULL,
  `PassUsuario` varchar(150) NOT NULL,
  `NivelUsuario` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `NivelUsuario` (`NivelUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




SET FOREIGN_KEY_CHECKS=1;