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
