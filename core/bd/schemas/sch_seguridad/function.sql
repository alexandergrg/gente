
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
