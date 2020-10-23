*consultas con condicion*
select *from usuarios where email='carlos@carlos.com';
*usuarios qu se registraron los dias 1*
select * from usuarios where day(fecha)="01";
*usaurios onde el apellido tenga la letra a*
select * from usuarios where apellidos like '%a%' and password='123abc';
*cuando el año sea par*
select * from usuarios where (day(fecha)%2!=0);
*seleccionar en donde el nombre sea mayor a 5 letras y se registro en 2019 mostrar en mayusculas*
select upper(nombre) from usuarios where (LENGTH(nombre)>5) and year(fecha)=2019;
*ordenar*
select *from usuarios order by id; //(asc desc)

*limitar
select * from usuarios LIMIT  3;