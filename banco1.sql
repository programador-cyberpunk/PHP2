create database loja2000;
use loja2000;

create table cliente{
codcli int primary key auto_increment,
cpf int,
codvend int,
cliente varchar(90) not null
};

create table vendedor{
 codvend int primary key auto_increment,
 vendedor varchar(90) not null
};

alter table cliente add 
foreign key(codcli)
references vendedor(codvend)