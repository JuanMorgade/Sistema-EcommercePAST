CREATE TABLE PRODUCTO(
    codpro int not null AUTO_INCREMENT,
    nompro varchar(50) null,
    despro varchar(100) null,
    prepro numeric(6,2) null,
    estado int null,
    CONSTRAINT pk_producto
    PRIMARY KEY (codpro)

);                   


INSERT INTO PRODUCTO(nompro,despro,prepro,estado)
VALUES('Macarons', 'Ideal para hornear en cualquier Cocina','3500',1),
('Cakes','Ideal para principiantes!','5300',1),
('Alfajores','Mas ricos que los Jorgitos','2750',1),
('Prueba1', 'Curso de Prueba para probar la Pag','100',1),
('Prueba2', 'Curso de Prueba para probar la Pag','279',1),
('Prueba3', 'Curso de Prueba para probar la Pag','345',1);

CREATE TABLE USUARIO(
    codusu int not null AUTO_INCREMENT,
    nomusu varchar(50),
    apeusu varchar(50),
    emausu varchar(50)not null,
    pasusu varchar(20)not null,
    estado int not null,
    CONSTRAINT pk_usuario
    PRIMARY KEY (codusu)
);

INSERT INTO USUARIO (nomusu, apeusu, emausu, pasusu, estado)
VALUES ('Usuario','Demo','correo@example.com','12345',1),
('Juan','Morgade','jp.mor@gmail.com','112266',1),
('Ramiro','Gitirrez','rama.gitirrez@gmail.com','112233',1),
('Mateo','Armentano','mateo.armen@gmail.com','445566',1),
('Daiki','Fatti','daiki@gmail.com','daiki123',1),
('Franco','Sosto','sosto@gmail.com','sosto123',1);

CREATE TABLE PEDIDO(
    codped int not null AUTO_INCREMENT,
    codusu int not null,
    codpro int not null,
    fecped datetime not null,
    estado int not null,
    telusuped varchar(12) not null,
    PRIMARY KEY (codped)
);