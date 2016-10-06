-- Ingreso de Perfiles a la base de DATOS
-- Nota primero crear los procedimientos almacenados;

CALL insertarPerfiles('Administrador',1);
CALL insertarPerfiles('Tecnico',2);
CALL insertarPerfiles('Invitado',3);
