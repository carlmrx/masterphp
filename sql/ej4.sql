*operadores*
select email,(7+1) as operacion from usuarios;
select id,email,nombre from usuarios ORDER BY id  ASC;
select email,(7+id) as operacion from usuarios;
*funciones*
*letras en mayusculas*
select upper(nombre) from usuarios;
*concatenar*
select CONCAT(nombre, ' ',apellidos) as nombre_completo from usuarios;
*longitud*
select LENGTH(nombre) from usuarios;
*fecha actual*
select nombre,fecha,curdate() as hoy from usuarios;
*dias de diferencia*
select nombre,datediff(curdate(),fecha) as diferencia from usuarios;
*DIA*
select dayname(fecha) as dia from usuarios;
select dayname(curdate()) as dia from usuarios;
select dayofyear(curdate()) as fechaatual from usuarios;
select year(fecha) as fechaatual from usuarios;
select month(fecha) as fechaatual from usuarios;
select day(fecha) as fechaatual from usuarios;
select curtime() as hora from usuarios;
select sysdate() as hora from usuarios;
*formatear fecha*
select DATE_FORMAT(fecha,'%d-%m-%y') as hora from usuarios;

*detectar null*
select nombre,isnull(email) from usuarios;
select IFNULL(email,'no hay correo') from usuarios;