create database TestesAgenda;
use TestesAgenda;

create table agenda (
Cod_event int auto_increment primary key,
nm_event varchar (55),
dt_event varchar(10),
hrcmc time,
hrfim time,
des_event varchar(55),
loc_event varchar (55),
responsavel varchar (55)
);

insert into agenda values (1,'ajuda comunitaria','12-08-2024','13:00','18:00','destinado para pessoas necessitadas','rua maringa n325','ceu pimentas');

select * from agenda;