-- Procedimiento almacenado para listar los usuarios

DELIMITER //
CREATE PROCEDURE spUsuariosListar()
BEGIN
	SELECT * FROM usuarios;
END;

//

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


CALL spUsuariosInsertar('superadmin', '13456', 'administrador@correo.com', 1);
