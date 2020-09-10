/*
Criando a Tabela de Cliente e inserindo os primeiros dados.
*/

CREATE TABLE `cadcli` (
  `codcli` int NOT NULL AUTO_INCREMENT COMMENT 'Código do Cliente',
  `nomcli` varchar(45) NOT NULL COMMENT 'Nome do Cliente',
  `telcli` varchar(20) NOT NULL COMMENT 'Telefone do Cliente',
  `emacli` varchar(80) NOT NULL COMMENT 'E-mail do Cliente',
  `cidcli` varchar(60) NOT NULL COMMENT 'Cidade do Cliente',
  PRIMARY KEY (`codcli`),
  UNIQUE KEY `codcli_UNIQUE` (`codcli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Cadastro de Clientes';


INSERT INTO `cadcli` (`codcli`,`nomcli`,`telcli`,`emacli`,`cidcli`) VALUES (1,'Ricardo','(43)99999-9999','rrr@rrr.com','Jacarezinho');
INSERT INTO `cadcli` (`codcli`,`nomcli`,`telcli`,`emacli`,`cidcli`) VALUES (2,'Pondera','(43)0000-0000','pppp@ppp.com','Ourinhos');
INSERT INTO `cadcli` (`codcli`,`nomcli`,`telcli`,`emacli`,`cidcli`) VALUES (3,'Karla','(44)1111-1111','kkkk@kkkk.br','Ourinhos');
INSERT INTO `cadcli` (`codcli`,`nomcli`,`telcli`,`emacli`,`cidcli`) VALUES (4,'Bolinha','(14)2222-2222','bbbb@bbbb.com','Ourinhos');
INSERT INTO `cadcli` (`codcli`,`nomcli`,`telcli`,`emacli`,`cidcli`) VALUES (5,'Bituca','(11)3333-3333','tttt@ttt.com','São Paulo');
INSERT INTO `cadcli` (`codcli`,`nomcli`,`telcli`,`emacli`,`cidcli`) VALUES (6,'Xereta','(43)3534-0000','xexe@xexe.com','Santo Antonio da Platina');
