CREATE TABLE sch_proveedores.combustible
(
  id serial NOT NULL,
  nombre character varying(50) NOT NULL,
  descripcion character varying(200),
  estado smallint NOT NULL DEFAULT 1,
  CONSTRAINT pk_perfiles PRIMARY KEY (id),
  CONSTRAINT uq_nombre UNIQUE (nombre)
)
