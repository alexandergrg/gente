-- Ingreso de Perfiles a la base de DATOS
-- Nota primero crear los procedimientos almacenados;

CALL insertarPerfiles('Administrador',1);
CALL insertarPerfiles('Tecnico',2);
CALL insertarPerfiles('Invitado',3);


INSERT INTO `sigcombdb`.`funcionarios` (`cedula`, `nombres`, `apellidos`, `correo`, `fechanacimiento`, `estadocivil`, `genero`, `estado`, `idusuario`) VALUES ('1718888751', 'Alexander Rafael', 'Gonzalez Garcia', 'alexandergrg@hotmail.com', '1987-06-21', 'soltero', 'Hombre', '1', '1');
