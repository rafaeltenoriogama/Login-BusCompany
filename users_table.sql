CREATE TABLE a_sec_users (
  login varchar(32) NOT NULL,
  pswd varchar(255) NOT NULL,
  name varchar(64) DEFAULT NULL,
  email varchar(64) DEFAULT NULL
);

INSERT INTO a_sec_users (login, pswd, name, email)
VALUES 
  ('ademir', 'abc123', 'Ademir Pereira', 'ademir@gmail.com'),
  ('sabo', 'sabo123', 'Marco Sabo', 'sabo@gmail.com'),
  ('rafa', 'rafa123', 'Rafael Mercer', 'rafael@gmail.com');
/* Nomes genéricos, e-mail genéricos. 
O ideal é substituir por sua tabela de usuários já com todos os seus critérios definidos. 
Como: E-mail, Senha, 2FA, etc. */ 