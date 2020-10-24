*sudconsultas*
select * from usuarios where id in (SELECT usuario_id from entradas);
select * from usuarios where id not in (SELECT usuario_id from entradas);

select * from usuarios where id in (SELECT usuario_id from entradas where titulo like '%gtav%');

select titulo from categorias where id in( select id from categorias WHERE nombre='accion' );

select nombre from categorias where id in (select categorua_id from entradas GROUP BY categorua_id HAVING count(categorua_id)>1);

select * from usuarios where id in (select usuario_id from entradas where DAYOFWEEK(fecha)=3);

select nombre from usuarios where id=(select usuario_id from entradas GROUP BY usuario_id order by  COUNT(id) DESC LIMIT 1);

select * from categorias WHERE  id not in (SELECT categorua_id from entradas);