
--Procedimiento almacenado para ingresar el un usuario
CREATE PROCEDURE insertUsers(
    _user VARCHAR(50),
    _pass VARCHAR(50),
    _email VARCHAR(50)
	)
    INSERT INTO users (`id`, `user`, `pass`, `email`, `permisos`)
               VALUES (NULL, _user, _pass, _email, '0');

--Procedimineto almacenado para obtener todos los usuarios
CREATE PROCEDURE getAllUsers() SELECT * FROM users;
--Procedimiento almacenado para consultar el usuario para el inicio de sesion
CREATE PROCEDURE getUserByName(
  _name VARCHAR(50),
  _pass varchar(50)
)
SELECT * FROM users WHERE (user = _name OR email = _name) AND pass = _pass LIMIT 1
