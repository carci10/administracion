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

INSERT INTO aspirante VALUES("NANCY LORELI","000","ISLAS","GOMEZ","5546043560","55173405","loreli.islas@gmail.com","1981-12-11","IAGN811211MDFSMN08","F","8","1","IXTLACIHUATL","6","0","TESI","ADMINISTRACIÓN","No","N/A","N/A");
INSERT INTO aspirante VALUES("DIANA","001","CASANOVA","LARA","5515102216","88533681","dia_casanova@hotmail.com","1975-08-12","CALD750812MDFSRN01","F","8","3","ORIENTE 245C","174","0","0","LICENCIATURA EN ADMINISTRACIÓ","Si","TESI","JEFA DE DIVISION DE INGENIERIA");
INSERT INTO aspirante VALUES("FRANCISCO JHONATAN","002","CASTRO","CRUZ","6691996331","26384591","jhons_cruz@outlook.com","1994-06-20","CACF940620HDFSRR05","M","8","3","AV. MORELOS","9","0","TESI","LICENCIATURA EN ADMINISTRACIÓ","Si","PROMOCIONES REGIONALES BSJ","COMMUNITY MANAGER Y MARKETING ");
INSERT INTO aspirante VALUES("GERARDO","003","HERNANDEZ","HERNANDEZ","5545731153","19452797","simple.sociologia19@gmail.com","1994-09-09","HECG940909HDFRHR07","M","8","2","ESTADO DE MEXICO, IXTAPALUCA, ","18","0","UAM","Sociología","Si","Tecnológico de Estudios Super","Coordinador Académico de Leng");
INSERT INTO aspirante VALUES("YULIANA YANETH","004","HERNANDEZ","RODRIGUEZ","5554336446","15524475","admonyuly@gmail.com","1994-02-22","HERY940222MMCRDL08","F","8","3","IGNACIO ALLENDE","108","0","TESI","LICENCIATURA EN ADMINISTRACIÓ","Si","BORGATTA","AUXILIAR ADMINISTRATIVO");
INSERT INTO aspirante VALUES("MIRIAM LORELY","005","MARTINEZ","GONZALEZ","5537360171","25927606","miriammartinez2206@yahoo.com.mx","1994-09-05","MAGM930622MMCRNR01","F","8","3","VOLCAN CAYAMBE","66","0","TESI","LICENCIATURA EN ADMINISTRACION","Si","OPERADORA WALMART S.R.L DE CV ","AUXILIAR DE RECURSOS HUMANOS");
INSERT INTO aspirante VALUES("SUJHEIS","006","HUAR","MOLINA","5548815726","48815726","sujheis4@hotmail.com","1980-11-11","HUMS801111MMCRLJ03","F","8","2","ALVARO OBREGON ","12","0","IPN","INGENIERIA Y ARQUITECTURA","Si","TESI","DOCENTE");
INSERT INTO aspirante VALUES("MARIA ANGELICA","007","CORNEJO","VAZQUEZ","5576840046","17227752","maria.angelica.1994@hotmail.com","1994-09-05","COVA940905MMCRZN00","F","8","3","CDA. NUEVO MEXICO","12","0","TESI","LIC. EN ADMINISTRACION","Si","RIO TIBER N. 53 PISO 3 COL. CE","EJECUTIVO DE TESORERÍA");
INSERT INTO aspirante VALUES("KEVIN CARLOS","008","LEYVA","NORIEGA","5583274658","17224365","kvnleyva.7@outlook.com","1992-04-16","LENK920416HMCYRV01","M","8","3","ARMATA","9","0","OTRO_PARTICULAR","DERECHO","Si","JURÍDICO DEL AYUNTAMIENTO DE ","ABOGADO");
INSERT INTO aspirante VALUES("FELIX ANTUAN","009","GOMEZ","MACIEL","5616919537","91330018","licantropo117@hotmail.com","1988-06-13","GOMF880613HMCMCL08","M","8","3","C OCOTE","15","0","TESI","LICENCIATURA EN ADMINISTRACIÓ","Si","SECRETARIA DE SEGURIDAD Y PROT","JEFE DE DEPARTAMENTO");
INSERT INTO aspirante VALUES("CESAR","010","ROMERO","GARCIA","5561780647","41205775","cesarhernandez1318@gmail.com","1970-02-27","HERC690227HDFRRS00","M","8","1","ARBOL 1-401 INFONAVIT IZTACALC","1","0","OTRO","MAESTRIA ADMINISTRACION","No","N/A","N/A");
INSERT INTO aspirante VALUES("MARYSOL","011","MORA","DÍAZ","5523266182","55232661","joplinyork@hotmail.com","1987-05-07","MODM870507MDFRZR05","F","8","1","ARMATA","9","0","OTRO_PARTICULAR","LICENCIATURA EN DERECHO","No","N/A","N/A");
INSERT INTO aspirante VALUES("MONSSERRAT GABRIELA","012","PÉREZ","JUÁREZ","5579922399","13145706","monssegaby@gmail.com","1990-10-15","PEJM9010151MDFRRN1","F","8","3","TAMAZULA ","5","0","TESOEM","INGENIERIA INDUSTRIAL","Si","GRUPO DINIZ ","ADMINISTRADOR T.I.");
INSERT INTO aspirante VALUES("AIDA BERENICE","013","BARRERA","VILLALPANDO","5543431763","59880144","berenice_barrera@yahoo.com.mx","1975-07-06","BAVA750706MMSRLD09","F","8","3","MORELOS","20","0","OTRO_PARTICULAR","LICENCIATURA EN DERECHO","Si","N/A","N/A");


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

INSERT INTO citas VALUES("001","2","0");
INSERT INTO citas VALUES("002","3","1");
INSERT INTO citas VALUES("003","4","3");
INSERT INTO citas VALUES("004","7","11");
INSERT INTO citas VALUES("005","10","9");
INSERT INTO citas VALUES("006","17","6");
INSERT INTO citas VALUES("007","18","10");
INSERT INTO citas VALUES("008","55","4");
INSERT INTO citas VALUES("009","56","5");
INSERT INTO citas VALUES("010","57","7");
INSERT INTO citas VALUES("011","76","8");
INSERT INTO citas VALUES("012","78","2");
INSERT INTO citas VALUES("013","84","12");
INSERT INTO citas VALUES("014","85","13");


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

INSERT INTO entidad VALUES("1","AGUASCALIENTES");
INSERT INTO entidad VALUES("2","BAJA CALIFORNIA NORTE");
INSERT INTO entidad VALUES("3","BAJA CALIFORNIA SUR");
INSERT INTO entidad VALUES("4","CAMPECHE");
INSERT INTO entidad VALUES("5","COAHUILA");
INSERT INTO entidad VALUES("6","COLIMA");
INSERT INTO entidad VALUES("7","CHIAPAS");
INSERT INTO entidad VALUES("8","CHIHUAHUA");
INSERT INTO entidad VALUES("9","DISTRITO FEDERAL");
INSERT INTO entidad VALUES("10","DURANGO");
INSERT INTO entidad VALUES("11","MEXICO");
INSERT INTO entidad VALUES("12","GUANAJUATO");
INSERT INTO entidad VALUES("13","GUERRERO");
INSERT INTO entidad VALUES("14","HIDALGO");
INSERT INTO entidad VALUES("15","JALISCO");
INSERT INTO entidad VALUES("16","MICHOACAN");
INSERT INTO entidad VALUES("17","MORELOS");
INSERT INTO entidad VALUES("18","NAYARIT");
INSERT INTO entidad VALUES("19","NUEVO LEON");
INSERT INTO entidad VALUES("20","OAXACA");
INSERT INTO entidad VALUES("21","PUEBLA");
INSERT INTO entidad VALUES("22","QUERETARO");
INSERT INTO entidad VALUES("23","QUINTANA ROO");
INSERT INTO entidad VALUES("24","SAN LUIS POTOSI");
INSERT INTO entidad VALUES("25","SINALOA");
INSERT INTO entidad VALUES("26","SONORA");
INSERT INTO entidad VALUES("27","TABASCO");
INSERT INTO entidad VALUES("28","TAMAULIPAS");
INSERT INTO entidad VALUES("29","TLAXCALA");
INSERT INTO entidad VALUES("30","VERACRUZ");
INSERT INTO entidad VALUES("31","YUCATAN");
INSERT INTO entidad VALUES("32","ZACATECAS");
INSERT INTO entidad VALUES("99","EXTRANJERO");


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

INSERT INTO fecha_cita VALUES("2","2020-01-29","11:00:00","");
INSERT INTO fecha_cita VALUES("3","2020-01-29","11:20:00","");
INSERT INTO fecha_cita VALUES("4","2020-01-29","11:40:00","");
INSERT INTO fecha_cita VALUES("5","2020-01-29","12:00:00","");
INSERT INTO fecha_cita VALUES("6","2020-01-29","12:20:00","");
INSERT INTO fecha_cita VALUES("7","2020-01-29","12:40:00","");
INSERT INTO fecha_cita VALUES("8","2020-01-29","15:00:00","");
INSERT INTO fecha_cita VALUES("9","2020-01-29","15:20:00","");
INSERT INTO fecha_cita VALUES("10","2020-01-29","15:40:00","");
INSERT INTO fecha_cita VALUES("11","2020-01-31","11:00:00","");
INSERT INTO fecha_cita VALUES("12","2020-01-31","11:20:00","");
INSERT INTO fecha_cita VALUES("13","2020-01-31","11:40:00","");
INSERT INTO fecha_cita VALUES("14","2020-01-31","12:00:00","");
INSERT INTO fecha_cita VALUES("15","2020-01-31","12:20:00","");
INSERT INTO fecha_cita VALUES("16","2020-01-31","12:40:00","");
INSERT INTO fecha_cita VALUES("17","2020-01-31","15:00:00","");
INSERT INTO fecha_cita VALUES("18","2020-01-31","15:20:00","");
INSERT INTO fecha_cita VALUES("19","2020-01-31","15:40:00","");
INSERT INTO fecha_cita VALUES("20","2020-01-27","11:00:00","");
INSERT INTO fecha_cita VALUES("21","2020-01-27","11:20:00","");
INSERT INTO fecha_cita VALUES("22","2020-01-27","11:40:00","");
INSERT INTO fecha_cita VALUES("23","2020-01-27","12:00:00","");
INSERT INTO fecha_cita VALUES("24","2020-01-27","12:20:00","");
INSERT INTO fecha_cita VALUES("25","2020-01-27","12:40:00","");
INSERT INTO fecha_cita VALUES("26","2020-01-27","15:00:00","");
INSERT INTO fecha_cita VALUES("27","2020-01-27","15:20:00","");
INSERT INTO fecha_cita VALUES("28","2020-01-27","15:40:00","");
INSERT INTO fecha_cita VALUES("29","2020-01-27","16:00:00","");
INSERT INTO fecha_cita VALUES("30","2020-01-27","16:20:00","");
INSERT INTO fecha_cita VALUES("31","2020-01-27","16:40:00","");
INSERT INTO fecha_cita VALUES("32","2020-01-27","17:00:00","");
INSERT INTO fecha_cita VALUES("33","2020-01-27","17:20:00","");
INSERT INTO fecha_cita VALUES("34","2020-01-27","17:40:00","");
INSERT INTO fecha_cita VALUES("35","2020-01-27","18:00:00","");
INSERT INTO fecha_cita VALUES("36","2020-01-27","18:20:00","");
INSERT INTO fecha_cita VALUES("37","2020-01-27","18:40:00","");
INSERT INTO fecha_cita VALUES("38","2020-01-30","11:00:00","");
INSERT INTO fecha_cita VALUES("39","2020-01-30","11:20:00","");
INSERT INTO fecha_cita VALUES("40","2020-01-30","11:40:00","");
INSERT INTO fecha_cita VALUES("41","2020-01-30","12:00:00","");
INSERT INTO fecha_cita VALUES("42","2020-01-30","12:20:00","");
INSERT INTO fecha_cita VALUES("43","2020-01-30","12:40:00","");
INSERT INTO fecha_cita VALUES("44","2020-01-30","15:00:00","");
INSERT INTO fecha_cita VALUES("45","2020-01-30","15:20:00","");
INSERT INTO fecha_cita VALUES("46","2020-01-30","15:40:00","");
INSERT INTO fecha_cita VALUES("47","2020-01-30","16:00:00","");
INSERT INTO fecha_cita VALUES("48","2020-01-30","16:20:00","");
INSERT INTO fecha_cita VALUES("49","2020-01-30","16:40:00","");
INSERT INTO fecha_cita VALUES("50","2020-01-30","17:00:00","");
INSERT INTO fecha_cita VALUES("51","2020-01-30","17:20:00","");
INSERT INTO fecha_cita VALUES("52","2020-01-30","17:40:00","");
INSERT INTO fecha_cita VALUES("53","2020-01-30","18:00:00","");
INSERT INTO fecha_cita VALUES("54","2020-01-30","18:00:00","");
INSERT INTO fecha_cita VALUES("55","2020-01-30","18:40:00","");
INSERT INTO fecha_cita VALUES("56","2020-01-28","09:00:00","");
INSERT INTO fecha_cita VALUES("57","2020-01-28","09:20:00","");
INSERT INTO fecha_cita VALUES("58","2020-01-28","09:40:00","");
INSERT INTO fecha_cita VALUES("59","2020-01-28","10:00:00","");
INSERT INTO fecha_cita VALUES("60","2020-01-28","10:20:00","");
INSERT INTO fecha_cita VALUES("61","2020-01-28","10:40:00","");
INSERT INTO fecha_cita VALUES("62","2020-01-28","11:00:00","");
INSERT INTO fecha_cita VALUES("63","2020-01-28","11:20:00","");
INSERT INTO fecha_cita VALUES("64","2020-01-28","11:40:00","");
INSERT INTO fecha_cita VALUES("65","2020-01-28","12:00:00","");
INSERT INTO fecha_cita VALUES("66","2020-01-28","12:20:00","");
INSERT INTO fecha_cita VALUES("67","2020-01-28","12:40:00","");
INSERT INTO fecha_cita VALUES("68","2020-01-28","13:00:00","");
INSERT INTO fecha_cita VALUES("69","2020-01-28","13:20:00","");
INSERT INTO fecha_cita VALUES("70","2020-01-28","13:40:00","");
INSERT INTO fecha_cita VALUES("71","2020-01-28","13:00:00","");
INSERT INTO fecha_cita VALUES("72","2020-01-28","13:20:00","");
INSERT INTO fecha_cita VALUES("73","2020-01-28","13:40:00","");
INSERT INTO fecha_cita VALUES("74","2020-01-28","14:00:00","");
INSERT INTO fecha_cita VALUES("76","2020-01-28","14:20:00","");
INSERT INTO fecha_cita VALUES("77","2020-01-28","14:40:00","");
INSERT INTO fecha_cita VALUES("78","2020-01-27","10:00:00","");
INSERT INTO fecha_cita VALUES("79","2020-01-27","10:20:00","");
INSERT INTO fecha_cita VALUES("80","2020-01-27","10:40:00","");
INSERT INTO fecha_cita VALUES("81","2020-01-27","14:00:00","");
INSERT INTO fecha_cita VALUES("82","2020-01-27","14:20:00","");
INSERT INTO fecha_cita VALUES("83","2020-01-27","14:40:00","");
INSERT INTO fecha_cita VALUES("84","2020-02-11","16:00:00","");
INSERT INTO fecha_cita VALUES("85","2020-02-11","16:00:00","");
INSERT INTO fecha_cita VALUES("86","2020-02-11","16:00:00","");


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

INSERT INTO licencia VALUES("1","JCCR-FpoYkNoaVlYTmxOalJmWkdWamIyUmxLQ0phV0Zwb1lrTm9hVmxZVG14T2FsSm1Xa2RXYW1JeVVteExRMHBoVjBWd05WbHFUa3RhYlU1MFZtNWthVTB3YjNkWlZtTXhZbXQwUlZGWVFsQmtNMEozVjIxc1FtSXlSbGxVYm5CaFYwWkdkbE5yV1RWV1JrcFhVMnhrVTFacmNHbFRWM1J2VmxaYVIx-LIC-VALIDA");


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

INSERT INTO niveles VALUES("1","Administrador");
INSERT INTO niveles VALUES("2","Docente");
INSERT INTO niveles VALUES("3","Alumno");


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

INSERT INTO semestre VALUES("1","Primero");
INSERT INTO semestre VALUES("2","Segundo");
INSERT INTO semestre VALUES("3","Tercero");
INSERT INTO semestre VALUES("4","Cuarto");


DROP TABLE IF EXISTS situacion_alumno;

CREATE TABLE `situacion_alumno` (
  `id_situacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_situacion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_situacion`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO situacion_alumno VALUES("1","BD BAJA DEFINITIVA");
INSERT INTO situacion_alumno VALUES("2","BI BAJA INDEFINIDA");
INSERT INTO situacion_alumno VALUES("3","BP BAJA POR FALTA DE PAGO");
INSERT INTO situacion_alumno VALUES("4","BT BAJA TEMPORAL");
INSERT INTO situacion_alumno VALUES("5","IC ISCRITO POR CREDITOS");
INSERT INTO situacion_alumno VALUES("6","IM INSCRITO CON CARGA MINIMA");
INSERT INTO situacion_alumno VALUES("7","IN INSCRITO NORMAL");
INSERT INTO situacion_alumno VALUES("8","IX INSCRITO CON CARGA MAXIMA");


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

INSERT INTO tipo_materia VALUES("1","Normal");
INSERT INTO tipo_materia VALUES("2","Especialidad");


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

INSERT INTO usuario VALUES("61","CISNEROS","carci10@hotmail.com","Cisneros*","1","1");
INSERT INTO usuario VALUES("62","MARIA ELENA","posgradostesi@tesi.edu.mx","posgradostesi","1","1");
INSERT INTO usuario VALUES("64","JUAN CARLOS","carci102@gmail.com","Cisneros*","5","0");
INSERT INTO usuario VALUES("65","ALIN LIZZETH GOMEZ BAHENA","alinelizzeth@hotmail.com","Alin123*","5","0");
INSERT INTO usuario VALUES("66","Francisco Jhonatan Castro Cruz","jhons_cruz@outlook.com","jhonatan1993","5","1");
INSERT INTO usuario VALUES("67","Francisco Jhonatan Castro Cruz","john_cc@outlook.com","jhonatan1993","5","0");
INSERT INTO usuario VALUES("70","NANCY LORELI ISLAS GOMEZ","loreli.islas@gmail.com","46043560*","5","1");
INSERT INTO usuario VALUES("71","Diana Casanova Lara","dia_casanova@hotmail.com","casanova1208","5","1");
INSERT INTO usuario VALUES("72","GERARDO HERNANDEZ","simple.sociologia19@gmail.com","gasparnoe","5","1");
INSERT INTO usuario VALUES("73","Yuliana Yaneth Hernández Rodríguez","admonyuly@gmail.com","yuly3363","5","1");
INSERT INTO usuario VALUES("74","Christian Gutiérrez ","gutierrezdelarosachristianrbt@gmail.com","cristiano710","5","0");
INSERT INTO usuario VALUES("75","Miriam Lorely Martinez Gonzalez","miriammartinez2206@yahoo.com.mx","M1r1am","5","1");
INSERT INTO usuario VALUES("76","Sujheis Huar Molina","sujheis4@hotmail.com","Sheccidkevin1980","5","1");
INSERT INTO usuario VALUES("77","Kevin","kvnleyva.7@outlook.com","Chupirul1992","5","1");
INSERT INTO usuario VALUES("78","Maria Angelica","maria.angelica.1994@hotmail.com","1ng2l3c1","5","1");
INSERT INTO usuario VALUES("79","Antuan","licantropo117@hotmail.com","pf21antuan","5","1");
INSERT INTO usuario VALUES("80","Cesar","cesarhernandez1318@gmail.com","16270269","5","1");
INSERT INTO usuario VALUES("81","Marysol Mora Díaz","joplinyork@hotmail.com","incendio","5","1");
INSERT INTO usuario VALUES("82","Airam","fernanda501511@gmail.com","hermanas11","5","0");
INSERT INTO usuario VALUES("83","MONSSERRAT PÉREZ","monssegaby@gmail.com","Diniz2019mp","5","1");
INSERT INTO usuario VALUES("84","AIDA BERENICE BARRERA VILLALPANDO","berenice_barrera@yahoo.com.mx","Todosirve060775@","5","1");


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

INSERT INTO usuarios VALUES("1","carci10@hotmail.com","Cisneros*","1","0","");
INSERT INTO usuarios VALUES("2","posgradostesi@tesi.edu.mx","posgradostesi","1","0","");


