
    create database Ajuda_Estudantil;
    use ajuda_estudantil;
    
    create table usuario(
        id int primary key auto_increment,
        nome varchar(32) not null,
        email varchar(32) not null,
        senha varchar(32) not null
        );