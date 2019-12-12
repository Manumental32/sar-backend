-- we don't know how to generate root <with-no-name> (class Root) :(
create table clients
(
	client_id int auto_increment primary key,
	name text not null,
	imei text null,
	phone int null,
	address text null,
	time_to_full_water int null
);

create table arduinos
(
	arduino_id int auto_increment primary key,
	client_id int null
);

create table arduinos_measurement
(
	arduinos_measurement_id int auto_increment primary key,
	arduino_id int default 1 not null,
	client_id int default 1 not null,
	humidity_measurement_value int null,
	light_measurement_value int null,
	temperature_measurement_value int null,
	measurement_datetime datetime default CURRENT_TIMESTAMP null
);

create table irrigations_plan
(
	irrigation_plan_id int auto_increment primary key,
	name text null,
	humidity_min_allowed int null,
	light_max_allowed int null,
	temperature_max_allowed int null
);

create table users
(
	user_id int auto_increment primary key,
	client_id int not null,
	name text null,
	lastname text null,
	mail text null,
	password text null,
	enabled tinyint(1) null
);

create table arduinos_irrigation_plan
(
	arduino_irrigation_plan_id int auto_increment primary key,
	arduino_id int default 1 not null,
	irrigation_plan_id int not null,
	user_id int default 1 not null,
	arduinos_irrigation_plan_update_at datetime default CURRENT_TIMESTAMP not null
);

