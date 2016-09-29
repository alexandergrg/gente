
-- CREAR LA BASE DE DATOS CON EL COTEJAMIENTO

-- CREATE DATABASE `sigcombdb` DEFAULT CHARSET=utf8 COLLATE utf8_spanish_ci;

-- GRANT ALL PRIVILEGES ON sigcombdb.* TO is_sigcombdb WITH GRANT OPTION;

--  CREACION DE LA TABLA PERFILES

CREATE TABLE perfiles(
	id INT (255) NOT NULL AUTO_INCREMENT ,
  nombre VARCHAR(50) NOT NULL,
  permiso INT(1),
  estado INT(1) NOT NULL DEFAULT 1,
  CONSTRAINT pk_perfiles PRIMARY KEY (id),
  CONSTRAINT uq_nombre UNIQUE (nombre)
);

--  CREACION DE LA TABLA USUARIOS

CREATE TABLE usuarios (
	id INT(255) NOT NULL AUTO_INCREMENT ,
  usuario VARCHAR(50) NOT NULL ,
  pass VARCHAR(100) NOT NULL ,
  correo VARCHAR(50) NOT NULL ,
	estado INT(1) NOT  NULL DEFAULT 1,
	idPerfiles INT(255) NOT NULL,
  CONSTRAINT pk_usuarios  PRIMARY KEY (id),
	CONSTRAINT uq_usuario UNIQUE(usuario),
	CONSTRAINT fk_usuarios_perfiles FOREIGN KEY(idPerfiles) REFERENCES perfiles (id)
															ON UPDATE RESTRICT ON DELETE RESTRICT
);


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
ADD COLUMN idfuncionarios  int(255) NULL AFTER idPerfiles;

ALTER TABLE usuarios ADD CONSTRAINT fk_usuarios_funcionarios FOREIGN KEY (idfuncionarios) REFERENCES funcionarios (id) ON DELETE RESTRICT ON UPDATE RESTRICT;
