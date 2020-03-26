-- we don't know how to generate root <with-no-name> (class Root) :(
CREATE DATABASE IF NOT EXISTS dbtest; USE dbtest;

create table IF NOT EXISTS clients
(
	client_id int auto_increment primary key,
	name text not null,
	imei text null,
	phone bigint null,
	address text null,
	time_to_full_water int null
);

create table IF NOT EXISTS arduinos
(
	arduino_id int auto_increment primary key,
	client_id int null
);

create table IF NOT EXISTS arduinos_measurement
(
	arduinos_measurement_id int auto_increment primary key,
	arduino_id int default 1 not null,
	client_id int default 1 not null,
	humidity_measurement_value int null,
	light_measurement_value int null,
	temperature_measurement_value int null,
	measurement_datetime datetime default CURRENT_TIMESTAMP null
);

create table IF NOT EXISTS irrigations_plan
(
	irrigation_plan_id int auto_increment primary key,
	name text null,
	humidity_min_allowed int null,
	light_max_allowed int null,
	temperature_max_allowed int null,
	enabled tinyint(1) null
);

create table IF NOT EXISTS users
(
	user_id int auto_increment primary key,
	client_id int not null,
	name text null,
	lastname text null,
	mail text null,
	password text null,
	enabled tinyint(1) null
);

create table IF NOT EXISTS arduinos_irrigation_plan
(
	arduino_irrigation_plan_id int auto_increment primary key,
	arduino_id int default 1 not null,
	irrigation_plan_id int not null,
	user_id int default 1 not null,
	arduinos_irrigation_plan_update_at datetime default CURRENT_TIMESTAMP not null
);

INSERT INTO clients (name, imei, phone, address, time_to_full_water) VALUES ('SAR', 'sar@sar.com', 4589185, 'Neuquén 1191', 20);

INSERT INTO arduinos (client_id) VALUES (1);

INSERT INTO users (user_id, client_id, name, lastname, mail, password, enabled) VALUES (1, 1, 'Manuel', 'Aquino', 'manuel.aquino.utn@gmail.com', 'manuel', 1);
INSERT INTO users (user_id, client_id, name, lastname, mail, password, enabled) VALUES (2, 1, 'Pedro', 'Araujo', 'araujopedrop@gmail.com', 'pedro', 1);
INSERT INTO users (user_id, client_id, name, lastname, mail, password, enabled) VALUES (3, 1, 'Nair', 'Olivera', 'nair.olivera.utn@gmail.com', 'nair', 1);
INSERT INTO users (user_id, client_id, name, lastname, mail, password, enabled) VALUES (4, 1, 'Profe', 'a', 'profe@gmail.com', 'profe', 1);

INSERT INTO irrigations_plan (irrigation_plan_id, name, humidity_min_allowed, light_max_allowed, temperature_max_allowed, enabled) VALUES (1, 'Plan para melones', 10, 20, 5, 1);
INSERT INTO irrigations_plan (irrigation_plan_id, name, humidity_min_allowed, light_max_allowed, temperature_max_allowed, enabled) VALUES (2, 'Plan para sandias', 20, 40, 5, 1);
INSERT INTO irrigations_plan (irrigation_plan_id, name, humidity_min_allowed, light_max_allowed, temperature_max_allowed, enabled) VALUES (3, 'Plan para soja', 40, 50, 5, 1);

INSERT INTO arduinos_irrigation_plan (arduino_irrigation_plan_id, arduino_id, irrigation_plan_id, user_id, arduinos_irrigation_plan_update_at) VALUES (1, 1, 1, 1, '2019-12-03 03:07:56');


