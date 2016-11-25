drop table if exists fichas cascade;

create table fichas (
    id       bigserial    constraint pk_fichas primary key,
    titulo   varchar(255) not null,
    duracion numeric(3),
    anyo     numeric(4)
);

insert into fichas (titulo, duracion, anyo)
    values ('La guerra de las galaxias', 145, 1977),
           ('El imperio contraataca', 130, 1980),
           ('El retorno del jedi', 154, 1983),
           ('La amenaza fantasma', 122, 1999);

drop table if exists comentarios cascade;

create table comentarios (
    id       bigserial constraint pk_comentarios primary key,
    cuerpo   text      not null,
    id_ficha bigint    not null constraint fk_comentarios_fichas
                       references fichas (id) on delete cascade
                       on update cascade
);

insert into comentarios (cuerpo, id_ficha)
    values ('Una gran película.', 1),
           ('Mejor que la primera.', 2),
           ('La mejor película de todos los tiempos.', 2),
           ('Todo muy bien menos el final.', 3);
