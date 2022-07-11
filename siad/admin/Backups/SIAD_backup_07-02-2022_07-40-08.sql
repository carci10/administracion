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
  `semestre_actual` int(11) DEFAULT NULL,
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

INSERT INTO alumnos VALUES("2021MA1019","Israel Ricardo","Del Prado","Garces","Mexicana ","11","0","0","San Juan ","48","48","5535787912","55885859","PAGI810207HDFRRS00","M","1981-02-07","85","8","2021-08-18","4","3","1","","","","2","","ricardo.com.mx@live.com.mx","1");
INSERT INTO alumnos VALUES("2020MA012","Monsserrat Gabriela","Perez","Juarez","Mexicana","11","0","0","Tamazula ","5","5","5579922399","13145706","PEJM9010151MDFRRN1","F","1990-10-15","9.7","8","2020-03-13","1","3","1","","","","3","","monssegaby@gmail.com","4");
INSERT INTO alumnos VALUES("2020MA003","Gerardo","Hernandez","Chavez","Mexicana","11","0","0","Calistemo","18","18","5545731153","19452797","HECG940909HDFRHR07","M","1994-09-09","9.5","8","2020-03-13","1","3","1","","","","2","","simple.sociologia19@gmail.com","4");
INSERT INTO alumnos VALUES("2020MA002","Francisco Jhonatan","Castro","Cruz","Mexicana","11","0","0","Av. Morelos","MZ 9 LT 5","50","6691996331","26384591","CACF940620HDFSRR05","M","1994-06-20","92","8","2020-03-06","1","3","1","","","","3","","jhons_cruz@outlook.com","4");
INSERT INTO alumnos VALUES("2020MA013","Aida Berenice","Barrera","Villalpando","Mexicana","11","0","0","Morelos","20","20","5543431763","59880144","BAVA750706MMSRLD09","F","1975-07-06","8.74","8","2020-03-06","1","3","1","","","","3","","berenice_barrera@yahoo.com.mx","4");
INSERT INTO alumnos VALUES("2020MA004","Yuliana Yaneth","Hernandez","Rodriguez","Mexicana","11","0","0","Ignacio Allende","108","108","5554336446","15524475","HERY940222MMCRDL08","F","1994-02-22","9.1","8","2020-03-06","1","3","1","","","","3","","admonyuly@gmail.com","4");
INSERT INTO alumnos VALUES("2020MA007","Maria Angelica","Cornejo","Vazquez","Mexicana","11","0","0","Cda. Nuevo Mexico","12","12","5576840046","17227752","COVA940905MMCRZN00","F","1994-09-05","89","8","2020-03-13","1","3","1","","","","3","","maria.angelica.1994@hotmail.com","4");
INSERT INTO alumnos VALUES("2020MA011","Marysol","Mora","Diaz","Mexicana","11","0","0","Armata","9","9","5523266182","17224365","MODM870507MDFRZR05","F","1987-05-07","85","8","2020-03-13","1","3","1","","","","1","","joplinyork@hotmail.com","4");
INSERT INTO alumnos VALUES("2020MA001","Diana Cecilia","Casanova","Lara","Mexicana","9","0","0","Oriente 245c","174","B404","5515102216","88533681","CALD750812MDFSRN01","F","1975-08-12","94","8","2020-03-11","1","3","1","","","","2","","dia_casanova@hotmail.com","4");
INSERT INTO alumnos VALUES("2020MA009","Felix Antuan","Gomez","Maciel","Mexicana","11","0","0","C Ocote","15","","5616919537","91330018","GOMF880613HMCMCL08","M","1988-06-13","8.3","8","2020-03-13","1","3","1","","","","3","","licantropo117@hotmail.com","4");
INSERT INTO alumnos VALUES("2020MA005","Miriam Lorely","Martinez","Gonzalez","Mexicana ","11","0","0","Volcan Cayambe","66","66","5537360171","25927606","MAGM930622MMCRNR01","F","1993-06-22","83","8","2020-03-13","1","3","1","","","","3","","miriammartinez2206@yahoo.com.mx","4");
INSERT INTO alumnos VALUES("2020MA006","Sujheis","Huar","Molina","Mexicana","0","0","0","Alvaro Obregon ","12","12","5548815726","48815726","HUMS801111MMCRLJ03","F","1980-11-11","8","8","2020-03-13","1","3","1","","","","3","","sujheis4@hotmail.com","4");
INSERT INTO alumnos VALUES("2020MA019","Nelly","Palma","Espinosa","Mexicana","11","0","0","Cda Valle De Monjas Mza 28 ","83","83","5543907246","25920880","PAEN830422MDFLSL09","F","1983-04-22","8.3","8","2020-08-08","2","3","1","","","","2","","paen_220483@hotmail.com","3");
INSERT INTO alumnos VALUES("2020MA022","Evelyn","Palma","Espinosa","Mexicana","9","0","0","San Juan De Aragon","439","C306","5564429778","42082176","PAEE780526MDFLSV03","F","1978-05-26","8.2","8","2020-09-04","2","3","1","","","","2","","evepe000@gmail.com","3");
INSERT INTO alumnos VALUES("2020MA023","Jose","Ramirez","Jimenez","Mexicana","11","0","0","Libertad No. 10","10","10","5528607756","59218029","RAJJ901002HMCMMS04","M","1990-10-02","79","8","2020-09-04","2","3","1","","","","2","","jrjtesi@gmail.com","3");
INSERT INTO alumnos VALUES("2020MA021","Claudia","Alcantara","Enriquez","Mexicana","11","0","0","2","22","S/N","5545313234","58555194","AAEC891108MMCLNL00","F","1989-11-08","84","8","2020-09-04","2","3","1","","","","3","","claz_ae@hotmail.com","3");
INSERT INTO alumnos VALUES("2020MA014","Emmanuel","Salmeron","Catalan","Mexicana","11","0","0","Plan De Apatzingan","17","17","5523107585","23107585","SACE821004HDFLTM02","M","1982-10-04","7.9","8","2020-09-04","2","3","1","","","","3","","lic.emmanuelsa@gmail.com","3");
INSERT INTO alumnos VALUES("2020MA015","Roemi Emmanuel","Sosa","Flores","Mexicana","11","0","0","Emiliano Zapata ","42","42","5621718015","51338009","SOFR880202HDFSLM05","M","1988-02-02","8.8","8","2020-09-04","2","3","1","","","","1","","roemy_88@hotmail.com","3");
INSERT INTO alumnos VALUES("2020MA026","Jose Emilio","Carrillo","Chavez","Mexicana","11","0","0","Emilio Marmolejo","30","NA","5527547069","59741220","CACE890221HDFRHM01","M","1989-02-21","71","8","2020-09-04","2","3","1","","","","2","","joseemilio.carrillo@outlook.com","3");
INSERT INTO alumnos VALUES("2020MA024","Diego","Colin","Rosales","Mexicana","11","0","0","Nuestra Senora De Lourdes","0","0","5583305288","17343023","CORD920105HMCLSG07","M","1992-01-05","89","8","2020-09-04","2","3","1","","","","2","","DIEGO_050192@HOTMAIL.COM","3");
INSERT INTO alumnos VALUES("2021MA1020","Laura","Perez","Rodriguez","Mexicana","11","0","0","Nuevo Leon","409","8","5561636960","55594263","PERL891120MMCRDR01","F","1989-11-20","87","8","2021-08-06","4","3","1","","","","1","","aztli.lpr@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1003","Erika Nahomi","Ortiz","Nafarrate","Mexicana ","11","0","0","Cerrada Zaragoza","11","11","5513377238","13140850","OINE941021MDFRFR06","F","1994-10-21","85.06","8","2021-06-08","4","3","1","","","","2","","erikanafarrate@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1002","Jefree","De La Torre","Nieto","Mexicana ","11","0","0","Miguel Hidalgo ","21","21","5516862088","16862088","TONJ941027HMCRTF02","M","1994-10-27","85","8","2021-08-18","4","3","1","","","","3","","jef_lic145@outlook.es","1");
INSERT INTO alumnos VALUES("2021MA1016","Rosa","Hernandez","Sanchez","Mexicana","11","0","0","Av Cuauhtemoc","39","39","5513956444","59720587","HESR571219MDFRNS00","F","1957-12-19","86","8","2021-08-18","4","3","1","","","","1","","galerosahdez19@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1006","Luis Antonio","Rodriguez","Sanchez","Mexicana","11","0","0","Alcatraz ","10","8","5576637432","55597464","ROSL841231HDFDNS04","M","1984-12-31","8.8","8","2021-08-18","4","3","1","","","","1","","tonys84_6@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1005","Mario Alberto","Salazar","Carmona","Mexicana","11","0","0","Miguel Hidalgo","23","23","5572071099","59834366","SACM940521HPLLRR09","M","1994-05-21","8.1","8","2021-07-08","4","3","1","","","","3","","mario_larry@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1013","Jorge Armando","Cabrera","Vazquez","Mexicana","11","0","0","Plutarco Elias Calles ","50","50","5551456829","73153022","CAVJ881007HDFBZR06","M","1988-10-07","8.5","8","2021-08-18","4","3","1","","","","2","","jacv_8810@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1021","Jhair Armando","Ranchos","Morales","Mexicana","11","0","0","Constituyentes","17","17","5587024171","41196290","RAMJ880821HMCNRH06","M","1988-08-21","86","8","2021-08-18","4","3","1","","","","2","","led.jarm@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1008","Daniela Alejandra","Bonilla","Gutierrez","Mexicana","11","0","0","Paseo De Los Eucaliptos","11","31","5548718950","22303894","BOGD981130MMCNTN07","F","1998-11-30","99","8","2021-08-18","4","3","1","","","","1","","bonilladaniela963@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1009","Karen Anahi","Garcia","Bocanegra","Mexicana","11","0","0","Libertad","41","41","5560058138","59835016","GABK980224MDFRCR09","F","1998-02-24","94","8","2021-08-19","4","3","1","","","","1","","anahi6317@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1011","Isis Yazmin","Diaz","Cuapio","Mexicana","11","0","0","Miguel Hidalgo Mz26 Lt38","18","18","5522700826","89831053","DICI961208MDFZPS00","F","1996-12-08","92","8","2021-08-19","4","3","1","","","","1","","yazmstar96@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1017","Yovani","Castro","Robles","Mexicana","11","0","0","Plan De Apatzingan","17A","17A","5550672102","25943911","CARY920714HDFSBV04","M","1992-07-14","82","8","2021-08-19","4","3","1","","","","3","","yovani.castro.r@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1014","Maria Del Carmen","Magana","Gonzalez","Mexicana","11","0","0","Olmecas","27","31","5539408940","26459450","MAGC880621MDFGNR04","F","1988-06-21","8.63","8","2021-08-20","4","3","1","","","","1","","eseconomia7@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1010","Maury Ivan","Diaz","Reyes","Mexicana","11","0","0","Av. Tlalnepantla Mz 1 Lt 2","1","1","5552520611","59742450","DIRM940426HDFZYR05","M","1994-04-26","92","8","2021-08-20","4","3","1","","","","2","","8mdiaz@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1022","Leonardo Daniel","Hernandez","Valdovinos","Mexicana","11","0","0","Av Hank Gonzalez","11","0","5527222566","55769217","HEVL840511HDFRLN01","M","1984-05-11","94","8","2021-08-31","4","3","1","","","","2","","licleonardo8@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1024","Violeta","Suir","Morales","Mexicana","11","0","0","Adolfo Lopez Mateos","8","8","5578345646","55598279","SUMV750806MMCRRL07","F","1975-08-06","92","8","2021-08-31","4","3","1","","","","1","","suirmv@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1023","Pedro Alberto","Enriquez","Andrade","Mexicana","11","0","0","Fresnillo ","22","22","5583608081","55836080","EIAP830105HDFNND02","M","1983-01-05","8.88","8","2021-08-18","4","3","1","","","","1","","perico_pea83@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1025","Anallely Itzel","Diaz","Gonzalez","Mexicana","11","0","0","Cerro Del Sombrero ","22","22","5517606756","51145054","DIGA901127MMCZNN09","F","1990-11-27","8.9","8","2021-09-02","4","3","1","","","","1","","anita_03dbre90@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1026","Edgar Daniel","Sanchez","Balderas","Mexicana","11","0","0","Tizapan","37","37","5518432570","57884802","SABE790713HDFNLD08","M","1979-07-13","92","8","2021-09-09","4","3","1","","","","3","","danielsanchez_13@hotmail.com","1");
INSERT INTO alumnos VALUES("2021MA1027","Rosa Aidee","Garcia","Martinez","Mexicana ","11","0","0","Agustin Millan","12","12","5544829358","63620781","GAMR810830MDFRRS01","F","1981-08-30","8.64","8","2021-08-18","4","3","1","","","","2","","ROSAGARCIA32@YAHOO.COM","1");
INSERT INTO alumnos VALUES("2021MA1028","Alba Selene","Rojas","Munoz","Mexicana","11","0","0","10 De Mayo ","8","1","5586882235","26460342","ROMA880807MMCJXL06","F","1988-08-07","91","8","2021-09-03","4","3","1","","","","1","","alba.07081988@gmail.com","1");
INSERT INTO alumnos VALUES("2021MA1029","Hector","Serrano","Bailon","Mexicana","11","0","0","Juchitepec ","17","77","5518013221","63042243","SEBH800118HDFRLC07","M","1980-01-18","85","8","2021-09-03","4","3","1","","","","1","","hsbc17@yahoo.com.mx","1");


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
) ENGINE=MyISAM AUTO_INCREMENT=1030 DEFAULT CHARSET=latin1;

INSERT INTO aspirante VALUES("EDGARDO DANIEL","1001","RODRIGUEZ","VILLAMARES","5541110100","41110100","edgardodanrv@gmail.com","1991-04-21","ROVE910421HDFDLD02","M","8","2","AV. PASEO DE LOS CHOPOS","17","SAN BUENAVENTURA","UMB","lic. informatica administrativa y finaciera","Si","IDCI","Maestro");
INSERT INTO aspirante VALUES("JEFREE ","1002","DE LA TORRE ","NIETO","5516862088","16862088","jef_lic145@outlook.es","1994-10-27","TONJ941027HMCRTF02","0","8","3","MIGUEL HIDALGO ","21","IXTAPALUCA CENTRO ","TESI","LIC. ADMINISTRACION","Si","BORGATTA","ANALISTA EN COMPRAS NACIONALES ");
INSERT INTO aspirante VALUES("ERIKA NAHOMI","1003","ORTÃZ","NAFARRATE","5513377238","13140850","erikanafarrate@gmail.com","1994-10-21","OINE941021MDFRFR06","F","8","2","CERRADA ZARAGOZA","11","SAN JUAN TLALPIZAHUAC","TESOEM","Lic. Gastronomia.","Si","IMSS","Asistente Medica");
INSERT INTO aspirante VALUES("ALEJANDRO","1004","RAMIREZ","RAMOS","5547101267","55471012","mecatronicatuvch@gmail.com","1986-02-25","RARA860225HDFMML03","M","8","2","CERRADA DE LA ROSA","34","LA VENTA","TESI","INGENIERÃA EN ELECTRÃ“NICA","Si","TECNOLÃ“GICO UNIVERSITARIO DE VALLE DE CHALCO","COORDINADOR DE CARRERA");
INSERT INTO aspirante VALUES("MARIO ALBERTO","1005","SALAZAR ","CARMONA","5572252931","59834366","mario_larry@hotmail.com","1994-05-21","SACM940521HPLLRR09","M","8","3","MIGUEL HIDALGO","23","LOS HEROES","TESI","LICENCIATURA EN ADMINISTRACIÃ“N","Si","SECRETARIA DE COMUNICACIONES Y TRANSPORTES","CONSULTOR JUNIOR");
INSERT INTO aspirante VALUES("LUIS ANTONIO","1006","RODRIGUEZ","SANCHEZ","5576637432","55597464","tonys84_6@hotmail.com","1984-12-31","ROSL841231HDFDNS04","M","8","1","ORIENTE 229","42","AGRICOLA ORIENTAL","TESI","licenciatura en informÃ¡tica","Si","Ciudad de MÃ©xico","Jefe de Recursos Humanos");
INSERT INTO aspirante VALUES("JOSE ALFREDO","1007","MEZA","HUERTA","5527458418","55366131","alfredo.meza1606@hotmail.com","1985-06-16","MEHA850616HPLZRL08","M","8","3","TEMPESTAD RT36 MZ 31 ","24","CUATRO VIENTOS","TESCHI","ING EN SISTEMAS COMPUTACIONALES","Si","N/A","Ingeniero de soporte a SAP");
INSERT INTO aspirante VALUES("DANIELA ALEJANDRA","1008","BONILLA","GUTIERREZ","5548718950","22303894","bonilladaniela963@gmail.com","1998-11-30","BOGD981130MMCNTN07","F","8","1","PASEO DE LOS EUCALIPTOS","11","SAN BUENAVENTURA","TESI","ADMINISTRACIÃ“N","No","N/A","N/A");
INSERT INTO aspirante VALUES("KAREN ANAHI","1009","GARCIA","BOCANEGRA","5560058138","59835016","anahi6317@gmail.com","1998-02-24","GABK980224MDFRCR09","F","8","1","LIBERTAD","41","LOS HEROES","TESI","LICENCIATURA EN ADMINISTRACIÃ“N","No","N/A","N/A");
INSERT INTO aspirante VALUES("MAURY IVAN","1010","DIAZ","REYES","5552520611","59742450","8mdiaz@gmail.com","1994-04-26","DIRM940426HDFZYR05","M","8","3","AV. TLALNEPANTLA MZ 1 LT 2","1","TLAPACOYA","OTRO_PARTICULAR","Licenciatura en InformÃ¡tica","Si","Ixtapaluca","DIRECTOR GENERAL");
INSERT INTO aspirante VALUES("ISIS YAZMIN","1011","DIAZ","CUAPIO","5522700826","89831053","yazmstar96@hotmail.com","1996-12-08","DICI961208MDFZPS00","F","8","1","MIGUEL HIDALGO MZ26 LT38","18","LOS HEROES","TESI","INGENIERIA AMBIENTAL","Si","ROSCH TRANSPORTE","ANALISTA RECURSOS HUMANOS");
INSERT INTO aspirante VALUES("ALEJANDRA","1012","MIRANDA"," VELAZCO","5522177771","59741856","alejandramirandaleon@hotmail.com","1992-03-27","MIVA920327MMCRLL09","F","8","3","CALLE ISIDRO FABELA ","34","AYOTLA, IXTAPALUCA","TESI","ING. AMBIENTAL ","Si","ARAGÃ“N ","Gerente General");
INSERT INTO aspirante VALUES("JORGE ARMANDO","1013","CABRERA","VAZQUEZ","5551456829","73153022","jacv_8810@hotmail.com","1988-10-07","CAVJ881007HDFBZR06","M","8","3","PLUTARCO ELIAS CALLES ","50","LOS HEROES","OTRO_PARTICULAR","DERECHO","Si","HRAEI","SOPORTE ADMINISTRATIVO A");
INSERT INTO aspirante VALUES("MARIA DEL CARMEN","1014","MAGAÃ‘A","GONZÃLEZ","5539408940","26459450","eseconomia7@gmail.com","1988-06-21","MAGC880621MDFGNR04","F","8","1","OLMECAS","27","TLAPACOYA","IPN","LICENCIATURA EN ECONOMÃA","Si","TESI","PROFESOR DE ASIGNATURA");
INSERT INTO aspirante VALUES("IRLANDA","1015","NIETO","NIETO","2224264560","10564332","irlandanieto2@gmail.com.mx","1991-01-27","NIPI910127MMCTCR07","F","8","1","JIMENEZ CANTU","34","ZOQUIAPAN","TESI","ADMINISTRACION","No","N/A","N/A");
INSERT INTO aspirante VALUES("ROSA","1016","HERNANDEZ","HERNANDEZ","5513956444","59720587","galerosahdez19@hotmail.com","1957-12-19","HESR571219MDFRNS00","F","8","2","AV CUAUHTEMOC","39","ZOQUIAPAN","OTRO","LICENCIADA EN ADMINISTRACION DE EMPRESAS","Si","IXTAPALUCA ESTADO DE MEXICO","ADMINISTRADORA CENTRO COMERCIAL");
INSERT INTO aspirante VALUES("YOVANI","1017","CASTRO","ROBLES","5550672102","25943911","yovani.castro.r@gmail.com","1992-07-14","CARY920714HDFSBV04","M","8","3","ADOLFO LOPEZ MATEOS","5","SAN JOSÃ‰","IPN","IngenierÃ­a petrolera","Si","N/A","N/A");
INSERT INTO aspirante VALUES("ANDREA  HERMINDA","1018","SALAZAR ","MONROY","5620175890","56201758","salazarmonroy147@hotmail.com","1997-02-20","SAMA970220MNELNN00","F","8","2","ZAPOTECAS ","494","AJUSCO ","OTRO","CURSADA ","No","N/A","N/A");
INSERT INTO aspirante VALUES("ISRAEL RICARDO ","1019","DEL PRADO ","GARCÃ‰S","5535787912","55885859","ricardo.com.mx@live.com.mx","1981-02-07","PAGI810207HDFRRS00","M","8","2","SAN JUAN ","48","ROSA DE CASTILLA","OTRO","Derecho","Si","N/A","N/A");
INSERT INTO aspirante VALUES("LAURA","1020","PÃ‰REZ","RODRÃGUEZ","5561636960","55594263","aztli.lpr@gmail.com","2021-08-04","PERL891120MMCRDR01","F","8","1","NUEVO LEÃ“N ","409","AMPLIACIÃ“N SAN FRANCISCO","OTRO_PARTICULAR","PedagogÃ­a","Si","TecnolÃ³gico de Estudios Superiores de Ixtapaluca","Auxiliar administrativo");
INSERT INTO aspirante VALUES("JHAIR ARMANDO","1021","RANCHOS","MORALES","5587024171","41196290","led.jarm@gmail.com","1988-08-21","RAMJ880821HMCNRH06","M","8","2","CONSTITUYENTES","17","JUAN ANTONIO SOBERANES ","OTRO_PARTICULAR","DERECHO","Si","DESPACHO","ABOGADO POSTULANTE");
INSERT INTO aspirante VALUES("LEONARDO DANIEL","1022","HERNANDEZ","VALDOVINOS","5527222566","55769217","licleonardo8@hotmail.com","1984-05-11","HEVL840511HDFRLN01","M","8","2","AV. HANK GONZÃLEZ","11","FRACC VILLA DE GUADALUPE XALOSTOC","UNAM","MAESTRIA EN DERECHO","Si","TecnolÃ³gico de Estudio Superiores de Ixtapaluca","JEFE DE AREA");
INSERT INTO aspirante VALUES("PEDRO ALBERTO","1023","ENRIQUEZ","ANDRADE","5583608081","55836080","perico_pea83@hotmail.com","1983-01-05","EIAP830105HDFNND02","M","8","1","FRESNILLO ","22","FRACC. BONITO ECATEPEC","UAEMex","LICENCIATURA EN ADMINISTRACIÃ“N","Si","N/A","N/A");
INSERT INTO aspirante VALUES("VIOLETA ","1024","SUIR","MORALES ","5578345646","55598279","suirmv@hotmail.com","1975-08-06","SUMV750806MMCRRL07","F","8","1","ADOLFO LOPEZ MATEOS","8","LA CANDELARIA TLAPALA","OTRO_TNM","CONTADURIA PÃšBLICA ","Si","N/A","N/A");
INSERT INTO aspirante VALUES("ANALLELY ITZEL","1025","DIAZ","GONZALEZ","5517606756","51145054","anita_03dbre90@hotmail.com","1990-11-27","DIGA901127MMCZNN09","F","8","1","CERRO DEL SOMBRERO ","22","SAGITARIO 1","OTRO_PARTICULAR","LICENCIATURA EN DERECHO","Si","N/A","N/A");
INSERT INTO aspirante VALUES("EDGAR DANIEL ","1026","SANCHEZ","BALDERAS","5518432570","57884802","danielsanchez_13@hotmail.com","1979-07-13","SABE790713HDFNLD08","M","8","3","TIZAPAN","37","CD. AZTECA PONIENTE","OTRO","Lic. en Derecho","No","N/A","N/A");
INSERT INTO aspirante VALUES("ROSA AIDEE","1027","MARTINEZ","GARCIA","5544829358","63620781","ROSAGARCIA32@YAHOO.COM","1981-08-30","GAMR810830MDFRRS01","F","8","2","AGUSTIN MILLAN","12","VICENTE GUERRERO","UNAM","LICENCIATURA EN TRABAJO SOCIAL","No","0","0");
INSERT INTO aspirante VALUES("ALBA SELENE ","1028","ROJAS","MUÃ‘OZ","5586882235","26460342","alba.07081988@gmail.com","1988-08-07","ROMA880807MMCJXL06","F","8","1","10 DE MAYO MANZANA 1","8","EL CHAMIZALITO","UPEM","Licenciatura en Derecho","Si","N/A","N/A");
INSERT INTO aspirante VALUES("HÃ‰CTOR","1029","SERRANO","BAILÃ“N","5518013221","63042243","hsbc17@yahoo.com.mx","1980-01-18","SEBH800118HDFRLC07","M","8","1","JUCHITEPEC MZ. 77","17","ALTAVILLA","OTRO","Licenciatura en Derecho BurocrÃ¡tico","Si","N/A","N/A");


DROP TABLE IF EXISTS calificaciones;

CREATE TABLE `calificaciones` (
  `matricula` varchar(10) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_tipoe` int(11) NOT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `id_tipoi` int(11) DEFAULT NULL,
  `calificacion` int(3) DEFAULT NULL,
  `fecha_calificacion` date DEFAULT NULL,
  `observacion_calificacion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`matricula`,`id_materia`,`id_periodo`,`id_tipoe`),
  KEY `id_materia` (`id_materia`),
  KEY `id_profesor` (`id_profesor`),
  KEY `id_periodo` (`id_periodo`),
  KEY `id_tipoe` (`id_tipoe`),
  KEY `id_tipoi` (`id_tipoi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO calificaciones VALUES("2020MA012","1","1","1","5","1","100","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA003","1","1","1","5","1","80","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA002","1","1","1","5","1","90","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA013","1","1","1","5","1","80","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA004","1","1","1","5","1","90","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA007","1","1","1","5","1","100","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA011","1","1","1","5","1","80","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA001","1","1","1","5","1","100","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA005","1","1","1","5","1","100","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA006","1","1","1","5","1","90","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA011","2","1","1","1","1","82","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA003","13","1","1","2","1","94","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA001","13","1","1","2","1","100","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA012","17","1","1","4","1","96","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA002","17","1","1","4","1","94","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA013","17","1","1","4","1","90","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA004","17","1","1","4","1","90","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA007","17","1","1","4","1","94","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA005","17","1","1","4","1","88","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA006","17","1","1","4","1","95","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA012","3","1","1","4","1","96","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA003","3","1","1","4","1","100","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA002","3","1","1","4","1","96","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA013","3","1","1","4","1","90","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA004","3","1","1","4","1","92","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA007","3","1","1","4","1","96","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA011","3","1","1","4","1","80","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA001","3","1","1","4","1","100","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA005","3","1","1","4","1","88","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA006","3","1","1","4","1","96","2020-05-04","A");
INSERT INTO calificaciones VALUES("2020MA011","2","1","2","1","1","92","2020-06-19","A");
INSERT INTO calificaciones VALUES("2020MA012","17","1","2","4","1","99","2020-06-20","A");
INSERT INTO calificaciones VALUES("2020MA002","17","1","2","4","1","100","2020-06-20","A");
INSERT INTO calificaciones VALUES("2020MA013","17","1","2","4","1","82","2020-06-20","A");
INSERT INTO calificaciones VALUES("2020MA004","17","1","2","4","1","98","2020-06-20","A");
INSERT INTO calificaciones VALUES("2020MA007","17","1","2","4","1","98","2020-06-20","A");
INSERT INTO calificaciones VALUES("2020MA005","17","1","2","4","1","92","2020-06-20","A");
INSERT INTO calificaciones VALUES("2020MA006","17","1","2","4","1","100","2020-06-20","A");
INSERT INTO calificaciones VALUES("2020MA012","3","1","2","4","1","92","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA003","3","1","2","4","1","100","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA002","3","1","2","4","1","100","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA013","3","1","2","4","1","85","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA004","3","1","2","4","1","92","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA007","3","1","2","4","1","96","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA011","3","1","2","4","1","89","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA001","3","1","2","4","1","100","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA005","3","1","2","4","1","90","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA006","3","1","2","4","1","96","2020-06-21","A");
INSERT INTO calificaciones VALUES("2020MA012","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA003","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA002","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA013","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA004","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA007","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA011","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA001","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA005","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA006","1","1","2","5","1","100","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA003","13","1","2","2","1","98","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA001","13","1","2","2","1","99","2020-06-22","A");
INSERT INTO calificaciones VALUES("2020MA011","2","1","3","1","1","100","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA012","1","1","3","5","1","93","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA003","1","1","3","5","1","96","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA002","1","1","3","5","1","96","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA013","1","1","3","5","1","93","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA004","1","1","3","5","1","93","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA007","1","1","3","5","1","93","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA011","1","1","3","5","1","95","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA001","1","1","3","5","1","95","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA005","1","1","3","5","1","95","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA006","1","1","3","5","1","93","2020-07-20","A");
INSERT INTO calificaciones VALUES("2020MA003","13","1","3","2","1","98","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA001","13","1","3","2","1","100","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA012","17","1","3","4","1","99","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA002","17","1","3","4","1","99","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA013","17","1","3","4","1","90","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA004","17","1","3","4","1","90","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA007","17","1","3","4","1","96","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA005","17","1","3","4","1","94","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA006","17","1","3","4","1","99","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA012","3","1","3","4","1","96","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA003","3","1","3","4","1","100","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA002","3","1","3","4","1","100","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA013","3","1","3","4","1","90","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA004","3","1","3","4","1","90","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA007","3","1","3","4","1","92","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA011","3","1","3","4","1","89","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA001","3","1","3","4","1","100","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA005","3","1","3","4","1","90","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA006","3","1","3","4","1","96","2020-07-21","A");
INSERT INTO calificaciones VALUES("2020MA021","17","2","1","5","1","100","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA014","17","2","1","5","1","100","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA011","4","2","1","5","1","92","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA002","4","2","1","5","1","96","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA013","4","2","1","5","1","86","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA007","4","2","1","5","1","98","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA003","4","2","1","5","1","91","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA012","4","2","1","5","1","97","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA005","4","2","1","5","1","95","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA001","4","2","1","5","1","97","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA006","4","2","1","5","1","98","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA004","4","2","1","5","1","70","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA021","1","2","1","5","1","90","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA023","1","2","1","5","1","93","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA022","1","2","1","5","1","86","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA014","1","2","1","5","1","91","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA015","1","2","1","5","1","94","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA026","1","2","1","5","1","92","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA019","1","2","1","5","1","96","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA024","1","2","1","5","1","93","2020-10-15","A");
INSERT INTO calificaciones VALUES("2020MA024","1","2","2","5","1","87","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA019","1","2","2","5","1","83","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA026","1","2","2","5","1","90","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA015","1","2","2","5","1","83","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA014","1","2","2","5","1","86","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA022","1","2","2","5","1","74","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA023","1","2","2","5","1","83","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA021","1","2","2","5","1","86","2020-11-25","A");
INSERT INTO calificaciones VALUES("2020MA023","13","2","1","7","1","78","2020-10-18","A");
INSERT INTO calificaciones VALUES("2020MA022","13","2","1","7","1","91","2020-10-18","A");
INSERT INTO calificaciones VALUES("2020MA026","13","2","1","7","1","81","2020-10-18","A");
INSERT INTO calificaciones VALUES("2020MA019","13","2","1","7","1","82","2020-10-18","A");
INSERT INTO calificaciones VALUES("2020MA024","13","2","1","7","1","87","2020-10-18","A");
INSERT INTO calificaciones VALUES("2020MA015","2","2","1","7","1","97","2020-10-18","A");
INSERT INTO calificaciones VALUES("2020MA011","5","2","1","1","1","81","2020-10-19","A");
INSERT INTO calificaciones VALUES("2020MA003","14","2","1","2","1","87","2020-10-21","A");
INSERT INTO calificaciones VALUES("2020MA001","14","2","1","2","1","98","2020-10-21","A");
INSERT INTO calificaciones VALUES("2020MA002","18","2","1","4","1","100","2020-10-22","A");
INSERT INTO calificaciones VALUES("2020MA013","18","2","1","4","1","89","2020-10-22","A");
INSERT INTO calificaciones VALUES("2020MA007","18","2","1","4","1","97","2020-10-22","A");
INSERT INTO calificaciones VALUES("2020MA012","18","2","1","4","1","98","2020-10-22","A");
INSERT INTO calificaciones VALUES("2020MA005","18","2","1","4","1","90","2020-10-22","A");
INSERT INTO calificaciones VALUES("2020MA006","18","2","1","4","1","98","2020-10-22","A");
INSERT INTO calificaciones VALUES("2020MA004","18","2","1","4","1","88","2020-10-22","A");
INSERT INTO calificaciones VALUES("2020MA011","6","2","1","4","1","80","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA002","6","2","1","4","1","100","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA013","6","2","1","4","1","88","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA007","6","2","1","4","1","93","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA003","6","2","1","4","1","90","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA012","6","2","1","4","1","100","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA005","6","2","1","4","1","88","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA001","6","2","1","4","1","90","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA006","6","2","1","4","1","98","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA004","6","2","1","4","1","90","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA021","3","2","1","7","1","89","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA023","3","2","1","7","1","93","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA022","3","2","1","7","1","90","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA014","3","2","1","7","1","89","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA015","3","2","1","7","1","96","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA026","3","2","1","7","1","83","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA019","3","2","1","7","1","93","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA024","3","2","1","7","1","80","2020-10-30","A");
INSERT INTO calificaciones VALUES("2020MA021","17","2","2","5","1","88","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA014","17","2","2","5","1","87","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA011","4","2","2","5","1","90","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA002","4","2","2","5","1","97","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA013","4","2","2","5","1","85","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA007","4","2","2","5","1","98","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA003","4","2","2","5","1","94","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA012","4","2","2","5","1","98","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA005","4","2","2","5","1","98","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA001","4","2","2","5","1","99","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA006","4","2","2","5","1","98","2020-11-24","A");
INSERT INTO calificaciones VALUES("2020MA004","4","2","2","5","1","0","2020-11-24","NA");
INSERT INTO calificaciones VALUES("2020MA011","5","2","2","1","1","100","2020-11-26","A");
INSERT INTO calificaciones VALUES("2020MA023","13","2","2","7","1","93","2020-11-29","A");
INSERT INTO calificaciones VALUES("2020MA022","13","2","2","7","1","91","2020-11-29","A");
INSERT INTO calificaciones VALUES("2020MA026","13","2","2","7","1","82","2020-11-29","A");
INSERT INTO calificaciones VALUES("2020MA019","13","2","2","7","1","93","2020-11-29","A");
INSERT INTO calificaciones VALUES("2020MA024","13","2","2","7","1","81","2020-11-29","A");
INSERT INTO calificaciones VALUES("2020MA015","2","2","2","7","1","100","2020-11-29","A");
INSERT INTO calificaciones VALUES("2020MA002","18","2","2","4","1","97","2020-12-01","A");
INSERT INTO calificaciones VALUES("2020MA013","18","2","2","4","1","84","2020-12-01","A");
INSERT INTO calificaciones VALUES("2020MA007","18","2","2","4","1","99","2020-12-01","A");
INSERT INTO calificaciones VALUES("2020MA012","18","2","2","4","1","95","2020-12-01","A");
INSERT INTO calificaciones VALUES("2020MA005","18","2","2","4","1","93","2020-12-01","A");
INSERT INTO calificaciones VALUES("2020MA006","18","2","2","4","1","93","2020-12-01","A");
INSERT INTO calificaciones VALUES("2020MA004","18","2","2","4","1","86","2020-12-01","A");
INSERT INTO calificaciones VALUES("2020MA003","14","2","2","2","1","90","2020-12-04","A");
INSERT INTO calificaciones VALUES("2020MA001","14","2","2","2","1","100","2020-12-04","A");
INSERT INTO calificaciones VALUES("2020MA011","6","2","2","4","1","80","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA002","6","2","2","4","1","100","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA013","6","2","2","4","1","90","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA007","6","2","2","4","1","90","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA003","6","2","2","4","1","90","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA012","6","2","2","4","1","95","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA005","6","2","2","4","1","85","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA001","6","2","2","4","1","100","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA006","6","2","2","4","1","93","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA004","6","2","2","4","1","88","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA021","3","2","2","7","1","85","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA023","3","2","2","7","1","92","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA022","3","2","2","7","1","93","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA014","3","2","2","7","1","85","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA015","3","2","2","7","1","95","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA026","3","2","2","7","1","72","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA019","3","2","2","7","1","90","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA024","3","2","2","7","1","78","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA021","17","2","3","5","1","99","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA014","17","2","3","5","1","100","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA021","1","2","3","5","1","88","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA023","1","2","3","5","1","86","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA022","1","2","3","5","1","88","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA014","1","2","3","5","1","86","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA015","1","2","3","5","1","84","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA026","1","2","3","5","1","70","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA019","1","2","3","5","1","83","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA024","1","2","3","5","1","86","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA011","4","2","3","5","1","92","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA002","4","2","3","5","1","97","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA013","4","2","3","5","1","85","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA007","4","2","3","5","1","93","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA003","4","2","3","5","1","90","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA012","4","2","3","5","1","93","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA005","4","2","3","5","1","92","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA001","4","2","3","5","1","94","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA006","4","2","3","5","1","94","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA004","4","2","3","5","1","94","2021-01-21","A");
INSERT INTO calificaciones VALUES("2020MA011","5","2","3","1","1","90","2021-01-25","A");
INSERT INTO calificaciones VALUES("2020MA023","13","2","3","7","1","97","2021-01-26","A");
INSERT INTO calificaciones VALUES("2020MA022","13","2","3","7","1","98","2021-01-26","A");
INSERT INTO calificaciones VALUES("2020MA026","13","2","3","7","1","85","2021-01-26","A");
INSERT INTO calificaciones VALUES("2020MA019","13","2","3","7","1","96","2021-01-26","A");
INSERT INTO calificaciones VALUES("2020MA024","13","2","3","7","1","85","2021-01-26","A");
INSERT INTO calificaciones VALUES("2020MA015","2","2","3","7","1","100","2021-01-26","A");
INSERT INTO calificaciones VALUES("2020MA002","18","2","3","4","1","99","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA013","18","2","3","4","1","80","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA007","18","2","3","4","1","95","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA012","18","2","3","4","1","99","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA005","18","2","3","4","1","96","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA006","18","2","3","4","1","98","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA004","18","2","3","4","1","96","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA003","14","2","3","2","1","90","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA001","14","2","3","2","1","100","2021-01-28","A");
INSERT INTO calificaciones VALUES("2020MA011","6","2","3","4","1","80","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA002","6","2","3","4","1","100","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA013","6","2","3","4","1","83","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA007","6","2","3","4","1","95","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA003","6","2","3","4","1","90","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA012","6","2","3","4","1","100","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA005","6","2","3","4","1","90","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA001","6","2","3","4","1","100","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA006","6","2","3","4","1","100","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA004","6","2","3","4","1","90","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA021","3","2","3","7","1","80","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA023","3","2","3","7","1","90","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA022","3","2","3","7","1","95","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA014","3","2","3","7","1","80","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA015","3","2","3","7","1","100","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA026","3","2","3","7","1","80","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA019","3","2","3","7","1","90","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA024","3","2","3","7","1","80","2021-02-03","A");
INSERT INTO calificaciones VALUES("2020MA004","4","2","4","5","2","75","2021-02-11","A");
INSERT INTO calificaciones VALUES("2020MA006","19","3","1","8","1","97","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA002","19","3","1","8","1","96","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA007","19","3","1","8","1","89","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA005","19","3","1","8","1","93","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA004","19","3","1","8","1","97","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA013","19","3","1","8","1","0","2021-04-19","NP");
INSERT INTO calificaciones VALUES("2020MA012","19","3","1","8","1","87","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA022","4","3","1","5","1","90","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA019","4","3","1","5","1","89","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA014","4","3","1","5","1","88","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA021","4","3","1","5","1","88","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA015","4","3","1","5","1","87","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA026","4","3","1","5","1","0","2021-04-19","NA");
INSERT INTO calificaciones VALUES("2020MA023","4","3","1","5","1","92","2021-04-19","A");
INSERT INTO calificaciones VALUES("2020MA001","15","3","1","7","1","97","2021-04-20","A");
INSERT INTO calificaciones VALUES("2020MA003","15","3","1","7","1","93","2021-04-20","A");
INSERT INTO calificaciones VALUES("2020MA006","7","3","1","6","1","100","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA001","7","3","1","6","1","100","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA002","7","3","1","6","1","100","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA007","7","3","1","6","1","90","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA005","7","3","1","6","1","90","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA004","7","3","1","6","1","90","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA003","7","3","1","6","1","100","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA013","7","3","1","6","1","0","2021-04-22","NA");
INSERT INTO calificaciones VALUES("2020MA011","7","3","1","6","1","100","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA012","7","3","1","6","1","100","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA014","18","3","1","4","1","88","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA021","18","3","1","4","1","90","2021-04-22","A");
INSERT INTO calificaciones VALUES("2020MA015","5","3","1","1","1","91","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA022","6","3","1","4","1","90","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA019","6","3","1","4","1","95","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA014","6","3","1","4","1","94","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA021","6","3","1","4","1","85","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA015","6","3","1","4","1","72","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA026","6","3","1","4","1","70","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA023","6","3","1","4","1","100","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA011","8","3","1","9","1","100","2021-04-23","A");
INSERT INTO calificaciones VALUES("2020MA022","14","3","1","2","1","89","2021-04-24","A");
INSERT INTO calificaciones VALUES("2020MA019","14","3","1","2","1","90","2021-04-24","A");
INSERT INTO calificaciones VALUES("2020MA026","14","3","1","2","1","86","2021-04-24","A");
INSERT INTO calificaciones VALUES("2020MA023","14","3","1","2","1","92","2021-04-24","A");
INSERT INTO calificaciones VALUES("2020MA006","9","3","1","7","1","100","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA001","9","3","1","7","1","93","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA002","9","3","1","7","1","100","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA007","9","3","1","7","1","90","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA005","9","3","1","7","1","90","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA004","9","3","1","7","1","100","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA003","9","3","1","7","1","90","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA013","9","3","1","7","1","0","2021-04-27","NP");
INSERT INTO calificaciones VALUES("2020MA011","9","3","1","7","1","100","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA012","9","3","1","7","1","100","2021-04-27","A");
INSERT INTO calificaciones VALUES("2020MA006","7","3","2","6","1","100","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA001","7","3","2","6","1","95","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA002","7","3","2","6","1","100","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA007","7","3","2","6","1","100","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA005","7","3","2","6","1","100","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA004","7","3","2","6","1","100","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA003","7","3","2","6","1","95","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA013","7","3","2","6","1","0","2021-06-08","NA");
INSERT INTO calificaciones VALUES("2020MA011","7","3","2","6","1","95","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA012","7","3","2","6","1","100","2021-06-08","A");
INSERT INTO calificaciones VALUES("2020MA022","4","3","2","5","1","92","2021-06-11","A");
INSERT INTO calificaciones VALUES("2020MA019","4","3","2","5","1","90","2021-06-11","A");
INSERT INTO calificaciones VALUES("2020MA014","4","3","2","5","1","90","2021-06-11","A");
INSERT INTO calificaciones VALUES("2020MA021","4","3","2","5","1","91","2021-06-11","A");
INSERT INTO calificaciones VALUES("2020MA015","4","3","2","5","1","88","2021-06-11","A");
INSERT INTO calificaciones VALUES("2020MA026","4","3","2","5","1","82","2021-06-11","A");
INSERT INTO calificaciones VALUES("2020MA023","4","3","2","5","1","92","2021-06-11","A");
INSERT INTO calificaciones VALUES("2020MA006","19","3","2","8","1","100","2021-06-12","A");
INSERT INTO calificaciones VALUES("2020MA002","19","3","2","8","1","100","2021-06-12","A");
INSERT INTO calificaciones VALUES("2020MA007","19","3","2","8","1","95","2021-06-12","A");
INSERT INTO calificaciones VALUES("2020MA005","19","3","2","8","1","92","2021-06-12","A");
INSERT INTO calificaciones VALUES("2020MA004","19","3","2","8","1","100","2021-06-12","A");
INSERT INTO calificaciones VALUES("2020MA013","19","3","2","8","1","0","2021-06-12","NP");
INSERT INTO calificaciones VALUES("2020MA012","19","3","2","8","1","100","2021-06-12","A");
INSERT INTO calificaciones VALUES("2020MA015","5","3","2","1","1","92","2021-06-12","A");
INSERT INTO calificaciones VALUES("2020MA001","15","3","2","7","1","100","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA003","15","3","2","7","1","98","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA014","18","3","2","4","1","90","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA021","18","3","2","4","1","90","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA022","14","3","2","2","1","90","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA019","14","3","2","2","1","90","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA026","14","3","2","2","1","90","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA023","14","3","2","2","1","90","2021-06-13","A");
INSERT INTO calificaciones VALUES("2020MA011","8","3","2","9","1","100","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA022","6","3","2","4","1","90","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA019","6","3","2","4","1","90","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA014","6","3","2","4","1","93","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA021","6","3","2","4","1","91","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA015","6","3","2","4","1","90","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA026","6","3","2","4","1","90","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA023","6","3","2","4","1","95","2021-06-14","A");
INSERT INTO calificaciones VALUES("2020MA006","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA001","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA002","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA007","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA005","9","3","2","7","1","90","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA004","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA003","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA013","9","3","2","7","1","0","2021-06-15","NP");
INSERT INTO calificaciones VALUES("2020MA011","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA012","9","3","2","7","1","100","2021-06-15","A");
INSERT INTO calificaciones VALUES("2020MA022","4","3","3","5","1","98","2021-07-08","A");
INSERT INTO calificaciones VALUES("2020MA019","4","3","3","5","1","94","2021-07-08","A");
INSERT INTO calificaciones VALUES("2020MA014","4","3","3","5","1","94","2021-07-08","A");
INSERT INTO calificaciones VALUES("2020MA021","4","3","3","5","1","92","2021-07-08","A");
INSERT INTO calificaciones VALUES("2020MA015","4","3","3","5","1","90","2021-07-08","A");
INSERT INTO calificaciones VALUES("2020MA026","4","3","3","5","1","76","2021-07-08","A");
INSERT INTO calificaciones VALUES("2020MA023","4","3","3","5","1","90","2021-07-08","A");
INSERT INTO calificaciones VALUES("2020MA014","18","3","3","4","1","97","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA021","18","3","3","4","1","97","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA001","15","3","3","7","1","94","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA003","15","3","3","7","1","100","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA006","7","3","3","6","1","100","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA001","7","3","3","6","1","94","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA002","7","3","3","6","1","100","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA007","7","3","3","6","1","90","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA005","7","3","3","6","1","90","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA004","7","3","3","6","1","70","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA003","7","3","3","6","1","80","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA013","7","3","3","6","1","0","2021-07-10","NA");
INSERT INTO calificaciones VALUES("2020MA011","7","3","3","6","1","80","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA012","7","3","3","6","1","100","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA022","6","3","3","4","1","90","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA019","6","3","3","4","1","90","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA014","6","3","3","4","1","95","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA021","6","3","3","4","1","90","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA015","6","3","3","4","1","100","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA026","6","3","3","4","1","85","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA023","6","3","3","4","1","95","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA015","5","3","3","1","1","90","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA006","19","3","3","8","1","95","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA002","19","3","3","8","1","96","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA007","19","3","3","8","1","95","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA005","19","3","3","8","1","85","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA004","19","3","3","8","1","96","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA013","19","3","3","8","1","0","2021-07-10","NP");
INSERT INTO calificaciones VALUES("2020MA012","19","3","3","8","1","99","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA011","8","3","3","9","1","100","2021-07-10","A");
INSERT INTO calificaciones VALUES("2020MA022","14","3","3","2","1","90","2021-07-11","A");
INSERT INTO calificaciones VALUES("2020MA019","14","3","3","2","1","90","2021-07-11","A");
INSERT INTO calificaciones VALUES("2020MA026","14","3","3","2","1","85","2021-07-11","A");
INSERT INTO calificaciones VALUES("2020MA023","14","3","3","2","1","95","2021-07-11","A");
INSERT INTO calificaciones VALUES("2020MA006","9","3","3","7","1","100","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA001","9","3","3","7","1","97","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA002","9","3","3","7","1","100","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA007","9","3","3","7","1","100","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA005","9","3","3","7","1","90","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA004","9","3","3","7","1","100","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA003","9","3","3","7","1","100","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA013","9","3","3","7","1","0","2021-07-19","NP");
INSERT INTO calificaciones VALUES("2020MA011","9","3","3","7","1","100","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA012","9","3","3","7","1","100","2021-07-19","A");
INSERT INTO calificaciones VALUES("2020MA026","4","3","4","5","2","75","2021-08-07","A");
INSERT INTO calificaciones VALUES("2020MA013","7","3","4","6","2","90","2021-08-08","A");
INSERT INTO calificaciones VALUES("2020MA013","19","3","4","8","2","92","2021-08-11","A");
INSERT INTO calificaciones VALUES("2020MA013","9","3","4","8","2","90","2021-08-11","A");
INSERT INTO calificaciones VALUES("2020MA011","11","4","1","1","1","90","2021-10-19","A");
INSERT INTO calificaciones VALUES("2020MA003","16","4","1","2","1","100","2021-10-20","A");
INSERT INTO calificaciones VALUES("2020MA001","16","4","1","2","1","100","2021-10-20","A");
INSERT INTO calificaciones VALUES("2021MA1002","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1016","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1010","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1019","1","4","1","5","1","85","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1003","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1023","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1014","1","4","1","5","1","87","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1009","1","4","1","5","1","96","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1022","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1006","1","4","1","5","1","91","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1021","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1020","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1027","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1008","1","4","1","5","1","96","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1013","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1025","1","4","1","5","1","86","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1026","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1017","1","4","1","5","1","92","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1024","1","4","1","5","1","93","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1011","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1028","1","4","1","5","1","98","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1029","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1005","1","4","1","5","1","91","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA021","19","4","1","5","1","94","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA014","19","4","1","5","1","94","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA007","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA012","10","4","1","10","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA011","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA006","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA003","10","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA001","10","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA013","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA005","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA004","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA002","10","4","1","10","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1010","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1019","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1003","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1022","13","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1021","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1027","13","4","1","10","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2021MA1013","13","4","1","10","1","70","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA023","15","4","1","7","1","95","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA019","15","4","1","7","1","92","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA022","15","4","1","7","1","90","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA026","15","4","1","7","1","70","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA015","8","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA021","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA023","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA019","9","4","1","7","1","97","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA022","9","4","1","7","1","97","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA014","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA026","9","4","1","7","1","93","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA015","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA007","20","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA012","20","4","1","4","1","99","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA006","20","4","1","4","1","94","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA013","20","4","1","4","1","75","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA005","20","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA004","20","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA002","20","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA007","12","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA012","12","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA011","12","4","1","4","1","70","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA006","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA003","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA001","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA013","12","4","1","4","1","70","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA005","12","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA004","12","4","1","4","1","85","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA002","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones VALUES("2020MA021","7","4","1","6","1","90","2021-10-24","A");
INSERT INTO calificaciones VALUES("2020MA023","7","4","1","6","1","80","2021-10-24","A");
INSERT INTO calificaciones VALUES("2020MA019","7","4","1","6","1","96","2021-10-24","A");
INSERT INTO calificaciones VALUES("2020MA022","7","4","1","6","1","86","2021-10-24","A");
INSERT INTO calificaciones VALUES("2020MA014","7","4","1","6","1","86","2021-10-24","A");
INSERT INTO calificaciones VALUES("2020MA026","7","4","1","6","1","86","2021-10-24","A");
INSERT INTO calificaciones VALUES("2020MA015","7","4","1","6","1","80","2021-10-24","A");
INSERT INTO calificaciones VALUES("2021MA1002","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1026","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1017","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1005","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1016","2","4","1","9","1","92","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1023","2","4","1","9","1","98","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1014","2","4","1","9","1","95","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1009","2","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1006","2","4","1","9","1","92","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1020","2","4","1","9","1","92","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1008","2","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1025","2","4","1","9","1","85","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1024","2","4","1","9","1","98","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1011","2","4","1","9","1","98","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1028","2","4","1","9","1","85","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1029","2","4","1","9","1","88","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1002","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1016","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1010","3","4","1","9","1","80","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1019","3","4","1","9","1","70","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1003","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1023","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1014","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1009","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1022","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1006","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1021","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1020","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1027","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1008","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1013","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1025","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1026","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1017","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1024","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1011","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1028","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1029","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2021MA1005","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones VALUES("2020MA007","10","4","2","10","1","97","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA012","10","4","2","10","1","100","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA011","10","4","2","10","1","84","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA006","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA003","10","4","2","10","1","84","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA001","10","4","2","10","1","80","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA013","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA005","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA004","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones VALUES("2020MA002","10","4","2","10","1","100","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1010","13","4","2","10","1","93","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1019","13","4","2","10","1","97","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1003","13","4","2","10","1","89","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1022","13","4","2","10","1","98","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1021","13","4","2","10","1","94","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1027","13","4","2","10","1","98","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1013","13","4","2","10","1","75","2021-11-26","A");
INSERT INTO calificaciones VALUES("2021MA1002","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1016","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1010","3","4","2","9","1","90","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1019","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1003","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1023","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1014","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1009","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1022","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1006","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1021","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1020","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1027","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1008","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1013","3","4","2","9","1","80","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1025","3","4","2","9","1","0","2021-11-27","NP");
INSERT INTO calificaciones VALUES("2021MA1026","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1017","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1024","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1011","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1028","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1029","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1005","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1016","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1023","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1014","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1009","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1006","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1020","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1008","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1025","2","4","2","9","1","0","2021-11-27","NP");
INSERT INTO calificaciones VALUES("2021MA1024","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1011","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1028","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1029","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1002","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1016","1","4","2","5","1","97","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1010","1","4","2","5","1","95","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1019","1","4","2","5","1","92","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1003","1","4","2","5","1","92","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1023","1","4","2","5","1","96","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1014","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1009","1","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1022","1","4","2","5","1","94","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1006","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1021","1","4","2","5","1","91","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1020","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1027","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1008","1","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1013","1","4","2","5","1","94","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1025","1","4","2","5","1","91","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1026","1","4","2","5","1","96","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1017","1","4","2","5","1","92","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1024","1","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1011","1","4","2","5","1","91","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1028","1","4","2","5","1","97","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1029","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones VALUES("2021MA1005","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones VALUES("2020MA021","19","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones VALUES("2020MA014","19","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones VALUES("2020MA007","20","4","2","4","1","95","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA012","20","4","2","4","1","97","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA006","20","4","2","4","1","98","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA013","20","4","2","4","1","90","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA005","20","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA004","20","4","2","4","1","92","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA002","20","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA007","12","4","2","4","1","93","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA012","12","4","2","4","1","97","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA011","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA006","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA003","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA001","12","4","2","4","1","90","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA013","12","4","2","4","1","80","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA005","12","4","2","4","1","95","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA004","12","4","2","4","1","92","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA002","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA023","15","4","2","7","1","95","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA019","15","4","2","7","1","93","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA022","15","4","2","7","1","91","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA026","15","4","2","7","1","73","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA015","8","4","2","7","1","98","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA021","9","4","2","7","1","85","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA023","9","4","2","7","1","96","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA019","9","4","2","7","1","90","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA022","9","4","2","7","1","93","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA014","9","4","2","7","1","85","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA026","9","4","2","7","1","73","2021-11-28","A");
INSERT INTO calificaciones VALUES("2020MA015","9","4","2","7","1","98","2021-11-28","A");
INSERT INTO calificaciones VALUES("2021MA1002","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones VALUES("2021MA1026","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones VALUES("2021MA1017","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones VALUES("2021MA1005","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones VALUES("2020MA011","11","4","2","1","1","83","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA003","16","4","2","2","1","100","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA001","16","4","2","2","1","90","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA021","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA023","7","4","2","6","1","95","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA019","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA022","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA014","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA026","7","4","2","6","1","95","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA015","7","4","2","6","1","95","2021-11-30","A");
INSERT INTO calificaciones VALUES("2020MA021","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones VALUES("2020MA023","7","4","3","6","1","98","2022-01-12","A");
INSERT INTO calificaciones VALUES("2020MA019","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones VALUES("2020MA022","7","4","3","6","1","98","2022-01-12","A");
INSERT INTO calificaciones VALUES("2020MA014","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones VALUES("2020MA026","7","4","3","6","1","70","2022-01-12","A");
INSERT INTO calificaciones VALUES("2020MA015","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones VALUES("2020MA011","11","4","3","1","1","70","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1002","1","4","3","5","1","91","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1016","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1010","1","4","3","5","1","91","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1019","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1003","1","4","3","5","1","94","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1023","1","4","3","5","1","93","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1014","1","4","3","5","1","95","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1009","1","4","3","5","1","97","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1022","1","4","3","5","1","99","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1006","1","4","3","5","1","90","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1021","1","4","3","5","1","90","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1020","1","4","3","5","1","91","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1027","1","4","3","5","1","97","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1008","1","4","3","5","1","100","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1013","1","4","3","5","1","93","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1025","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1026","1","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1017","1","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1024","1","4","3","5","1","94","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1011","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1028","1","4","3","5","1","99","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1029","1","4","3","5","1","99","2022-01-18","A");
INSERT INTO calificaciones VALUES("2021MA1005","1","4","3","5","1","90","2022-01-18","A");
INSERT INTO calificaciones VALUES("2020MA021","19","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones VALUES("2020MA014","19","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones VALUES("2020MA023","15","4","3","7","1","92","2022-01-19","A");
INSERT INTO calificaciones VALUES("2020MA019","15","4","3","7","1","92","2022-01-19","A");
INSERT INTO calificaciones VALUES("2020MA022","15","4","3","7","1","89","2022-01-19","A");
INSERT INTO calificaciones VALUES("2020MA026","15","4","3","7","1","70","2022-01-19","A");
INSERT INTO calificaciones VALUES("2020MA015","8","4","3","7","1","100","2022-01-19","A");
INSERT INTO calificaciones VALUES("2021MA1016","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1023","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1014","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1009","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1006","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1020","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1008","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1025","2","4","3","9","1","0","2022-01-20","NP");
INSERT INTO calificaciones VALUES("2021MA1024","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1011","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1028","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1029","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1002","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1026","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1017","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1005","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA007","20","4","3","4","1","94","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA012","20","4","3","4","1","98","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA006","20","4","3","4","1","94","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA013","20","4","3","4","1","72","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA005","20","4","3","4","1","98","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA004","20","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA002","20","4","3","4","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA007","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA012","12","4","3","4","1","95","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA011","12","4","3","4","1","70","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA006","12","4","3","4","1","95","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA003","12","4","3","4","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA001","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA013","12","4","3","4","1","70","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA005","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA004","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA002","12","4","3","4","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA003","16","4","3","2","1","100","2022-01-20","A");
INSERT INTO calificaciones VALUES("2020MA001","16","4","3","2","1","90","2022-01-20","A");
INSERT INTO calificaciones VALUES("2021MA1010","13","4","3","10","1","93","2022-01-22","A");
INSERT INTO calificaciones VALUES("2021MA1019","13","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones VALUES("2021MA1003","13","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones VALUES("2021MA1022","13","4","3","10","1","97","2022-01-22","A");
INSERT INTO calificaciones VALUES("2021MA1021","13","4","3","10","1","97","2022-01-22","A");
INSERT INTO calificaciones VALUES("2021MA1027","13","4","3","10","1","94","2022-01-22","A");
INSERT INTO calificaciones VALUES("2021MA1013","13","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA007","10","4","3","10","1","98","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA012","10","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA011","10","4","3","10","1","85","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA006","10","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA003","10","4","3","10","1","80","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA001","10","4","3","10","1","72","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA013","10","4","3","10","1","88","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA005","10","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA004","10","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA002","10","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones VALUES("2020MA021","9","4","3","7","1","75","2022-01-27","A");
INSERT INTO calificaciones VALUES("2020MA023","9","4","3","7","1","96","2022-01-27","A");
INSERT INTO calificaciones VALUES("2020MA019","9","4","3","7","1","91","2022-01-27","A");
INSERT INTO calificaciones VALUES("2020MA022","9","4","3","7","1","90","2022-01-27","A");
INSERT INTO calificaciones VALUES("2020MA014","9","4","3","7","1","75","2022-01-27","A");
INSERT INTO calificaciones VALUES("2020MA026","9","4","3","7","1","73","2022-01-27","A");
INSERT INTO calificaciones VALUES("2020MA015","9","4","3","7","1","99","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1002","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1016","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1010","3","4","3","9","1","80","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1019","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1003","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1023","3","4","3","9","1","95","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1014","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1009","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1022","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1006","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1021","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1020","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1027","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1008","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1013","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1025","3","4","3","9","1","0","2022-01-27","NP");
INSERT INTO calificaciones VALUES("2021MA1026","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1017","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1024","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1011","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1028","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1029","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones VALUES("2021MA1005","3","4","3","9","1","100","2022-01-27","A");


DROP TABLE IF EXISTS calificaciones_gral;

CREATE ALGORITHM=UNDEFINED DEFINER=`tesi_admin`@`%` SQL SECURITY DEFINER VIEW `calificaciones_gral` AS select `calificaciones`.`matricula` AS `matricula`,`calificaciones`.`id_materia` AS `id_materia`,`calificaciones`.`id_periodo` AS `id_periodo`,`calificaciones`.`id_tipoe` AS `id_tipoe`,`calificaciones`.`id_profesor` AS `id_profesor`,`calificaciones`.`id_tipoi` AS `id_tipoi`,`calificaciones`.`calificacion` AS `calificacion`,`calificaciones`.`fecha_calificacion` AS `fecha_calificacion`,`calificaciones`.`observacion_calificacion` AS `observacion_calificacion` from `calificaciones` where (`calificaciones`.`id_periodo` = 4) order by `calificaciones`.`matricula`,`calificaciones`.`id_materia`;

INSERT INTO calificaciones_gral VALUES("2020MA001","10","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","10","4","2","10","1","80","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","10","4","3","10","1","72","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","12","4","2","4","1","90","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","16","4","1","2","1","100","2021-10-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","16","4","2","2","1","90","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA001","16","4","3","2","1","90","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","10","4","1","10","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","10","4","2","10","1","100","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","10","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","12","4","3","4","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","20","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","20","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA002","20","4","3","4","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","10","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","10","4","2","10","1","84","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","10","4","3","10","1","80","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","12","4","3","4","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","16","4","1","2","1","100","2021-10-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","16","4","2","2","1","100","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA003","16","4","3","2","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","10","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","12","4","1","4","1","85","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","12","4","2","4","1","92","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","20","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","20","4","2","4","1","92","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA004","20","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","10","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","12","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","12","4","2","4","1","95","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","20","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","20","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA005","20","4","3","4","1","98","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","10","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","12","4","1","4","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","12","4","3","4","1","95","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","20","4","1","4","1","94","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","20","4","2","4","1","98","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA006","20","4","3","4","1","94","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","10","4","2","10","1","97","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","10","4","3","10","1","98","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","12","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","12","4","2","4","1","93","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","12","4","3","4","1","90","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","20","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","20","4","2","4","1","95","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA007","20","4","3","4","1","94","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","10","4","2","10","1","84","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","10","4","3","10","1","85","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","11","4","1","1","1","90","2021-10-19","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","11","4","2","1","1","83","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","11","4","3","1","1","70","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","12","4","1","4","1","70","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","12","4","2","4","1","100","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA011","12","4","3","4","1","70","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","10","4","1","10","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","10","4","2","10","1","100","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","10","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","12","4","1","4","1","95","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","12","4","2","4","1","97","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","12","4","3","4","1","95","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","20","4","1","4","1","99","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","20","4","2","4","1","97","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA012","20","4","3","4","1","98","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","10","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","10","4","2","10","1","96","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","10","4","3","10","1","88","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","12","4","1","4","1","70","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","12","4","2","4","1","80","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","12","4","3","4","1","70","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","20","4","1","4","1","75","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","20","4","2","4","1","90","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA013","20","4","3","4","1","72","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","7","4","1","6","1","86","2021-10-24","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","9","4","2","7","1","85","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","9","4","3","7","1","75","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","19","4","1","5","1","94","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","19","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA014","19","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","7","4","1","6","1","80","2021-10-24","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","7","4","2","6","1","95","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","8","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","8","4","2","7","1","98","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","8","4","3","7","1","100","2022-01-19","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","9","4","2","7","1","98","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA015","9","4","3","7","1","99","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","7","4","1","6","1","96","2021-10-24","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","9","4","1","7","1","97","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","9","4","2","7","1","90","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","9","4","3","7","1","91","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","15","4","1","7","1","92","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","15","4","2","7","1","93","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA019","15","4","3","7","1","92","2022-01-19","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","7","4","1","6","1","90","2021-10-24","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","7","4","3","6","1","100","2022-01-12","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","9","4","2","7","1","85","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","9","4","3","7","1","75","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","19","4","1","5","1","94","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","19","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA021","19","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","7","4","1","6","1","86","2021-10-24","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","7","4","2","6","1","100","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","7","4","3","6","1","98","2022-01-12","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","9","4","1","7","1","97","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","9","4","2","7","1","93","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","9","4","3","7","1","90","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","15","4","1","7","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","15","4","2","7","1","91","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA022","15","4","3","7","1","89","2022-01-19","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","7","4","1","6","1","80","2021-10-24","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","7","4","2","6","1","95","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","7","4","3","6","1","98","2022-01-12","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","9","4","1","7","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","9","4","2","7","1","96","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","9","4","3","7","1","96","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","15","4","1","7","1","95","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","15","4","2","7","1","95","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA023","15","4","3","7","1","92","2022-01-19","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","7","4","1","6","1","86","2021-10-24","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","7","4","2","6","1","95","2021-11-30","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","7","4","3","6","1","70","2022-01-12","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","9","4","1","7","1","93","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","9","4","2","7","1","73","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","9","4","3","7","1","73","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","15","4","1","7","1","70","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","15","4","2","7","1","73","2021-11-28","A");
INSERT INTO calificaciones_gral VALUES("2020MA026","15","4","3","7","1","70","2022-01-19","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","1","4","3","5","1","91","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones_gral VALUES("2021MA1002","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","1","4","2","5","1","92","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","1","4","3","5","1","94","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","13","4","2","10","1","89","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2021MA1003","13","4","3","10","1","100","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","1","4","1","5","1","91","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","1","4","3","5","1","90","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones_gral VALUES("2021MA1005","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","1","4","1","5","1","91","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","1","4","3","5","1","90","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","2","4","1","9","1","92","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1006","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","1","4","1","5","1","96","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","1","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","1","4","3","5","1","100","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","2","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1008","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","1","4","1","5","1","96","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","1","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","1","4","3","5","1","97","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","2","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1009","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","1","4","2","5","1","95","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","1","4","3","5","1","91","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","3","4","1","9","1","80","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","3","4","2","9","1","90","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","3","4","3","9","1","80","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","13","4","2","10","1","93","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2021MA1010","13","4","3","10","1","93","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","1","4","2","5","1","91","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","2","4","1","9","1","98","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1011","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","1","4","2","5","1","94","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","1","4","3","5","1","93","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","3","4","2","9","1","80","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","13","4","1","10","1","70","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","13","4","2","10","1","75","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2021MA1013","13","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","1","4","1","5","1","87","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","1","4","3","5","1","95","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","2","4","1","9","1","95","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1014","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","1","4","2","5","1","97","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","2","4","1","9","1","92","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1016","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","1","4","1","5","1","92","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","1","4","2","5","1","92","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","1","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones_gral VALUES("2021MA1017","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","1","4","1","5","1","85","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","1","4","2","5","1","92","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","3","4","1","9","1","70","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","13","4","2","10","1","97","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2021MA1019","13","4","3","10","1","95","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","1","4","3","5","1","91","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","2","4","1","9","1","92","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1020","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","1","4","2","5","1","91","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","1","4","3","5","1","90","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","13","4","1","10","1","80","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","13","4","2","10","1","94","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2021MA1021","13","4","3","10","1","97","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","1","4","2","5","1","94","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","1","4","3","5","1","99","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","13","4","1","10","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","13","4","2","10","1","98","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2021MA1022","13","4","3","10","1","97","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","1","4","1","5","1","89","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","1","4","2","5","1","96","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","1","4","3","5","1","93","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","2","4","1","9","1","98","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1023","3","4","3","9","1","95","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","1","4","1","5","1","93","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","1","4","2","5","1","98","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","1","4","3","5","1","94","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","2","4","1","9","1","98","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1024","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1025","1","4","1","5","1","86","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1025","1","4","2","5","1","91","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1025","1","4","3","5","1","92","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1025","2","4","1","9","1","85","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1025","2","4","2","9","1","0","2021-11-27","NP");
INSERT INTO calificaciones_gral VALUES("2021MA1025","2","4","3","9","1","0","2022-01-20","NP");
INSERT INTO calificaciones_gral VALUES("2021MA1025","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1025","3","4","2","9","1","0","2021-11-27","NP");
INSERT INTO calificaciones_gral VALUES("2021MA1025","3","4","3","9","1","0","2022-01-27","NP");
INSERT INTO calificaciones_gral VALUES("2021MA1026","1","4","1","5","1","88","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","1","4","2","5","1","96","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","1","4","3","5","1","96","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","17","4","1","11","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","17","4","2","11","1","100","2021-11-29","A");
INSERT INTO calificaciones_gral VALUES("2021MA1026","17","4","3","11","1","95","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","1","4","3","5","1","97","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","3","4","1","9","1","90","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","13","4","1","10","1","100","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","13","4","2","10","1","98","2021-11-26","A");
INSERT INTO calificaciones_gral VALUES("2021MA1027","13","4","3","10","1","94","2022-01-22","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","1","4","1","5","1","98","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","1","4","2","5","1","97","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","1","4","3","5","1","99","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","2","4","1","9","1","85","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1028","3","4","3","9","1","100","2022-01-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","1","4","1","5","1","90","2021-10-21","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","1","4","2","5","1","93","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","1","4","3","5","1","99","2022-01-18","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","2","4","1","9","1","88","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","2","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","2","4","3","9","1","100","2022-01-20","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","3","4","1","9","1","100","2021-10-25","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","3","4","2","9","1","100","2021-11-27","A");
INSERT INTO calificaciones_gral VALUES("2021MA1029","3","4","3","9","1","100","2022-01-27","A");


DROP TABLE IF EXISTS carreras;

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(40) DEFAULT NULL,
  `clave_carrera` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO carreras VALUES("8","Maestria en Administracion","MA");


DROP TABLE IF EXISTS citas;

CREATE TABLE `citas` (
  `id_cita` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_fecha` int(11) DEFAULT NULL,
  `id_aspirante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `id_fecha` (`id_fecha`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO citas VALUES("036","230","1008");
INSERT INTO citas VALUES("035","161","1007");
INSERT INTO citas VALUES("034","232","1006");
INSERT INTO citas VALUES("033","226","1005");
INSERT INTO citas VALUES("032","225","1004");
INSERT INTO citas VALUES("031","217","1003");
INSERT INTO citas VALUES("030","231","1002");
INSERT INTO citas VALUES("041","211","1012");
INSERT INTO citas VALUES("050","228","1027");
INSERT INTO citas VALUES("049","266","1023");
INSERT INTO citas VALUES("048","275","1017");
INSERT INTO citas VALUES("047","213","1018");
INSERT INTO citas VALUES("046","216","1016");
INSERT INTO citas VALUES("045","208","1015");
INSERT INTO citas VALUES("044","267","1014");
INSERT INTO citas VALUES("043","250","1013");
INSERT INTO citas VALUES("042","212","1001");
INSERT INTO citas VALUES("040","201","1009");
INSERT INTO citas VALUES("038","218","1010");
INSERT INTO citas VALUES("039","229","1011");


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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO especialidad VALUES("1","8","1","Gestion del Talento Humano");
INSERT INTO especialidad VALUES("2","8","1","Desarrollo y Fortalecimiento de las Organizaciones");
INSERT INTO especialidad VALUES("3","8","1","Direccion Estrategica");


DROP TABLE IF EXISTS fecha_cita;

CREATE TABLE `fecha_cita` (
  `id_fecha` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `observaciones` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_fecha`)
) ENGINE=MyISAM AUTO_INCREMENT=280 DEFAULT CHARSET=latin1;

INSERT INTO fecha_cita VALUES("231","2021-07-02","18:00:00","");
INSERT INTO fecha_cita VALUES("230","2021-07-02","17:30:00","");
INSERT INTO fecha_cita VALUES("229","2021-07-02","17:00:00","");
INSERT INTO fecha_cita VALUES("228","2021-07-02","16:30:00","");
INSERT INTO fecha_cita VALUES("227","2021-07-02","16:00:00","");
INSERT INTO fecha_cita VALUES("226","2021-07-02","15:30:00","");
INSERT INTO fecha_cita VALUES("225","2021-07-02","15:00:00","");
INSERT INTO fecha_cita VALUES("224","2021-07-02","14:30:00","");
INSERT INTO fecha_cita VALUES("223","2021-07-02","14:00:00","");
INSERT INTO fecha_cita VALUES("222","2021-07-02","13:30:00","");
INSERT INTO fecha_cita VALUES("221","2021-07-02","13:00:00","");
INSERT INTO fecha_cita VALUES("220","2021-07-02","12:30:00","");
INSERT INTO fecha_cita VALUES("219","2021-07-02","12:00:00","");
INSERT INTO fecha_cita VALUES("218","2021-07-02","11:30:00","");
INSERT INTO fecha_cita VALUES("217","2021-07-02","11:00:00","");
INSERT INTO fecha_cita VALUES("216","2021-07-22","16:30:00","");
INSERT INTO fecha_cita VALUES("215","2021-07-22","16:00:00","");
INSERT INTO fecha_cita VALUES("214","2021-07-22","15:30:00","");
INSERT INTO fecha_cita VALUES("213","2021-07-22","15:00:00","");
INSERT INTO fecha_cita VALUES("212","2021-07-22","14:30:00","");
INSERT INTO fecha_cita VALUES("211","2021-07-22","14:00:00","");
INSERT INTO fecha_cita VALUES("210","2021-07-08","16:30:00","");
INSERT INTO fecha_cita VALUES("209","2021-07-08","16:00:00","");
INSERT INTO fecha_cita VALUES("208","2021-07-08","15:30:00","");
INSERT INTO fecha_cita VALUES("207","2021-07-08","15:00:00","");
INSERT INTO fecha_cita VALUES("206","2021-07-08","14:30:00","");
INSERT INTO fecha_cita VALUES("205","2021-07-08","14:00:00","");
INSERT INTO fecha_cita VALUES("204","2021-07-01","16:30:00","");
INSERT INTO fecha_cita VALUES("203","2021-07-01","16:00:00","");
INSERT INTO fecha_cita VALUES("202","2021-07-01","15:30:00","");
INSERT INTO fecha_cita VALUES("201","2021-07-01","15:00:00","");
INSERT INTO fecha_cita VALUES("200","2021-07-01","14:30:00","");
INSERT INTO fecha_cita VALUES("199","2021-07-01","14:00:00","");
INSERT INTO fecha_cita VALUES("123","2020-07-07","12:30:00","");
INSERT INTO fecha_cita VALUES("137","2020-07-10","15:00:00","");
INSERT INTO fecha_cita VALUES("161","2020-07-23","11:00:00","");
INSERT INTO fecha_cita VALUES("232","2021-07-02","18:30:00","");
INSERT INTO fecha_cita VALUES("233","2021-07-02","19:00:00","");
INSERT INTO fecha_cita VALUES("234","2021-07-02","19:30:00","");
INSERT INTO fecha_cita VALUES("235","2021-07-02","20:00:00","");
INSERT INTO fecha_cita VALUES("236","2021-07-02","20:30:00","");
INSERT INTO fecha_cita VALUES("237","2021-07-02","21:00:00","");
INSERT INTO fecha_cita VALUES("238","2021-07-09","11:00:00","");
INSERT INTO fecha_cita VALUES("239","2021-07-09","11:30:00","");
INSERT INTO fecha_cita VALUES("240","2021-07-09","12:00:00","");
INSERT INTO fecha_cita VALUES("241","2021-07-09","12:30:00","");
INSERT INTO fecha_cita VALUES("242","2021-07-09","13:00:00","");
INSERT INTO fecha_cita VALUES("243","2021-07-09","13:30:00","");
INSERT INTO fecha_cita VALUES("244","2021-07-09","14:00:00","");
INSERT INTO fecha_cita VALUES("245","2021-07-09","14:30:00","");
INSERT INTO fecha_cita VALUES("246","2021-07-09","15:00:00","");
INSERT INTO fecha_cita VALUES("247","2021-07-09","15:30:00","");
INSERT INTO fecha_cita VALUES("248","2021-07-09","16:00:00","");
INSERT INTO fecha_cita VALUES("249","2021-07-09","16:30:00","");
INSERT INTO fecha_cita VALUES("250","2021-07-09","17:00:00","");
INSERT INTO fecha_cita VALUES("251","2021-07-09","17:30:00","");
INSERT INTO fecha_cita VALUES("252","2021-07-09","18:00:00","");
INSERT INTO fecha_cita VALUES("253","2021-07-09","18:30:00","");
INSERT INTO fecha_cita VALUES("254","2021-07-09","19:00:00","");
INSERT INTO fecha_cita VALUES("255","2021-07-09","19:30:00","");
INSERT INTO fecha_cita VALUES("256","2021-07-09","20:00:00","");
INSERT INTO fecha_cita VALUES("257","2021-07-09","20:30:00","");
INSERT INTO fecha_cita VALUES("258","2021-07-09","21:00:00","");
INSERT INTO fecha_cita VALUES("259","2021-07-23","11:00:00","");
INSERT INTO fecha_cita VALUES("260","2021-07-23","11:30:00","");
INSERT INTO fecha_cita VALUES("261","2021-07-23","12:00:00","");
INSERT INTO fecha_cita VALUES("262","2021-07-23","12:30:00","");
INSERT INTO fecha_cita VALUES("263","2021-07-23","13:00:00","");
INSERT INTO fecha_cita VALUES("264","2021-07-23","13:30:00","");
INSERT INTO fecha_cita VALUES("265","2021-07-23","14:00:00","");
INSERT INTO fecha_cita VALUES("266","2021-07-23","14:30:00","");
INSERT INTO fecha_cita VALUES("267","2021-07-23","15:00:00","");
INSERT INTO fecha_cita VALUES("268","2021-07-23","15:30:00","");
INSERT INTO fecha_cita VALUES("269","2021-07-23","16:00:00","");
INSERT INTO fecha_cita VALUES("270","2021-07-23","16:30:00","");
INSERT INTO fecha_cita VALUES("271","2021-07-23","17:00:00","");
INSERT INTO fecha_cita VALUES("272","2021-07-23","17:30:00","");
INSERT INTO fecha_cita VALUES("273","2021-07-23","18:00:00","");
INSERT INTO fecha_cita VALUES("274","2021-07-23","18:30:00","");
INSERT INTO fecha_cita VALUES("275","2021-07-23","19:00:00","");
INSERT INTO fecha_cita VALUES("276","2021-07-23","19:30:00","");
INSERT INTO fecha_cita VALUES("277","2021-07-23","20:00:00","");
INSERT INTO fecha_cita VALUES("278","2021-07-23","20:30:00","");
INSERT INTO fecha_cita VALUES("279","2021-07-23","21:00:00","");


DROP TABLE IF EXISTS folioacta;

CREATE TABLE `folioacta` (
  `Folio` int(11) NOT NULL,
  `Grupo` varchar(10) DEFAULT NULL,
  `Materia` int(11) DEFAULT NULL,
  `Parcial` varchar(25) DEFAULT NULL,
  `Maestro` int(11) DEFAULT NULL,
  `Periodo` varchar(25) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`Folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO folioacta VALUES("0","0","0","1","6","Pruba_1","1");
INSERT INTO folioacta VALUES("1","1","1","1","5","1","1");
INSERT INTO folioacta VALUES("2","1","2","1","1","1","1");
INSERT INTO folioacta VALUES("3","1","13","1","2","1","1");
INSERT INTO folioacta VALUES("4","1","17","1","4","1","1");
INSERT INTO folioacta VALUES("5","1","3","1","4","1","1");
INSERT INTO folioacta VALUES("6","1","2","2","1","1","1");
INSERT INTO folioacta VALUES("7","1","17","2","4","1","1");
INSERT INTO folioacta VALUES("8","1","3","2","4","1","1");
INSERT INTO folioacta VALUES("9","1","1","2","5","1","1");
INSERT INTO folioacta VALUES("10","1","13","2","2","1","1");
INSERT INTO folioacta VALUES("11","1","2","3","1","1","1");
INSERT INTO folioacta VALUES("12","1","1","3","5","1","1");
INSERT INTO folioacta VALUES("13","1","13","3","2","1","1");
INSERT INTO folioacta VALUES("14","1","17","3","4","1","1");
INSERT INTO folioacta VALUES("15","1","3","3","4","1","1");
INSERT INTO folioacta VALUES("16","1","17","1","5","2","1");
INSERT INTO folioacta VALUES("17","2","4","1","5","2","1");
INSERT INTO folioacta VALUES("18","1","1","1","5","2","1");
INSERT INTO folioacta VALUES("19","1","1","1","5","2","1");
INSERT INTO folioacta VALUES("20","1","13","1","7","2","1");
INSERT INTO folioacta VALUES("21","1","2","1","7","2","1");
INSERT INTO folioacta VALUES("22","2","5","1","1","2","1");
INSERT INTO folioacta VALUES("23","2","14","1","2","2","1");
INSERT INTO folioacta VALUES("24","2","18","1","4","2","1");
INSERT INTO folioacta VALUES("25","2","6","1","4","2","1");
INSERT INTO folioacta VALUES("26","1","3","1","7","2","1");
INSERT INTO folioacta VALUES("27","1","17","2","5","2","1");
INSERT INTO folioacta VALUES("28","2","4","2","5","2","1");
INSERT INTO folioacta VALUES("29","1","1","2","5","2","1");
INSERT INTO folioacta VALUES("30","2","5","2","1","2","1");
INSERT INTO folioacta VALUES("31","1","13","2","7","2","1");
INSERT INTO folioacta VALUES("32","1","2","2","7","2","1");
INSERT INTO folioacta VALUES("33","2","18","2","4","2","1");
INSERT INTO folioacta VALUES("34","2","14","2","2","2","1");
INSERT INTO folioacta VALUES("35","2","6","2","4","2","1");
INSERT INTO folioacta VALUES("36","1","3","2","7","2","1");
INSERT INTO folioacta VALUES("37","1","17","3","5","2","1");
INSERT INTO folioacta VALUES("38","1","1","3","5","2","1");
INSERT INTO folioacta VALUES("39","2","4","3","5","2","1");
INSERT INTO folioacta VALUES("40","2","5","3","1","2","1");
INSERT INTO folioacta VALUES("41","1","13","3","7","2","1");
INSERT INTO folioacta VALUES("42","1","2","3","7","2","1");
INSERT INTO folioacta VALUES("43","2","18","3","4","2","1");
INSERT INTO folioacta VALUES("44","2","14","3","2","2","1");
INSERT INTO folioacta VALUES("45","2","6","3","4","2","1");
INSERT INTO folioacta VALUES("46","1","3","3","7","2","1");
INSERT INTO folioacta VALUES("47","3","19","1","8","3","1");
INSERT INTO folioacta VALUES("48","2","4","1","5","3","1");
INSERT INTO folioacta VALUES("49","3","15","1","7","3","1");
INSERT INTO folioacta VALUES("50","3","7","1","6","3","1");
INSERT INTO folioacta VALUES("51","2","18","1","4","3","1");
INSERT INTO folioacta VALUES("52","2","5","1","1","3","1");
INSERT INTO folioacta VALUES("53","2","6","1","4","3","1");
INSERT INTO folioacta VALUES("54","3","8","1","9","3","1");
INSERT INTO folioacta VALUES("55","2","14","1","2","3","1");
INSERT INTO folioacta VALUES("56","3","9","1","7","3","1");
INSERT INTO folioacta VALUES("57","3","7","2","6","3","1");
INSERT INTO folioacta VALUES("58","2","4","2","5","3","1");
INSERT INTO folioacta VALUES("59","3","19","2","8","3","1");
INSERT INTO folioacta VALUES("60","2","5","2","1","3","1");
INSERT INTO folioacta VALUES("61","3","15","2","7","3","1");
INSERT INTO folioacta VALUES("62","2","18","2","4","3","1");
INSERT INTO folioacta VALUES("63","2","14","2","2","3","1");
INSERT INTO folioacta VALUES("64","3","8","2","9","3","1");
INSERT INTO folioacta VALUES("65","2","6","2","4","3","1");
INSERT INTO folioacta VALUES("66","3","9","2","7","3","1");
INSERT INTO folioacta VALUES("67","2","4","3","5","3","1");
INSERT INTO folioacta VALUES("68","2","18","3","4","3","1");
INSERT INTO folioacta VALUES("69","3","15","3","7","3","1");
INSERT INTO folioacta VALUES("70","3","7","3","6","3","1");
INSERT INTO folioacta VALUES("71","2","6","3","4","3","1");
INSERT INTO folioacta VALUES("72","2","5","3","1","3","1");
INSERT INTO folioacta VALUES("73","3","19","3","8","3","1");
INSERT INTO folioacta VALUES("74","3","8","3","9","3","1");
INSERT INTO folioacta VALUES("75","2","14","3","2","3","1");
INSERT INTO folioacta VALUES("76","3","9","3","7","3","1");
INSERT INTO folioacta VALUES("77","4","11","1","1","4","1");
INSERT INTO folioacta VALUES("78","4","16","1","2","4","1");
INSERT INTO folioacta VALUES("79","1","1","1","5","4","1");
INSERT INTO folioacta VALUES("80","3","19","1","5","4","1");
INSERT INTO folioacta VALUES("81","4","10","1","10","4","1");
INSERT INTO folioacta VALUES("82","1","13","1","10","4","1");
INSERT INTO folioacta VALUES("83","3","15","1","7","4","1");
INSERT INTO folioacta VALUES("84","3","8","1","7","4","1");
INSERT INTO folioacta VALUES("85","3","9","1","7","4","1");
INSERT INTO folioacta VALUES("86","4","20","1","4","4","1");
INSERT INTO folioacta VALUES("87","4","12","1","4","4","1");
INSERT INTO folioacta VALUES("88","3","7","1","6","4","1");
INSERT INTO folioacta VALUES("89","1","17","1","11","4","1");
INSERT INTO folioacta VALUES("90","1","2","1","9","4","1");
INSERT INTO folioacta VALUES("91","1","3","1","9","4","1");
INSERT INTO folioacta VALUES("92","4","10","2","10","4","1");
INSERT INTO folioacta VALUES("93","1","13","2","10","4","1");
INSERT INTO folioacta VALUES("94","1","3","2","9","4","1");
INSERT INTO folioacta VALUES("95","1","2","2","9","4","1");
INSERT INTO folioacta VALUES("96","1","1","2","5","4","1");
INSERT INTO folioacta VALUES("97","3","19","2","5","4","1");
INSERT INTO folioacta VALUES("98","4","20","2","4","4","1");
INSERT INTO folioacta VALUES("99","4","12","2","4","4","1");
INSERT INTO folioacta VALUES("100","3","15","2","7","4","1");
INSERT INTO folioacta VALUES("101","3","8","2","7","4","1");
INSERT INTO folioacta VALUES("102","3","9","2","7","4","1");
INSERT INTO folioacta VALUES("103","1","17","2","11","4","1");
INSERT INTO folioacta VALUES("104","4","11","2","1","4","1");
INSERT INTO folioacta VALUES("105","4","16","2","2","4","1");
INSERT INTO folioacta VALUES("106","3","7","2","6","4","1");
INSERT INTO folioacta VALUES("107","3","7","3","6","4","1");
INSERT INTO folioacta VALUES("108","4","11","3","1","4","1");
INSERT INTO folioacta VALUES("109","1","1","3","5","4","1");
INSERT INTO folioacta VALUES("110","3","19","3","5","4","1");
INSERT INTO folioacta VALUES("111","3","15","3","7","4","1");
INSERT INTO folioacta VALUES("112","3","8","3","7","4","1");
INSERT INTO folioacta VALUES("113","1","2","3","9","4","1");
INSERT INTO folioacta VALUES("114","1","17","3","11","4","1");
INSERT INTO folioacta VALUES("115","4","20","3","4","4","1");
INSERT INTO folioacta VALUES("116","4","12","3","4","4","1");
INSERT INTO folioacta VALUES("117","4","16","3","2","4","1");
INSERT INTO folioacta VALUES("118","1","13","3","10","4","1");
INSERT INTO folioacta VALUES("119","4","10","3","10","4","1");
INSERT INTO folioacta VALUES("120","3","9","3","7","4","1");
INSERT INTO folioacta VALUES("121","1","3","3","9","4","1");


DROP TABLE IF EXISTS folios;

CREATE TABLE `folios` (
  `id_folio` int(3) NOT NULL AUTO_INCREMENT,
  `folio_aspirante` int(3) unsigned zerofill DEFAULT NULL,
  `estatus_aspirante` tinyint(4) DEFAULT NULL,
  `matricula` varchar(10) DEFAULT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `id_turno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_folio`),
  KEY `folio_aspirante` (`folio_aspirante`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

INSERT INTO folios VALUES("11","012","1","2020MA012","1","3");
INSERT INTO folios VALUES("12","013","1","2020MA013","1","3");
INSERT INTO folios VALUES("13","001","1","2020MA001","1","3");
INSERT INTO folios VALUES("14","002","1","2020MA002","1","3");
INSERT INTO folios VALUES("15","003","1","2020MA003","1","3");
INSERT INTO folios VALUES("16","004","1","2020MA004","1","3");
INSERT INTO folios VALUES("17","005","1","2020MA005","1","3");
INSERT INTO folios VALUES("18","006","1","2020MA006","1","3");
INSERT INTO folios VALUES("19","007","1","2020MA007","1","3");
INSERT INTO folios VALUES("20","009","1","2020MA009","1","3");
INSERT INTO folios VALUES("22","011","1","2020MA011","1","3");
INSERT INTO folios VALUES("23","014","1","2020MA014","1","3");
INSERT INTO folios VALUES("24","015","1","2020MA015","1","3");
INSERT INTO folios VALUES("25","019","1","2020MA019","1","3");
INSERT INTO folios VALUES("26","021","1","2020MA021","1","3");
INSERT INTO folios VALUES("27","023","1","2020MA023","1","3");
INSERT INTO folios VALUES("28","024","1","2020MA024","1","3");
INSERT INTO folios VALUES("29","026","1","2020MA026","1","3");
INSERT INTO folios VALUES("30","022","1","2020MA022","1","3");
INSERT INTO folios VALUES("31","1002","1","2021MA1002","1","3");
INSERT INTO folios VALUES("32","1003","1","2021MA1003","1","3");
INSERT INTO folios VALUES("33","1005","1","2021MA1005","1","3");
INSERT INTO folios VALUES("34","1006","1","2021MA1006","1","3");
INSERT INTO folios VALUES("35","1008","1","2021MA1008","1","3");
INSERT INTO folios VALUES("36","1009","1","2021MA1009","1","3");
INSERT INTO folios VALUES("37","1010","1","2021MA1010","1","3");
INSERT INTO folios VALUES("38","1011","1","2021MA1011","1","3");
INSERT INTO folios VALUES("39","1013","1","2021MA1013","1","3");
INSERT INTO folios VALUES("40","1014","1","2021MA1014","1","3");
INSERT INTO folios VALUES("41","1016","1","2021MA1016","1","3");
INSERT INTO folios VALUES("42","1017","1","2021MA1017","1","3");
INSERT INTO folios VALUES("43","1019","1","2021MA1019","1","3");
INSERT INTO folios VALUES("44","1020","1","2021MA1020","1","3");
INSERT INTO folios VALUES("45","1021","1","2021MA1021","1","3");
INSERT INTO folios VALUES("46","1022","1","2021MA1022","1","3");
INSERT INTO folios VALUES("47","1024","1","2021MA1024","1","3");
INSERT INTO folios VALUES("48","1023","1","2021MA1023","1","3");
INSERT INTO folios VALUES("49","1025","1","2021MA1025","1","3");
INSERT INTO folios VALUES("50","1026","1","2021MA1026","1","3");
INSERT INTO folios VALUES("51","1027","1","2021MA1027","1","3");
INSERT INTO folios VALUES("52","1028","1","2021MA1028","1","3");
INSERT INTO folios VALUES("53","1029","1","2021MA1029","1","3");


DROP TABLE IF EXISTS grupos;

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `clave_grupo` varchar(10) DEFAULT NULL,
  `estado_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO grupos VALUES("1","8101","1");
INSERT INTO grupos VALUES("2","8201","1");
INSERT INTO grupos VALUES("3","8301","1");
INSERT INTO grupos VALUES("4","8401","1");


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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO imparte VALUES("1","5","1","1","1","1","1");
INSERT INTO imparte VALUES("2","4","17","1","1","1","1");
INSERT INTO imparte VALUES("3","4","3","1","1","1","1");
INSERT INTO imparte VALUES("4","2","13","1","1","1","1");
INSERT INTO imparte VALUES("5","2","3","1","1","1","1");
INSERT INTO imparte VALUES("6","1","2","1","1","1","1");
INSERT INTO imparte VALUES("7","1","3","1","1","1","1");
INSERT INTO imparte VALUES("8","1","5","2","2","1","1");
INSERT INTO imparte VALUES("9","1","6","2","2","1","1");
INSERT INTO imparte VALUES("10","4","18","2","2","1","1");
INSERT INTO imparte VALUES("11","4","6","2","2","1","1");
INSERT INTO imparte VALUES("12","5","17","1","2","1","1");
INSERT INTO imparte VALUES("13","5","1","1","2","1","1");
INSERT INTO imparte VALUES("14","5","3","1","2","1","1");
INSERT INTO imparte VALUES("15","5","4","2","2","1","1");
INSERT INTO imparte VALUES("16","2","14","2","2","1","1");
INSERT INTO imparte VALUES("17","2","6","2","2","1","1");
INSERT INTO imparte VALUES("18","7","13","1","2","1","1");
INSERT INTO imparte VALUES("19","7","2","1","2","1","1");
INSERT INTO imparte VALUES("20","7","3","1","2","1","1");
INSERT INTO imparte VALUES("22","5","4","2","2","2","1");
INSERT INTO imparte VALUES("23","2","14","2","3","1","1");
INSERT INTO imparte VALUES("24","4","18","2","3","1","1");
INSERT INTO imparte VALUES("25","1","5","2","3","1","1");
INSERT INTO imparte VALUES("26","5","4","2","3","1","1");
INSERT INTO imparte VALUES("27","4","6","2","3","1","1");
INSERT INTO imparte VALUES("28","7","15","3","3","1","1");
INSERT INTO imparte VALUES("29","8","19","3","3","1","1");
INSERT INTO imparte VALUES("34","9","8","3","3","1","1");
INSERT INTO imparte VALUES("31","6","7","3","3","1","1");
INSERT INTO imparte VALUES("33","7","9","3","3","1","1");
INSERT INTO imparte VALUES("35","1","1","1","3","1","1");
INSERT INTO imparte VALUES("36","6","7","3","3","2","1");
INSERT INTO imparte VALUES("37","8","19","3","3","2","1");
INSERT INTO imparte VALUES("38","8","9","3","3","2","1");
INSERT INTO imparte VALUES("39","6","7","3","4","1","1");
INSERT INTO imparte VALUES("40","7","15","3","4","1","1");
INSERT INTO imparte VALUES("41","7","8","3","4","1","1");
INSERT INTO imparte VALUES("42","7","9","3","4","1","1");
INSERT INTO imparte VALUES("43","1","11","4","4","1","1");
INSERT INTO imparte VALUES("44","9","2","1","4","1","1");
INSERT INTO imparte VALUES("45","5","1","1","4","1","1");
INSERT INTO imparte VALUES("46","5","19","3","4","1","1");
INSERT INTO imparte VALUES("47","2","16","4","4","1","1");
INSERT INTO imparte VALUES("48","4","20","4","4","1","1");
INSERT INTO imparte VALUES("49","4","12","4","4","1","1");
INSERT INTO imparte VALUES("50","9","3","1","4","1","1");
INSERT INTO imparte VALUES("52","10","10","4","4","1","1");
INSERT INTO imparte VALUES("53","10","13","1","4","1","1");
INSERT INTO imparte VALUES("54","11","17","1","4","1","1");


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
  `id_carrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `matricula` (`matricula`),
  KEY `id_materia` (`id_materia`),
  KEY `id_periodo` (`id_periodo`),
  KEY `id_tipoi` (`id_tipoi`)
) ENGINE=MyISAM AUTO_INCREMENT=268 DEFAULT CHARSET=latin1;

INSERT INTO inscripciones VALUES("41","2020MA011","5","2","2","1","2020-08-27","2","8");
INSERT INTO inscripciones VALUES("40","2020MA011","4","2","2","1","2020-08-27","2","8");
INSERT INTO inscripciones VALUES("39","2020MA021","17","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("4","2020MA012","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("5","2020MA012","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("6","2020MA012","17","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("7","2020MA003","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("8","2020MA003","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("9","2020MA003","13","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("10","2020MA002","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("11","2020MA002","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("12","2020MA002","17","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("13","2020MA013","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("14","2020MA013","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("15","2020MA013","17","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("16","2020MA004","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("17","2020MA004","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("18","2020MA004","17","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("19","2020MA007","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("20","2020MA007","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("21","2020MA007","17","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("22","2020MA011","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("23","2020MA011","2","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("24","2020MA011","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("25","2020MA001","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("26","2020MA001","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("27","2020MA001","13","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("37","2020MA021","1","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("38","2020MA021","3","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("31","2020MA005","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("32","2020MA005","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("33","2020MA005","17","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("34","2020MA006","1","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("35","2020MA006","3","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("36","2020MA006","17","1","1","1","2020-04-02","1","8");
INSERT INTO inscripciones VALUES("42","2020MA011","6","2","2","1","2020-08-27","2","8");
INSERT INTO inscripciones VALUES("43","2020MA023","1","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("44","2020MA023","3","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("45","2020MA023","13","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("46","2020MA002","4","2","2","1","2020-08-27","2","8");
INSERT INTO inscripciones VALUES("47","2020MA002","6","2","2","1","2020-08-27","2","8");
INSERT INTO inscripciones VALUES("48","2020MA002","18","2","2","1","2020-08-27","2","8");
INSERT INTO inscripciones VALUES("49","2020MA022","1","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("50","2020MA022","3","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("51","2020MA022","13","1","2","1","2020-08-27","1","8");
INSERT INTO inscripciones VALUES("52","2020MA014","1","1","2","1","2020-08-28","1","8");
INSERT INTO inscripciones VALUES("53","2020MA014","3","1","2","1","2020-08-28","1","8");
INSERT INTO inscripciones VALUES("54","2020MA014","17","1","2","1","2020-08-28","1","8");
INSERT INTO inscripciones VALUES("55","2020MA013","4","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("56","2020MA013","6","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("57","2020MA013","18","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("58","2020MA007","4","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("59","2020MA007","6","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("60","2020MA007","18","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("61","2020MA003","4","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("62","2020MA003","6","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("63","2020MA003","14","2","2","1","2020-08-28","2","8");
INSERT INTO inscripciones VALUES("64","2020MA012","4","2","2","1","2020-08-29","2","8");
INSERT INTO inscripciones VALUES("65","2020MA012","6","2","2","1","2020-08-29","2","8");
INSERT INTO inscripciones VALUES("66","2020MA012","18","2","2","1","2020-08-29","2","8");
INSERT INTO inscripciones VALUES("67","2020MA015","1","1","2","1","2020-08-29","1","8");
INSERT INTO inscripciones VALUES("68","2020MA015","2","1","2","1","2020-08-29","1","8");
INSERT INTO inscripciones VALUES("69","2020MA015","3","1","2","1","2020-08-29","1","8");
INSERT INTO inscripciones VALUES("70","2020MA026","1","1","2","1","2020-08-31","1","8");
INSERT INTO inscripciones VALUES("71","2020MA026","3","1","2","1","2020-08-31","1","8");
INSERT INTO inscripciones VALUES("72","2020MA026","13","1","2","1","2020-08-31","1","8");
INSERT INTO inscripciones VALUES("73","2020MA005","4","2","2","1","2020-09-01","2","8");
INSERT INTO inscripciones VALUES("74","2020MA005","18","2","2","1","2020-09-01","2","8");
INSERT INTO inscripciones VALUES("75","2020MA005","6","2","2","1","2020-09-01","2","8");
INSERT INTO inscripciones VALUES("76","2020MA001","4","2","2","1","2020-09-02","2","8");
INSERT INTO inscripciones VALUES("77","2020MA001","6","2","2","1","2020-09-02","2","8");
INSERT INTO inscripciones VALUES("78","2020MA001","14","2","2","1","2020-09-02","2","8");
INSERT INTO inscripciones VALUES("79","2020MA019","1","1","2","1","2020-09-03","1","8");
INSERT INTO inscripciones VALUES("80","2020MA019","3","1","2","1","2020-09-03","1","8");
INSERT INTO inscripciones VALUES("81","2020MA019","13","1","2","1","2020-09-03","1","8");
INSERT INTO inscripciones VALUES("82","2020MA006","4","2","2","1","2020-09-03","2","8");
INSERT INTO inscripciones VALUES("83","2020MA006","6","2","2","1","2020-09-03","2","8");
INSERT INTO inscripciones VALUES("84","2020MA006","18","2","2","1","2020-09-03","2","8");
INSERT INTO inscripciones VALUES("85","2020MA004","4","2","2","1","2020-09-04","2","8");
INSERT INTO inscripciones VALUES("86","2020MA004","6","2","2","1","2020-09-04","2","8");
INSERT INTO inscripciones VALUES("87","2020MA004","18","2","2","1","2020-09-04","2","8");
INSERT INTO inscripciones VALUES("88","2020MA024","1","1","2","1","2020-10-15","1","8");
INSERT INTO inscripciones VALUES("89","2020MA024","3","1","2","1","2020-10-15","1","8");
INSERT INTO inscripciones VALUES("90","2020MA024","13","1","2","1","2020-10-15","1","8");
INSERT INTO inscripciones VALUES("92","2020MA004","4","2","2","2","2021-02-11","2","8");
INSERT INTO inscripciones VALUES("93","2020MA006","7","3","3","1","2021-02-24","3","8");
INSERT INTO inscripciones VALUES("94","2020MA006","9","3","3","1","2021-02-24","3","8");
INSERT INTO inscripciones VALUES("95","2020MA006","19","3","3","1","2021-02-24","3","8");
INSERT INTO inscripciones VALUES("96","2020MA022","4","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("97","2020MA022","6","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("98","2020MA022","14","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("99","2020MA019","4","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("100","2020MA019","6","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("101","2020MA019","14","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("102","2020MA001","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("103","2020MA001","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("104","2020MA001","15","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("105","2020MA014","4","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("106","2020MA014","6","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("107","2020MA014","18","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("108","2020MA021","4","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("109","2020MA021","6","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("110","2020MA021","18","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("111","2020MA002","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("112","2020MA002","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("113","2020MA002","19","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("114","2020MA007","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("115","2020MA007","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("116","2020MA007","19","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("117","2020MA005","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("118","2020MA005","19","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("119","2020MA005","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("120","2020MA004","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("121","2020MA004","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("122","2020MA004","19","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("123","2020MA003","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("124","2020MA003","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("125","2020MA003","15","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("126","2020MA015","4","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("127","2020MA015","5","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("128","2020MA015","6","2","3","1","2021-02-27","2","8");
INSERT INTO inscripciones VALUES("129","2020MA013","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("130","2020MA013","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("131","2020MA013","19","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("132","2020MA011","7","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("133","2020MA011","8","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("134","2020MA011","9","3","3","1","2021-02-27","3","8");
INSERT INTO inscripciones VALUES("135","2020MA026","4","2","3","1","2021-02-28","2","8");
INSERT INTO inscripciones VALUES("136","2020MA026","6","2","3","1","2021-02-28","2","8");
INSERT INTO inscripciones VALUES("137","2020MA026","14","2","3","1","2021-02-28","2","8");
INSERT INTO inscripciones VALUES("138","2020MA023","4","2","3","1","2021-03-01","2","8");
INSERT INTO inscripciones VALUES("139","2020MA023","6","2","3","1","2021-03-01","2","8");
INSERT INTO inscripciones VALUES("140","2020MA023","14","2","3","1","2021-03-01","2","8");
INSERT INTO inscripciones VALUES("141","2020MA012","7","3","3","1","2021-03-01","3","8");
INSERT INTO inscripciones VALUES("142","2020MA012","9","3","3","1","2021-03-01","3","8");
INSERT INTO inscripciones VALUES("143","2020MA012","19","3","3","1","2021-03-01","3","8");
INSERT INTO inscripciones VALUES("144","2020MA013","7","3","3","2","2021-07-29","3","8");
INSERT INTO inscripciones VALUES("145","2020MA013","19","3","3","2","2021-07-29","3","8");
INSERT INTO inscripciones VALUES("146","2020MA013","9","3","3","2","2021-07-29","3","8");
INSERT INTO inscripciones VALUES("147","2020MA026","4","2","3","2","2021-07-29","2","8");
INSERT INTO inscripciones VALUES("148","2021MA1002","1","1","4","1","2021-08-18","1","8");
INSERT INTO inscripciones VALUES("149","2021MA1002","3","1","4","1","2021-08-18","1","8");
INSERT INTO inscripciones VALUES("150","2021MA1002","17","1","4","1","2021-08-18","1","8");
INSERT INTO inscripciones VALUES("151","2021MA1016","1","1","4","1","2021-08-18","1","8");
INSERT INTO inscripciones VALUES("152","2021MA1016","2","1","4","1","2021-08-18","1","8");
INSERT INTO inscripciones VALUES("153","2021MA1016","3","1","4","1","2021-08-18","1","8");
INSERT INTO inscripciones VALUES("154","2020MA007","10","4","4","1","2021-08-19","4","8");
INSERT INTO inscripciones VALUES("155","2020MA007","12","4","4","1","2021-08-19","4","8");
INSERT INTO inscripciones VALUES("156","2020MA007","20","4","4","1","2021-08-19","4","8");
INSERT INTO inscripciones VALUES("157","2020MA021","7","3","4","1","2021-08-19","3","8");
INSERT INTO inscripciones VALUES("158","2020MA021","9","3","4","1","2021-08-19","3","8");
INSERT INTO inscripciones VALUES("159","2020MA021","19","3","4","1","2021-08-19","3","8");
INSERT INTO inscripciones VALUES("160","2020MA023","9","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("161","2020MA023","15","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("162","2020MA023","7","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("163","2020MA019","7","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("164","2020MA019","9","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("165","2020MA019","15","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("166","2020MA022","7","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("167","2020MA022","9","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("168","2020MA022","15","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("169","2020MA012","10","4","4","1","2021-08-20","4","8");
INSERT INTO inscripciones VALUES("170","2020MA012","12","4","4","1","2021-08-20","4","8");
INSERT INTO inscripciones VALUES("171","2020MA012","20","4","4","1","2021-08-20","4","8");
INSERT INTO inscripciones VALUES("172","2020MA014","7","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("173","2020MA014","9","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("174","2020MA014","19","3","4","1","2021-08-20","3","8");
INSERT INTO inscripciones VALUES("175","2021MA1010","1","1","4","1","2021-08-20","1","8");
INSERT INTO inscripciones VALUES("176","2021MA1010","3","1","4","1","2021-08-20","1","8");
INSERT INTO inscripciones VALUES("177","2021MA1010","13","1","4","1","2021-08-20","1","8");
INSERT INTO inscripciones VALUES("178","2020MA026","7","3","4","1","2021-08-23","3","8");
INSERT INTO inscripciones VALUES("179","2020MA026","9","3","4","1","2021-08-23","3","8");
INSERT INTO inscripciones VALUES("180","2020MA026","15","3","4","1","2021-08-23","3","8");
INSERT INTO inscripciones VALUES("181","2020MA011","10","4","4","1","2021-08-24","4","8");
INSERT INTO inscripciones VALUES("182","2020MA011","11","4","4","1","2021-08-24","4","8");
INSERT INTO inscripciones VALUES("183","2020MA011","12","4","4","1","2021-08-24","4","8");
INSERT INTO inscripciones VALUES("184","2020MA006","10","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("185","2020MA006","12","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("186","2020MA006","20","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("187","2020MA003","10","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("188","2020MA003","12","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("189","2020MA003","16","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("190","2020MA001","10","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("191","2020MA001","12","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("192","2020MA001","16","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("193","2021MA1019","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("194","2021MA1019","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("195","2021MA1019","13","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("196","2021MA1003","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("197","2021MA1003","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("198","2021MA1003","13","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("199","2021MA1023","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("200","2021MA1023","2","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("201","2021MA1023","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("202","2021MA1014","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("203","2021MA1014","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("204","2021MA1014","2","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("205","2021MA1009","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("206","2021MA1009","2","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("207","2021MA1009","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("208","2021MA1022","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("209","2021MA1022","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("210","2021MA1022","13","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("211","2020MA013","10","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("212","2020MA013","12","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("213","2020MA013","20","4","4","1","2021-09-02","4","8");
INSERT INTO inscripciones VALUES("214","2021MA1006","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("215","2021MA1006","2","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("216","2021MA1006","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("217","2021MA1021","1","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("218","2021MA1021","3","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("219","2021MA1021","13","1","4","1","2021-09-02","1","8");
INSERT INTO inscripciones VALUES("220","2021MA1020","3","1","4","1","2021-09-03","1","8");
INSERT INTO inscripciones VALUES("221","2021MA1020","1","1","4","1","2021-09-03","1","8");
INSERT INTO inscripciones VALUES("222","2021MA1020","2","1","4","1","2021-09-03","1","8");
INSERT INTO inscripciones VALUES("223","2020MA005","10","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("224","2020MA005","12","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("225","2020MA005","20","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("226","2020MA004","10","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("227","2020MA004","12","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("228","2020MA004","20","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("229","2021MA1027","1","1","4","1","2021-09-03","1","8");
INSERT INTO inscripciones VALUES("230","2021MA1027","3","1","4","1","2021-09-03","1","8");
INSERT INTO inscripciones VALUES("231","2021MA1027","13","1","4","1","2021-09-03","1","8");
INSERT INTO inscripciones VALUES("232","2020MA002","10","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("233","2020MA002","12","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("234","2020MA002","20","4","4","1","2021-09-03","4","8");
INSERT INTO inscripciones VALUES("235","2020MA015","7","3","4","1","2021-09-05","3","8");
INSERT INTO inscripciones VALUES("236","2020MA015","8","3","4","1","2021-09-05","3","8");
INSERT INTO inscripciones VALUES("237","2020MA015","9","3","4","1","2021-09-05","3","8");
INSERT INTO inscripciones VALUES("238","2021MA1008","1","1","4","1","2021-09-05","1","8");
INSERT INTO inscripciones VALUES("239","2021MA1008","2","1","4","1","2021-09-05","1","8");
INSERT INTO inscripciones VALUES("240","2021MA1008","3","1","4","1","2021-09-05","1","8");
INSERT INTO inscripciones VALUES("241","2021MA1013","1","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("242","2021MA1013","3","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("243","2021MA1013","13","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("244","2021MA1025","1","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("245","2021MA1025","2","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("246","2021MA1025","3","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("247","2021MA1026","1","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("248","2021MA1026","17","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("249","2021MA1026","3","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("250","2021MA1017","1","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("251","2021MA1017","3","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("252","2021MA1017","17","1","4","1","2021-09-07","1","8");
INSERT INTO inscripciones VALUES("253","2021MA1024","1","1","4","1","2021-09-08","1","8");
INSERT INTO inscripciones VALUES("254","2021MA1024","2","1","4","1","2021-09-08","1","8");
INSERT INTO inscripciones VALUES("255","2021MA1024","3","1","4","1","2021-09-08","1","8");
INSERT INTO inscripciones VALUES("256","2021MA1011","2","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("257","2021MA1011","1","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("258","2021MA1011","3","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("259","2021MA1028","1","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("260","2021MA1028","3","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("261","2021MA1028","2","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("262","2021MA1029","1","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("263","2021MA1029","2","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("264","2021MA1029","3","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("265","2021MA1005","1","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("266","2021MA1005","17","1","4","1","2021-09-09","1","8");
INSERT INTO inscripciones VALUES("267","2021MA1005","3","1","4","1","2021-09-09","1","8");


DROP TABLE IF EXISTS kardex;

CREATE TABLE `kardex` (
  `id_kardex` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(10) DEFAULT NULL,
  `asignatura` varchar(10) DEFAULT NULL,
  `periodo_def` varchar(10) DEFAULT NULL,
  `definitiva` int(11) DEFAULT NULL,
  `recursamiento` int(11) DEFAULT NULL,
  `periodo_rec` varchar(10) DEFAULT NULL,
  `extraordinario` int(11) DEFAULT NULL,
  `periodo_ext` varchar(10) DEFAULT NULL,
  `intensivo` int(11) DEFAULT NULL,
  `periodo_int` varchar(10) DEFAULT NULL,
  `suficiencia` int(11) DEFAULT NULL,
  `periodo_suf` varchar(10) DEFAULT NULL,
  `extraordinario2` int(11) DEFAULT NULL,
  `periodo_ext2` varchar(10) DEFAULT NULL,
  `grupo` varchar(10) DEFAULT NULL,
  `equivalencia` int(11) DEFAULT NULL,
  `periodo_equivalencia` varchar(10) DEFAULT NULL,
  `ordinario` int(11) DEFAULT NULL,
  `periodo_ord` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kardex`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

INSERT INTO kardex VALUES("1","2020MA001","1","2020-1","98","","","","","","","","","","","","","","98","2020-1");
INSERT INTO kardex VALUES("2","2020MA001","3","2020-1","100","","","","","","","","","","","","","","100","2020-1");
INSERT INTO kardex VALUES("3","2020MA001","4","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("4","2020MA001","6","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("5","2020MA001","13","2020-1","100","","","","","","","","","","","","","","100","2020-1");
INSERT INTO kardex VALUES("6","2020MA001","14","2020-2","99","","","","","","","","","","","","","","99","2020-2");
INSERT INTO kardex VALUES("7","2020MA002","1","2020-1","95","","","","","","","","","","","","","","95","2020-1");
INSERT INTO kardex VALUES("8","2020MA002","3","2020-1","99","","","","","","","","","","","","","","99","2020-1");
INSERT INTO kardex VALUES("9","2020MA002","4","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("10","2020MA002","6","2020-2","100","","","","","","","","","","","","","","100","2020-2");
INSERT INTO kardex VALUES("11","2020MA002","17","2020-1","98","","","","","","","","","","","","","","98","2020-1");
INSERT INTO kardex VALUES("12","2020MA002","18","2020-2","99","","","","","","","","","","","","","","99","2020-2");
INSERT INTO kardex VALUES("13","2020MA003","1","2020-1","92","","","","","","","","","","","","","","92","2020-1");
INSERT INTO kardex VALUES("14","2020MA003","3","2020-1","100","","","","","","","","","","","","","","100","2020-1");
INSERT INTO kardex VALUES("15","2020MA003","4","2020-2","92","","","","","","","","","","","","","","92","2020-2");
INSERT INTO kardex VALUES("16","2020MA003","6","2020-2","90","","","","","","","","","","","","","","90","2020-2");
INSERT INTO kardex VALUES("17","2020MA003","13","2020-1","97","","","","","","","","","","","","","","97","2020-1");
INSERT INTO kardex VALUES("18","2020MA003","14","2020-2","89","","","","","","","","","","","","","","89","2020-2");
INSERT INTO kardex VALUES("19","2020MA004","1","2020-1","94","","","","","","","","","","","","","","94","2020-1");
INSERT INTO kardex VALUES("20","2020MA004","3","2020-1","91","","","","","","","","","","","","","","91","2020-1");
INSERT INTO kardex VALUES("21","2020MA004","4","2020-2","75","","","75","2020-2","","","","","","","","","","55","2020-2");
INSERT INTO kardex VALUES("22","2020MA004","6","2020-2","89","","","","","","","","","","","","","","89","2020-2");
INSERT INTO kardex VALUES("23","2020MA004","17","2020-1","93","","","","","","","","","","","","","","93","2020-1");
INSERT INTO kardex VALUES("24","2020MA004","18","2020-2","90","","","","","","","","","","","","","","90","2020-2");
INSERT INTO kardex VALUES("25","2020MA005","1","2020-1","98","","","","","","","","","","","","","","98","2020-1");
INSERT INTO kardex VALUES("26","2020MA005","3","2020-1","89","","","","","","","","","","","","","","89","2020-1");
INSERT INTO kardex VALUES("27","2020MA005","4","2020-2","95","","","","","","","","","","","","","","95","2020-2");
INSERT INTO kardex VALUES("28","2020MA005","6","2020-2","88","","","","","","","","","","","","","","88","2020-2");
INSERT INTO kardex VALUES("29","2020MA005","17","2020-1","91","","","","","","","","","","","","","","91","2020-1");
INSERT INTO kardex VALUES("30","2020MA005","18","2020-2","93","","","","","","","","","","","","","","93","2020-2");
INSERT INTO kardex VALUES("31","2020MA006","1","2020-1","94","","","","","","","","","","","","","","94","2020-1");
INSERT INTO kardex VALUES("32","2020MA006","3","2020-1","96","","","","","","","","","","","","","","96","2020-1");
INSERT INTO kardex VALUES("33","2020MA006","4","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("34","2020MA006","6","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("35","2020MA006","17","2020-1","98","","","","","","","","","","","","","","98","2020-1");
INSERT INTO kardex VALUES("36","2020MA006","18","2020-2","96","","","","","","","","","","","","","","96","2020-2");
INSERT INTO kardex VALUES("37","2020MA007","1","2020-1","98","","","","","","","","","","","","","","98","2020-1");
INSERT INTO kardex VALUES("38","2020MA007","3","2020-1","95","","","","","","","","","","","","","","95","2020-1");
INSERT INTO kardex VALUES("39","2020MA007","4","2020-2","96","","","","","","","","","","","","","","96","2020-2");
INSERT INTO kardex VALUES("40","2020MA007","6","2020-2","93","","","","","","","","","","","","","","93","2020-2");
INSERT INTO kardex VALUES("41","2020MA007","17","2020-1","96","","","","","","","","","","","","","","96","2020-1");
INSERT INTO kardex VALUES("42","2020MA007","18","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("43","2020MA011","1","2020-1","92","","","","","","","","","","","","","","92","2020-1");
INSERT INTO kardex VALUES("44","2020MA011","2","2020-1","91","","","","","","","","","","","","","","91","2020-1");
INSERT INTO kardex VALUES("45","2020MA011","3","2020-1","86","","","","","","","","","","","","","","86","2020-1");
INSERT INTO kardex VALUES("46","2020MA011","4","2020-2","91","","","","","","","","","","","","","","91","2020-2");
INSERT INTO kardex VALUES("47","2020MA011","5","2020-2","90","","","","","","","","","","","","","","90","2020-2");
INSERT INTO kardex VALUES("48","2020MA011","6","2020-2","80","","","","","","","","","","","","","","80","2020-2");
INSERT INTO kardex VALUES("49","2020MA012","1","2020-1","98","","","","","","","","","","","","","","98","2020-1");
INSERT INTO kardex VALUES("50","2020MA012","3","2020-1","95","","","","","","","","","","","","","","95","2020-1");
INSERT INTO kardex VALUES("51","2020MA012","4","2020-2","96","","","","","","","","","","","","","","96","2020-2");
INSERT INTO kardex VALUES("52","2020MA012","6","2020-2","98","","","","","","","","","","","","","","98","2020-2");
INSERT INTO kardex VALUES("53","2020MA012","17","2020-1","98","","","","","","","","","","","","","","98","2020-1");
INSERT INTO kardex VALUES("54","2020MA012","18","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("55","2020MA013","1","2020-1","91","","","","","","","","","","","","","","91","2020-1");
INSERT INTO kardex VALUES("56","2020MA013","3","2020-1","88","","","","","","","","","","","","","","88","2020-1");
INSERT INTO kardex VALUES("57","2020MA013","4","2020-2","85","","","","","","","","","","","","","","85","2020-2");
INSERT INTO kardex VALUES("58","2020MA013","6","2020-2","87","","","","","","","","","","","","","","87","2020-2");
INSERT INTO kardex VALUES("59","2020MA013","17","2020-1","87","","","","","","","","","","","","","","87","2020-1");
INSERT INTO kardex VALUES("60","2020MA013","18","2020-2","84","","","","","","","","","","","","","","84","2020-2");
INSERT INTO kardex VALUES("61","2020MA014","1","2020-2","88","","","","","","","","","","","","","","88","2020-2");
INSERT INTO kardex VALUES("62","2020MA014","3","2020-2","85","","","","","","","","","","","","","","85","2020-2");
INSERT INTO kardex VALUES("63","2020MA014","17","2020-2","96","","","","","","","","","","","","","","96","2020-2");
INSERT INTO kardex VALUES("64","2020MA015","1","2020-2","87","","","","","","","","","","","","","","87","2020-2");
INSERT INTO kardex VALUES("65","2020MA015","2","2020-2","99","","","","","","","","","","","","","","99","2020-2");
INSERT INTO kardex VALUES("66","2020MA015","3","2020-2","97","","","","","","","","","","","","","","97","2020-2");
INSERT INTO kardex VALUES("67","2020MA019","1","2020-2","87","","","","","","","","","","","","","","87","2020-2");
INSERT INTO kardex VALUES("68","2020MA019","3","2020-2","91","","","","","","","","","","","","","","91","2020-2");
INSERT INTO kardex VALUES("69","2020MA019","13","2020-2","90","","","","","","","","","","","","","","90","2020-2");
INSERT INTO kardex VALUES("70","2020MA021","1","2020-2","88","","","","","","","","","","","","","","88","2020-2");
INSERT INTO kardex VALUES("71","2020MA021","3","2020-2","85","","","","","","","","","","","","","","85","2020-2");
INSERT INTO kardex VALUES("72","2020MA021","17","2020-2","96","","","","","","","","","","","","","","96","2020-2");
INSERT INTO kardex VALUES("73","2020MA022","1","2020-2","83","","","","","","","","","","","","","","83","2020-2");
INSERT INTO kardex VALUES("74","2020MA022","3","2020-2","93","","","","","","","","","","","","","","93","2020-2");
INSERT INTO kardex VALUES("75","2020MA022","13","2020-2","93","","","","","","","","","","","","","","93","2020-2");
INSERT INTO kardex VALUES("76","2020MA023","1","2020-2","87","","","","","","","","","","","","","","87","2020-2");
INSERT INTO kardex VALUES("77","2020MA023","3","2020-2","92","","","","","","","","","","","","","","92","2020-2");
INSERT INTO kardex VALUES("78","2020MA023","13","2020-2","89","","","","","","","","","","","","","","89","2020-2");
INSERT INTO kardex VALUES("79","2020MA024","1","2020-2","89","","","","","","","","","","","","","","89","2020-2");
INSERT INTO kardex VALUES("80","2020MA024","3","2020-2","79","","","","","","","","","","","","","","79","2020-2");
INSERT INTO kardex VALUES("81","2020MA024","13","2020-2","84","","","","","","","","","","","","","","84","2020-2");
INSERT INTO kardex VALUES("82","2020MA026","1","2020-2","84","","","","","","","","","","","","","","84","2020-2");
INSERT INTO kardex VALUES("83","2020MA026","3","2020-2","78","","","","","","","","","","","","","","78","2020-2");
INSERT INTO kardex VALUES("84","2020MA026","13","2020-2","83","","","","","","","","","","","","","","83","2020-2");
INSERT INTO kardex VALUES("85","2020MA001","7","2021-1","96","","","","","","","","","","","","","","96","2021-1");
INSERT INTO kardex VALUES("86","2020MA001","9","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("87","2020MA001","15","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("88","2020MA002","7","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("89","2020MA002","9","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("90","2020MA002","19","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("91","2020MA003","7","2021-1","92","","","","","","","","","","","","","","92","2021-1");
INSERT INTO kardex VALUES("92","2020MA003","9","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("93","2020MA003","15","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("94","2020MA004","7","2021-1","87","","","","","","","","","","","","","","87","2021-1");
INSERT INTO kardex VALUES("95","2020MA004","9","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("96","2020MA004","19","2021-1","98","","","","","","","","","","","","","","98","2021-1");
INSERT INTO kardex VALUES("97","2020MA005","7","2021-1","93","","","","","","","","","","","","","","93","2021-1");
INSERT INTO kardex VALUES("98","2020MA005","9","2021-1","90","","","","","","","","","","","","","","90","2021-1");
INSERT INTO kardex VALUES("99","2020MA005","19","2021-1","90","","","","","","","","","","","","","","90","2021-1");
INSERT INTO kardex VALUES("100","2020MA006","7","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("101","2020MA006","9","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("102","2020MA006","19","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("103","2020MA007","7","2021-1","93","","","","","","","","","","","","","","93","2021-1");
INSERT INTO kardex VALUES("104","2020MA007","9","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("105","2020MA007","19","2021-1","93","","","","","","","","","","","","","","93","2021-1");
INSERT INTO kardex VALUES("106","2020MA011","7","2021-1","92","","","","","","","","","","","","","","92","2021-1");
INSERT INTO kardex VALUES("107","2020MA011","8","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("108","2020MA011","9","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("109","2020MA012","7","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("110","2020MA012","9","2021-1","100","","","","","","","","","","","","","","100","2021-1");
INSERT INTO kardex VALUES("111","2020MA012","19","2021-1","95","","","","","","","","","","","","","","95","2021-1");
INSERT INTO kardex VALUES("112","2020MA013","7","2021-1","90","","","90","2021-1","","","","","","","","","","0","2021-1");
INSERT INTO kardex VALUES("113","2020MA013","9","2021-1","90","","","90","2021-1","","","","","","","","","","0","2021-1");
INSERT INTO kardex VALUES("114","2020MA013","19","2021-1","92","","","92","2021-1","","","","","","","","","","0","2021-1");
INSERT INTO kardex VALUES("115","2020MA014","4","2021-1","91","","","","","","","","","","","","","","91","2021-1");
INSERT INTO kardex VALUES("116","2020MA014","6","2021-1","94","","","","","","","","","","","","","","94","2021-1");
INSERT INTO kardex VALUES("117","2020MA014","18","2021-1","92","","","","","","","","","","","","","","92","2021-1");
INSERT INTO kardex VALUES("118","2020MA015","4","2021-1","88","","","","","","","","","","","","","","88","2021-1");
INSERT INTO kardex VALUES("119","2020MA015","5","2021-1","91","","","","","","","","","","","","","","91","2021-1");
INSERT INTO kardex VALUES("120","2020MA015","6","2021-1","87","","","","","","","","","","","","","","87","2021-1");
INSERT INTO kardex VALUES("121","2020MA019","4","2021-1","91","","","","","","","","","","","","","","91","2021-1");
INSERT INTO kardex VALUES("122","2020MA019","6","2021-1","92","","","","","","","","","","","","","","92","2021-1");
INSERT INTO kardex VALUES("123","2020MA019","14","2021-1","90","","","","","","","","","","","","","","90","2021-1");
INSERT INTO kardex VALUES("124","2020MA021","4","2021-1","90","","","","","","","","","","","","","","90","2021-1");
INSERT INTO kardex VALUES("125","2020MA021","6","2021-1","89","","","","","","","","","","","","","","89","2021-1");
INSERT INTO kardex VALUES("126","2020MA021","18","2021-1","92","","","","","","","","","","","","","","92","2021-1");
INSERT INTO kardex VALUES("127","2020MA022","4","2021-1","93","","","","","","","","","","","","","","93","2021-1");
INSERT INTO kardex VALUES("128","2020MA022","6","2021-1","90","","","","","","","","","","","","","","90","2021-1");
INSERT INTO kardex VALUES("129","2020MA022","14","2021-1","90","","","","","","","","","","","","","","90","2021-1");
INSERT INTO kardex VALUES("130","2020MA023","4","2021-1","91","","","","","","","","","","","","","","91","2021-1");
INSERT INTO kardex VALUES("131","2020MA023","6","2021-1","97","","","","","","","","","","","","","","97","2021-1");
INSERT INTO kardex VALUES("132","2020MA023","14","2021-1","92","","","","","","","","","","","","","","92","2021-1");
INSERT INTO kardex VALUES("133","2020MA026","4","2021-1","75","","","75","2021-1","","","","","","","","","","53","2021-1");
INSERT INTO kardex VALUES("134","2020MA026","6","2021-1","82","","","","","","","","","","","","","","82","2021-1");
INSERT INTO kardex VALUES("135","2020MA026","14","2021-1","87","","","","","","","","","","","","","","87","2021-1");


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
  `clave_materia` varchar(15) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO materias VALUES("1","8101","1","8101","Administracion Financiera","8","1","3","3","1","0");
INSERT INTO materias VALUES("2","8102-1","1","8102-1","Gestion del Talento Humano","8","1","3","3","2","1");
INSERT INTO materias VALUES("3","8103","1","8103","Seminario I","8","1","4","0","1","0");
INSERT INTO materias VALUES("4","8201","1","8201","Estadistica Aplicada a la Administracion","8","2","3","3","1","0");
INSERT INTO materias VALUES("5","8201-1","1","8201-1","Liderazgo y Comportamineto Organizacional","8","2","3","3","2","1");
INSERT INTO materias VALUES("6","8203","1","8203","Seminario II","8","2","4","0","1","0");
INSERT INTO materias VALUES("7","8301","1","8301","Etica y Responsabilidad Social en las Organizaciones","8","3","3","3","1","0");
INSERT INTO materias VALUES("8","8302-1","1","8302-1","Desarrollo Organizacional","8","3","3","3","2","1");
INSERT INTO materias VALUES("9","8303","1","8303","Seminario III","8","3","4","0","1","0");
INSERT INTO materias VALUES("10","8401","1","8401","Fundamentos de Administracion ","8","4","3","3","1","0");
INSERT INTO materias VALUES("11","8402-1","1","8402-1","Controles Administrativos y Estrategicos Del Talento Humano","8","4","3","3","2","1");
INSERT INTO materias VALUES("12","8403","1","8403","Seminario IV","8","4","4","0","1","0");
INSERT INTO materias VALUES("13","8102-2","1","8102-2","Gestion de la Innovacion y la Tecnologi­a","8","1","3","3","2","2");
INSERT INTO materias VALUES("14","8202-2","1","8202-2","Estrategias de Producto, Precio, Marca y Dist.","8","2","3","3","2","2");
INSERT INTO materias VALUES("15","8302-2","1","8302-2","Organizacion de las MiPyMES","8","3","3","3","2","2");
INSERT INTO materias VALUES("16","8402-2","1","8402-2","Formulación y Evaluación de Proyecto de Inv.","8","4","3","3","2","2");
INSERT INTO materias VALUES("17","8102-3","1","8102-3","Administracion Estrategica","8","1","3","3","2","3");
INSERT INTO materias VALUES("18","8202-3","1","8202-3","Tecnologias de Informacion y Comunicacion Para el D.E.","8","2","3","3","2","3");
INSERT INTO materias VALUES("19","8302-3","1","8302-3","Estrategias de Negociacion","8","3","3","3","2","3");
INSERT INTO materias VALUES("20","8402-3","1","8402-3","Direccion Estrategica","8","4","3","3","2","3");


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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO periodos VALUES("1","2020-1","1","0");
INSERT INTO periodos VALUES("2","2020-2","1","0");
INSERT INTO periodos VALUES("3","2021-1","1","0");
INSERT INTO periodos VALUES("4","2021-2","4","1");


DROP TABLE IF EXISTS planes;

CREATE TABLE `planes` (
  `id_plan` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_plan` varchar(40) DEFAULT NULL,
  `creditos_totales` int(11) DEFAULT NULL,
  `ano_plan` int(11) DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_plan`),
  KEY `id_carrera` (`id_carrera`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO planes VALUES("1","MPADM-2011-26","100","2020","1");


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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO profesores VALUES("1","4329","María Juana","Hernández","Flores","1978-12-04","majuhf@tesi.edu.mx","Maestri­a","Habilidades Directivas");
INSERT INTO profesores VALUES("2","4501","Lizbeth","Cobian ","Romero","1986-01-13","Lizbeth.Cobian@tesi.edu.mx","Doctora","Ciencias");
INSERT INTO profesores VALUES("4","4491","Luis Alfonso","Bonilla","Cruz","1986-08-08","Luis.Bonilla@tesi.edu.mx","Doctor","Ciencias");
INSERT INTO profesores VALUES("5","4556","Edgardo","Rodriguez ","Moreno","1962-08-08","utn_edgardo.rodriguez@hotmail.com","Doctor","Educacion");
INSERT INTO profesores VALUES("6","4371","Juan Carlos ","Cisneros","Rasgado","2020-03-04","carci10@hotmail.com","Maestria","Ciencias");
INSERT INTO profesores VALUES("7","5371","Maria Del Carmen ","Arrieta","Lopez","1968-08-04","clase.arrieta@gmail.com","Maestria","R. Interinstitucionales");
INSERT INTO profesores VALUES("8","4375","Nancy Victoria","Arguelles","Martinez","2021-02-26","nancy.am@ixtapaluca.tecnm.mx","Maestria","Administracion");
INSERT INTO profesores VALUES("9","4237","Humberto","Espinoza","Vega","2021-02-26","humberto.ev@ixtapaluca.tecnm.mx","Maestria","R Inter Institucionales");
INSERT INTO profesores VALUES("10","4592","Maria Eugenia","Estrada","Chavira","2021-09-01","maria.ec@ixtapaluca.tecnm.mx","Doctora","Ciencias Economia");
INSERT INTO profesores VALUES("11","4196","Miguel Angel","Rosas","Flores","2021-09-01","miguel.rf@ixtapaluca.tecnm.mx","Maestro","Rel.interinstitucionales");


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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tipo_inscripcion VALUES("1","Ordinario");
INSERT INTO tipo_inscripcion VALUES("2","Extra - Ordinario");


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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tipos_evaluaciones VALUES("1","Primer Parcial");
INSERT INTO tipos_evaluaciones VALUES("2","Segundo Parcial");
INSERT INTO tipos_evaluaciones VALUES("3","Tercer Parcial");
INSERT INTO tipos_evaluaciones VALUES("4","Segunda Oportunidad");


DROP TABLE IF EXISTS turnos;

CREATE TABLE `turnos` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_turno` varchar(20) NOT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO turnos VALUES("1","Matutino");
INSERT INTO turnos VALUES("2","Vespertino");
INSERT INTO turnos VALUES("3","Mixto");


DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `clave_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `contrasena_usuario` varchar(255) DEFAULT NULL,
  `tipo_usuario` tinyint(4) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`clave_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("61","CISNEROS","carci10@hotmail.com","Cisneros*","1","1");
INSERT INTO usuario VALUES("62","MARIA ELENA","posgradostesi@tesi.edu.mx","posgradostesi","1","1");
INSERT INTO usuario VALUES("63","Edgardo Daniel Rodriguez Villamares","edgardodanrv@gmail.com","307153955dan","5","1");
INSERT INTO usuario VALUES("64","Jefree de la Torre Nieto","jef_lic145@outlook.es","Jdela1027","5","1");
INSERT INTO usuario VALUES("65","Erika Nahomi OrtÃ­z Nafarrate","erikanafarrate@gmail.com","Leon1021","5","1");
INSERT INTO usuario VALUES("66","Alejandro RamÃ­rez Ramos","mecatronicatuvch@gmail.com","ingeniero2021","5","1");
INSERT INTO usuario VALUES("67","MARIO ALBERTO SALAZAR CARMONA","mario_larry@hotmail.com","Tesorito68","5","1");
INSERT INTO usuario VALUES("68","tonys84","tonys84_6@hotmail.com","La45rs65","5","1");
INSERT INTO usuario VALUES("69","JORGE CABRERA ","jacv_8810@hotmail.com","mrgeor7332","5","1");
INSERT INTO usuario VALUES("70","Daniela Alejandra Bonilla Gutierrez","bonilladaniela963@gmail.com","danimaestria741","5","1");
INSERT INTO usuario VALUES("71","ALFREDO MEZA","alfredo.meza1606@hotmail.com","Yohatvy1611#","5","1");
INSERT INTO usuario VALUES("72","Karen Anahi Garcia Bocanegra","anahi6317@gmail.com","kikischiva39","5","1");
INSERT INTO usuario VALUES("73","JAZMIN ALEJANDRA SANTOS LOPEZ ","jazminalejandra506@gmail.com","16122002tiburones","5","0");
INSERT INTO usuario VALUES("74","Maury Ivan DÃ­az Reyes","8mdiaz@gmail.com","Chencho12345","5","1");
INSERT INTO usuario VALUES("75","Isis Yazmin Diaz Cuapio","yazmstar96@hotmail.com","calleypoche","5","1");
INSERT INTO usuario VALUES("76","edermark43","erzc2014@gmail.com","Emily201023671","5","0");
INSERT INTO usuario VALUES("77","ALEJANDRA MIRANDA VELAZCO","alejandramirandaleon@hotmail.com","Mirv270392","5","1");
INSERT INTO usuario VALUES("78","Oscar Daniel","dannyelfi2910@gmail.com","OS2910da","5","0");
INSERT INTO usuario VALUES("79","Maria del Carmen MagaÃ±a GonzÃ¡lez","eseconomia7@gmail.com","caramelo123&","5","1");
INSERT INTO usuario VALUES("80","Irlanda","irlandanieto2@gmail.com.mx","2701","5","1");
INSERT INTO usuario VALUES("81","galerosahdez19@hotmail.com","galerosahdez19@hotmail.com","galerosa19","5","1");
INSERT INTO usuario VALUES("82","Andrea Herminda Salazar Monroy","salazarmonroy147@hotmail.com","promotora1328..","5","1");
INSERT INTO usuario VALUES("83","Yovani Castro Robles","yovani.castro.r@gmail.com","cary920714","5","1");
INSERT INTO usuario VALUES("84","Antonio Ortega","bryanantonio.ortega@yahoo.com.mx","skrollex2001@","5","0");
INSERT INTO usuario VALUES("85","Israel Ricardo","ricardo.com.mx@live.com.mx","3321450903Ji","5","1");
INSERT INTO usuario VALUES("86","Laura PÃ©rez","aztli.lpr@gmail.com","Vale2089.","5","1");
INSERT INTO usuario VALUES("87","jhair armando ranchos morales","led.jarm@gmail.com","J3aranch-","5","1");
INSERT INTO usuario VALUES("88","Leonardo Daniel HernÃ¡ndez Valdovinos","licleonardo8@hotmail.com","MaestriaLeonardo-123","5","1");
INSERT INTO usuario VALUES("89","Pedro Alberto EnrÃ­quez Andrade","perico_pea83@hotmail.com","P1a2e3a4@","5","1");
INSERT INTO usuario VALUES("90","Violeta Suir Morales ","suirmv@hotmail.com","SUIRmv75","5","1");
INSERT INTO usuario VALUES("91","Anallely Diaz","anita_03dbre90@hotmail.com","ani152436","5","1");
INSERT INTO usuario VALUES("92","ROSA AIDEE GARCIA MARTINEZ","ROSAGARCIA32@YAHOO.COM","Fuerza2021","5","1");
INSERT INTO usuario VALUES("93","Edgar Daniel Sanchez Balderas","danielsanchez_13@hotmail.com","Sanchez79","5","1");
INSERT INTO usuario VALUES("94","Alba Selene Rojas MuÃ±oz","alba.07081988@gmail.com","Alba0708","5","1");
INSERT INTO usuario VALUES("95","Hector Serrano BailÃ³n","hsbc17@yahoo.com.mx","diciembre17","5","1");


DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `idUsuario` smallint(6) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(50) NOT NULL,
  `PassUsuario` varchar(150) NOT NULL,
  `NivelUsuario` int(11) NOT NULL,
  `Codigo` varchar(10) NOT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `NivelUsuario` (`NivelUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO usuarios VALUES("1","carci10@hotmail.com","Cisneros*2022","1","0","");
INSERT INTO usuarios VALUES("2","posgradostesi@tesi.edu.mx","posgradostesi2022","1","0","");
INSERT INTO usuarios VALUES("3","al000","829450","3","2020MA000","");
INSERT INTO usuarios VALUES("4","majuhf@tesi.edu.mx","43292022","2","1","");
INSERT INTO usuarios VALUES("5","Lizbeth.Cobian@tesi.edu.mx","45012022","2","2","");
INSERT INTO usuarios VALUES("7","Luis.Bonilla@tesi.edu.mx","44912022","2","4","");
INSERT INTO usuarios VALUES("8","utn_edgardo.rodriguez@hotmail.com","45562022","2","5","");
INSERT INTO usuarios VALUES("9","carci10@hotmail.com","43712022","2","6","");
INSERT INTO usuarios VALUES("10","al012","321809","3","2020MA012","");
INSERT INTO usuarios VALUES("11","al003","740145","3","2020MA003","");
INSERT INTO usuarios VALUES("12","al002","552560","3","2020MA002","");
INSERT INTO usuarios VALUES("13","al013","629056","3","2020MA013","");
INSERT INTO usuarios VALUES("14","al004","730940","3","2020MA004","");
INSERT INTO usuarios VALUES("15","al007","832828","3","2020MA007","");
INSERT INTO usuarios VALUES("16","al011","269185","3","2020MA011","");
INSERT INTO usuarios VALUES("17","al001","713090","3","2020MA001","");
INSERT INTO usuarios VALUES("18","al009","192752","3","2020MA009","");
INSERT INTO usuarios VALUES("19","al005","733348","3","2020MA005","");
INSERT INTO usuarios VALUES("20","Nancy Islas","3579*","1","0","images/fotos_perfil/perfil.jpg");
INSERT INTO usuarios VALUES("21","al006","955515","3","2020MA006","");
INSERT INTO usuarios VALUES("22","al019","564047","3","2020MA019","");
INSERT INTO usuarios VALUES("23","clase.arrieta@gmail.com","53712022","2","7","");
INSERT INTO usuarios VALUES("24","al022","802241","3","2020MA022","");
INSERT INTO usuarios VALUES("25","al023","412674","3","2020MA023","");
INSERT INTO usuarios VALUES("26","al021","18517","3","2020MA021","");
INSERT INTO usuarios VALUES("27","al014","542044","3","2020MA014","");
INSERT INTO usuarios VALUES("28","al015","206257","3","2020MA015","");
INSERT INTO usuarios VALUES("29","al026","485235","3","2020MA026","");
INSERT INTO usuarios VALUES("30","al024","539203","3","2020MA024","");
INSERT INTO usuarios VALUES("31","nancy.am@ixtapaluca.tecnm.mx","43752022","2","8","");
INSERT INTO usuarios VALUES("32","humberto.ev@ixtapaluca.tecnm.mx","42372022","2","9","");
INSERT INTO usuarios VALUES("33","al1019","813484","3","2021MA1019","");
INSERT INTO usuarios VALUES("34","al1020","144641","3","2021MA1020","");
INSERT INTO usuarios VALUES("35","al1003","164728","3","2021MA1003","");
INSERT INTO usuarios VALUES("36","al1002","648737","3","2021MA1002","");
INSERT INTO usuarios VALUES("37","al1016","760967","3","2021MA1016","");
INSERT INTO usuarios VALUES("38","al1006","961637","3","2021MA1006","");
INSERT INTO usuarios VALUES("39","al1005","927068","3","2021MA1005","");
INSERT INTO usuarios VALUES("40","al1013","963117","3","2021MA1013","");
INSERT INTO usuarios VALUES("41","al1021","398457","3","2021MA1021","");
INSERT INTO usuarios VALUES("42","al1008","185519","3","2021MA1008","");
INSERT INTO usuarios VALUES("43","al1009","161894","3","2021MA1009","");
INSERT INTO usuarios VALUES("44","al1011","890959","3","2021MA1011","");
INSERT INTO usuarios VALUES("45","al1017","698205","3","2021MA1017","");
INSERT INTO usuarios VALUES("46","al1014","327421","3","2021MA1014","");
INSERT INTO usuarios VALUES("47","al1010","16351","3","2021MA1010","");
INSERT INTO usuarios VALUES("48","al1022","643947","3","2021MA1022","");
INSERT INTO usuarios VALUES("49","al1024","121023","3","2021MA1024","");
INSERT INTO usuarios VALUES("50","al1023","266727","3","2021MA1023","");
INSERT INTO usuarios VALUES("51","maria.ec@ixtapaluca.tecnm.mx","45922022","2","10","");
INSERT INTO usuarios VALUES("52","miguel.rf@ixtapaluca.tecnm.mx","41962022","2","11","");
INSERT INTO usuarios VALUES("53","al1025","520654","3","2021MA1025","");
INSERT INTO usuarios VALUES("54","al1026","185462","3","2021MA1026","");
INSERT INTO usuarios VALUES("55","al1027","932022","3","2021MA1027","");
INSERT INTO usuarios VALUES("56","al1028","110946","3","2021MA1028","");
INSERT INTO usuarios VALUES("57","al1029","279914","3","2021MA1029","");


