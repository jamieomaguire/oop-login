create database LogInSys;

create table users (
  id int(11) unsigned auto_increment primary key not null,
  first_name varchar(45) not null,
  last_name varchar(80) not null,
  username varchar(45) not null,
  email varchar(85) not null,
  hashed_password varchar(50) not null,
  joined datetime default current_timestamp
);

insert into users
  (first_name, last_name, username, email, hashed_password)
values
  ('Bob', 'Dole', 'bobby_d', 'bob@example.com', '12345'),
  ('John', 'Smith', 'smitherz', 'john@example.com', '12345');