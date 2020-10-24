insert into categorias VALUES(1,"accion");
insert into categorias VALUES(3,"rol");
insert into categorias VALUES(4,"deportes");

insert into entradas VALUES(1,1,1,"gtav","juego de mundo abierto","2020-05-03");
insert into entradas VALUES(2,3,2,"lol","juego de estrategia","2020-02-13");
insert into entradas VALUES(3,4,4,"fifa20","juego de futbol","2020-09-14");

*consulta de agrupamiento*
select count(titulo) as 'numero de entradas',categorua_id from entradas GROUP BY categorua_id;

*en las consultas d agrupamiento se usa HAVING  en vex de where*
SELECT count(titulo) as 'numero de entradas',categorua_id from entradas GROUP BY categorua_id HAVING count(titulo)>3;

*seleccionar el maximo y el minimo*
select max(id) as 'maximo',titulo from entradas;
select min(id) as 'minimo',titulo from entradas;
select sum(id) as 'minimo',titulo from entradas;