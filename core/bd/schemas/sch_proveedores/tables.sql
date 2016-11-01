CREATE TABLE sch_proveedores.combustible
(
  id bigserial NOT NULL,
  nombre character varying(50) NOT NULL,
  descripcion character varying(200) DEFAULT 'NINGUNA OBSERVACIÓN',
  estado smallint NOT NULL DEFAULT 1,
  ultima_modificacion TIMESTAMP DEFAULT NOW(),
  usuario_db CHARACTER VARYING (50) DEFAULT USER,
  usuario_app bigint,
  CONSTRAINT pk_perfiles PRIMARY KEY (id),
  CONSTRAINT uq_nombre UNIQUE (nombre)
);
