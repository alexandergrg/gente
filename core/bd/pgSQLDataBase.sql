

-- 1. - CREAR EL TABLE ESPACE

CREATE TABLESPACE tbl_sigcombdb LOCATION '/var/mydatabases/sigcomb';
-- 2.- CREACION DEL USUARIO DE DATOS.
CREATE ROLE is_sigcombdb LOGIN PASSWORD 'admin123456';
-- 3.- CREACION DE LA BASE DE DATOS
CREATE DATABASE sigcombdb OWNER = is_sigcombdb TABLESPACE = tbl_sigcombdb;

-- CREACIÓN DE L TABLA PERFILES

CREATE SCHEMA sch_seguridad;

CREATE TABLE sch_seguridad.perfiles
(
  id serial NOT NULL,
  nombre character varying(50) NOT NULL,
  permiso smallint,
  estado smallint NOT NULL DEFAULT 1,
  CONSTRAINT pk_perfiles PRIMARY KEY (id),
  CONSTRAINT uq_nombre UNIQUE (nombre)
)

CREATE TABLE sch_seguridad.usuarios
(
  id serial NOT NULL,
  usuario character varying(50) NOT NULL,
  pass character varying(100) NOT NULL,
  correo character varying(100) NOT NULL,
  estado smallint DEFAULT 1,
  idperfiles integer NOT NULL,
  CONSTRAINT pk_usuarios PRIMARY KEY (id),
  CONSTRAINT fk_usuarios_perfiles FOREIGN KEY (idperfiles)
      REFERENCES sch_seguridad.perfiles (id) MATCH SIMPLE
      ON UPDATE RESTRICT ON DELETE RESTRICT,
  CONSTRAINT uq_usuario UNIQUE (usuario)
)


CREATE OR REPLACE FUNCTION sch_seguridad.spusuarioexiste
	(
	IN _login CHARACTER VARYING,
	IN _pass CHARACTER VARYING,
	OUT _id INTEGER,
	OUT _usuario CHARACTER VARYING,
	OUT _correo CHARACTER VARYING,
	OUT _idperfiles INTEGER
	) RETURNS SETOF RECORD
AS
$BODY$
 BEGIN
   RETURN QUERY SELECT id, usuario, correo, idperfiles
	FROM sch_seguridad.usuarios
	WHERE ( upper(usuario) = upper(_login)
		OR upper(correo) = upper(_login))
		AND (pass = _pass );
 END;
$BODY$
LANGUAGE plpgsql;



CREATE OR REPLACE FUNCTION sch_seguridad.spusuariosperfileslista() 
RETURNS SETOF sch_seguridad.vst_usuariosperfileslista
AS
$BODY$
 BEGIN
   RETURN QUERY SELECT *
	FROM sch_seguridad.vst_usuariosperfileslista;
 END;
$BODY$
LANGUAGE plpgsql;
