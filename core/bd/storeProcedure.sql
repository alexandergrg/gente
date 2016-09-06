
--Procedimineto almacenado para obtener todos los usuarios
CREATE PROCEDURE getAllUsers() SELECT * FROM users;
--Procedimiento almacenado para consultar el usuario para el inicio de sesion
CREATE PROCEDURE getUserByName(
  _name VARCHAR(50),
  _pass varchar(50)
)
SELECT * FROM users WHERE (user = _name OR email = _name) AND pass = _pass LIMIT 1
