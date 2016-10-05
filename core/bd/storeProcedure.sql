
-- PROCEDIMIENTO ALMACENADO PARA CREAR USUARIOS
DELIMITER //
CREATE PROCEDURE  insertarUsuarios(
		_usuario VARCHAR (50)	,
		_pass VARCHAR (100),
		_correo VARCHAR (50),
		_idperfiles INT (255)
)
BEGIN
		INSERT INTO usuarios (usuario, pass, correo,idperfiles )
    VALUES(_usuario, _pass, _correo, _idperfiles);
END;
//
--Procedimineto almacenado para obtener todos los usuarios
CREATE PROCEDURE getAllUsers() SELECT * FROM users;
--Procedimiento almacenado para consultar el usuario para el inicio de sesion
CREATE PROCEDURE getUserByName(
  _name VARCHAR(50),
  _pass varchar(50)
)
SELECT * FROM users WHERE (user = _name OR email = _name) AND pass = _pass LIMIT 1
