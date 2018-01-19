
create table IF NOT EXISTS ws_crfpge_comite
(
   comite_id            INTEGER UNSIGNED AUTO_INCREMENT,
   designation          varchar(300) not null,
   description          text,
   state_code           TINYINT UNSIGNED  not null,
   created              datetime not null,
   modified             TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   created_by           INTEGER  not null,
   modified_by          INTEGER ,
   primary key (comite_id)
);

create table IF NOT EXISTS ws_crfpge_institution
(
   institution_id       INTEGER UNSIGNED AUTO_INCREMENT,
   designation          varchar(300) not null,
   state_code           TINYINT UNSIGNED  not null,
   created              datetime not null,
   modified             TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   created_by           INTEGER  not null,
   modified_by          INTEGER ,
   primary key (institution_id)
);

create table IF NOT EXISTS ws_crfpge_document
(
   document_id          INTEGER UNSIGNED AUTO_INCREMENT,
   action_id            INTEGER UNSIGNED not null,
   titre                varchar(300) not null,
   nom_fichier          varchar(300) not null,
   description          text,
   tags                 varchar(255),
   confidentiel         enum('public','interne','confidentiel') not null,
   state_code           TINYINT UNSIGNED  not null,
   created              datetime not null,
   modified             TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   created_by           INTEGER  not null,
   modified_by          INTEGER ,
   primary key (document_id)
);

create table if not exists ws_crfpge_action
(
   action_id            INTEGER UNSIGNED AUTO_INCREMENT,
   comite_id            INTEGER UNSIGNED,
   parent_id            INTEGER UNSIGNED,
   designation          varchar(300) not null,
   description          text not null,
   date_debut           date not null,
   date_fin             date not null,
   use_alerte           bool not null,
   interval_alerte      int not null,
   date_alerte          datetime,
   state_code           TINYINT UNSIGNED  not null,			
   created              TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
   modified             TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   created_by           INTEGER  not null,
   modified_by          INTEGER ,
   primary key (action_id)
);
create table IF NOT EXISTS ws_crfpge_activite
(
   activite_id          INTEGER UNSIGNED AUTO_INCREMENT,
   action_id            INTEGER UNSIGNED not null,
   designation          varchar(300) not null,
   description          text,
   state_code           TINYINT UNSIGNED  not null,
   created              datetime not null,
   modified             TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   created_by           INTEGER  not null,
   modified_by          INTEGER ,
   primary key (activite_id)
);
create table IF NOT EXISTS ws_crfpge_membre
(
   membre_id       INTEGER UNSIGNED AUTO_INCREMENT,
   action_id       INTEGER UNSIGNED not null,
   institution_id  INTEGER UNSIGNED not null,
   representant    varchar(300) not null,
   fonction        varchar(255),
   email           varchar(255),
   tel             varchar(20),
   state_code           TINYINT UNSIGNED  not null,
   created              datetime not null,
   modified             TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   created_by           INTEGER  not null,
   modified_by          INTEGER ,
   primary key (membre_id)
);


CREATE VIEW ws_view_users  AS  
select `u`.`id` AS `id`,`u`.`name` AS `name`,`u`.`username` AS `username`,`u`.`email` AS `email`,`u`.`password` AS `password`,`u`.`block` AS `block`,`u`.`sendEmail` AS `sendEmail`,`u`.`registerDate` AS `registerDate`,`u`.`lastvisitDate` AS `lastvisitDate`,`u`.`activation` AS `activation`,`u`.`params` AS `params`,`u`.`lastResetTime` AS `lastResetTime`,`u`.`resetCount` AS `resetCount`,`u`.`otpKey` AS `otpKey`,`u`.`otep` AS `otep`,`u`.`requireReset` AS `requireReset`,`v`.`value` AS `comite_id` 
from (`ws_users` `u` left join `ws_fields_values` `v` on((`v`.`item_id` = `u`.`id`))) ;

