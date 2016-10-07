-- Procedimiento almacenado para insertar perfiles
DELIMITER //
CREATE PROCEDURE spPerfilesInsertar(
	_nombre VARCHAR(50),
	_permiso INT(1)

)
BEGIN
	INSERT INTO perfiles (nombre, permiso)
	VALUES(_nombre, _permiso);
END;
//

-- Procedimiento almacenado para mostrar perfiles activos,
DELIMITER //
CREATE PROCEDURE spPerfilesListar()
BEGIN
	SELECT * FROM perfiles WHERE estado = 1;
END;
//

-- Procedimiento almacenado para dar de baja a perfiles activos.
DELIMITER //
CREATE PROCEDURE spPerfilesInactivar(
	_id int(255)
)
BEGIN
	UPDATE perfiles SET
    estado = 0
    WHERE id = _id ;
END;
//

-- Procedimiento almacenado para comprobar si existe el registro
DELIMITER //
CREATE PROCEDURE spPerfilesExiste(
	_nombre VARCHAR(50)
    )
BEGIN
	SELECT COUNT(*) as existe FROM perfiles WHERE upper(nombre) = upper(_nombre);
END;
//

-- Procedimiento almacenado para editar los registros de perfiles
DELIMITER //
CREATE PROCEDURE spPerfilesActualizar(
	_id INT (255),
    _nombre VARCHAR(50)
)
BEGIN
	UPDATE perfiles SET
    nombre = _nombre
    WHERE id = _id;
END;
//

-- Procedimiento almacenado para mostrar perfiles inactivos
DELIMITER //
CREATE PROCEDURE spPerfilesInactivos()
BEGIN
	SELECT * FROM perfiles WHERE estado = 0;
END;
//
