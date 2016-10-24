- Procedimiento almacenado para listar los usuarios
DELIMITER //
CREATE PROCEDURE spUsuariosPerfilesLista()
BEGIN
	SELECT u.id, u.usuario , u.correo , u.estado, p.id AS idperfil, p.nombre AS perfil , p.estado as estadoperfil
    FROM usuarios AS u INNER JOIN perfiles AS p
    ON u.idperfiles = p.id
    WHERE u.estado = 1 ;
END;
//

--  Procedimiento almacenado para comprobar si existe usuario por correo o usuarios
-- Function: sch_seguridad.spusuarioexiste(character varying, character varying)

-- DROP FUNCTION sch_seguridad.spusuarioexiste(character varying, character varying);

CREATE OR REPLACE FUNCTION sch_seguridad.spusuarioexiste(
    _login character varying,
    _pass character varying)
  RETURNS SETOF sch_seguridad.usuarios AS
$BODY$
BEGIN
	SELECT id, usuario, correo, estado, idperfiles
		WHERE ( upper(usuario) = upper(_login)
		OR upper(correo) = upper(_login))
	AND (pass = _pass );
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100
  ROWS 1000;
ALTER FUNCTION sch_seguridad.spusuarioexiste(character varying, character varying)
  OWNER TO is_sigcombdb;


-- Procedimiento almacenado para insertar usuarios
DELIMITER //
CREATE PROCEDURE spUsuariosInsertar(
	_usuario VARCHAR(50),
    _pass VARCHAR(100),
    _correo VARCHAR(50),
    _idperfiles int(255)
)
BEGIN
	INSERT INTO usuarios(usuario, pass, correo, idperfiles)
			VALUES(_usuario, _pass, _correo, _idperfiles);
END;

//

CALL spUsuariosInsertar('superadmin', 'c0784027b45aa11e848a38e890f8416c', 'administrador@correo.com', 1);
