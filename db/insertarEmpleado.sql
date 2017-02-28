DELIMiTER //

CREATE PROCEDURE insertar_empleado(
in

_nombreEmpleado varchar(25),
_nombre2 varchar(25),
_apellidoEmpleado varchar(25),
_apellido2 varchar(25),
_tipoDocumento int(11),
_documento int(11),
_fechaNacimiento date,
_telefono1 varchar(15),
_telefono2 varchar(15),
_email varchar(15)

)BEGIN

INSERT INTO tbl_empleado (nombre, nombre2, apellido, apellido2, tipoDocumento, documento, fechaNacimiento,
telefono1, telefono2, email, idUsuario) 
VALUES (_nombreEmpleado, _nombre2, _apellidoEmpleado, _apellido2, _tipoDocumento, _documento, _fechaNacimiento, _telefono1, _telefono2,
_email, (select max(idUsuario) as id from tbl_usuario));
END 
//DELIMITER ;

