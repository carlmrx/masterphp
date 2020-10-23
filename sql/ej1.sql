/* comandos
* crear base de tados *
create database blog;
* usare la base de datos *
use blog;
* crear una base de datos *
create table usuarios(
    id  int(11),
    nombre varchar(100),
    apellodos varchar(100),
    email varchar(100),
    password varchar(100)
);
* eliminat tabla *
drops table usuarios;
* eliminar bd *
drop blog
*renombrar una tabla*
alter table usuarios rename to usuarios_renom;
* cambiar nombre de una columna*
alter table usuarios_renom change apellodos apellidos varchar(100) null;
*modificar columna sin cambiar el nombre* 
alter table usuarios_renom MODIFY apellido char(40) not null;
*añadir una columna*
alter table usuarios_renom add COLUMN website vrachar(100) null;
*añadir sertricciones a columnas*
alter table usuarios_renom add constraint unq_mails unique(email);
*borrar una columna*
alter table usuarios_renom drop website:
*/