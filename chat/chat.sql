/*
CREATE TABLE chat_mensagem(
	id int auto_increment,
	mensagem varchar(200),
    remetente int,
    destinatario int,
	primary key(id)
);
CREATE TABLE usuario(
	id int auto_increment,
    usuario varchar(20),
    senha varchar(20),
    email varchar(200),
    nome varchar(200),
    apelido varchar(200),
    primary key(id)
);
*/
select * from usuario;
select * from chat_mensagem;
insert into usuario (usuario, senha, apelido) values ('joao','joao','joao'),('ana','ana','ana');
create view usuarioMin as 
	select usuario, senha, apelido from usuario;
select * from usuarioMin;
insert into chat_mensagem (remetente, destinatario, mensagem) values (1,2, 'Oi!'),(2,1, 'Ola.');
create view chat as 
	select remetente, destinatario, mensagem from chat_mensagem;
select * from chat;
insert into chat_mensagem (remetente, destinatario, mensagem) values (1,2, 'Tudo Bem?');
insert into chat_mensagem (remetente, destinatario, mensagem) values (1,2, 'Teste');