USE NORTHWIND;

CREATE TABLE menu ( 
    menu_codigo SERIAL NOT NULL, 
    menu_descricao VARCHAR (50) NOT NULL,
    menu_ordem INT NOT NULL,
    menu_endereco VARCHAR(500) NOT NULL,
    menu_classe VARCHAR(500) NOT NULL,
     
    CONSTRAINT pk_tbmenu 
    PRIMARY KEY (menu_codigo) 
); 

alter table menu add column submenu integer;
alter table menu add column menu_pai integer;

create table usuario (
	codigo SERIAL NOT NULL,
	nome VARCHAR(250) NOT NULL,
	senha INT NOT NULL,

	CONSTRAINT pk_tbusuario
	PRIMARY KEY(codigo)
);

