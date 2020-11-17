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

INSERT INTO menu(menu_descricao, menu_ordem, menu_endereco, menu_classe) VALUES
('Página Inicial', 1, '', '');