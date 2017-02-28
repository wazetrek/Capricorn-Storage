DELIMiTER //

CREATE PROCEDURE insertar_usuario(
in

_usuario varchar(30),
_pass varchar(50),
_rol int(11)

)BEGIN
insert into tbl_usuario (usuario, contrasena, tbl_Rol_idRol) 
VALUES (_usuario, _pass, _rol);
END 
//DELIMITER ;

