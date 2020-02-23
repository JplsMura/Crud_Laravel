/*Primeiramente rode o comando de deleção do BANCO crud_teste, caso ele exista.
Caso tenha uma base de dados com esse nome, faça um backup, ou simplesmente troque 
o nome do mesmo na hora da criação
*/
DROP DATABASE crud_teste;

/*Primeiramente rode o comando de criação do BANCO crud_teste*/
CREATE DATABASE IF NOT EXISTS crud_teste
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;
  
/*Após a execução do comando acima rode, o comando para passar a usar o banco
ao qual acabou de ser criado*/
use crud_teste;

/*Após rodar o comando acima rode o comando de criação da tabela de usuários*/
create table usuarios(
id int primary key auto_increment not null,
nome varchar(255),
sobrenome varchar(255),
email varchar(255),
dt_nascimento datetime,
cep varchar(20),
rua text,
numero varchar(255),
cidade varchar(255),
estado varchar(255) 
);

drop table usuarios;

/*Após rodar o comando de criação da tabela de usuários rode o comando para a criação da tabela de
criação de tel_usuarios*/
create table tel_usuarios(
id int primary key auto_increment,
telefone varchar(25),
Constraint fk_idPessoa foreign key (id) references usuarios (id)
);

/*Após rodar todos os comando acima, e queria verificar se as tabelas foram criadas rode*/

SELECT * FROM usuarios; /*Para verificar os campos da tabela de usuários*/

SELECT * FROM tel_usuarios; /*Para verificar os campos da tabela de tel_usuários*/