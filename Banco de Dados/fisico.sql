create table pokemon (
	id int auto_increment not null,
    nome varchar(250) not null,
    habilidades varchar(250) not null,
    tipo varchar(250) not null,
    peso double not null,
    altura double not null,
    imagem longblob,
    primary key(id)
);