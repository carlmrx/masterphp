create database ej2;
use ej2;
CREATE table categorias(
    id int(255),
    nombre VARCHAR(255),
    constraint pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

create table usuarios(
    id int(255),
    nombre varchar(255),
    apellidos varchar(255),
    email varchar(255),
    password varchar(300),
    fecha date,
    constraint pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

create table entradas(
id int(255),
usuario_id int(255),
categorua_id int(255),
titulo varchar(255),
descripcion MEDIUMTEXT,
fecha date,
constraint pk_entradas PRIMARY KEY(id),
constraint fk_usuario FOREIGN KEY(usuario_id) references usuarios(id),
constraint fk_categorias FOREIGN KEY(usuario_id) references categorias(id)
)ENGINE=InnoDb;