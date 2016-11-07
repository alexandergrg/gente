-- PROCEDIMIENTO ALMACENADO PÀRA INSERTAR, ACTUALIZAR Y DAR DE BAJO UN REGISTRO
-- DE LA TABLA COMBUSTIBLE

CREATE OR REPLACE FUNCTION sch_proveedores.spguardacombustible(
	IN opcion CHARACTER VARYING,
	IN p_id INTEGER,
	IN p_nombre character varying,
	IN p_descripcion CHARACTER VARYING,
	IN p_usuario_app integer,
	OUT v_msg CHARACTER VARYING,
	OUT V_code CHARACTER VARYING,
	OUT v_id_user INTEGER)
  RETURNS RECORD AS
$BODY$
	DECLARE
	v_count INT DEFAULT 0;
		BEGIN
		v_code= '99999999';
		v_id_user = p_usuario_app;
		IF (UPPER(TRIM(opcion)) = 'INSERT')THEN
			SELECT COUNT(1) INTO v_count FROM sch_proveedores.combustible
			WHERE UPPER(nombre) = UPPER(p_nombre) ;
			IF	(v_count > 0)	THEN
				RAISE NOTICE 'El valor de combustible ya existe (%)', p_nombre;
				v_msg := 'El nombre del combustible "' || p_nombre || '", ya esta siendo utilizado';
				v_code:= '1000102';
				RETURN;
			END IF;
			INSERT INTO sch_proveedores.combustible (nombre, usuario_app)
				VALUES(p_nombre, p_usuario_app);
			v_msg := 'El registro ha, sido guardado de manera exitosa';
			v_code:= '100100';
			RETURN;
		END IF;
		IF (UPPER(TRIM(opcion)) = 'UPDATE')THEN
			SELECT COUNT(1) INTO v_count FROM sch_proveedores.combustible
			WHERE id = p_id;
			IF	(v_count = 0)	THEN
				RAISE NOTICE 'El registro a actualizar no exite, por favor comprobar los valores';
				v_msg := 'No se encontró el registro, la actualización del registro ha fallado';
				v_code:= '1000201';
				RETURN;
			END IF;
			SELECT id INTO v_count FROM sch_proveedores.combustible
			WHERE UPPER(nombre) = UPPER(p_nombre);
			IF	(v_count <> p_id)THEN
				RAISE NOTICE 'El valor de combustible ya existe (%)', p_nombre;
				v_msg := 'El nombre del combustible "' || p_nombre || '", ya esta siendo utilizado por ID"'|| v_count || '"' ;
				v_code:= '1000202';
				RETURN;
				ELSE
				UPDATE sch_proveedores.combustible SET
					nombre = p_nombre,
					descripcion = p_descripcion
					WHERE id = p_id;
			END IF;
			v_msg := 'El registro ha, sido actualizado de manera exitosa';
			v_code:= '100200';
			RETURN;
		END IF;
		IF (UPPER(TRIM(opcion)) = 'DOWN')THEN
			SELECT COUNT(1) INTO v_count FROM sch_proveedores.combustible
			WHERE id = p_id;
			IF	(v_count = 0)	THEN
				RAISE NOTICE 'No se pueder proceder con la baja del registro, el ID no exite, por favor comprobar los valores';
				v_msg := 'No se encontró el registro, proceso de baja ha fallado';
				v_code:= '1000301';
				RETURN;
			END IF;
			UPDATE sch_proveedores.combustible SET
				descripcion = 'Registro Inactivo',
				estado = 0
					WHERE id = p_id;
			v_msg := 'El registro fué eliminado de manera exitosa';
			v_code:= '100300';
			RETURN;
		END IF;
	END;
$BODY$
LANGUAGE PLPGSQL;

----*****************************************-----------------------
