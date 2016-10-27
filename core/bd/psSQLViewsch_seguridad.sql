

CREATE OR REPLACE VIEW sch_seguridad.vst_usuariosperfileslista AS(
	SELECT 	u.id AS idusuario, u.usuario , u.correo ,
		p.id AS idperfil, p.nombre as perfil , p.permiso
	from  sch_seguridad.perfiles as p INNER JOIN
		sch_seguridad.usuarios as u
	ON p.id = u.idperfiles
	ORDER BY u.id ASC
);
