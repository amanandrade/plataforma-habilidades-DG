DROP DATABASE IF EXISTS plataforma_habilidades;
CREATE DATABASE plataforma_habilidades;
USE plataforma_habilidades;
/*
-- Query: SELECT * FROM plataforma_habilidades.cursos
LIMIT 0, 1000

-- Date: 2020-02-13 16:35
*/
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (1,'Marketing Digital',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (2,'Desenvolvimento Web Full Stack',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (3,'Gestão de Negócios Digitais',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (4,'Desenvolvimento Mobile Android',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (5,'Desenvolvimento Mobile iOS',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (6,'Data Science',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (7,'Experiência do Usuário (UX)',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (8,'Gestão de RH Digital',NULL,NULL);
INSERT INTO `cursos` (`id`,`nome_curso`,`created_at`,`updated_at`) VALUES (9,'Imersão em Transformação Digital',NULL,NULL);

/*
-- Query: SELECT * FROM plataforma_habilidades.status
LIMIT 0, 1000

-- Date: 2020-02-13 16:38
*/
INSERT INTO `status` (`id`,`nome_status`,`created_at`,`updated_at`) VALUES (1,'Concluído',NULL,NULL);
INSERT INTO `status` (`id`,`nome_status`,`created_at`,`updated_at`) VALUES (2,'Cursando',NULL,NULL);


/*
-- Query: SELECT * FROM plataforma_habilidades.tab_habilidades
LIMIT 0, 1000

-- Date: 2020-02-13 16:39
*/
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (2,'PHP',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (3,'CSS',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (1,'React Native',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (5,'JAVA',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (6,'Javascript',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (7,'MySQL',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (8,'Python',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (9,'Pandas',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (10,'Dataviz',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (11,'Machine Learning',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (12,'Swift',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (13,'Storytelling',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (14,'Jornada do Cliente',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (15,'Prototipação',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (16,'Json',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (17,'Github',NULL,NULL);
INSERT INTO `tab_habilidades` (`id`,`habilidades`,`created_at`,`updated_at`) VALUES (18,'Scrum',NULL,NULL);


/*
-- Query: SELECT * FROM plataforma_habilidades.users
LIMIT 0, 1000

-- Date: 2020-02-13 16:42
*/
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (1,'teste','teste@teste.com',NULL,'$2y$10$Bj9k2EW0E8nzk14QXmizdONQ8KOALAuMFowIsTmSUAUumfprepXVi',913595468,'1','2020-02-11','img/fotos//foto_.12748285.jpeg',1,1,2,NULL,'2020-02-03 23:33:55','2020-02-10 06:56:08');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (2,'silni','silni@silni.com',NULL,'$2y$10$kzmsWP6xzPhPpVKOCJnh4.MNJOBA8APSj/R4q7a.R9Okb413mb74q',913595468,'1','2020-02-03','img/fotos//foto_.90581409.jpeg',1,1,2,NULL,'2020-02-03 23:37:24','2020-02-03 23:39:00');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (3,'silva','silva@silva.com',NULL,'$2y$10$/lFtdjCrOoZciIdq/bjFdeM3njuDlrOKM2EhTYebmhjk5P4HfRHZS',913595468,'1','2020-02-03','img/fotos//foto_.14289229.jpeg',1,1,1,NULL,'2020-02-03 23:40:19','2020-02-09 23:51:02');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (4,'dom Life','dom@hotmail.com',NULL,'$2y$10$SslQ5C428gMned8eHSzVoez2x7ceuumF3sm72ZubE6PQKGcC3rzv.',98765432,'1','2020-02-03',NULL,NULL,2,2,NULL,'2020-02-03 23:51:25','2020-02-03 23:51:25');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (5,'diogo','diogo@diogo.com',NULL,'$2y$10$hfW.Nn0ZRVS4GFzSunkgtuPHAOeR0uCdliA9c7e2t8tbxxx4GiOJ.',9789009,'1','2020-02-08',NULL,NULL,1,1,NULL,'2020-02-08 06:45:41','2020-02-08 06:45:41');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (6,'Amanda Andrade','amanda@amanda.com',NULL,'$2y$10$f2nanoJVpQsUNfHZGdAljuWQseBCGxHd16fIFQ16ScIfjDwALnff2',99999978,'2','1991-07-23',NULL,NULL,7,1,NULL,'2020-02-13 21:23:11','2020-02-13 21:23:11');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (7,'Beatriz Amorim','bia@bia.com',NULL,'$2y$10$AGo.e3b2JeA0Z8C0bBjSd.aMZiPprt0oAAVw.4Pab7pjKCQfMszDW',9999999,'2','2010-01-01',NULL,NULL,4,2,NULL,'2020-02-13 21:47:21','2020-02-13 21:47:21');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (8,'Felgueiras Silva','felgueiras@felgueiras.com',NULL,'$2y$10$x2WUeDwamth4DoQG02dRXunjGbfZYn2a7xFXnBcvcaJGXkAhI06L.',88888888,'1','2002-02-02',NULL,NULL,9,1,NULL,'2020-02-13 21:48:45','2020-02-13 21:48:45');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (9,'Guilherme','gui@gui.com',NULL,'$2y$10$72KhGP.1/serKqyjbnOcu.Dnj7kogyBGrSha4cDn6w.UDwVaWoEqe',77777777,'1','2003-03-03',NULL,NULL,1,2,NULL,'2020-02-13 21:49:44','2020-02-13 21:49:44');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (10,'Justem Dombaxe','justem@justem.com',NULL,'$2y$10$P3k.ZWqsp.qWK4fhH8WBv.bLZpq8AdrhIqBDStAiaWqyneHjYQjSm',66666666,'1','2004-04-04',NULL,NULL,3,1,NULL,'2020-02-13 21:50:41','2020-02-13 21:50:41');
INSERT INTO `users` (`id`,`nome`,`email`,`email_verified_at`,`password`,`telefone`,`genero`,`nascimento`,`foto`,`estado`,`curso_id`,`status_id`,`remember_token`,`created_at`,`updated_at`) VALUES (11,'Taisa Salton','taisa@taisa.com',NULL,'$2y$10$d7b5Qux0Nd1sNqYyrl7mn./BvO87Y7eUaqVXZeIHGGsBgMZFQ2sTu',55555555,'2','2008-08-01',NULL,NULL,2,1,NULL,'2020-02-13 21:51:47','2020-02-13 21:51:47');
/*
-- Query: SELECT * FROM plataforma_habilidades.msg_emissor_feeds
LIMIT 0, 1000

-- Date: 2020-02-13 16:36
*/
INSERT INTO `msg_emissor_feeds` (`id`,`mensagem`,`estado`,`usuario_id`,`created_at`,`updated_at`) VALUES (1,'Olá mundo!',1,1,'2020-02-08 05:31:58','2020-02-08 05:31:58');
INSERT INTO `msg_emissor_feeds` (`id`,`mensagem`,`estado`,`usuario_id`,`created_at`,`updated_at`) VALUES (2,'Olá brasil!',1,1,'2020-02-08 05:33:39','2020-02-08 05:33:39');
INSERT INTO `msg_emissor_feeds` (`id`,`mensagem`,`estado`,`usuario_id`,`created_at`,`updated_at`) VALUES (3,'Oie! Preciso de ajuda em php =(',1,1,'2020-02-08 06:00:11','2020-02-08 06:00:11');
INSERT INTO `msg_emissor_feeds` (`id`,`mensagem`,`estado`,`usuario_id`,`created_at`,`updated_at`) VALUES (4,'Como faço para migrar um código para node.js?',1,1,'2020-02-09 23:37:43','2020-02-09 23:37:43');
INSERT INTO `msg_emissor_feeds` (`id`,`mensagem`,`estado`,`usuario_id`,`created_at`,`updated_at`) VALUES (5,'Alguém conhece analistas de marketing digital?',1,1,'2020-02-09 23:38:06','2020-02-09 23:38:06');
INSERT INTO `msg_emissor_feeds` (`id`,`mensagem`,`estado`,`usuario_id`,`created_at`,`updated_at`) VALUES (6,'Preciso de ajuda com Python! Urgente!',1,1,'2020-02-09 23:38:32','2020-02-09 23:38:32');
INSERT INTO `msg_emissor_feeds` (`id`,`mensagem`,`estado`,`usuario_id`,`created_at`,`updated_at`) VALUES (7,'Olá! Estou disponível para ajudar em pesquisas de usuários',1,3,'2020-02-09 23:55:33','2020-02-09 23:55:33');

/*
-- Query: SELECT * FROM plataforma_habilidades.msg_receptor_feeds
LIMIT 0, 1000

-- Date: 2020-02-13 16:37
*/
INSERT INTO `msg_receptor_feeds` (`id`,`mensagem`,`usuario_id`,`emissor_id`,`created_at`,`updated_at`) VALUES (1,'Esta tudo bom! Segue em frente!',1,6,'2020-02-09 23:49:15','2020-02-09 23:49:15');
INSERT INTO `msg_receptor_feeds` (`id`,`mensagem`,`usuario_id`,`emissor_id`,`created_at`,`updated_at`) VALUES (2,'Gostei do seu código. Acho legal compartilhar =)',3,6,'2020-02-09 23:50:10','2020-02-09 23:50:10');
INSERT INTO `msg_receptor_feeds` (`id`,`mensagem`,`usuario_id`,`emissor_id`,`created_at`,`updated_at`) VALUES (3,'Esta super light',3,7,'2020-02-09 23:55:48','2020-02-09 23:55:48');
INSERT INTO `msg_receptor_feeds` (`id`,`mensagem`,`usuario_id`,`emissor_id`,`created_at`,`updated_at`) VALUES (4,'Conheço alguém com essas habilidades. Quer tc?sso',1,7,'2020-02-10 00:16:52','2020-02-10 00:16:52');
INSERT INTO `msg_receptor_feeds` (`id`,`mensagem`,`usuario_id`,`emissor_id`,`created_at`,`updated_at`) VALUES (5,'Uau! Mais alguém perdido aqui?',1,6,'2020-02-10 01:17:32','2020-02-10 01:17:32');

/*
-- Query: SELECT * FROM plataforma_habilidades.tags
LIMIT 0, 1000

-- Date: 2020-02-13 16:41
*/
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (1,1,6,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (2,1,7,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (3,2,9,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (4,2,7,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (5,2,1,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (6,2,2,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (7,2,3,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (8,4,2,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (9,4,5,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (10,4,6,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (11,3,1,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (12,1,1,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (13,1,9,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (14,5,7,NULL,NULL);
INSERT INTO `tags` (`id`,`usuario_id`,`habilidade_id`,`created_at`,`updated_at`) VALUES (15,5,1,NULL,NULL);


INSERT INTO `mensagens` (`ID`, `remetente_user_id`, `destino_user_id`, `msgLida`, `hora`, `assunto`, `mensagem`) VALUES
(1, '2', '1', 'si', '24/08/2017, 3:16 am', 'Noma mensagem', 'Olá colega! Como vai?'),
(2, '1', '3', 'si', '24/08/2017, 3:17 am', 'Outra mensagem', 'Oie! Tudo bem! Precisa de ajuda?');