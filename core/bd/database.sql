																																																																																																																																																	ºº
-- CREAR EL USUARIO QUE ADMINISTRARÀ LA BASE DE DATOS

-- CREATE USER is_sigcombdb IDENTIFIED BY 'admin123456';

-- CREAR LA BASE DE DATOS CON EL COTEJAMIENTO

-- CREATE DATABASE `sigcombdb` DEFAULT CHARSET=utf8 COLLATE utf8_spanish_ci;

-- GRANT ALL PRIVILEGES ON sigcombdb.* TO is_sigcombdb WITH GRANT OPTION;

--  CREACION DE LA TABLA PERFILES
-- Table: sch_seguridad.perfiles
-- DROP TABLE sch_seguridad.perfiles;

CREATE TABLE sch_seguridad.perfiles
(
  id serial NOT NULL,
  nombre character varying(50) NOT NULL,
  permiso smallint,
  estado smallint NOT NULL DEFAULT 1,
  CONSTRAINT pk_perfiles PRIMARY KEY (id),
  CONSTRAINT uq_nombre UNIQUE (nombre)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE sch_seguridad.perfiles
  OWNER TO is_sigcombdb;

--  CREACION DE LA TABLA USUARIOS
-- Table: sch_seguridad.usuarios
-- DROP TABLE sch_seguridad.usuarios;

CREATE TABLE sch_seguridad.usuarios
(
  id serial NOT NULL,
  usuario character varying(50) NOT NULL,
  pass character varying(100) NOT NULL,
  correo character varying(50) NOT NULL,
  estado smallint DEFAULT 1,
  idperfiles smallint NOT NULL,
  CONSTRAINT pk_usuarios PRIMARY KEY (id),
  CONSTRAINT fk_usuarios_perfiles FOREIGN KEY (idperfiles)
      REFERENCES sch_seguridad.perfiles (id) MATCH SIMPLE
      ON UPDATE RESTRICT ON DELETE RESTRICT,
  CONSTRAINT uq_usuario UNIQUE (usuario)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE sch_seguridad.usuarios
  OWNER TO is_sigcombdb;


--  CREACION DE LA TABLA FUNCIONARIOS

 CREATE TABLE funcionarios(
	id INT (255) NOT NULL AUTO_INCREMENT,
	cedula VARCHAR(255) NOT NULL,
	nombres VARCHAR(100) NOT NULL,
	apellidos VARCHAR(100) NOT NULL,
	correo VARCHAR(255) NOT NULL,
	fechanacimiento DATETIME DEFAULT NOW(),
	estadocivil VARCHAR(20),
	genero VARCHAR(10),
	estado INT(1) NOT NULL DEFAULT 1,
	idusuario INT(255) NULL,
	CONSTRAINT pk_funcionarios PRIMARY KEY (id),
	CONSTRAINT uq_cedula UNIQUE(cedula),
	CONSTRAINT uq_correo UNIQUE(correo),
	CONSTRAINT fk_funcionarios_usuarios FOREIGN KEY (idusuario) REFERENCES usuarios (id)
															ON UPDATE RESTRICT ON DELETE RESTRICT
);

-- AGREGACION DE CAMPO IDFUNCIONARIOS EN LA TABLA USUARIOS
ALTER TABLE usuarios
ADD COLUMN idfuncionarios  int(255) NULL AFTER idperfiles;

ALTER TABLE usuarios ADD CONSTRAINT fk_usuarios_funcionarios FOREIGN KEY (idfuncionarios) REFERENCES funcionarios (id) ON DELETE RESTRICT ON UPDATE RESTRICT;
