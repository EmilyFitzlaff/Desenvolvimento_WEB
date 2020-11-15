USE NORTHWIND;

CREATE TABLE menu ( 
    menu_codigo SERIAL NOT NULL, 
    menu_descricao VARCHAR (50) NOT NULL,
    menu_ordem INT NOT NULL,
     
    CONSTRAINT PK_TBCATEGORIA 
    PRIMARY KEY (menu_codigo) 
); 