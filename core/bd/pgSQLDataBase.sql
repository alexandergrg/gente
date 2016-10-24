

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
WITH (
  OIDS=FALSE
);
ALTER TABLE sch_seguridad.perfiles
  OWNER TO is_sigcombdb;


  CREATE OR REPLACE FUNCTION sch_seguridad.spusuarioexiste(
   _login character varying,
   _pass character varying)
  RETURNS SETOF sch_seguridad.usuarios
  AS
  $BODY$
  BEGIN
   RETURN QUERY SELECT id, usuario , correo, idperfiles
   FROM sch_seguridad.usuarios
   	WHERE ( upper(usuario) = upper(_login)
  	OR upper(correo) = upper(_login))
  	AND (pass = _pass );
  END;
  $BODY$
   LANGUAGE plpgsql;
