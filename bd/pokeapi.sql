CREATE SCHEMA `pokeapi` DEFAULT CHARACTER SET utf8mb4 ;

use pokeapi;

create table usuarios(
				id_usuario int auto_increment,
				email varchar(50),
				password text(50),
				primary key(id_usuario)
					);