-- Ingreso de Perfiles a la base de DATOS
-- Nota primero crear los procedimientos almacenados;

CALL insertarPerfiles('Administrador',1);
CALL insertarPerfiles('Tecnico',2);
CALL insertarPerfiles('Invitado',3);


INSERT INTO `sigcombdb`.`funcionarios` (`cedula`, `nombres`, `apellidos`, `correo`, `fechanacimiento`, `estadocivil`, `genero`, `estado`, `idusuario`) VALUES ('1718888751', 'Alexander Rafael', 'Gonzalez Garcia', 'alexandergrg@hotmail.com', '1987-06-21', 'soltero', 'Hombre', '1', '1');


INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('jramos', 'c0784027b45aa11e848a38e890f8416c', 'jramos@correo.com', '1', '2');
INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('agonzalez', 'c0784027b45aa11e848a38e890f8416c', 'agonza@correo.com', '1', '3');
INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('dzanchez', 'c0784027b45aa11e848a38e890f8416c', 'dsanzhez@correo.com', '1', '2');

INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('rjurado', 'c0784027b45aa11e848a38e890f8416c', 'rjurado', '1', '3');
INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('jduran', 'c0784027b45aa11e848a38e890f8416c', 'jduran', '1', '3');
INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('smancheno', 'c0784027b45aa11e848a38e890f8416c', 'smancheno', '1', '3');
INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('apazmiño', 'c0784027b45aa11e848a38e890f8416c', 'apazmino', '1', '3');
INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('mvallejo', 'c0784027b45aa11e848a38e890f8416c', 'mvallejo', '1', '3');
INSERT INTO `sigcombdb`.`usuarios` (`usuario`, `pass`, `correo`, `estado`, `idperfiles`) VALUES ('fpacheco', 'c0784027b45aa11e848a38e890f8416c', 'fpacheho', '1', '3');
