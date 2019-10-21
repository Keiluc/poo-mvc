CREATE DATABASE  mvc_db;
use mvc_db;


CREATE TABLE user(
id 					int(255) auto_increment not null,
firstname 			varchar (100) not null,
lastname 			varchar (100) not null,
email 				varchar (255) not null,
password 			varchar (255) not null,
registered_at 		date not null,
CONSTRAINT pk_users PRIMARY KEY (id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;


CREATE TABLE note(
id 		 		int (255) auto_increment not null,
user_id	 	 	int (255) not null,
title 			varchar (255) not null,
description	 	MEDIUMTEXT, 
posted_at 	 	date not null,
CONSTRAINT pk_notes PRIMARY KEY (id),
CONSTRAINT fk_notes_user FOREIGN KEY (user_id) REFERENCES user (id)
)ENGINE=InnoDb;